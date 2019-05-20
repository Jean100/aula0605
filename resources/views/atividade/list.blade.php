
<h1>Lista de Atividades</h1>
<hr>

@if (\Session::has('success'))
<div class="container">
<div class="alert alert-sucess">
{{\Session::get('success')}}
</div>
</div>
@endif



@foreach($atividades as $atividade)
	<h3>{{$atividade->scheduledto}}</h3>
	<p><a href="/atividades/{{$atividade->id}}"> {{$atividade->title}}</a></p>
	<p>{{$atividade->description}}</p>
	<br>
@endforeach

<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->
