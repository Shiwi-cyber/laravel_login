<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use DB;
// use Illuminate\Routing\Controller as BaseController;


class studentregisterController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register2
    (Request $req){

        $fname = $req -> input('fname');
        $lname = $req -> input('lname');
        $username = $req -> input('username');
        $password = $req -> input('password');
        $class = $req -> input('class');

        // return $req -> input();

        DB::insert('insert into student (firstname, lastname, username, password, class) values(?,?,?,?,?)',[$fname, $lname, $username, $password, $class]);
         echo "Record inserted successfully.<br/>";
         DB :: insert('insert into logindata(username, password) values (?,?) ',[$username, $password] );

    }

    
}

?>
