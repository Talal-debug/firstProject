<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use stdClass;

class UserController extends Controller
{

    public function getIndex()
    {

        // $data =[];
        // $data['id'] = 31;
        // $data['name']='Talal ali';

        $obj = new stdClass();
        $obj->name = 'Talal';
        $obj->age = 31;
        $obj->gender = 'male';
        
        return view('welcome', compact('obj'));
    }
    public function showUserName()
    {
        return "this is show";
    }
}
