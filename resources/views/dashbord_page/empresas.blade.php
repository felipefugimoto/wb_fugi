@extends('layouts.layout')
@section('title', 'Empresas')
@section('conteudo')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        {{-- <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p> --}}

        <!-- DataTales Example -->


        @if (session('mensagem'))
            <div id="mensagem" class="card-header bg-gradient-success text-white " role="alert">
                {{ session('mensagem') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <!-- Restante do seu conteúdo Blade aqui -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-end">
                {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
                {{-- Botao para novo quem somos --}}
                <a href="{{ route('empresas_insert') }}" class="btn btn-success btn-icon-split ">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Novo texto</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Titulo da Pagina</th>
                                <th>Titulo Banner</th>
                                <th>Titulo Conteudo</th>
                              
                                <th></th>
                                <th></th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($empresas as $empresa)
                                <tr>
                                    <td>
                                        
                                        @if ($empresa->id != $id_selc)
                                        <a href="/dashboard_page/empresas/{{ $empresa->id }}"
                                            class="btn btn-light btn-icon-split">
                                            <span class="icon text-white">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </a>
                                    @else
                                        <a href="#" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </a>
                                    @endif
                                      

                                    </td>
                                    <td>{{ $empresa->titulo_pagina }}</td>
                                    <td>{{ $empresa->titulo_banner }}</td>
                                    <td>{{ $empresa->titulo_conteudo }}</td>
                     

                                    <td>
                                        {{-- //Aterar --}}
                                        <a href="/dashboard_page/empresas_update/{{ $empresa->id }}"
                                            class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-0">
                                                <i class="fas fa-fw fa-pencil-alt"></i>
                                            </span>

                                        </a>
                                    </td>

                                    <td>
                                        {{-- //deletar  --}}

                                        <form action="{{ route('empresas.destroy') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $empresa->id }}">
                                            <button type="submit" class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-0">
                                                    <i class="fas fa-trash"></i> <!-- Ícone de lixeira -->
                                                </span>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       
    </div>
    <!-- /.container-fluid -->

    <script>
        setTimeout(function() {
            $('#mensagem').alert('close');
        }, 5000);
    </script>


@endsection