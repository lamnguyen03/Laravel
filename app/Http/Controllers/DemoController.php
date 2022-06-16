<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Controllers;

class DemoController extends Controller
{
    function Sayhi($a, $b)
    {
        return $a + $b;
    }
    function tinhtong(Request $request)
    {
        $sum = $request->hsa + $request->hsb;
        return view('test', compact('sum'));
        
    }
}
