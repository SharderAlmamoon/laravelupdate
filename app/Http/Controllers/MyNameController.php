<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyNameController extends Controller
{
     public function MykhanControlView(Request $request)
     {
         $data['name']= $request->head;

         //$data['heading'] = 'THIS PAGE IS HEADING PAGE';
         //$data['name'] = 'aaaaaaaaaaaaaaaaaaaaaaaaaaaabbbbbbb
         //bbbbbbbccccccccccccccddddddddddddddddddeeeeeeeeeefff';
         $data['publish'] = 'almamoon hbsuhdbsvcuasyjFVcawijfgbivcvy';
         return view('mynamepage',$data);
     }
}
