<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Ajedrez</title>
</head>
<body>
    <div class ="botones">
    <input type="number" name="cantidad" id="cantidad" />

    <button id="crear" class="crear">Crear Ajedrez</button>
    
    <button id="eliminar" class="button-1" disabled>Borrar Ajedrez</button>

    <button id="relleno" class="button-2" disabled>Rellenar Valores</button>
    
    <input type="color" id="color">

    </div>
    <div class="contenedor" id="contenedor">

    </div>
    <div id="valores"></div>
    
    <script type="text/javascript" src="funciones.js"></script>
</body>

</html>