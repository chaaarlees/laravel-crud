<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        //devolvemos la vista index
        return view('products.index');
    }

    public function create(){
        //devolvemos la vista create
        return view('products.create');
    }

    public function store(Request $request){
        // validamos si los campos del formulario son correctos
        // de ser así los guardamos en la variable data
        $data = $request->validate([
            'name'=>'required|string',
            'qty'=>'required|numeric',
            'price'=>'required|decimal:0,2',
            'description'=>'required|string',
        ]);
        //guardamos en la BD y redireccionamos
        $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }
}
