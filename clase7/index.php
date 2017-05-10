<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous">
          <!-- Latest compiled and minified CSS -->
          </script>

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

          <script src="./script.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row" style="padding:15px 0 0 20px;">
                <div class="col-md-4">
                </div>
                <div class="col-md-4" >

                    <label for="user" class="text-primary">User:</label><br>
                    <input type="text" id="usuario" class="input-sm" value=<?php  if( isset($_COOKIE['email']) ){echo $_COOKIE['email'] . " (desde cookie)";}?>>
                    <br><br>
                    <label for="pass" class="text-primary">Pass:</label><br>
                    <input type="password" id="pass" class="input-sm" value="clavesecreta">
                    <br><br>
                    <button onclick="send()" class="btn btn-success">Log</button>

                    <button onclick="mostrar()" class="btn">Mostrar</button>

                </div>
                <div class="col-md-4" id="mostrar">
                </div>
            </div>
        </div>
    </body>
</html>
