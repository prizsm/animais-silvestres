<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<title>Seja um parceiro da Dra. Mariana Santana - Médica Veterinária de Animais Silvestres</title>
<meta name="description" content="Visite a página da Médica Veterinária Dra. Mariana Santana, e tire todas as suas dúvidas sobre animais silvestres.">
<meta name="keywords" content="veterinário animais silvestres, veterinário animais exóticos, veterinário santo andré, veterinário abc, veterinário santos, veterinário baixada santista">

<scrip type="text/javascript" scr="https://projeto-vet-prizsorensen.c9.io/static/js/script.js">
</script>
	<link rel="stylesheet" type="text/css" href="https://projeto-vet-prizsorensen.c9.io/static/css/estilo.css" />
</head>

<body>

<div align="center">
<img src="https://projeto-vet-prizsorensen.c9.io/static/img/cabecalho001.jpg" alt="Veterinária de Animais Silvestres" title="Veterinária de Animais Silvestres">
</div>

<h1>Veterinária de Animais Silvestres</h1>
<div id="menu-esquerdo">
<ul>
<li><a href="<?php echo base_url() ?>outros/index">Home</a></li>
<li><a href="<?php echo base_url() ?>Noticia/listarnoticia/1">Aves</a></li>
<li><a href="<?php echo base_url() ?>Noticia/listarnoticia/2">Coelhos</a></li>
<li><a href="<?php echo base_url() ?>Noticia/listarnoticia/3">Peixes</a></li>
<li><a href="<?php echo base_url() ?>Noticia/listarnoticia/4">Répteis</a></li>
<li><a href="<?php echo base_url() ?>Noticia/listarnoticia/5">Roedores</a></li>
<li><a href="<?php echo base_url() ?>Noticia/listarnoticia/6">Outros animais</a></li>
</ul>
<p id="dra"><strong>Dra. MARIANA SANTANA</strong><br>
<i>Médica Veterinária especialista em animais silvestres</i><br>
<strong>CRMV-SP 10000</strong></p>
</div>

<div id="menu-direito">
<p><img src="https://projeto-vet-prizsorensen.c9.io/static/img/aquario002.jpg" alt="Aquarios" title="Aquários"></p>
<p><img src="https://projeto-vet-prizsorensen.c9.io/static/img/adote001.jpg" alt="Adote um bichinho" title="Adote um bichinho"></p>
</div>

<div id="menu-centro">

<ul>
<li><a href="<?php echo base_url() ?>outros/index">Home</a></li>
<li><a href="<?php echo base_url() ?>outros/curriculo">Currículo</a></li>
<li><a href="<?php echo base_url() ?>formulario/contato">Fale conosco</a></li>
<li><a href="<?php echo base_url() ?>outros/links">Links</a></li>
<li><a href="<?php echo base_url() ?>parceiro/parceiros">Seja um parceiro</a></li>
<li><a href="<?php echo base_url() ?>outros/entrar">Admin</a></li>
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
