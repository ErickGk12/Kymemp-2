<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>

<title> Kymemp </title>
<style>
    .container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    .container label {
      display: block;
      margin-bottom: 10px;
    }

    .container input[type="text"],
    .container input[type="number"] {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }

    .container input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
    }

    .container input[type="submit"]:hover {
      background-color: #45a049;
    }

    .result {
      margin-top: 20px;
    }
  </style>

<link rel="stylesheet" href="Eventos.css"> 
<script src="https://kit.fontawesome.com/a076005399.js"></script>
</head>

   <body> 
      <nav>
        <div class="menu">
          <div class="logo">
             <a href="">KYMEMP</a>
            </div>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="Nosotros.html">Nosotros</a></li>
                <li><a href="Vuelos.html">Vuelos</a></li> 
                <li><a href="reservaciones.html">Reservaciones</a></li>
            </ul>
        </div>
    </nav>
     <div class="img"></div>
     <div class="center">
        <div class="title"> Viajar es la respuesta sin importar la pregunta. </div>
        <div class="sub title">  </div>
        <div class="btns"> 

   
    <center><h1>Eventos Disponibles</h1></center>

    <div class="container">
    <form method="post" action="procesar_formulario.php">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="destino">Destino:</label>
      <select id="destino" name="destino" required>
        <option value="Ciudad A">Ciudad A</option>
        <option value="Ciudad B">Ciudad B</option>
        <option value="Ciudad C">Ciudad C</option>
        <!-- Agrega aquí más opciones de destino según tus necesidades -->
      </select>

      <label for="pasajeros">Cantidad de pasajeros:</label>
      <input type="number" id="pasajeros" name="pasajeros" required>

      <input type="submit" value="Enviar">
    </form>
  </div>
</html>