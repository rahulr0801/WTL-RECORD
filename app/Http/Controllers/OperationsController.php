<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationsController extends Controller
{
    public function Ops($id){
            $post = \DB::table('posts')->where("id",$id)->first();
           
            $data =[
                "post" => $post
            ];
        return view('ops',$data);
    }

}
