@extends('adminlte::page')
@section('content')

    <div class="row" style="padding-top: 20px;" >
        <div class="col-lg-12 margin-tb">
          <div class="pull-left">
            <a style="text-decoration:none; color:inherit;" href="{{ route('produtos.index')}}"> <h3>Produtos</h3></a>
          </div>
           
          <div class="pull-right">
            <a class="btn btn-success"style="text-decoration:none; color:inherit;"  href="{{ route('produtos.create') }}">Cadastrar <i class="bi bi-plus-lg"></i></a>
          </div>
        </div>    
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Nº</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th width="90px">Editar</th>
        </tr>
        @foreach ($produtos as $produto)
        <tr>
            <td>{{ $produto->id }}</td>
            <td><a style="text-decoration:none; color:inherit;" href="{{ route('produtos.show',$produto->id) }}">{{ $produto->nome }}</a></td>
            <td> {{ number_format($produto->valor,2, ',', '.')}}</td>
            <td>{{ $produto->descricao }}</td>
            <td>
              <a class="btn btn-primary" href="{{ route('produtos.edit',$produto->id) }}"><i class="bi bi-pen"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
  
    <!-- !! $produtos->links() !!} -->
  </body>   
@endsection