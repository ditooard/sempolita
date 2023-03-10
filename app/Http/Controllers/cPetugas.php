<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;
use SebastianBergmann\CodeUnit\FunctionUnit;

class cPetugas extends Controller
{
    public function index(){
        echo 'ini adalah dashboard PETUGAS';
    }
}
