<?php
    $conexion=mysqli_connect('localhost','root','','php_login_database');
?>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" scr="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" scr="https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css"/>

<div class="table">
    <table id="trepositorio" class="table table-striped table-hover table-bordered border-light" style="width:100%">
        <thead class="table-dark">
            <tr style="text-align: center; font-weight: bold;">
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Carrera</th>
                <th>Curso</th>
                <th>Docente</th>
                <th>Ciclo</th>
                <th>Descargar</th>
            </tr>
        </thead>

            
        <tbody>
            <?php
                $msql="SELECT * from archivos";
                $result=mysqli_query($conexion,$msql);

                while ($mostrar=mysqli_fetch_array($result)) {

                    $rutaDescarga = $mostrar['ruta'];
            ?>
                            
            <tr>
                <td><?php echo $mostrar['narchivo'] ?></td>
                <td><?php echo $mostrar['tipo'] ?></td>
                <td><?php echo $mostrar['carrera'] ?></td>
                <td><?php echo $mostrar['curso'] ?></td>
                <td><?php echo $mostrar['docente'] ?></td>
                <td><?php echo $mostrar['ciclo'] ?></td>
                <td style="text-align: center";>
                    <a href="<?php echo $rutaDescarga; ?>" download="<?php echo $rutaDescarga; ?>"  class="btn btn-warning btn-sm">
                        <span class="fas fa-download fa-lg"></span>
                    </a>
                </td>
                            
            </tr>
            <?php
                }
            ?>
                        
        </tbody>

    </table>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#trepositorio').DataTable({

        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
        }

        });
    });
</script>