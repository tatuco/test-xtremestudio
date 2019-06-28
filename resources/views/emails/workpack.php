<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Demystifying Email Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style type="text/css">
        @media only screen and (min-device-width: 601px) {
            .content {width: 600px !important;}
        }
        * {
            font-family: Roboto, "Helvetica Neue", sans-serif;
        }
        .header {padding: 20px 10px 10px 10px;}
        .col425 {width: 425px!important;}
        .subhead {font-size: 15px; color: #ffffff; font-family: sans-serif; letter-spacing: 10px;}
        .h1 {font-size: 33px; line-height: 38px; font-weight: bold;}
        .h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;}
        .cabecera {
            display: flex;
            background-color: #2e3d50;
        }
        .titulo {
            color: white;
            padding-top: 1.5rem;
            font-size: 17px;
            font-weight: bold;
        }
        .cuerpo {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .footer {
            background-color: #bbc2ce;
            display: flex;
            padding: 1.5rem;
        }
        .item {
            padding: 1.3rem;
        }
    </style>
</head>
<body style="margin: 0; padding: 0;">
<div>
    <div class="cabecera">
        <div>
            <img src="<?php echo \App\Core\Utils::getIcon() ?>" alt="P" border="0" />
        </div>
        <div class="titulo">Yo Planifico - Workpack</div>
    </div>
    <div>
        <div class="cuerpo">
            <?php foreach ($files as  $file) { ?>
            <div class="item">
                <div>
                    <a href="<?php echo $file['directory']; ?>" ><img src="<?php echo \App\Core\Utils::imageFile($file['directory']) ?>"</a>
                </div>
                <div>
                    <strong><?php echo $file['file_type_name']; ?></strong>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="footer" style="width: 100%">
            <div style="width: 100%;text-align: center;">
                <strong>Nº Detencion: <?php echo $detention_id; ?></strong>
            </div>
            <div style="width: 100%;text-align: center;">
                <strong>Codigo : <?php echo $detention_name; ?></strong>
            </div>
        </div>
    </div>
</div>
</body>
</html>





