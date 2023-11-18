<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id){
        $name="Donal Trump";
        $age= "75";

        $data=array(
            "id"=>$id,
            "name"=>$name,
            "age"=>$age
        );
        
        setcookie(
        $name= "access_token",
        $value= "123-ZYZ",
        $minutes=1,
        $path="/",
        $domain= $_SERVER["SERVER_NAME"],
        $secure=false,
        $httponly=true        
        );

        return response($data)->setStatusCode(200)->cookie($name, $value, $minutes, $path, $domain, $secure, $httponly);

    }

    
}
