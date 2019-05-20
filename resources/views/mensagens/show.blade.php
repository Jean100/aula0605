<h1>Dados de uma Mensagem:</h1>
<br>
<h2>{{$mensagem->titulo}}</h2>
<h2>{{$mensagem->autor}}</h2>
<h2>{{$mensagem->texto}}</h2>

<a href="/mensagens/{{$mensagem->id}}/edit">Editar Mensagem</a>
<br>

<a href="/mensagens/{{$mensagem->id}}/delete">Excluir</a>
<br><br>
<a href="/mensagens/">Voltar a tela inicial</a>