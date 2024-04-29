<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Inserisci i tuoi dati</h1>
    <div class="container d-flex justify-content-center">
        <form action="data_area.php" method="post" class="w-25 text-center ">
            <h3>Nome</h3>
            <input  class="m-1 form-control " type="text" name="name"> <br>
            <h3>Password</h3>
            <input  class="m-1 form-control " type="password" name="password"> <br>
            <button class="m-2"  type="submit">Submit</button>
        </form>
    </div>

    <h1 class="text-center mt-5 ">Inserisci la parola da censurare</h1>
    <div class="container d-flex justify-content-center">
        <form action="censura_area.php" method="post" class="w-25 text-center ">
            <h3>Parola</h3>
            <input  class="m-1 form-control " type="text" name="parola"> <br>
            <h3>Parola da censurare</h3>
            <input  class="m-1 form-control " type="text" name="parolaCensurata"> <br>
            <button class="m-2"  type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>