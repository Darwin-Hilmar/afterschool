<dialog id="modalContacto" class="contactForm"> 
    <div class="container-fluid">
        <form action="/" method="post">   
            <div class="d-flex justify-content-between">
                <h2>Contáctanos</h2>
                <button type="button" class="btn-close" id="btn-close-contacto" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="contacto[nombre]" id="nombreForm" placeholder="Nombre" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="contacto[correo]" id="emailFrom" placeholder="Correo Electrónico" required>
            </div>
            <div class="mb-3">
                <select id="motivoForm" aria-reqired="true" aria-invalid="false" name="contacto[motivo]" class="form-control" required>
                    <option value="" disabled selected>Selecciona un motivo</option>
                    <option value="opcion1">Opción 1</option>
                    <option value="opcion2">Opción 2</option>
                    <option value="opcion3">Opción 3</option>
                </select>
            </div>
            <div class="mb-3">
                <textarea name="contacto[mensaje]" class="form-control" id="mensajeForm" cols="30" rows="5" placeholder="Mensaje" required></textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="contacto[autoriza]">
                <label class="form-check-label" for="exampleCheck1">Autorizo Recibir mensajes y notificaciones por correo</label>
            </div>
            <div class="btn-enviar text-end text-right">
                <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
    </div>
</dialog>

<dialog id="modalContactoEnd" class="contactForm"> 
    <div class="container-fluid">
        <form action="/" method="post">   
            <div class="d-flex justify-content-between">
                <h2>Contáctanos</h2>
                <button type="button" class="btn-close" id="btn-close-contactoEnd" data-bs-dismiss="modal" aria-label="Close" ></button>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="contacto[nombre]" id="nombreForm" placeholder="Nombre" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="contacto[correo]" id="emailFrom" placeholder="Correo Electrónico" required>
            </div>
            <div class="mb-3">
                <select id="motivoForm" aria-reqired="true" aria-invalid="false" name="contacto[motivo]" class="form-control" required>
                    <option value="" disabled selected>Selecciona un motivo</option>
                    <option value="opcion1">Opción 1</option>
                    <option value="opcion2">Opción 2</option>
                    <option value="opcion3">Opción 3</option>
                </select>
            </div>
            <div class="mb-3">
                <textarea name="contacto[mensaje]" class="form-control" id="mensajeForm" cols="30" rows="5" placeholder="Mensaje" required></textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="contacto[autoriza]">
                <label class="form-check-label" for="exampleCheck1">Autorizo Recibir mensajes y notificaciones por correo</label>
            </div>
            <div class="btn-enviar text-end text-right">
                <button type="submit" class="btn btn-primary">Enviar</button>     
            </div>
        </form>
    </div>
</dialog>