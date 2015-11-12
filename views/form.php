<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<title>Fale com a Dra. Mariana Santana</title>
<meta name="description" content="Visite a página da Médica Veterinária Dra. Mariana Santana, e tire todas as suas dúvidas sobre animais silvestres.">
<meta name="keywords" content="veterinário animais silvestres, veterinário animais exóticos, veterinário santo andré, veterinário abc, veterinário santos, veterinário baixada santista">

<scrip type="text/javascript" scr="<?php echo base_url(); ?>static/js/script.js">
</script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/estilo.css" />
</head>

<body>

<div align="center">
<img src="<?php echo base_url(); ?>static/img/cabecalho001.jpg" alt="Veterinária de Animais Silvestres" title="Veterinária de Animais Silvestres">
</div>

<h1>Veterinária de Animais Silvestres</h1>
<div id="menu-esquerdo">
<ul>
<li><a href="#index.html">Home</a></li>
<li><a href="#aves.html">Aves</a></li>
<li><a href="#coelhos.html">Coelhos</a></li>
<li><a href="#peixes.html">Peixes</a></li>
<li><a href="#repteis.html">Répteis</a></li>
<li><a href="#roedores.html">Roedores</a></li>
<li><a href="#outros-animais.html">Outros animais</a></li>
</ul>
<p id="dra"><strong>Dra. MARIANA SANTANA</strong><br>
<i>Médica Veterinária especialista em animais silvestres</i><br>
<strong>CRMV-SP 10000</strong></p>
</div>

<div id="menu-direito">
<p><img src="<?php echo base_url(); ?>static/img/aquario002.jpg" alt="Aquarios" title="Aquários"></p>
<p><img src="<?php echo base_url(); ?>static/img/adote001.jpg" alt="Adote um bichinho" title="Adote um bichinho"></p>
</div>

<div id="menu-centro">

<ul>
<li><a href="index.html">Home</a></li>
<li><a href="https://projeto-vet-prizsorensen.c9.io/index.php/outros/curriculo">Currículo</a></li>
<li><a href="https://projeto-vet-prizsorensen.c9.io/index.php/formulario/contato">Fale conosco</a></li>
<li><a href="https://projeto-vet-prizsorensen.c9.io/index.php/outros/links">Outros Links</a></li>
<li><a href="https://projeto-vet-prizsorensen.c9.io/index.php/parceiro/parceiros">Seja um parceiro</a></li>
</ul>
</div>


<div id="centro">


<h2>Fale com a Dra. Mariana Santana</h2><br>

    <!-- vou na classe formulario que vai ter que ter uma funcao doPost -->
<form action="/index.php/formulario/doPost" method="POST">

<p>
	<label>Nome:</label>
	<input type="text" name="nome" id="nome" size="41" maxlength="45">	
</p>

<p>
	<label>Selecione uma categoria:</label>
	<select name="categoria" id="categoria">
		<option selected>--Selecione--</option>
		<option value="AVES">Aves</option>
		<option value="COELHOS">Coelhos</option>
		<option value="PEIXES">Peixes</option>
		<option value="REPTEIS">Répteis</option>
		<option value="ROEDORES">Roedores</option>
		<option value="OUTROS">Outros</option>
	</select>
</p>

<p>
	<label>Telefone:</label>
	<input type="telefone" name="telefone" id="telefone">
</p>

<p>
	<label>Digite um endereço de email válido</label>
	<input type="email" name="email" id="email" multiple>
</p>

<p>
	<label>Comentários:</label><br>
	<textarea name="comentarios" id="comentarios" rows="5" cols="30"></textarea>
</p>

<p>
	<input type="submit" value="Enviar" class="botao"> <input type="reset" value="Limpar Formulário" id="limpar" class="botao">
</p>

</form>

<br>

<p><a href="https://projeto-vet-prizsorensen.c9.io/index.php/formulario/listar">Clique aqui para ver a lista completa de contatos.</a>

<br>

</div>


<div id="desenvolvimento">
<h4>Desenvolvido por Priz Sorensen</h4>
</div>


</body>
</html>