<?php
namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use DB;

class loginnewController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function loginnew(Request $req){

        $username = $req->input('username');
        $password = $req->input('password');        
        $checklogin = DB :: table('logindata') -> where (['username' => $username, 'password' => $password]) -> get();

        if(count($checklogin)>0){
            echo "Login Successful"; 
               }

            else{
                echo "Record doesn't exist";
            }

        }
    }
        ?>