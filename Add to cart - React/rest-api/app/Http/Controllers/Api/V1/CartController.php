<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\V1\CartResource;
use App\Models\Cart;
use App\Http\Resources\V1\CartCollection;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartRequest;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return CartResource::collection(Cart::all());
    }

    public function show(Cart $cart)
    {
        return new CartResource($cart);
    }

    public function store(StoreCartRequest $requets)
    {
        Cart::create($requets->validated());
        return response()->json("Cart Created");
    }
}
