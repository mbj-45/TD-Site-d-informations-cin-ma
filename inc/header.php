<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Cinema</title>
</head>
<body>
    <header>
      <!-- Navbar -->
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Film</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Action</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Humour</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Drama</a>
  </li>
</ul>
    </header>
    <?php 
    foreach ($get_film()-> results as $key => $value) {
    //  echo "<p>".results->id."</p>";
        
    }

    ?>


</body>

