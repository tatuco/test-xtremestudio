
<?php
\App\Core\ReportService::getStyles();

    if(count($data)==0)
    {
?>
        <h1> Para el Flitro Solicitado no se Encontro Ningun Registro </h1>
<?php
    } else {
?>
<div id="header">
  <img src="<?php echo \App\Core\ReportService::getIcon() ?>" id="logo">  <h1>Club de Golf</h1>
</div>
<table id="table">
    <tr class="header">
        <th>Fecha Tee Time</th>
        <th>Nombre Invitado</th>
        <th>Socio Anfitri&oacute;n</th>
        <th>Reservaci&oacute;n Registrada Por</th>
    </tr>
<?php foreach ($data as $key) { ?>
        <tr>
            <td><?php echo $key->date_from == null ? 'N/A' : $key->date_from; ?></td>
            <td><?php echo $key->person == null ? 'N/A' : $key->person; ?></td>
            <td><?php echo $key->responsable == null ? 'N/A' : $key->responsable; ?></td>
            <td><?php echo $key->user_creator == null ? 'N/A' : $key->user_creator; ?></td>
        </tr>
<?php
        }
    }
?>
</table>


