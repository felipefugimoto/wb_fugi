<?php

namespace App\Http\Controllers;

use App\Models\QuemSomos;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuemSomosController extends Controller
{
    //
    public function index()
    {
        $qsomos =  QuemSomos::all();

        // Recuperar o ID selecionado na tabela selecionar_quemsomos
        $id_selc = DB::table('selecionar_quemsomos')
            ->where('id', 1)
            ->value('quemsomos_id');

        return view('dashbord_page.quemsomos', compact('qsomos', 'id_selc'));
    }



    public function new_insert()
    {
        return view('dashbord_page.quemsomos_insert');
    }

    public function store(Request $request)
    {


        $img_arq = null; // Inicialize a variável $img_arq

        $img_banner = null;

        if ($request->file('img')) {
            $img_arq = $request->file('img')->store('biblioteca');
        }

        if ($request->file('img_banner')) {
            $img_banner = $request->file('img_banner')->store('biblioteca');
        }






        DB::table('quem_somos')->insert(
            [
                'img_banner' => $img_banner,
                'titulo_pagina' => $request->input('page_titlo'),
                'titulo_banner' => $request->input('banner'),
                'titulo_conteudo' => $request->input('titulo_conteudo'),
                'texto_quem_somos' =>  nl2br($request->input('txt_conteudo')), // Utilize input() para campos de texto e textarea
                'img' => $img_arq,
                'missao' =>  nl2br($request->input('missao')),
                'valor' =>  nl2br($request->input('valor')), // Corrija o nome do campo para 'Valor'
                'visao' =>  nl2br($request->input('visao')),
                'texto_secundario' =>  nl2br($request->input('txt_sec'))

            ]
        );


        return redirect()->route('quemsomos.index')->with('menssagem', 'Adicionado com sucesso!!!');
    }

    //Altera

    public function update($id)
    {
        // $qsomos = QuemSomos::findOrFail($id);

        $qsomos = DB::table('quem_somos')->select()->where('id', '=', $id)->get('$id');


        return view('dashbord_page.quemsomos_update', compact('qsomos')); // Retorne a view renderizada
    }


    public function show(Request $request)
    {

        $id = $request->get('id');
        // Recuperar os dados existentes do modelo 'QuemSomos'
        $qsomos = QuemSomos::findOrFail($id);

        // Verificar se um novo arquivo de imagem do banner foi enviado
        if ($request->hasFile('img_banner')) {
            // Armazenar o novo arquivo de imagem do banner
            $img_banner = $request->file('img_banner')->store('biblioteca');

            // Atualizar o registro com o novo arquivo de imagem do banner
            $qsomos->img_banner = $img_banner;
        }

        // Verificar se um novo arquivo de imagem foi enviado
        if ($request->hasFile('img')) {
            // Armazenar o novo arquivo de imagem
            $img_arq = $request->file('img')->store('biblioteca');

            // Atualizar o registro com o novo arquivo de imagem
            $qsomos->img = $img_arq;
        }

        // Atualizar o registro com os dados do formulário
        $qsomos->titulo_pagina = $request->input('page_titlo');
        $qsomos->titulo_banner = $request->input('banner');
        $qsomos->titulo_conteudo = $request->input('titulo_conteudo');
        $qsomos->texto_quem_somos = nl2br($request->input('txt_conteudo'));
        $qsomos->missao = nl2br($request->input('missao'));
        $qsomos->valor = nl2br($request->input('valor'));
        $qsomos->visao = nl2br($request->input('visao'));
        $qsomos->texto_secundario = nl2br($request->input('txt_sec'));

        // Salvar as alterações no banco de dados
        $qsomos->save();

        // Redirecionar o usuário de volta para a página 'quemsomos.index' com uma mensagem de sucesso
        return redirect()->route('quemsomos.index')->with('mensagem', 'Alterado com sucesso!!!');
    }


     // Outros métodos do controlador...

     public function destroy(Request $request)
     {


         // Encontre o registro pelo ID
         DB::table('quem_somos')->where('id', $request->get('id'))->delete();
 
         // Redirecionar com uma mensagem de sucesso
         return redirect()->route('quemsomos.index')->with('success', 'Registro excluído com sucesso.');
     }



    //Ao selecior um texto é alterado na pagina

    public function update_selc($id)
    {

        // Atualizar o ID na tabela selecionar_quemsomos
        DB::table('selecionar_quemsomos')->where('id', 1)->update([
            'quemsomos_id' => $id
        ]);

        return redirect()->route('quemsomos.index')->with('menssagem', 'Alterado com sucesso!!!');
    }



    //Imprime tudo o que vem do banco
    public function page_quemsomos()
    {

        $q_somos = DB::table('selecionar_quemsomos as sq')
                ->join('quem_somos as qs', 'sq.quemsomos_id', '=', 'qs.id')
                ->select('qs.*')
                ->get();

    return view('page.quemsomos', compact('q_somos'));
    }
}
