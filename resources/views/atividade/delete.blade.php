<h1>Excluir registro</h1>
<hr>
<form action="/atividades/{{$a->id}}" method="post">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<p> Você realmente deseja excluir o registro {{$a->id}}?</p>
<input type="submit" value="Deletar">
</form>