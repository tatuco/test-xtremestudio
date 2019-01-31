
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
        <th> ID Programaci&oacute;n </th>
        <th> Evento </th>
        <th> Hoyo (s) </th>
        <th> Fecha Desde </th>
        <th> Fecha Hasta </th>
        <th> Agendador (Programador) </th>
        <th> Fecha / Hora Ejecuci&oacute;n </th>
    </tr>
    <?php foreach ($data as $key) { ?>
        <tr>
            <td><?php echo $key->id == null ? 'N/A' : $key->id; ?></td>
            <td><?php echo $key->context == null ? 'N/A' : $key->context; ?></td>
            <td><?php echo $key->targets == null ? 'N/A' : $key->targets; ?></td>
            <td><?php echo $key->date_start == null ? 'N/A' : $key->date_start; ?></td>
            <td><?php echo $key->date_end == null ? 'N/A' : $key->date_end; ?></td>
            <td><?php echo $key->user_creator == null ? 'N/A' : $key->user_creator; ?></td>
            <td><?php echo $key->date_created == null ? 'N/A' : $key->date_created; ?></td>
        </tr>
        <?php
        }
    }
    ?>
</table>
