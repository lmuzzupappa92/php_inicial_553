<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php inicial clase 553</title>
        <link rel="stylesheet" href="./estilo.css">
    </head>
    <body>


        
        <?php  echo "<h1>Academía de inversiones </h1>"   ?>
        

        <nav class="menu">
            <ul class="barra">
                <li >
                <a class="boton" href="/index.php">Cotizaciones</a>
                </li>

                <li >
                <a class="boton" href="/index.php">Informes</a>
                </li>
                
                <li   >
                    <a class="boton" href="/index.php">Asesoramiento</a>
                </li>
            </ul>  
        </nav>

        <div class="contenedor">

            <?php                   //Variables                              
            $d_oficial = 350 ;
            $d_blue = 730 ;
            $d_crypto = 740 ;
            $d_mep = 650 ;
            $d_promedio = ($d_oficial + $d_blue + $d_crypto + $d_mep) / 4 ;
            $dolares = array ($d_oficial, $d_blue, $d_crypto, $d_mep);
            $fecha = "06/09/2023"; 
                  
                                 //Constantes & Variables
            
            $bitcoin = 25928;
            $max_2023 = 31818 ;
            $min_2023 =  14309 ;
            $max_historico = 68949;
            ?>

             <?php echo "<h2>Precios del dolar hoy: $fecha </h2>"; ?>  

            

            <div class="contenedor_USD">


                <div class="dolares">
                    <h3>MEP:</h3>
                    <?php echo "<p>El valor del dolar MEP es: $ $dolares[3]</p>"?>
                </div>
               
                <div class="dolares">
                <h3>BLUE:</h3>
                    <?php echo "<p>El valor del dolar blue es: $ $dolares[1]</p>"?>
                        
                </div>
                
                <div class="dolares">
                    <h3>CRYPTO:</h3>
                    <?php echo "<p>El valor del dolar crypto es: $ $dolares[2]</p>"?>
                </div>
                
                <div class="dolares">
                    <h3>OFICIAL:</h3>
                    <?php echo "<p>El valor del dolar oficial es: $ $dolares[2]</p>"?>
                </div>
                
                <div class="dolares">
                <h3>El valor en promedio del dolar es: $ <?php echo "$d_promedio"?></h3>
                </div>
                
            </div>
            
            <div class="contenedor_btc">

                <?php echo "<h4>Cotización del Bitcoin hoy: $ $bitcoin </h4>";?>
                
                <ol class="datos_btc">
                    <li class="boton">
                        <?php echo "<p> Precio máximo en 2023: $$max_2023</p>";?>
                    </li>
                    <li class="boton">
                        <?php echo "<p> Precio minimo en 2023: $$min_2023</p>";?>
                    </li>
                    <li class="boton">
                        <?php echo "<p> Precio máximo historico: $$max_historico</p>";?>
                    <!--    <a href="www.tradingview.com">ir al gráfico</a> --> 
                    </li>
               </ol>
                
            </div>
           
        </div>

        <section class="constantes"> 

            <div >

                <?php          // Aqui abra constantes

                    const CRYPTOS = array("bitcoin","ethereum","usdt","dogecoin");
                    echo "<h2>Las 4 cryptomonedas más populares son:</h2>";

                    foreach (CRYPTOS as $valor) {
                    echo "<h3> $valor </h3> " . " ";
                    }
                ?> 
            </div>
            <h2>Constantes y Define</h2>
            <div class="mensajes_const">
                <?php
                        const mensaje = "Un mensaje con una constante";
                        echo "<h3>" .(mensaje). "</h3>" ;

                        echo "<br> <br>";
                        
                        const numeros = array(20,30,40,50,60,100);
                        echo "<h3>" . (numeros[1] * numeros[5]) . "</h3>" ;
                        
                        
                    
                        echo "<br>","<br>";
                
                        define("SALUDO", "Este es un mensaje de saludo con un Define");
                        echo "<h3>" .(SALUDO). "</h3>";
                        //echo saludo (no mostraria nada)
                ?>
            </div>

                
            <h2>Operadores </h2>

            <div class="operadores">
                <?php
                $a = ($b=2) + 5;
                echo "<h3> $a</h3>";
                
                echo "<br>";
                
                //OPERADORES ARITMETICOS

                $calculo_1 = 15 * 2; // 30
                $calculo_2 = 25 % 5; // 5
                $calculo_3 = (18-15)*2 ;// 6

                echo "<h3>" . ($calculo_1 + $calculo_2 + $calculo_3) . "</h3>" ;
                
                echo "<br>";
                
                $numero = 41;
                echo "<br>";
                echo "<h3> $numero</h3>" ;
                echo "<br>";
                $numero++ ;
                echo"<h3> $numero</h3>";
                echo "<br>";
                

                ?>
            </div>
        </section>
        <footer>
            <div class="copyright">
                <p> Este sitio fue construido a modo de evaluar el primero modulo del curso inicial de php clase 553 del Centro E-learning de UTN, todos los derechos quedan reservados al autor.</p>
            </div>
            <p class="autor">Realizado por Luciano Muzzupappa</p>
        </footer>
        
    </body>
</html>