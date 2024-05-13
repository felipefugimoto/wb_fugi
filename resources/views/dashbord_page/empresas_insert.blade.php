@extends('layouts.layout')
@section('title', 'Adicionar nova empresa')
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

                <form action="{{ route('empresas.store') }}" method="POST" class="user" enctype="multipart/form-data">
                    @csrf
                    @auth


                        <div class="row">

                            <!-- Titulo da pagina -->
                            <div class="col-lg-6 ">

                                <div class="card position-relative ">
                                    <div class="card-header py-3 bg-gradient-primary">
                                        <h6 class="m-0 font-weight-bold text-white">Titulo da pagina</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-sm-12 mb-3 mb-sm-0 ">
                                            <input type="text" class="form-control form-control-user " id="exampleFirstName"
                                                placeholder="Titulo do Banner" name="page_titlo">
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- Fim Titulo da pagina -->

                            <!-- Banner -->
                            <div class="col-lg-6 ">

                                <div class="card position-relative ">
                                    <div class="card-header py-3 bg-gradient-primary">
                                        <h6 class="m-0 font-weight-bold text-white">Titulo do Banner</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-sm-12 mb-3 mb-sm-0 ">
                                            <input type="text" class="form-control form-control-user " id="exampleFirstName"
                                                placeholder="Titulo do Banner" name="banner">
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- Fim Banner -->


                           
                         <!-- Titulo conteudo e texto 1 -->
                        <div class="col-lg-12">

                            <div class="card position-relative">
                                <div class="card-header py-3 bg-gradient-primary">
                                    <h6 class="m-0 font-weight-bold text-white">Titulo do conteudo e texto </h6>
                                </div>
                                <div class="card-body">
                                    <div class="col-sm-12 mb-3 mb-sm-0 ">
                                        <input type="text" class="form-control form-control-user "
                                            id="exampleFirstName" placeholder="Titulo do Conteudo" name="titulo_conteudo"/>
                                    </div>

                                </div>


                                {{-- Texto --}}

                                <div class="card-body">
                                    <textarea name="txt_conteudo" id="" cols="30" rows="10" class="form-control" placeholder="Coloque o texto sobre a empresa"></textarea>
                                </div>
                            </div>

                        </div>



                       
                            <!-- fim Titulo conteudo e texto 1 -->



                            <!-- Empresas pequenas -->
                            <div class="col-lg-12">
                                <div class="card-header py-3 bg-gradient-primary my-4">
                                    <h6 class="m-0 font-weight-bold text-white">Empresas pequenas</h6>
                                </div>
                                <div class="row">
                                    <!-- Site  -->

                                    <div class="col-lg-4">

                                        <div class="card position-relative">
                                            <div class="card-header py-3 bg-gradient-primary">
                                                <h6 class="m-0 font-weight-bold text-white">Site</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                    <textarea id="" cols="30" rows="10" class="form-control  "
                                                        placeholder="Coloque uma descrição do motivo pelo qual uma empresa pequena deve montar um site." name="site_pequeno"></textarea>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                     <!-- Media -->

                                    <div class="col-lg-4">
                                        <div class="card position-relative">
                                            <div class="card-header py-3 bg-gradient-primary">
                                                <h6 class="m-0 font-weight-bold text-white">Midia Social</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                    <textarea id="" cols="30" rows="10" class="form-control  "
                                                        placeholder="Coloque uma descrição do motivo pelo qual uma empresa pequena deve montar uma mídia social." name="midia_social_pequeno"></textarea>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                     <!-- Marketing Digital -->
                                     <div class="col-lg-4">
                                        <div class="card position-relative">
                                            <div class="card-header py-3 bg-gradient-primary">
                                                <h6 class="m-0 font-weight-bold text-white">Marking Digital</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                    <textarea id="" cols="30" rows="10" class="form-control  "
                                                        placeholder="Coloque uma descrição do motivo pelo qual uma empresa pequena deve montar o marketing digital." name="marketing_digital_pequeno"></textarea>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>



                            </div>

                            <!-- Fim da Empresas pequenas -->

                                     <!-- Empresas medias -->
                                     <div class="col-lg-12 my-4">
                                        <div class="card-header py-3 bg-gradient-primary mb-4">
                                            <h6 class="m-0 font-weight-bold text-white">Empresas média</h6>
                                        </div>
                                        <div class="row">
                                            <!-- Site  -->
        
                                            <div class="col-lg-4">
        
                                                <div class="card position-relative">
                                                    <div class="card-header py-3 bg-gradient-primary">
                                                        <h6 class="m-0 font-weight-bold text-white">Site</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                            <textarea id="" cols="30" rows="10" class="form-control  "
                                                                placeholder="Coloque uma descrição do motivo pelo qual uma empresa média deve montar um site." name="site_media"></textarea>
                                                        </div>
        
                                                    </div>
                                                </div>
        
        
                                            </div>
                                             <!-- Media -->
        
                                            <div class="col-lg-4">
                                                <div class="card position-relative">
                                                    <div class="card-header py-3 bg-gradient-primary">
                                                        <h6 class="m-0 font-weight-bold text-white">Midia Social</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                            <textarea id="" cols="30" rows="10" class="form-control  "
                                                                placeholder="Coloque uma descrição do motivo pelo qual uma empresa média deve montar uma mídia social." name="midia_social_media"></textarea>
                                                        </div>
        
                                                    </div>
                                                </div>
        
                                            </div>
        
                                             <!-- Marketing Digital -->
                                             <div class="col-lg-4">
                                                <div class="card position-relative">
                                                    <div class="card-header py-3 bg-gradient-primary">
                                                        <h6 class="m-0 font-weight-bold text-white">Marking Digital</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                            <textarea id="" cols="30" rows="10" class="form-control  "
                                                                placeholder="Coloque uma descrição do motivo pelo qual uma empresa média deve montar o marketing digital." name="marketing_digital_media"></textarea>
                                                        </div>
        
                                                    </div>
                                                </div>
        
                                            </div>
        
                                        </div>
        
        
        
                                    </div>
        
                                    <!-- Fim da Empresas medias -->


                                <!-- Empresas greandes -->
                                <div class="col-lg-12 my-4">
                                    <div class="card-header py-3 bg-gradient-primary mb-4">
                                        <h6 class="m-0 font-weight-bold text-white">Empresas greande</h6>
                                    </div>
                                    <div class="row">
                                        <!-- Site  -->
    
                                        <div class="col-lg-4">
    
                                            <div class="card position-relative">
                                                <div class="card-header py-3 bg-gradient-primary">
                                                    <h6 class="m-0 font-weight-bold text-white">Site</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                        <textarea id="" cols="30" rows="10" class="form-control  "
                                                            placeholder="Coloque uma descrição do motivo pelo qual uma empresa grande deve montar um site." name="site_greande"></textarea>
                                                    </div>
    
                                                </div>
                                            </div>
    
    
                                        </div>
                                         <!-- Media -->
    
                                        <div class="col-lg-4">
                                            <div class="card position-relative">
                                                <div class="card-header py-3 bg-gradient-primary">
                                                    <h6 class="m-0 font-weight-bold text-white">Midia Social</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                        <textarea id="" cols="30" rows="10" class="form-control  "
                                                            placeholder="Coloque uma descrição do motivo pelo qual uma empresa grande deve montar uma mídia social." name="midia_social_greande"></textarea>
                                                    </div>
    
                                                </div>
                                            </div>
    
                                        </div>
    
                                         <!-- Marketing Digital -->
                                         <div class="col-lg-4">
                                            <div class="card position-relative">
                                                <div class="card-header py-3 bg-gradient-primary">
                                                    <h6 class="m-0 font-weight-bold text-white">Marking Digital</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="col-sm-12 mb-3 mb-sm-0  pb-4">
                                                        <textarea id="" cols="30" rows="10" class="form-control  "
                                                            placeholder="Coloque uma descrição do motivo pelo qual uma empresa grande deve montar o marketing digital." name="marketing_digital_greande"></textarea>
                                                    </div>
    
                                                </div>
                                            </div>
    
                                        </div>
    
                                    </div>
    
    
    
                                </div>
    
                                <!-- Fim da Empresas greandes -->

                                
                          
                        </div>

                        <div class="col-sm6 mb-3 mb-sm-0 d-flex justify-content-end btn-lg">

                            <button type="submit" class="btn btn-primary ">
                                Salvar
                            </button>

                        </div>


                        <hr>

                    </form>
                @endauth



            </div>

        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
