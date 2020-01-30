<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"/>
    <script src="scripts.js"></script>
    <title>Formulário</title>
    
</head>
<body>
    <div class="primary-div">
        <form method="POST" action="dados.php" name="formulario1" class="form1">

            <h1>FORMULÁRIO</h1>
            <div class="container">
                <label for="">Nome</label>
                <input type="text" name="name" class="select"><br>
            </div>

            <div class="container">
                <label for="">Departamento</label>
                <select id="myList" name="dp" onchange="menuDinamico()" class="select1">
                <?php 
                    while($rows = $sql->fetch_assoc()){
                        $estado = $rows['estado'];
                        echo " <option value='$estado'>$estado</option";
                    };
                    
                ?>   
               >
                    </select> <br>    	 
            </div>
            <!-- <div class="container">
                <label for="">Objetos do Departamento</label>
                <select class="select1" name="dinamico" name="Departamento1">
                    <option value="-">Selecione</option>
                </select> 
            </div> --> 

            <div class="container">
                <label for="">dataResposta</label>
                <input type="date" name="dtres" class="select"> <br>
            </div>

            <div class="container">
                <label for=""> quantidadeRealizada</label>
                <input type="number" name="qtreali" class="select"> <br>
            </div>

            <div class="container">
                <label for="">quantidadeReal </label>
                <input type="number" name="qtreal" class="select"> <br>
            </div>

            <div class="container">
                <label for="">valorProvisionado</label>
                <input type="number" name="valorP" class="select"> <br>
            </div>

            <div class="container">
                <label for="">valorUtilizado</label>
                <input type="number" name="valorU" class="select"> <br>
            </div>

            <div class="container">
                <label for="">ResultadoFinal</label>
                <input type="text" name="rfinal" class="select"> <br>

            </div>
            <div class="container">
                <label for="">Observacao</label>
                <input type="text" textarea="30" name="obs" class="select">
            </div>
            <center>
                <input type="submit" class="button">
            </center>



        </form>
    </div>
</body>

</htm