<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\New_;

class EmpresaController extends Controller
{
    //DASHBORD PAGE


    public function index()
    {
        $empresas = Empresa::all();

        $id_selc = DB::table('selecionar_empresas')
            ->where('id', 1)
            ->value('empresas_id');

        return view('dashbord_page.empresas', compact('empresas', 'id_selc'));
    }



    public function new_insert()
    {
        return view('dashbord_page.empresas_insert');
    }

    public function store(Request $request)
    {
        $datas = date("Y-m-d H:i:s");




        DB::table('empresas')->insert(
            [
                'titulo_pagina' => $request->get('page_titlo'),
                'titulo_banner' => $request->get('banner'),
                'titulo_conteudo' => $request->get('titulo_conteudo'),
                'texto_conteudo' => $request->get('txt_conteudo'),
                'siteP' => $request->get('site_pequeno'),
                'midiasocialP' => $request->get('midia_social_pequeno'),
                'marketingdigitalP' => $request->get('marketing_digital_pequeno'),
                'siteM' => $request->get('site_media'),
                'midiasocialM' => $request->get('midia_social_media'),
                'marketingdigitalM' => $request->get('marketing_digital_media'),
                'siteG' => $request->get('site_greande'),
                'midiasocialG' => $request->get('midia_social_greande'),
                'marketingdigitalG' => $request->get('marketing_digital_greande'),
                'created_at' => $datas,
                'updated_at' => $datas

            ]
        );


        return redirect()->route('empresas.index')->with('menssagem', 'Adicionado com sucesso!!!');
    }

    //Altera

    public function update($id)
    {
          $empresas = DB::table('empresas')->select()->where('id', '=', $id)->get('$id');

        //  var_dump($empresas);
        //  die();


        return view('dashbord_page.empresas_update', compact('empresas')); // Retorne a view renderizada
    }


    public function show(Request $request)
    {

        $id = $request->get('id');
        $empresa = Empresa::findOrFail($id);

        $empresa->titulo_pagina = $request->get('titulo_pagina');
        $empresa->titulo_banner = $request->get('titulo_banner');
        $empresa->titulo_conteudo = $request->get('titulo_conteudo');
        $empresa->texto_conteudo = nl2br($request->get('txt_conteudo'));
        $empresa->siteP = nl2br($request->get('site_pequeno'));
        $empresa->midiasocialP = nl2br($request->get('midia_social_pequeno'));
        $empresa->marketingdigitalP = nl2br($request->get('marketing_digital_pequeno'));
        $empresa->siteM = nl2br($request->get('site_media'));
        $empresa->midiasocialM = nl2br($request->get('midia_social_media'));
        $empresa->marketingdigitalM = nl2br($request->get('marketing_digital_media'));
        $empresa->siteG = nl2br($request->get('site_grande'));
        $empresa->midiasocialG = nl2br($request->get('midia_social_grande'));
        $empresa->marketingdigitalG = nl2br($request->get('marketing_digital_grande'));

        $empresa->save();

        // Redirecionar o usuário de volta para a página 'empresas.index' com uma mensagem de sucesso
        return redirect()->route('empresas.index')->with('mensagem', 'Alterado com sucesso!!!');
    }


    // Outros métodos do controlador...

    public function destroy(Request $request)
    {


        // Encontre o registro pelo ID
        DB::table('empresas')->where('id', $request->get('id'))->delete();

        // Redirecionar com uma mensagem de sucesso
        return redirect()->route('empresas.index')->with('success', 'Registro excluído com sucesso.');
    }



    //Ao selecior um texto é alterado na pagina

    public function update_selc($id)
    {

        // Atualizar o ID na tabela selecionar_quemsomos
        DB::table('selecionar_empresas')
            ->where('id', 1)
            ->update([
                'empresas_id' => $id
            ]);

        return redirect()->route('empresas.index')->with('menssagem', 'Alterado com sucesso!!!');
    }



    //PAGE PRINCIPAL
}
