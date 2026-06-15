<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Cart_product;
use App\Models\Cart;
use View;
use Auth;


class NumberMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user=Auth::user();
        if(!$user){
            $num=0;
        }
        else{
        $cart=Cart::where('user_id',Auth::user()->id)->where('status',0)->first();
        
        if(!$cart){
            $num=0;
        }
        else{
        $p_number=Cart_product::where('cart_id',$cart->id)->get();
        $num=0;
        foreach ($p_number as $number){
            $num+=$number->number;
        }
    }
    }
        View::share('num',$num);
        return $next($request);
    }
}
