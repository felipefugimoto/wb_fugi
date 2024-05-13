@extends('Layout.layout')
@section('title_principal', 'Quem somos - Wb Fugi')
@section('conteudo_principal')
    <!-- ======= Features Section ======= -->
    @foreach ($q_somos as $qsomo)
        <section class="hero-section inner-page">
            <div class="wave">

                <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                            <path
                                d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
                                id="Path"></path>
                        </g>
                    </g>
                </svg>

            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="row justify-content-center">
                            <div class="col-md-7 text-center hero-text">
                                <h1 data-aos="fade-up" data-aos-delay="">{{ $qsomo->titulo_banner }}</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 me-auto">
                        <h2 class="mb-4">{{ $qsomo->titulo_conteudo }}</h2>
                        <p class="mb-4">{!! nl2br($qsomo->texto_quem_somos) !!}</p></p>

                    </div>
                    <div class="col-md-4">
                        <img src="{{ url("storage/{$qsomo->img}") }}" alt="{{ $qsomo->titulo_pagina }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <div>


            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ms-auto-order-2">
                            <div class="card" style="width: 25rem;">
                                <img src="/biblioteca/missao.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Missão</h5>
                                    <p class="card-text">{!! nl2br($qsomo->missao) !!}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ms-auto-order-1">
                            <div class="card" style="width: 25rem;">
                                <img src="/biblioteca/visao.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Visão</h5>
                                    <p class="card-text">{!! nl2br($qsomo->visao) !!}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 ms-auto-order-2">
                            <div class="card" style="width: 25rem;">
                                <img src="/biblioteca/4252209_2254421.svg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Valor</h5>
                                    <p class="card-text">{!! nl2br($qsomo->valor) !!}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="container pt-5">
                    <div class="row align-items-center">
                        <div class="col-md-12 me-auto">
                            
                            <p class="mb-4">{!! nl2br($qsomo->texto_secundario) !!}</p>
    
                        </div>
                        
                </div>

            </section>
            


     



    @endforeach
@endsection
