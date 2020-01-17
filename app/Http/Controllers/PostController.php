<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
   public function index()
   {
   $post = DB::table('news')->get();
   $data['blogs'] = $post;
   return view('post.index',$data);
   }
   public function create(){
       return view('post.create');
   }
   public function store(Request $request){
       $data['heading']= $request->heading;
       $data['body']= $request->body;
       DB::table('news')->insert($data);
       return redirect()->to('postview');
   }
   public function edit($id){
       $post=DB::table('news')->where('id',$id)->first();
       $data['post']=$post;
       return view('post.edit',$data);
   }
   public function update(Request $request,$id){
       $data['heading']=$request->heading;
       $data['body']=$request->body;
       DB::table('news')->where('id',$id)->update($data);
       return redirect()->to('postview');
   }
   public function destory($id){
       DB::table('news')->delete($id);
       return redirect()->to('postview');
   }
}
