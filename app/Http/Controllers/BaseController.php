<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function odd() {
    	for ($i=10; $i < 100; $i++) { 
    		if ($i % 2) {
    			$oddNumbers[] = $i;
    		}
    	}

    	return view('odd', compact('oddNumbers'));
    }
}
