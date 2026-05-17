<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Menu;
use App\Models\Transaction;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'total_user' => User::count(),
            'total_menu' => Menu::count(),
            'total_transaksi' => Transaction::count(),
            'pendapatan' => Transaction::sum('total_price'),
        ];
        return view('admin.dashboard', $data);
    }


public function manageMenu() {
    return view('admin.manage-menu'); // Pastikan file view ada
}

public function transactions() {
    return view('admin.transactions');
}

public function users() {
    return view('admin.users');
}
}