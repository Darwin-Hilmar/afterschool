<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $alerta = null;
        $phpmailer = new PHPMailer();

        $respuestas = $_POST['contacto'];

        // Configurar SMTP
        $phpmailer->SMTPDebug = 0;
        $phpmailer->isSMTP();
        $phpmailer->Host = $_ENV['EMAIL_HOST'];
        $phpmailer->SMTPAuth = true;
        $phpmailer->Username = $_ENV['EMAIL_USER'];
        $phpmailer->Password = $_ENV['EMAIL_PASS'];
        $phpmailer->SMTPSecure = 'ssl';
        $phpmailer->Port = $_ENV['EMAIL_PORT'];

        // Configurar contenido del Email
        $phpmailer->setFrom($_ENV['EMAIL_SEND'], $respuestas['nombre']);

        $phpmailer->addAddress($_ENV['EMAIL_USER'], 'AFTER SCHOOL');
        $phpmailer->Subject = 'Tienes un nuevo mensaje :)';

        // Habilitar HTML
        $phpmailer->isHTML(true);
        $phpmailer->CharSet = 'UTF-8';

        // Definir contenido
        $contenido = '<html>';
        $contenido .= "<p><strong>Has Recibido un email:</strong></p>";
        $contenido .= "<p>Nombre: " . $respuestas['nombre'] . "</p>";
        $contenido .= "<p>Correo: " . $respuestas['correo'] . "</p>";
        $contenido .= "<p>Motivo: " . $respuestas['motivo'] . "</p>";
        $contenido .= "<p>Mensaje: " . $respuestas['mensaje'] . "</p>";
        
        if(isset($respuestas['autoriza'])){
            $contenido .= "<p>Autorizado para recibir mensajes y notificaciones por correo</p>";
        }else{
            $contenido .= "<p><strong> No </strong> autorizado para recibir mensajes y notificaciones por correo</p>";
        }

        $contenido .= '</html>';

        $phpmailer->Body = $contenido;
        $phpmailer->AltBody = 'Esto es texto alternativo sin HTML';

        if($phpmailer->send()){
            $alerta = true;
        }else{
            $alerta = false;
        }
    }
?>


<section class="section-tam" id="contacto">
    <div class="container-fluid size_nst">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="text-center mb-5">
                    <img src="assets/images/contacto.png" width="80%" alt="Imagen">
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="container bg_equipo contactForm p-5">
                    <form method="POST" action="/">
                        <input type="hidden" name="identificador" value="contacto">
                        <h2>Contáctanos</h2>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="contacto[nombre]" id="nombreForm" placeholder="Nombre" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="contacto[correo]" id="emailFrom" placeholder="Correo Electrónico" required>
                        </div>
                        <div class="mb-3">
                            <select id="motivoForm" aria-reqired="true" aria-invalid="false" name="contacto[motivo]" class="form-control" required>
                                <option value="" disabled selected>Selecciona un motivo</option>
                                <option value="Estudiantes">Estudiantes</option>
                                <option value="Educadores">Educadores</option>
                                <option value="Familias">Familias</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea name="contacto[mensaje]" class="form-control" id="mensajeForm" cols="30" rows="5" placeholder="Mensaje" required></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="contacto[autoriza]" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Autorizo Recibir mensajes y notificaciones por correo</label>
                        </div>
                        <div class="text-end text-right">
                            <button type="submit" class="btn-contacto btn btn-primary">Enviar</button>     
                        </div>
                    </form>
                </div>
            </div> 
            
            <div class="col-md-6 d-flex align-items-center justify-content-center d-block d-md-none">
                <div class="text-center">
                    <button type="submit" class="btn-contacto btn btn-primary" id="btn-open-contactoEnd">Contactar</button>  
                </div>
            </div>
            
        </div>
    </div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        <?php
            if ($alerta === true) {
                echo "Swal.fire('¡Formulario enviado!', 'El formulario se ha enviado correctamente', 'success');";
            } else if ($alerta === false) {
                echo "Swal.fire('Error al enviar el formulario', 'No se ha podido enviar el formulario. Por favor, intenta nuevamente.', 'error');";
            }
        ?>
    });
</script>