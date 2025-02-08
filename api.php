<?php
if (isset($_GET['name'])) {
    $pokemonName = $_GET['name'];
    $url = "https://pokeapi.co/api/v2/pokemon/" . $pokemonName;
    $response = file_get_contents($url);
    if ($response !== false) {
        $data = json_decode($response, true);
        echo json_encode($data);
    } else {
        echo json_encode(["error" => "Pokemon not found"]);
    }
}
?>
