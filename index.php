<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>


<body>

    <div class="container my-5">
        <h2>Envio de correo desde php Version 7.0</h2>
        <hr>

        <div class="row">
            <div class="col-md-7">
                <form action="send.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo electrónico Emisor </label>
                        <input type="email" class="form-control" id="email" name="email_emisor" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-danger">(Emisor)Tu correo electrónico, simulara el envio del email</small>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo electrónico Receptor </label>
                        <input type="email" class="form-control" id="email" name="email_receptor" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-info">(Receptor)Correo electrónico al que llegara el email </small>
                    </div>
                    <div class="form-group">
                        <label for="text">Nombres completos</label>
                        <input type="text" class="form-control" id="text" name="nombres" aria-describedby="textHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Celular</label>
                        <input type="number" class="form-control" id="text" name="celular" aria-describedby="textHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Texto</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="texto" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" name="button" >Enviar</button>
                </form>
            </div>
            <div class="col-md-5">
                <img src="email.jpg" class="img-fluid" alt="Responsive image">
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>