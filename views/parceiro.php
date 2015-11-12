<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<title>Seja um parceiro da Dra. Mariana Santana</title>

<meta name="description" content="Seja um parceiro da Médica Veterinária Dra. Mariana Santana, especialista em animais silvestres de pequeno e grande porte.">
<meta name="keywords" content="veterinário animais silvestres, veterinário animais exóticos, veterinário para coelho, veterinário para aves, veterinário santo andré, veterinário abc">

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
<li><a href="index.html">Home</a></li>
<li><a href="aves.html">Aves</a></li>
<li><a href="coelhos.html">Coelhos</a></li>
<li><a href="peixes.html">Peixes</a></li>
<li><a href="repteis.html">Répteis</a></li>
<li><a href="roedores.html">Roedores</a></li>
<li><a href="outros-animais.html">Outros animais</a></li>
</ul>
<p id="dra"><strong>Dra. Mariana Santana</strong><br>
<i>Médica Veterinária especialista em animais silvestres</i><br>
<strong>CRMV-SP 10000</strong></p>
</div>

<div id="menu-direito">
<p><img src="<?php echo base_url(); ?>static/img/aquario002.jpg" alt="Aquarios" title="Aquários"></p>
<p><img src="<?php echo base_url(); ?>static/img/adote001.jpg" alt="Adote um bichinho" title="Adote um bichinho"></p>
</div>

<div id="menu-centro">

<ul>
<li><a href="#index.html">Home</a></li>
<li><a href="#curriculo.html">Currículo</a></li>
<li><a href="https://projeto-vet-prizsorensen.c9.io/index.php/formulario/contato">Fale conosco</a></li>
<li><a href="#links.html">Outros Links</a></li>
<li><a href="https://projeto-vet-prizsorensen.c9.io/index.php/parceiro/parceiros">Seja um parceiro</a></li>
</ul>

</div>

<div id="centro">

<h2>Seja um parceiro da Dra. Mariana Santana</h2><br>

<form action="/index.php/parceiro/doPostParceiro" method="POST">

<p>
	<label>Nome:</label>
	<input type="text" name="nome" id="nome" size="41" maxlength="45">	
</p>

<p>
	<fieldset>
		<legend>Sexo:</legend>
		<input type="radio" name="sexo" value="Feminino"><label>Feminino</label><br>
		<input type="radio" name="sexo" value="Masculino"><label>Masculino</label>
	</fieldset>
</p>

<p>
	<fieldset>
		<legend>Assinale o estilo de parceria do seu interesse:</legend>
		<input type="checkbox" name="interesse" value="Parceiro em Clinica"><label>Tenho uma clínica veterinária e gostaria que você fosse minha parceira</label>
		<br>
		<input type="checkbox" name="interesse" value="Veterinario autonomo"><label>Sou veterinário autonomo</label>
		<br>
		<input type="checkbox" name="interesse" value="Divulgação no seu site"><label>Gostaria de divulgar no seu site</label>
		<br>
		<input type="checkbox" name="interesse" value="Divulgação no site do parceiro"><label>Gostaria que você divulgasse no meu site seus serviços</label>
		<br>
		<input type="checkbox" name="interesse" value="Outros tipos de parceria"><label>Outros tipos de parcerias</label>
	</fieldset>
</p>

<p>
	<fieldset>
		<legend>Assinale o seu local de atendimento:</legend>
		<input type="checkbox" name="atendimento" value="Santos"><label>Santos</label>
		<br>
		<input type="checkbox" name="atendimento" value="Baixada Santista"><label>Outra cidade da Baixada Santista</label>
		<br>
		<input type="checkbox" name="atendimento" value="Santo André"><label>Santo André</label>
		<br>
		<input type="checkbox" name="atendimento" value="Outra cidade ABC"><label>Outra cidade do ABC/SP</label>
		<br>
		<input type="checkbox" name="atendimento" value="Grande SP"><label>Grande São Paulo</label>
		<br>
		<input type="checkbox" name="atendimento" value="Outra cidade"><label>Outra cidade</label>
	</fieldset>
</p>

<p>
<label>Telefone:</label>
<input type="telefone" name="telefone">
</p>

<p>
	<label>Digite a url do seu site:</label>
	<input type="url" name="url">
</p>

<p>
	<label>Digite um endereço de email válido</label>
	<input type="email" name="email">
</p>

<p>
	<label>Outros comentários:</label><br>
	<textarea name="comentarios" id="comentarios" rows="5" cols="30"></textarea>
</p>

<p><input type="submit" value="Enviar"> <input type="reset" value="Limpar Formulário" id="limpar"></p>

</form>

</div>


<div id="desenvolvimento">
<h4>Desenvolvido por Priz Sorensen</h4>
</div>


</body>
</html>
