<?php

namespace App\Http\Controllers;

use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use App\Http\Requests\StoreShoppingCartRequest;
use App\Http\Requests\UpdateShoppingCartRequest;

class ShoppingCartController extends Controller
{
    public function carrito(){
        return view('web.carrito');
    }
    public function actualizar(Request $request){
             
        $carrito = ShoppingCart::get_the_session_shopping_cart();
        
        foreach($carrito->shopping_cart_details as $key => $scd){
           
            $scd->update([
                "cantidad"=>$request->cantidad[$key]
            ]);
        }
        return back();
    }
}
