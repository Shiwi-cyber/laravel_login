<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use DB;
// use Illuminate\Routing\Controller as BaseController;


class signupController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function signup(Request $req){

        $name = $req -> input('name');
        $email = $req -> input('email');
        $password = $req -> input('password');

        // return $req -> input();

        DB::insert('insert into logintable (email, password) values(?,?)',[$email, $password]);
         echo "Record inserted successfully.<br/>";




    }

    
}

?>
