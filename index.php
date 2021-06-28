<?php 
$xml = simplexml_load_file("assets/xml/source.xml");
$list = $xml->page;
$page = $_GET["page"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Maçonnerie</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="fw-bold">Maçonnerie Ocordo</div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=1">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=2">Qui sommes-nous ?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=3">Témoignages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=4">Contact et devis</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php 
if (isset($page) && $page == 1){
echo $list[0]->content . '<br><br>';
} else if (isset($page) && $page == 2) {
    echo $list[1]->content . '<br><br>';
} else if (isset($page) && $page == 3) {
    echo $list[2]->content . '<br><br>';
} else {
    echo $list[3]->content . '<br><br>';
}
// for ($i = 0; $i < count($list); $i++) {

//     echo '<b>Numéro de page:</b> ' . $list[$i]->attributes()->id . '<br>';

//     echo 'Menu: ' . $list[$i]->menu . '<br>';

//     echo 'Titre: ' . $list[$i]->title . '<br><br>';

//     echo 'Contenu: ' . $list[$i]->content . '<br><br>';

// }

?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>