<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controllers
{
    private $products = [
        1 => ['name' => 'Kaos Laravel', 'price' => 150000],
        2 => ['name' => 'Stiker Coding', 'price' => 250000],
        3 => ['name' => 'Notebook Dev', 'price' => 50000],
    ];

    // Menampilkan daftar produk
    public function index()
    {
        $products = $this=>products;
        return view('product.index', compact('products'));
    }
}