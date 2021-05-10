<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class apiController extends Controller
{
    public function register(Request $req)
    {
        $user = new Member;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->input('password'));
        $user->save();
        return $user;
    }
    public function login(Request $req)
    {
        $user = Member::where('email', $req->email)->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return response([
                'error' => ["Email or Password Not Matched"],
            ]);
        }
        return $user;
    }
    public function addProduct(Request $req)
    {
        $product = new Product;
        $product->name = $req->input('name');
        $product->price = $req->input('price');
        $product->description = $req->input('description');
        // $product->path = $req->file('image')->store('product');
        if ($req->file('image') == null) {
            $product->path = $req->file('image');
            $product->save();
            return "NO file  .. But Img path is :->   " . $req->input('image');
        } else {
            $product->path = $req->file('image')->store('products');
            $product->save();
            return $product;
        }

    }
    public function listProduct()
    {
        return Product::all();
    }

    public function deleteProduct($id)
    {
        $result = Product::where('id', $id)->delete();
        if ($result) {
            return ["result" => "Product Has Been Deleted"];
        } else {
            return ["result" => "Unable To Delete"];
        }
    }

    public function showProduct($id)
    {
        return Product::find($id);
    }

    public function updateProduct($id, Request $req)
    {
        $product = Product::find($id);
        $product->name = $req->input('name');
        $product->price = $req->input('price');
        $product->description = $req->input('description');
        if ($req->file('image')) {
            $product->path = $req->file('image')->store('products');
        }
        $product->save();
        return $product;
    }

}