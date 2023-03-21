<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePenggunaRequest;
use App\Http\Resources\V1\PenggunaCollection;
use App\Http\Resources\V1\PenggunaResource;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index(){
        return PenggunaResource::collection(Pengguna::all());
    }

    public function show(Pengguna $pengguna){
        return new PenggunaResource($pengguna);
    }

    public function store(StorePenggunaRequest $request){
        
        Pengguna::create($request->validated());
        return response()->json("pengguna Created");
    }

    public function update(StorePenggunaRequest $request, Pengguna $pengguna){
        $pengguna->update($request->validated());
        return response()->json("pengguna updated");
    }

    public function destroy(Pengguna $pengguna) {
        $pengguna->delete();
        return response()->json("pengguna deleted");
    }
}
