<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use DB;
// use Illuminate\Routing\Controller as BaseController;


class teacherregisterController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register(Request $req){

        $fname = $req -> input('fname');
        $lname = $req -> input('lname');
        $username = $req -> input('username');
        $password = $req -> input('password');
        $address = $req -> input('address');
        $contact = $req -> input('contact');

        // return $req -> input();

        DB::insert('insert into teacher (firstname, lastname, username, password, address, contact) values(?,?,?,?,?,?)',[$fname, $lname, $username, $password, $address, $contact]);
         echo "Record inserted successfully.<br/>";
         DB :: insert('insert into logindata(username, password) values (?,?) ',[$username, $password] );


    }

    
}

?>
