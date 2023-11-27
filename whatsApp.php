<?php

    require 'includes/app.php';

    use App\Curso;
    $id = validarORedireccionar('/');
    $curso = Curso::find($id);

    $numeroTelefono = $_ENV['TEL_WHATS'];

    $mensaje = urlencode("Me interesa el curso $curso->titulo ..." ); 

    $enlaceWhatsApp = "https://wa.me/$numeroTelefono?text=$mensaje";

    header("Location: $enlaceWhatsApp");
    exit;     
    
?>