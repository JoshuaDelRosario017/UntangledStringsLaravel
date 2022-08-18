<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $names = ['Joshua', 'Jherome','Billy'];
        foreach ($names as $name) {
            echo $name .'<br>';
        }
    }

    public function getValue($index) {
        $names = ['Joshua', 'Jherome','Billy'];
        
        if($index > 2) {
            echo 'Sumobra ka sa list!';
        } else {
            return $names[$index];
        }
    }
}
