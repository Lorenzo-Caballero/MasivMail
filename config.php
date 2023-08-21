<?php
$url = "https://jsonplaceholder.typicode.com/users";
$response = file_get_contents($url);

if ($response !== false) {
    $users = json_decode($response, true);
    
    if ($users !== null) {
        // $users ahora contiene un array de usuarios
        foreach ($users as $user) {
            echo "ID: " . $user['id'] . "<br>";
            echo "Nombre: " . $user['name'] . "<br>";
            echo "Correo electrónico: " . $user['email'] . "<br>";
            echo "<br>";
        }
    } else {
        echo "Error al decodificar JSON.";
    }
} else {
    echo "Error al hacer la solicitud GET.";
}
?>
