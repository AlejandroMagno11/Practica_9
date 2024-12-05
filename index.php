<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calcularStem.js"></script>
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Deslizamiento de un bloque de hielo</h2>
                <p>Un bloque de hielo de <strong>100kg a 0° C,</strong> se arrastra por un suelo horizontal una longitud de <strong>30m.</strong> Si el coeficiente de rozamiento de hielo contra el suelo es de <strong>0.1,</strong> ¿Qué cantidad de hielo se fundirá, suponiendo que todo el trabajo de rozamiento se transformo en calor y que este calor se empleo exclusivamente en fundir el hielo?</p>
            </section>
            <section class="esquemaProblema">
                <h2>Imagen referencia:</h2>
                <center>
                    <img class="imgProblema" src="images/problema.jpg" alt="Esquema del problema">
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                <ul>
                    <li><strong>1-.</strong> Calcular la fuerza de rozamiento: <strong><em>Ff = μ x N </strong></em></li>
                    <li><strong>2-.</strong> Calcular el trabajo realizado por la fuerza de rozamiento: <strong><em>W = Ff x d </em></strong></li>
                    <li><strong>3-.</strong> Relación entre el trabajo y el calor necesario para fundir el hielo: <strong><em>Q = mf x Lf </strong></em></li>
                </ul>
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li>Masa del bloque de hielo = <strong>100</strong> kg</li>
                    <li>Longitud del desplazamiento = <strong>30</strong> metros</li>
                    <li>Coeficiente de rozamiento = <strong>0.1</strong></li>
                    <li>Calor latente de fusión del hielo = <strong>334</strong> kJ/kg = <strong>334 x 10<sup>3</sup></strong> J/kg</li>
                    <li>Aceleración gravitacional = <strong>9.8</strong> m/s<strong><sup>2</sup></strong></li>
                </ul>
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <button onclick="calcular()">Calcular</button>
            </section>
            <section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA"></div>
            </section>
        </section>
        <footer class="pie">
            Alumno: Jesus Alejandro Osorio Morales
            - Num. Control: 22090712
            - Programacion Web XB
        </footer>
    </section>
</body>
</html>
