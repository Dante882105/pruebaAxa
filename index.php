<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solución Prueba AXA</title>
</head>
<body>
    <section id="solucion">
        <ul>
            <h1>1. El método isset se utiliza para:</h1>
            <li>a. Chequea si una variable está definida</li>
            <li class="correct">b. Chequea que una variable está definida y no es null</li>
            <li>c. Chequea si una variable está vacía</li>
            <li>d. Chequea si una variable es undefined</li>
        </ul>
        <ul>
            <h1>2. Enuncie los tipos de Arrays en PHP:</h1>
            <li class="correct">a. Arrays Asociativos</li>
            <li class="correct">b. Arrays Superglobales</li>
        </ul>
        <ul>
            <h1>3. la función require genera un warning y continúa ejecutando el script:</h1>
            <li>a. Verdadero</li>
            <li class="correct">b. Falso</li>
        </ul>
        <ul>
            <h1>4. Enuncie las diferencias de usar el método POST vs el método GET en PHP:</h1>
            <li class="correct">a. Método Get: Es utilizado para enviar información directamente para ser ejecutada por medio de la URL del sitio, es visible para cualquiera al enviarse por la url del sitio web</li>
            <li class="correct">b. Método Post: Se utiliza normalmente al enviar información que debe tratarse con confidencialidad y es muy utilizada en envió de información por medio de un formulario</li>
        </ul>
    </section>
    <section id="formulario">
        <h1>Aportes en línea rápidos y seguros</h1>
        <div class="encabezado">
            <p class="parrafo1">ahora puedes hacer tus aportes mensuales correspondientes a la couta de tu Plan de Ahorro, ingresando a nuestra plataforma de pagos en linea</p>
            <img src="img/PSE.png" alt="logo PSE">
            <p class="parrafo2">Debido a la emergencia por la que atraviesa el país, te informamos quie podrás realizar tus aportes mensuales , a traves de tarjetas de crédito. (Estará disponible hasta nuestra próxima Ceremonia de Sueños</p>
        </div>
        <form action="formulario.php" method="Post">
            <div class="type">
            <label for="tipo">Tipo de Documento</label>
            <br>
            <select type="text" name="tipo" id="tipo">
                <option value="0">Tipo de Documento</option>
                <option value="1">Cédula de Ciudadania</option>
                <option value="2">Cédula de extranjería</option>
                <option value="3">Nit</option>
                <option value="4">Pasaporte</option>
            </select>
            </div>
            <div class="number">
            <label for="numero">Número de Documento</label>
            <br>
            <input type="number" name="numero" id="numero" placeholder="Ingresar número de Documento">
            </div>
            <input type="submit" value="CONSULTAR" id="boton" disabled>
        </form>
        <script src="js/app.js"></script>
    </section>
</body>
</html>