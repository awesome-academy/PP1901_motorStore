<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function cate_page($id)
    {
        $categories = Category::findOrfail($id);
        $products = Product::all();

        return view('category.dream', compact('categories', 'products'));
    }

    public function product_page($id)
    {
        $products = Product::findOrfail($id);

        return view('category.detail', compact('products'));
    }
}
