<?php
namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pet;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
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
      
        if ($usuario && $request->password == $usuario->senha) {
            $request->session()->start();
            session(['usuario' => $usuario]);
            $pet = Pet::where('adotado', 0)->get();
            return redirect()->route('pet.index', compact('pet'));
        } else {
            $erro = true;
            return view('auth.login');
        }
    }

    public function logout()
    {
        session()->flush();
        $pet = Pet::where('adotado', 0)->get();
        return redirect()->route('pet.index', compact('pet'));
    }
}
