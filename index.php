<?php 
$xml = simplexml_load_file("assets/xml/source.xml");
$list = $xml->page;
for ($i = 0; $i < count($list); $i++) {

    echo '<b>Numéro de page:</b> ' . $list[$i]->attributes()->id . '<br>';

    echo 'Menu: ' . $list[$i]->menu . '<br>';

    echo 'Titre: ' . $list[$i]->title . '<br><br>';

    echo 'Contenu: ' . $list[$i]->content . '<br><br>';

}

?>