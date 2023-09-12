<?php

namespace App\Http\Controllers\sobre ;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SobreController extends Controller
{
  public function index()
  {
    return view('content.sobre.sobre');
  }
}
