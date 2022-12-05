<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
public function index(){
    $products = DB::table('products')->get();

    return view('product.index',compact('products'));
}

    public function create(){
        return view('product.create');
    }


    public function insert(Request $req){
   DB::table('products')->insert([
'title'=>$req->title,
'price'=>$req->price,
'details'=>$req->details,
   ]);
   return  redirect()->route('product.all');
   
    }

    public function edit( $id){
        $edit1 = DB::table('products')->where('id', $id)->first();
        return view('product.edit',compact('edit1'));
    }

    public function update(Request $req , $id){
DB::table('products')->where('id',$id)->update([
    'title'=> $req->title,
    'price'=> $req->price,
    'details'=> $req->details,
]);       
        return  redirect()->route('product.all');
    }

    public function delete($id){
        DB::table('products')->where('id',$id)->delete();
        return  redirect()->route('product.all');
    }

}

