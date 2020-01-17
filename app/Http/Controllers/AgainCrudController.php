<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgainCrudController extends Controller
{
  public function view(){
      $date=DB::table('products')->get();

      $data['name']=$date;

     return view('table.index',$data);
  }
  public function create(){
      return view('table.create');
  }
  public function store(Request $request){
      $data['name']=$request->name;
      $data['price']=$request->price;
      $data['details']=$request->details;
      DB::table('products')->insert($data);
      return redirect()->to('tableview');
  }
     public function edit ($id){
     $date = DB::table('products')->where('id',$id)->first();
     $data['hh']=$date;
     //dd($data);
     return view('table.edit',$data);
     }
    public function update (Request $request,$id){
      $data['name']=$request->name;
      $data['price']=$request->price;
      $data['details']=$request->details;
      DB::table('products')->where('id',$id)->update($data);
      return redirect()->to('tableview');
    }
    public function delete ($id){
      DB::table('products')->where('id',$id)->delete();
      return redirect('tableview');
    }
}
