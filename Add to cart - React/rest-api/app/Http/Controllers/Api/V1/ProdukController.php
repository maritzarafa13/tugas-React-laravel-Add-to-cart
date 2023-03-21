<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Resources\V1\ProdukCollection;
use App\Http\Resources\V1\ProdukResource;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        return ProdukResource::collection(Produk::all());
    }

    public function show(Produk $produk){
        return new ProdukResource($produk);
    }

    public function store(StoreProdukRequest $request){
        
        Produk::create($request->validated());
        return response()->json("produk Created");
    }

    public function update(StoreProdukRequest $request, Produk $produk){
        $produk->update($request->validated());
        return response()->json("produk updated");
    }

    public function destroy(Produk $produk) {
        $produk->delete();
        return response()->json("produk deleted");
    }

}



?>