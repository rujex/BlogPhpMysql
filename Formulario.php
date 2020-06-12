<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap');

        *{
            font-family: 'Open Sans Condensed', sans-serif;
        }
        h1{
            text-align: center;
        }
        form{
            background-color: #1E1F26;
            margin: 0 auto 100px;
            position: relative;
            text-align: center;
            padding: 45px;
            z-index: 1;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            width: 200px;
            height: 300px;
        }
        #btn-send{
            margin-top: 30px;
            text-transform: uppercase;
            outline: 0;
            background: #333642;
            width: 90px;
            height: 30px;
            border: 0;
            color: white;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;   
        }
        #title{
            outline: 0;
            background: #333642;
            width: 70%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
            color: white;
        }
        textarea{
            outline: 0;
            background: #333642;
            width: 70%;
            border: 0;
            margin: 0 0 5px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
            color: white;
        }
        p{
            color: white;
            font-size: 12px;
        }
        input[type="file"]{
            color: white;
        }
        #send:hover{
            background-color: #50525b;
        }
        a{
            margin-left: 600px;
        }
    </style>
</head>
<body>
    <h1>Nueva entrada</h1>

    <form action="insertar_contenido.php" method="post" enctype="multipart/form-data">   
        <input type="text" name="title" id="title" placeholder="Título">
        <br>
        <textarea name="comentario" id="" cols="30" rows="5" placeholder="Escribe un comentario"></textarea>
        <input type="hidden" name="MAX_TAM" value="2097152">
        <br>
        <p>Selecciona una imagen con tamaño inferior a 2 MB</p>
        <input type="file" name="imagen" id="">
        <input type="submit" name="" value="Añadir" id="btn-send">
    </form>

    <a href="#">Página de visualización del blog</a>
</body>
</html>