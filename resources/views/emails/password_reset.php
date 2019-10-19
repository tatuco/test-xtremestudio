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
            text-align: center;
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
            <img src="http://yoplanificobucket.s3-sa-east-1.amazonaws.com/imagenes-plazfer-workpack/logoplazfer%20(1).png" alt="P" border="0" />
        </div>
        <div class="titulo">Yo Planifico</div>
    </div>
    <div>
        <div>
            <strong>Estimado usuario:</strong><br><br>

            Debe ingresar una contraseña que tenga como mínimo 8 caracteres numéricos. <br><br>
            Este mensaje funciona para restablecer su contraseña una sola vez. <br><br>
            Esta contraseña tiene una vigencia de 12 horas. Si dentro de este tiempo no ingresa una nueva contraseña, debe repetir el proceso de restablecimiento de contraseña en el sistema YoPlanifico <?php echo env("URL_FRONTEND"); ?>
            <br><br>

            Usted ha solicitado el restablecimiento de su contraseña en YoPlanifico. Inicie sesión en el sistema YoPlanifico y automaticamente el sistema habilitara una ventana para ingresar la nueva contraseña<br><br>
            <strong>Contraseña Temporal: <?php echo $password; ?> </strong>
        </div>
    </div>
    <div class="footer">
        <div style="width: 100%;">
            <strong> NOTA: </strong> Este correo es únicamente informativo y es de uso exclusivo del destinatario(a), puede contener información privilegiada y/o confidencial. Si no es usted el destinatario(a) deberá borrarlo inmediatamente. Queda notificado que el mal uso, divulgación no autorizada, alteración y/o  modificación malintencionada sobre este mensaje y sus anexos quedan estrictamente prohibidos y pueden ser legalmente sancionados. Plazfer.cl no asume ninguna responsabilidad por estas circunstancias
        </div>
    </div>
</div>
</body>
</html>


