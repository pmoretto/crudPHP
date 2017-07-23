<!doctype html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <?php
        require ("model/paginacion.php");
    ?>
            <h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
            <form action="model/modelPersonasCre.php" method="post">
                <table width="50%" border="0" align="center">
                    <tr >
                        <td class="primera_fila">Id</td>
                        <td class="primera_fila">Nombre</td>
                        <td class="primera_fila">Apellido</td>
                        <td class="primera_fila">Dirección</td>
                        <td class="sin">&nbsp;</td>
                        <td class="sin">&nbsp;</td>
                        <td class="sin">&nbsp;</td>
                    </tr>

                    <?php
                    foreach($matrizPersonas as $persona):?>
                        <!--Fila abre-->

                        <tr>
                            <td><?php echo $persona['id']; ?></td>
                            <td><?php echo $persona['Nombre']; ?></td>
                            <td><?php echo $persona['Apellido']; ?></td>
                            <td><?php echo $persona['Direccion']; ?></td>

                            <td class="bot"><a href="model/modelPersonasDel.php?id=<?php echo $persona['id']; ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
                            <td class='bot'><a href="view/editPersona.php?id=<?php echo $persona['id']; ?>&nom=<?php echo $persona['Nombre']; ?>&ape=<?php echo $persona['Apellido']; ?>&dir=<?php echo $persona['Direccion']; ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
                        </tr>
                        <!--Fila cierra-->
                        <?php
                    endforeach;
                    ?>

                    <tr>
                        <td></td>
                        <td><input type='text' name='Nom' size='10' class='centrado'></td>
                        <td><input type='text' name='Ape' size='10' class='centrado'></td>
                        <td><input type='text' name='Dir' size='10' class='centrado'></td>
                        <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>
                    <tr>
                        <td colspan="4" align="center">
                             <?php
                                for($i=1;$i<=$totalPaginas;$i++){
                                    echo "<a href='index.php?pagina=". $i . "'>".$i."</a>  ";
                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </form>
    </body>
</html>