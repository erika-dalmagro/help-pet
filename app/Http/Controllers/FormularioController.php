<?php

namespace App\Http\Controllers;
use App\Models\Formulario;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
class FormularioController extends Controller
{
    public $formulario;

    public function _construct(Formulario $formulario)
    {
        $this->formulario = $formulario;
    }

    public function index(Request $request)
    {
        $selectedStatus = $request->input('avaliacao');
        $formulario = Formulario::query();

        if ($selectedStatus) {
            $formulario->where('avaliacao', $selectedStatus);
        }

        $formulario = $formulario->get();

        return view('formulario.index', compact('formulario', 'selectedStatus'));
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
            'id_pet' => 'required',
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
        return view('formulario.concluido', compact('formulario'));
    }
    
    public function aprovar($id)
    {
        $formulario = Formulario::find($id);
        $formulario->avaliacao = 2;
        $formulario->save();
        $pet = Pet::find($formulario->id_pet);
        $pet->adotado = 1;
        $pet->save();
        return redirect()->route('formulario.detalhar', $id);
    }

    public function reprovar($id)
    {
        $formulario = Formulario::find($id);
        $formulario->avaliacao = 3;
        $formulario->save();
        return redirect()->route('formulario.detalhar', $id);
    }

    public function detalhar($id)
    {
        $formulario = Formulario::find($id);
        $pet = Pet::find($formulario->id_pet);
        return view('formulario.detalhar')->with('formulario', $formulario)->with('pet', $pet);
    }

    public function excluir($id)
    {
        $formulario = Formulario::find($id);
        Formulario::destroy($id);
        $formulario = Formulario::all();
        return redirect()->route('formulario.index', compact('formulario'));
    }
}
