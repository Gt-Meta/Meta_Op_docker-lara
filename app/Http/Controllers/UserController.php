<?php
namespace App\Http\Controllers;

class UserController extends Controller 
{


public function index() {
dd('UserController@index');
}

public function show($id) {
    dd('UserController@show', $id);
    
    
    }
    

}



?>