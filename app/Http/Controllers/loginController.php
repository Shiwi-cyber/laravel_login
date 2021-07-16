<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use DB;
// use Illuminate\Routing\Controller as BaseController;

class loginController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function login(Request $req){

        $email = $req->input('email');
        $password = $req->input('password');        
        $checklogin = DB :: table('logintable') -> where (['email' => $email, 'password' => $password]) -> get();

        if(count($checklogin)>0){
            echo "Login Successful"; 
               }

            else{
                echo "Record doesn't exist";
            }


        // echo $checklogin;

    

        // return $req -> input();

        
        
    }

}

?>