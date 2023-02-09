<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuController extends Controller
{
    public function profile(){
        echo "Profile profile profile";
    }
    public function multi($n1, $n2){
        $total = $n1 * $n2;
        echo $total;
    }
}
