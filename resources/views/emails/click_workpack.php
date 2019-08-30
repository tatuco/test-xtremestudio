<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">
        .contenedor {
            /*display: flex;*/
        }
        .contenedor-principal {
            display: flex;
        }
        .logo {

        }
        .logo-text {
            /*align-self: center;*/
            padding-top: 1.5rem;
            font-size: 17px;
            font-weight: bolder;
        }
        .contenedor-secundario {
            align-self: center;
            flex: 1;
            text-align: center;
        }
        .boton {
            background: rgb(8, 157, 204);
            padding: .8rem 1.7rem;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
        }
        .decorador {
            text-decoration: none;
        }

    </style>
</head>
<body>
<div class="contenedor">
    <div class="contenedor-principal">
        <div class="logo">
            <img src="http://yoplanificobucket.s3-sa-east-1.amazonaws.com/imagenes-plazfer-workpack/logoplazfer%20(1).png" alt="planifico" border="0" />
        </div>
        <div class="logo-text">
            Yo Planifico
        </div>
    </div>
    <a class="decorador" href="<?php echo $url; ?>">
        <div class="contenedor-secundario">
            <span class="boton">
                Ir al Workpack
            </span>
        </div>
    </a>
</div>

</body>
</html>





