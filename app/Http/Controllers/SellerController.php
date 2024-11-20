<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
    //
    function oneOne(){
       return Seller::find(3)->productDate;
    }

    function oneMany(){
        return Seller::find(2)->productManyDate;
     }

     function manyOne(){
        // return Product::all();
        return Product::with('seller')->get();
     }


}
