@extends('layouts.layout')
@section('title', 'Alterar - quem somos')
@section('conteudo')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-1 text-gray-800">Animation Utilities</h1>
        <p class="mb-4">Bootstrap's default utility classes can be found on the official <a
                href="https://getbootstrap.com/docs">Bootstrap Documentation</a> page. The custom utilities
            below were created to extend this theme past the default utility classes built into Bootstrap's
            framework.</p>

        <!-- Content Row -->
        <div class="row">



            <!-- Grow In Utility -->
            <div class="col-lg-12">

                <form action="{{ route('quemsomos.show') }}" method="POST" class="user" enctype="multipart/form-data">
                    @csrf
                    @auth
                        @foreach ($qsomos as $qsomo)
                            <div class="row">

                                <!-- Titulo da pagina -->
                                <input type="hidden" name="id" value="{{ $qsomo->id }}">
                                <div class="col-lg-12 ">

                                    <div class="card position-relative ">
                                        <div class="card-header py-3 bg-gradient-primary">
                                            <h6 class="m-0 font-weight-bold text-white">Titulo da pagina</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-sm-12 mb-3 mb-sm-0 ">
                                                <input type="text" class="form-control form-control-user "
                                                    id="exampleFirstName" placeholder="Titulo do Banner" name="page_titlo"
                                                    value="{{ $qsomo->titulo_pagina }}">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- Fim Titulo da pagina -->

                                <!-- Banner -->
                                <div class="col-lg-6 ">

                                    <div class="card position-relative ">
                                        <div class="card-header py-3 bg-gradient-primary">
                                            <h6 class="m-0 font-weight-bold text-white">Banner</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-sm-12 mb-3 mb-sm-0 ">
                                                <input type="text" class="form-control form-control-user "
                                                    id="exampleFirstName" placeholder="Titulo do Banner" name="banner"
                                                    value="{{ $qsomo->titulo_banner }}">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- Fim Banner -->

                                <!-- IMG  Banner-->
                                <div class="col-lg-6">

                                    <div class="card position-relative">
                                        <div class="card-header py-3 bg-gradient-primary">
                                            <h6 class="m-0 font-weight-bold text-white">Imagem do banner</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-sm-6 mb-3 mb-sm-0  pb-4">
                                                <input type="file" id="exampleFirstName" placeholder="img_perfil"
                                                    name="img_banner" value="{{$qsomo->img_banner }}">
                                            </div>
                                            <img src="{{ url("storage/{$qsomo->img_banner}") }}"
                                                alt="{{ $qsomo->titulo_banner }}" width="150" />
                                        </div>
                                    </div>

                                </div>

                                <!-- Fim da IMG Banner-->

                                <!-- Titulo conteudo e texto 1 -->
                                <div class="col-lg-6">

                                    <div class="card position-relative">
                                        <div class="card-header py-3 bg-gradient-primary">
                                            <h6 class="m-0 font-weight-bold text-white">Titulo do conteudo e texto </h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-sm-12 mb-3 mb-sm-0 ">
                                                <input type="text" class="form-control form-control-user "
                                                    id="exampleFirstName" placeholder="Titulo do Conteudo"
                                                    name="titulo_conteudo" value="{{ $qsomo->titulo_conteudo }}" />
                                            </div>

                                        </div>


                                        {{-- Texto --}}

                                        <div class="card-body">
                                            <textarea name="txt_conteudo" id="" cols="30" rows="10" class="form-control"
                                                placeholder="Coloque o texto sobre a empresa">{{ $qsomo->texto_quem_somos }}</textarea>
                                        </div>
                                    </div>

                                </div>



                                <!-- fim Titulo conteudo e texto 1 -->

                                <!-- IMG -->
                                <div class="col-lg-6">

                                    <div class="card position-relative">
                                        <div class="card-header py-3 bg-gradient-primary">
                                            <h6 class="m-0 font-weight-bold text-white">Imagem em destaque</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                <input type="file" id="exampleFirstName" placeholder="img_perfil"
                                                    name="img" value="{{$qsomo->img }}">
                                            </div>
                                            <img src="{{ url("storage/{$qsomo->img}") }}" alt="{{ $qsomo->titulo_conteudo }}"
                                                width="150" />

                                        </div>
                                    </div>

                                </div>

                                <!-- Fim da IMG -->


                                <!-- Missão -->
                                <div class="col-lg-4">

                                    <div class="card position-relative">
                                        <div class="card-header py-3 bg-gradient-primary">
                                            <h6 class="m-0 font-weight-bold text-white">Missão</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                <textarea id="" cols="30" rows="10" class="form-control  "
                                                    placeholder="Coloque o texto sobre a missão da empresa" name="missao">{{ $qsomo->missao }}</textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <!-- Fim da missão -->
                                <!-- Valores -->
                                <div class="col-lg-4">

                                    <div class="card position-relative">
                                        <div class="card-header py-3 bg-gradient-primary">
                                            <h6 class="m-0 font-weight-bold text-white">Valores</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                <textarea id="" cols="30" rows="10" class="form-control  "
                                                    placeholder="Coloque o texto sobre a valores da empresa" name="valor">{{ $qsomo->valor }}</textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- Fim Valores -->
                                <!-- Visão -->
                                <div class="col-lg-4">

                                    <div class="card position-relative">
                                        <div class="card-header py-3 bg-gradient-primary">
                                            <h6 class="m-0 font-weight-bold text-white">Visão</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                <textarea id="" cols="30" rows="10" class="form-control"
                                                    placeholder="Coloque o texto sobre a visão da empresa" name="visao">{{ $qsomo->visao }}</textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <!-- Fim Visão  -->

                                <!-- Texto 2 -->
                                <div class="col-lg-12">

                                    <div class="card position-relative">
                                        <div class="card-header py-3 bg-gradient-primary">
                                            <h6 class="m-0 font-weight-bold text-white">Texto 2</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                <textarea id="" cols="30" rows="10" class="form-control "
                                                    placeholder="Coloque o texto o segundo texto" name="txt_sec">{{ $qsomo->texto_secundario }}
                                            </textarea>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!--Fim do  Texto 2 -->
                            </div>

                            <div class="col-sm6 mb-3 mb-sm-0 d-flex justify-content-end btn-lg">

                                <button type="submit" class="btn btn-primary ">
                                    Salvar
                                </button>

                            </div>


                            <hr>
                        @endforeach
                    @endauth
                </form>




            </div>

        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
