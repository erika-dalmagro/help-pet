<?php

namespace App\Http\Controllers;
use App\Models\Pet;
use Illuminate\Http\Request;

class AdotarController extends Controller
{
    public $pet;

    public function _construct(Pet $pet)
    {
        $this->pet = $pet;
    }

    public function index()
    {
        $pet = Pet::all();
        return  view('content.adotar.adotar', compact('pet'));
       
    }

}
