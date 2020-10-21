@extends('layouts.interna')

@section('titulo', 'Profile')

@section('content')

    <div class="col col-md-8 centro">
        <div class="card">
            <!-- <div class="card-header">Dashboard</div> -->

            <div class="card-body">
                @if(session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
              
              @if(session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
              @endif

                <!-- Você está logado! -->

                <div class="header-list">
                    <h1 class="mb-0">PROFILE </h1>
                    <p class="gray">Dados para serem editados</p>
                </div>

                
                    
                

                @forelse ( $user as $u )

                @if ($u->name == Auth::user()->name )

                <form action="{{route('user.update',$u->id)}}" method="post">    
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                    <label for="sobrenome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{$u->name}}">
                    </div>

                    <div class="form-group">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="{{$u->sobrenome}}">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$u->email}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="celular">Celular</label>
                            <input type="text" class="form-control" id="celular" name="celular" value="{{$u->celular}}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="empresa">Empresa</label>
                            <input type="text" class="form-control" id="empresa" name="empresa" value="{{$u->empresa}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cargo">Cargo</label>
                            <input type="text" class="form-control" id="cargo" name="cargo" value="{{$u->cargo}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress2">Endereço</label>
                        <input type="text" class="form-control" id="inputAddress2" name="endereco" value="{{$u->endereco}}">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" id="numero" name="numero" value="{{$u->numero}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="complemento">Complemento</label>
                            <input type="text" class="form-control" id="complemento" name="complemento" value="{{$u->complemento}}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" value="{{$u->bairro}}">
                        </div>
                        
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Cidade</label>
                            <input type="text" class="form-control" id="inputCity" name="cidade" value="{{$u->cidade}}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Estado</label>
                            <select id="inputState" class="form-control" name="uf">
                                
                                <option selected>{{$u->uf}}</option>

                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AM">AM</option>
                                <option value="AP">AP</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MG">MG</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="PR">PR</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="RS">RS</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
            
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="cep">Cep</label>
                            <input type="text" class="form-control" id="cep" name="cep" value="{{$u->cep}}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="picture">Foto</label>
                        <input type="file" class="form-control-file" id="picture" name="foto">
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Salvar" class="btn btn-primary float-right">
                    </div>
                </form>

                @endif

                @empty
                    <p>Nenhuma Categoria Cadastrada</p>
                @endforelse

                

                
            </div>
        </div>
    </div>

@endsection
