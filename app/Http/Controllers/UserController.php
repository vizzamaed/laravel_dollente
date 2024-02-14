<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from UserContoller';
    }


    public function show($id){
        return $id;

        $data=array(
            "id" => $id,
            "name" => "Vizza Mae"
        );

        return view('about_me', ['data'=>$data]);
    }
}
