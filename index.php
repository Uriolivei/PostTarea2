<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/style.css">

   <!--boostrap css-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!--boostrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.4/dist/sweetalert2.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
<h1><img src="./img/musica.png" witdth="5%">Sistema Music</h1img>
    <div class="container"><br>
    <h2>Enviar datos</h2>
    <form action="resultado.php" method="post" id="miFormulario">
    <label for="">Elige su género musical</label><br>
    <input type="checkbox" name="musica[]" value="Rock" id="rock">
    <label for="">Rock</label>
    <input type="checkbox" name="musica[]" value= "Cumbia" id="cumbia">
    <label for="">Cumbia</label>
    <input type="checkbox" name="musica[]" value="Volero" id="volero">
    <label for="">Volero</label><br>
    <input type="checkbox" name="musica[]" value="Salsa" id="salsa">
    <label for="">Salsa</label>
    <input type="checkbox" name="musica[]" value="Reguetón" id="regueton">
    <label for="">Reguetón</label>
    <input type="checkbox" name="musica[]" value="Pop" id="pop">
    <label for="">Pop</label>
    <br><br>
    <label for="">Escoja de que ciudad del Peú es:</label><br>
    <input type="radio" name="ciudad" value="lima" id="lima" required>
    <label for="">Lima</label><br>
    <input type="radio" name="ciudad" value="pucallpa" id="pucallpa" required>
    <label for="">Pucallpa</label><br>
    <input type="radio" name="ciudad" value="arequipa" id="arequipa" required>
    <label for="">Arequipa</label><br>
    <input type="radio" name="ciudad" value="iquitos" id="iquitos" required>
    <label for="">Iquitos</label><br>
    <input type="radio" name="ciudad" value="cuzco" id="cuzco" required>
    <label for="">Cuzco</label>
    <br><br>
    <label for="">Escriba su Nombre</label><br>
    <input type="text" id="name" name="name" require>
    <br><br>
    <label for="">Estado civil</label><br>
    <input type="radio" name="civil" value="soltero" id="soltero" required>
    <label for="">Soltero</label><br>
    <input type="radio" name="civil" value="casado" id="casado" required>
    <label for="">Casado</label>
    <br><br>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    
    </div>
</body>
    <script src="js/main.js"></script>
</html>