<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class EnderecoController extends Controller
{
    public function index()
    {
        $enderecos = Enderco::all();
        return view(view: 'listagem')->with(
            [
                'enderecos' => $enderecos,
            ]
        );
    }

    public function adicionar()
    {
        return view(view: 'busca');
    }

    public function buscar(
        Request $request
    ) {
        $cep = $request->input(key: 'cep');
        $response = Http::get(url: "https://viacep.com.br/ws/$cep/json")->json();

        return view(view: 'adicionar')->with(
            [
                'cep' => $request->input(key:'cep'),
                'logradouro' => $response['logradouro'],
                'bairrocidade' => $response['bairrocidade'],
                'cidade' => $response['cidade'],
                'bairro' => $response['bairro'],
                'estado' => $response['uf'],
            ]
            );
    }

    public function salvar(
        SalvarRequest $request
    ){
        $endereco = Endereco::where('cep', $request->input(key: 'cep'))->first();

        if (!$endereco) {
            Endereco::create(
                [
                    'cep' => $request->inpuy(key: 'cep'),
                    'logradouro' => $request->inpuy(key: 'logradouro'),
                    'numero' => $request->inpuy(key: 'numerobairro'),
                    'bairro' => $request->inpuy(key: 'bairro'),
                    'cidadeestado' => $request->inpuy(key: 'cidadeestado'),
                    'estado' => $request->inpuy(key: 'estado'),
                ]
            );

            return redirect(to: '/')->withSucesso('Endereco salvo com sucesso!')
        }
        return redirect(to: '/')->withErro('O endereco ja esta cadastrado');
    }
}