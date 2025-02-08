<?php
/**
 * Busca información de un Pokémon utilizando la PokeAPI.
 *
 * Este script recibe el nombre de un Pokémon a través del parámetro GET 'name',
 * realiza una solicitud a la PokeAPI y devuelve la información del Pokémon en formato JSON.
 * 
 * @category   PokemonAPI
 * @package    PokeAPI
 * @author     Tu Nombre <tu_email@ejemplo.com>
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link       https://pokeapi.co/
 */

if (isset($_GET['name'])) {
    $pokemonName = $_GET['name'];
    $url = "https://pokeapi.co/api/v2/pokemon/" . $pokemonName;
    $response = file_get_contents($url);
    if ($response !== false) {
        $data = json_decode($response, true);
        echo json_encode($data);
    } else {
        echo json_encode(["error" => "Pokémon no encontrado"]);
    }
}
?>

