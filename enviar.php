<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username  = htmlspecialchars(trim($_POST['nombre']  ?? ''));
    $clave  = htmlspecialchars(trim($_POST['correo']  ?? ''));
    
    echo "Recibido: $nombre ($correo) — $mensaje";
}