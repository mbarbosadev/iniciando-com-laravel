<?php $num = 10 ?>

<h1>Exemplo de estrutura condicional</h1>

@if($num < 20)
	<p>Número é menor que 20</p>
@elseif($num == 20)
	<p>Número é igual a 20</p>
@else
	<p>Número é maior que 20</p>
@endif

<h1>Exemplos de estrutura de repetição</h1>

<h2>For</h2>

@for($i = 0; $i <= 20; $i++)
	<p>Valor: {{ $i }}</p>
@endfor

<h2>While</h2>
<?php $i = 0;?>

@while($i <= 20)
	<p>Valor: {{ $i }}</p>
	<?php $i++; ?>
@endwhile

<h2>Foreach</h2>

<?php $array = [1, 2, 3, 4, 5]; ?>

@foreach($array as $value)
	<p>Chave {{ $loop->index }}, Valor: {{ $value }}</p>
@endforeach

<h2>Forelse</h2>

@forelse($array as $value)
	<p>Chave {{ $loop->index }}, Valor: {{ $value }}</p>
@empty
	<p>Nenhum elemento no array</p>
@endforelse


