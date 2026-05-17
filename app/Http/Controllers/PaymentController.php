<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Transaction; 
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('customer.payment', compact('menus'));
    }
    public function process(Request $request)
    {
        $request->validate([
            'menu_id' => 'required',
            'quantity' => 'required|integer|min:1',
        ]);

        
        return redirect()->route('menu')->with('success', 'Pembayaran sedang diproses!');
    }
}