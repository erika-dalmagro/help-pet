<?php

namespace App\Http\Controllers\adotar ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdotarController extends Controller
{
  public function index()
  {
    return view('content.adotar.adotar');
  }
 
}
