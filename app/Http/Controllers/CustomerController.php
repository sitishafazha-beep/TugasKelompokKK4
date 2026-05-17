<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function paymentPage()
    {
        // Ambil semua menu yang stoknya lebih dari 0
        $menus = Menu::where('stock', '>', 0)->get();
        return view('customer.payment', compact('menus'));
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $menu = Menu::findOrFail($request->menu_id);

        // Cek stok lagi untuk keamanan
        if ($menu->stock < $request->quantity) {
            return back()->with('error', 'Maaf, stok tidak mencukupi.');
        }

        DB::beginTransaction();
        try {
            $totalPrice = $menu->price * $request->quantity;

            // 1. Simpan ke tabel transactions
            $transaction = Transaction::create([
                'user_id' => auth()->id(),
                'invoice_number' => 'VEL-' . strtoupper(uniqid()),
                'total_price' => $totalPrice,
                'payment_method' => 'CASH',
                'status' => 'success'
            ]);

            // 2. Simpan ke tabel transaction_details
            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'menu_id' => $menu->id,
                'quantity' => $request->quantity,
                'subtotal' => $totalPrice
            ]);

            // 3. Kurangi stok menu
            $menu->decrement('stock', $request->quantity);

            DB::commit();
            return redirect()->route('customer.payment')->with('success', 'Pembayaran Berhasil! Pesananmu sedang disiapkan.');

        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal memproses pembayaran.');
        }
    }
}