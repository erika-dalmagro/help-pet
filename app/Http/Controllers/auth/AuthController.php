<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pet;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login-basic');
    }

    public function autenticar(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        

        $usuario = $_POST['email'] ?? false;
        $senha = $_POST['password'] ?? false;
     
        $usuario = User::where('email', '=', $request->email)->first();
        if ($usuario && $request->password ==  $usuario->password) {
            $request->session()->start();
            session(['usuario' => $usuario]);
            $pet = Pet::all();
            return view('pet.index', compact('pet'));
        } else {
            $erro = true;
            return view('auth.login', compact('erro'));
            die();
        }
    }

    public function logout()
    {
        session()->flush();
        $pet = Pet::all();
        return view('pet.index', compact('pet'));
    }
}
