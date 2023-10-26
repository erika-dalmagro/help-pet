<?php

namespace App\Http\Controllers;
use App\Models\Formulario;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
class FormularioController extends Controller
{
    public $pet;

    public function _construct(Formulario $formulario)
    {
        $this->formulario = $formulario;
    }

    public function index()
    {
        $pet = Formulario::all();
        return  view('pet.index', compact('pet'));
    }

    public function adicionar($id)
    {
        $pet = Pet::find($id);
        return view('formulario.adicionar')->with('pet', $pet);
    }

    public function salvar(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'documento' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'teve_pet' => 'required',
            'possui_animal' => 'required',
            'possui_espaco' => 'required',
            'ficara_sozinho' => 'required',
            'alergias' => 'required',
            'comprometimento_saude' => 'required',
        ]);
      
        $formulario = Formulario::create($request->all());
     
        $formulario->save();
        //return redirect()->route('formulario.detalhar', $formulario->id);
        return view('formulario.concluido', compact('formulario'));
    }

    public function editar($id)
    {
        $formulario = Formulario::find($id);
        return view('formulario.editar', compact('formulario'));
    }

    public function atualizar(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'documento' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'teve_pet' => 'required',
            'possui_animal' => 'required',
            'possui_espaco' => 'required',
            'ficara_sozinho' => 'required',
            'alergias' => 'required',
            'comprometimento_saude' => 'required',
        ]);

        $formulario = Formulario::find($id);
        $formulario->update($request->all());
        $formulario->save();
        return redirect()->route('formulario.detalhar', $id);
    }

    public function detalhar($id)
    {
        $formulario = Formulario::find($id);
        return view('formulario.detalhar')->with('formulario', $formulario);
    }

    public function excluir($id)
    {
        $formulario = Formulario::find($id);
        Formulario::destroy($id);
        $formulario = Formulario::all();
        return redirect()->route('formulario.index', compact('formulario'));
    }
}
