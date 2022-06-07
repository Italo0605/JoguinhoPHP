<?php require_once("classes/Monstro.php"); 
session_start();
$_SESSION["comecarBatalha"] = null;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/index.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <body>
        <form action="" method="get" class="container col-3 text-center" style="margin-top: 40px;">
            <label for="codMonstro" class="form-label">Escolha um monstro:</label>
            <select name="codMonstro" id="" class="form-control text-center">
                <option value="1">Litten</option>
                <option value="2">Bubassaur</option>
                <option value="3">Froakie</option>
            </select><br>
            <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>

        <!-- PHP -->
        <?php  if(isset($_GET["codMonstro"]) && !empty($_GET["codMonstro"])){ 
            $monstro = new Monstro($_GET["codMonstro"]);
            $_SESSION["codMonstroPlayer"] = $_GET["codMonstro"];
        ?>
            <div class="content text-center" style="margin-top: 40px"> <!--Se o monstro foi ecolhido printa isso  -->
                <h4>Pokemon escolhido: <?php echo $monstro->nome?></h4>
                <h4>Quantidade de vida: <?php echo $monstro->vida?> HP</h4>
                <h4>Quantidade de ataque: <?php echo $monstro->ataque?> ATK</h4>
            </div>
            <div class="content text-center" style="margin-top: 40px;">
                <h1>Vamos batalhar?</h1>
                <a href="batalha.php?>" class="btn btn-success btn-lg" >Batalhar!</a>
            </div>
        <?php }else{
                echo"<h1 class='text-center'>Escolha um pokemon por favor!</h1>";
            }
        ?>

    </body>
</html>


