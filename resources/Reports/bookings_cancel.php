
<?php

use App\Models\User;
use Carbon\Carbon;

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
<?php foreach ($data as $it) { ?>
    <tr class="header">
        <th colspan="4"> No Penadas </th>
    </tr>
    <tr>
        <th> TEETIME </th>
        <th> Cod.Socio </th>
        <th> Nombre Socio </th>
        <th> Fecha - hora Cancelacion </th>
    </tr>
    <?php
    if(count($it->not_penalized) === 0 ){
        ?>
        <tr>
            <td colspan="4">No Hay Registros</td>
        </tr>
    <?php }
    foreach ($it->not_penalized as $not_penalized) { ?>
        <tr>
        <td> <?php echo \App\Core\ReportService::dateFormat($not_penalized->date_from, 'h:ia'); ?> </td>
        <td> <?php echo User::getContract($not_penalized->responsable); ?> </td>
        <td> <?php echo $not_penalized->responsable; ?> </td>
        <td> <?php echo $not_penalized->date_cancel; ?> </td>
    </tr>
    <?php } ?>
    <tr class="header">
        <th colspan="4"> Penadas </th>
    </tr>
    <tr>
        <th> TEETIME </th>
        <th> Cod.Socio </th>
        <th> Nombre Socio </th>
        <th> Fecha - hora Cancelacion </th>
    </tr>
    <?php
    if(count($it->penalized) === 0){
        echo " <tr>
                <td colspan=\"4\">No Hay Registros</td>
                </tr>";
        }
     foreach ($it->penalized as $penalized) { ?>
    <tr>
        <td> <?php echo \App\Core\ReportService::dateFormat($penalized->date_from, 'h:ia'); ?>  </td>
        <td> <?php echo User::getContract($penalized->responsable); ?> </td>
        <td> <?php echo $penalized->responsable; ?> </td>
        <td> <?php echo $penalized->date_cancel; ?> </td>
    </tr>
    <?php } ?>
<?php
    }
}
?>
</table>