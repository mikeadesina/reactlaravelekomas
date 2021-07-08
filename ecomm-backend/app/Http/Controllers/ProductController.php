<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    function addProduct(Request $req){
        $product=new Product;
        $product->name=$req->input("name");
        $product->price=$req->input("price");
        $product->description=$req->input("description");
        $product->file_path=$req->file("file")->store('products');
        //$product->file_path=$req->file("file");
        $product->save();
        return $product;
        //return $req->file('file')->store('products');

    }
    function list(){
        return Product::all();
    }
    function delete($id){
       $result= Product::where('id',$id)->delete();
       if($result){
           return ['result' =>"product has been deleted"];
       }else{
           return ['result' =>"operation failed"];

       }
    }
    function getProduct($id){
        $result= Product::find($id);
        return $result;
    }
    function search($key){
        //return $key;
        return Product::where('name','like',"%$key%")->get();

    }
}
