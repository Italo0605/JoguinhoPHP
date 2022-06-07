<?php
header('Content-Type: text/html; charset=utf-8');
require_once('classes/Monstro.php');
session_start();
$_SESSION["comecarBatalha"];

if(isset($_GET["comecarBatalha"]) && !empty($_GET["comecarBatalha"]) && $_GET["comecarBatalha"] == true){
    $_SESSION["comecarBatalha"] = true;
}

$codMonstro = $_SESSION["codMonstroPlayer"];
$playerMonstro = new Monstro($codMonstro); //definindo o player
$codOponente = rand(1,3); //definico o codigo do oponente
$monstroOponente = new Monstro($codOponente); //gerando o oponente aleatorio
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<?php 
if($_SESSION["comecarBatalha"] != true){
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="d-grid text-center gap-3 " style="margin-top: 30px; margin-left: auto; margin-right:auto;">
        <div>
            <h2>Seu Oponente será: </h2>
            <h1><?php echo $monstroOponente->nome;?></h1>
        </div>
        <div id="statusPokemon">
            <h4>Vida: <?php echo $monstroOponente->vida;?> HP</h4>
            <h4>Dano por turno: <?php echo $monstroOponente->ataque;?> ATK</h4>
        </div>
        <a href="batalha.php?comecarBatalha=true" class="btn btn-success col-4" style="margin: auto auto;">Começar Batalha!</a>
    </div>
</body>
</html>
<?php
 //Fim do if
}else{ // se a session for verdadeira
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div id="inimigo">

    </div>
    <div id="player">
        <div class="status">
            <h3>Vida</h3>
            <h3>Dano por turno</h3>
        </div>
        <div>
            <button class="btn btn-success">Atacar</button>
            <button class="btn btn-success">Recuperar vida</button>
        </div>
    </div>
</body>
</html>

<?php } ?>