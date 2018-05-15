<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        return view('admin.pages.show-product');
    }

    public function create() {
        return view('admin.pages.create-product');
    }

    public function store(Request $request) {
        dd($request);
    }
}
