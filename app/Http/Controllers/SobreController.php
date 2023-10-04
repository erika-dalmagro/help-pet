<?php

namespace App\Http\Controllers ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SobreController extends Controller
{
  public function index()
  {
    return view('sobre.sobre');
  }
  public function ongs()
  {
    return view('sobre.ongs');
  }

  public function comoFunciona()
  {
    return view('sobre.comoFunciona');
  }
}
