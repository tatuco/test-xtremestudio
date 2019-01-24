
<?php

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
    <?php foreach ($data as $it) {
            foreach ($it as $key => $value) {
        ?>
    <tr class="header">
        <th colspan="3">Hoyo de Salida: <?php echo $key; ?></th>
    </tr>
                <tr>
                    <th> Hora Inicio </th>
                    <th> ID Jugador </th>
                    <th> Nombre </th>
                </tr>
    <?php
            foreach ($value as $day => $vals) {
                $d = new Carbon($day);

                ?>
                <tr class="subgroup">
                    <th colspan="3"><?php echo \App\Core\ReportService::setDay($d->isWeekday()).' '.$d->format('d/m/Y'); ?> </th>
                </tr>
    <?php
                foreach ($vals as $k => $days) { ?>



        <?php foreach ($vals as $booking) { ?>
                        <tr class="subgroup2">
                            <th colspan="3">Reservado por: <?php echo $booking->responsable; ?> Registrado por: <?php echo $booking->user_creator; ?></th>
                        </tr>
        <?php
                        foreach ($booking->guests as $guest) {
                            ?>


                            <tr>
                            <td> <?php echo \App\Core\ReportService::dateFormat($booking->date_from, 'h:ia'); ?> </td>
                            <td> <?php echo $guest->id; ?> </td>
                            <td> <?php echo $guest->person; } ?> </td>
                        </tr>



<?php } }  } } }?>


<?php } ?>
        </table>