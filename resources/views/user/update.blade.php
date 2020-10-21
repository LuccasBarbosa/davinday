@extends('layouts.interna')

@section('titulo', 'Profile')

@section('content')

    <div class="col col-md-8 centro">
        <div class="card">
            <!-- <div class="card-header">Dashboard</div> -->

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Você está logado! -->

                <div class="header-list">
                    <h1 class="mb-0">ÚLTIMOS DOCUMENTOS ATRIBUÍDOS</h1>
                    <p class="gray">Que você é responsável</p>
                </div>

                <form method="post" enctype="multipart/form-data">    
                    <div class="form-group">
                    <label for="sobrenome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="name">
                    </div>

                    <div class="form-group">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" >
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" id="numero" name="numero">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="complemento">Complemento</label>
                            <input type="text" class="form-control" id="complemento" name="complemento">
                        </div>
                        
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="uf">Estado</label>
                            <select id="uf" class="form-control" name="uf">
                                <option selected>SP</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="cep">Cep</label>
                            <input type="text" class="form-control" id="cep" name="cep">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Foto</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <div class="form-group">
                        <!-- <label for="biografia">Biografia</label> -->
                        <textarea class="form-control" id="biografia" rows="3" placeholder="Biografia"></textarea>
                    </div>
                </form>

                
            </div>
        </div>
    </div>

@endsection
