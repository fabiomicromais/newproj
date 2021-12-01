@extends('layouts.main')

@section('titulo','pagina e clientes')


@section('conteudo')
   <div id="form">
      @foreach ($clientes as $cliente)
      <ul>
         <li> nome do cliente: {{$cliente->nome}}</li>
         <li> debito do clinete {{$cliente->debito}}</li>
         <li> descricao  {{$cliente->descricao}}</li>
         <li> <a href="#" >editar clinete</a></li>    
               
         <form action="#" method="POST">
               @csrf
               @method('DELETE')
               <input type="submit" value="deletar">
            </form>                          

      </ul>
      @endforeach
   </div>

  @endsection('conteudo') 