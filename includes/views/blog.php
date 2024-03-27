<?php

    use App\Blog;

    $id = validarORedireccionar('/');

    $blog = Blog::find($id);
    

?>
<!-- <dialog id="modalContacto" class="contactForm"> 
    <div class="container-fluid">
        <form id="contact-citad" action="/" method="post">   
            <div class="d-flex justify-content-between">
                <h2>Contáctanos</h2>
                <button type="button" class="btn-close" id="btn-close-contacto" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="nombreForm" placeholder="Nombre">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="emailFrom" placeholder="Correo Electrónico">
            </div>
            <div class="mb-3">
                <select id="motivoForm" class="form-control">
                    <option value="" disabled selected>Selecciona un motivo</option>
                    <option value="opcion1">Opción 1</option>
                    <option value="opcion2">Opción 2</option>
                    <option value="opcion3">Opción 3</option>
                </select>
            </div>
            <div class="mb-3">
                <textarea name="mensaje" class="form-control" id="mensajeForm" cols="30" rows="5" placeholder="Mensaje"></textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Autorizo Recibir mensajes y notificaciones por correo</label>
            </div>
            <div class="btn-enviar text-end text-right">
                <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
    </div>
</dialog> -->

<section class="section-tam mt-5">
    <div class="container-fluid size_nst blog-content mt-3">
        <h2 class="text-center"><?php echo $blog->titulo ?></h2>
        <h5 class="text-center style-italic"><?php echo $blog->autor ?></h5>
        <p class="mt-4"><?php echo $blog->descripcion ?></p>
        <div class="image-blog d-flex justify-content-center align-items-center mt-4">
            <img src="<?php echo $blog->url; ?>" class="rounded-4" width="100%" alt="Blog After School">
        </div>
</section>