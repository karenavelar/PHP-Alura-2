
<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;


$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new ContaCorrente($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new ContaCorrente($patricia);

$carla = new Titular(new CPF('123.456.874-10'), 'Carla', $endereco);
$terceiraConta = new ContaCorrente($carla);
$terceiraConta->deposita(700);
$terceiraConta->saca(300);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Alura</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1 id="titulo">Banco Alura</h1>
        <p id="slogan">Não somos apenas o melhor, temos também as menores taxas</p>

    </header>
    <section class="container">
        <h2>Contas bancárias</h2>
			<table>
				<thead>
					<tr>
						<th>Nome</th>
						<th>CPF</th>
						<th>Saldo</th>
					</tr>
				</thead>
				<tbody id="tabela-pacientes">
					<tr class="paciente" id="primeiro-paciente">
						<td class="info-nome"><?php echo $primeiraConta->recuperaNomeTitular(); ?></td>
						<td class="info-peso"><?php echo $primeiraConta->recuperaCpfTitular(); ?></td>
						<td class="info-altura"><?php echo $primeiraConta->recuperaSaldo(); ?></td>
					</tr>
						<tr class="paciente" >
						<td class="info-nome"><?php echo $segundaConta->recuperaNomeTitular(); ?></td>
						<td class="info-peso"><?php echo $segundaConta->recuperaCpfTitular(); ?></td>
						<td class="info-altura"><?php echo $segundaConta->recuperaSaldo(); ?></td>
					</tr>
						<tr class="paciente" >
						<td class="info-nome"><?php echo $terceiraConta->recuperaNomeTitular(); ?></td>
						<td class="info-peso"><?php echo $terceiraConta->recuperaCpfTitular(); ?></td>
						<td class="info-altura"><?php echo $terceiraConta->recuperaSaldo(); ?></td>
					</tr>
				</tbody>
			</table>
    </section>
    <nav>
        <div>
            <div class="beneficios">
                <div class="img-beneficios"><img src="img/nav-icone-settings.png" alt=""></div>
                <h1 class="atributos">Menores taxas</h1>
                <p class="descricao">Lorem ipsum dolor sit amet, consectitur adipiscing elit. Suspendisse fringilla
                    fringilla.</p>
            </div>

            <div class="beneficios">
                <div class="img-beneficios"><img src="img/nav-icone-star.png" alt=""></div>
                <p class="atributos">Melhor nota no Reclame Aqui</p>
                <p class="descricao">Lorem ipsum dolor sit amet, consectitur adipiscing elit. Suspendisse fringilla
                    fringilla.</p>
            </div>

            <div class="beneficios">
                <div class="img-beneficios"><img src="img/nav-icone-world.png" alt=""></div>
                <p class="atributos">Mais de 270 âgencias pelo Brasil</p>
                <p class="descricao">Lorem ipsum dolor sit amet, consectitur adipiscing elit. Suspendisse fringilla
                    fringilla.</p>
            </div>
        </div>
    </nav>
</body>
</html>