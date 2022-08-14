<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $fillable=[
        "estado",
        "user_id",
        "order_date"
    ];

    public function shopping_cart_details(){
        return $this->hasMany(ShoppingCartDetail::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    
     public function cantidad_de_productos(){
        return $this->shopping_cart_details()->sum('cantidad');//obtenemos el total de productos del carrito

    }

    public function total_precios(){
        $sum=0;
        foreach($this->shopping_cart_details as $key => $shopping_cart_detail){
            $sum += $shopping_cart_detail->precio*$shopping_cart_detail->cantidad;
        }
        return $sum;
    }
    public function subtotal(){
        $subtotal = 0;
        $subtotal = $this->total_precios();
 
        return $subtotal;
    }

    public static function findOrCreateBySessionId($shopping_cart_id){
        if($shopping_cart_id)
        {
        
            return ShoppingCart::find($shopping_cart_id);
        }else
        {
            return ShoppingCart::create();
        }
    }

    public static function findOrCreateByUserId($user){
     
        $active = $user->shoppingCarts->where('estado','activo')->first();
 
        if($active)
        {
            return $user->shoppingCarts->where('estado','activo')->first();
        }else
        {
            return self::create([
                "user_id"=>auth()->user()->id,
            ]);
        }
    }
    public function total_impuesto(){
        $empresa = Empresa::first();
        $iva = $empresa->iva;
        $total =0;
        $total = $this->total_precios();
        $total = $total * ($iva/100);
        return $total;
    }
    
    public static function get_the_user_shopping_cart(){
        $shopping_cart = ShoppingCart::findOrCreateByUserId(Auth::user());
        // $shopping_cart = self::findOrCreateByUserId(Auth::user());
        // dd($shopping_cart);//null
        return $shopping_cart;
    }

    

    public static function get_the_session_shopping_cart(){
        $session_name= "shopping_cart_id"; //nombre de la session_name
        $shopping_cart_id = Session::get($session_name); //preparamos la session
        // dd($shopping_cart_id); 249
        $shopping_cart = self::findOrCreateBySessionId($shopping_cart_id);
        // dd($shopping_cart); null
        
        return $shopping_cart;
    }

    public function my_store ($producto, $request){
        $this->shopping_cart_details()->create([
            "cantidad"=>$request['cantidad'],
            "precio"=>$producto->productoprecio->pvp,
            "producto_id"=>$producto->id,
        ]);
    }

}
