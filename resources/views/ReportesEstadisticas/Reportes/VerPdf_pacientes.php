<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');

    table,
    th,
    td {
        border: 1px solid black;
    }

    table {
        border-collapse: collapse;
    }

    thead tr {
        background-color: #F83D3D;
        color: white;
        font-weight: bold;
        text-align: center;
    }
    </style>
    <?php
/* 
$img = base_path('logo.png');
$type = pathinfo($img, PATHINFO_EXTENSION);
$data = file_get_contents($img);
$pic = "data:image/" . $type . ";base64," . base64_encode($data); */
?>
    <!-- <img src="{{$pic}}" class="img-fluid m-4" style="width: 23%;"> -->

    <center>
        <h4>

            <b>

                Sistema Hospitalario de Honduras

            </b>

        </h4>

        <h4>

            <b>

                Departamento de Pacientes

            </b>

        </h4>

        <h4>

            <b>

                Reporte de pacientes

            </b>

        </h4>
    </center>
    <?php
//echo(var_dump($Citas));
?>
    <table>
        <thead>
            <tr>
                <td>Paciente</td>
                <td>DNI</td>
                <td>Fecha nacimiento</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>Celular</td>
                <td>Direccion</td>
            </tr>
        </thead>
        <tbody>
            <?php
    foreach ($Pacientes as $Data) {
        echo("<tr><td>".$Data->PRIMER_NOMBRE." ".$Data->SEGUNDO_NOMBRE." ".$Data->PRIMER_APELLIDO." ".$Data->SEGNDO_APELLIDO."</td>".
        "<td>".$Data->DNI."</td>".
        "<td>".$Data->FEC_NACIMIENTO."</td>".
        "<td>".$Data->EMAIL."</td>".
        "<td>".$Data->TELEFONO."</td>".
        "<td>".$Data->CELULAR."</td>".
        "<td>".$Data->DIRECCION."</td>".
        "</tr>");
    }
    ?>
        </tbody>
    </table>
</body>

</html>