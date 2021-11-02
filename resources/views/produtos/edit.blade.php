@extends('adminlte::page')

@section('content')

    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <a style="text-decoration:none; color:inherit;" href="{{ route('produtos.index')}}"> <h2>Sweet</h2></a>
        </div>  
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('produtos.index') }}"> Voltar</a>
        </div>
      </div>    
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('produtos.update',$produto->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" value="{{ $produto->nome }}" class="form-control" placeholder="Nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Valor:</strong>
                    <input type="text" name="valor" value="{{ $produto->valor }}" class="form-control" placeholder="valor">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    <textarea class="form-control" style="height:150px" name="descricao" placeholder="Descrição">{{ $produto->descricao }}</textarea>
                </div>
            </div>
  
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar <i class="bi bi-send"></i></button>
                  
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"> Deletar <i class="bi bi-trash"></i></button>
              </form>
        
            </div>
        </div>
   
    </form>
@endsection