<!DOCTYPE html>
<html>
    <head>
        <title>MARIELENA</title>
    </head>
    <body>
        
        <?php
          
            $alumnos = array(
                /*0*/array(
                    'id' => '1',
                    'autor' => 'PANCHO FERNANDEZ',
                    'contenido' => 'POESIA',
                    'fecha' => '26 DE ABRIL',
                    'ritewts' => '8742'
                ),
                /*1*/array(
                    'id' => '2',
                    'autor' => 'MIGUEL NAVARRO',
                    'contenido' => 'Musica',
                    'fecha' => '26 DE JUNIO',
                    'ritewts' => '369'
                ),
                /*2*/array(
                    'id' => '3',
                    'autor' => 'JUAN NEGRETE',
                    'contenido' => 'ROMANTICA',
                    'fecha' => '16 DE ENERO',
                    'ritewts' => '8086'
                ),
                /*3*/array(
                    'id' => '4',
                    'autor' => 'ANASTASIA JUAREZ',
                    'contenido' => 'DIBUJOS',
                    'fecha' => '5 DE DICIEMBRE',
                    'ritewts' => '97412'
                ),
                /*4*/array(
                    'id' => '5',
                    'autor' => 'ANGELICA SUAREZ',
                    'contenido' => 'INGLES',
                    'fecha' => '30 DE FEBRERO',
                    'ritewts' => '87411'

                ),
                /*5*/array(
                    'id' => '6',
                    'autor' => 'MARTHA  PEREZ',
                    'contenido' => 'Comedia',
                    'fecha' => '9 DE MARZO',
                    'ritewts' => '0369'

                ),
                /*6*/array(
                    'id' => '7',
                    'autor' => 'PEDRO TONTO',
                    'contenido' => 'Misterio',
                    'fecha' => '31 DE ENERO',
                    'ritewts' => '98456'
                    
                ),
                /*7*/array(
                    'id' => '8',
                    'autor' => 'ANA FERNANDEZ',
                    'contenido' => 'ranchera',
                    'fecha' => '69 DE JUNIO',
                    'ritewts' => '58743'
                )
            );
            
            echo '<br><br>';
        ?>
        <br>
        <br>
	<fieldset>
        <table>
            
            <?php foreach ($alumnos as $alumno) { ?>

                <tr>
                 <div>
                 <div>
		<fieldset>
                 <span>
                    <p><?php echo $alumno['id']; ?></p>
                
		  </span>

                    <span>
			<?php echo $alumno['autor']; ?>
		    </span>
                 

                 <span>
                    <?php echo $alumno['contenido']; ?>
                 </span>

                 <span>
                  <?php echo $alumno['fecha']; ?>
                 </span>     

                 <span>
                    <s><?php echo $alumno['ritewts']; ?></s>
                 </span>
		  </fieldset>
                   </div>
                   </div>
                  </tr>


            <?php } ?>
        </table>
</fieldset>
    </body>
</html>
