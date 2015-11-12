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
<li><a href="#index.html">Home</a></li>
<li><a href="#curriculo.html">Currículo</a></li>
<li><a href="#contato.html">Fale conosco</a></li>
<li><a href="#links.html">Outros Links</a></li>
<li><a href="#parceiro.html">Seja um parceiro</a></li>
</ul>
</div>

<div id="centro">

<h2>Contatos enviados:</h2><br>

    <!-- LISTA -->
<?php 

foreach($contato as $cont){
echo "<ul><li>" . $cont->nome . "</li>";
echo "<li>" . $cont->categoria . "</li>";
echo "<li>" . $cont->telefone . "</li>";
echo "<li>" . $cont->email . "</li>";
echo "<li>" . $cont->comentarios . "</li></ul> </br>";
}

?>

</div>


<div id="desenvolvimento">
<h4>Desenvolvido por Priz Sorensen</h4>
</div>


</body>
</html>

