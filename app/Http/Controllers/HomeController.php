<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bestSellers = Menu::take(3)->get();
        return view('welcome', compact('bestSellers'));
    }

public function menu()
{
    $menus = Menu::all(); 
    return view('menu', compact('menus'));
}
}