<h1>Lista de Mensagens</h1>



@if (\Session::has('success'))
<div class="container">
<div class="alert alert-sucess">
{{\Session::get('success')}}
</div>
</div>
@endif



@foreach($mensagens as $m)
<h2><a href="/mensagens/{{$m->id}}">{{$m->titulo}}</a></h2>
@endforeach

<a href="/mensagens/create">Criar nova Mensagem</a>