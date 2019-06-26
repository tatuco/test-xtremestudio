<?php //\App\Core\ReportService::getStyles(); ?>
<html>
    <header>

    </header>
    <body>
    <div id="main-header">
        <img src="<?php echo \App\Core\Utils::getIcon() ?>" id="logo">  <h1>Yo Planifico</h1>
    </div>

    <table>
            <tr>
                <th><strong> Nº Detencion: <?php echo $detention_id; ?></strong></th>
                <th><strong>Codigo: <?php echo $detention_name; ?></strong></th>
            </tr>
            <tr>
                <?php foreach ($files as  $file) { ?>
                    <td><a href="<?php echo $file['directory']; ?>" ><img src="<?php echo \App\Core\Utils::imageFile($file['directory']) ?>"</a></td>
                <?php } ?>
            </tr>
        </table>
    </body>
</html>

