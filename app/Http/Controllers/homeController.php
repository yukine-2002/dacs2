<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;
use App\Models\rateModel;
use App\Http\Controllers\Validator;

class homeController extends Controller
{
    public function index(){
        $product = $this->productLimit();
        return view('home') -> with(['productList' => $product]);
    }
    public function productLimit(){
        return productModel::limit(8)->get();
    }
    
}
