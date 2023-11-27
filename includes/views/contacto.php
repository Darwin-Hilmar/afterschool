<section class="section-tam" id="contacto">
    <div class="container-fluid size_nst">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="text-center mb-5">
                    <img src="assets/images/contacto.png" width="70%" alt="Imagen">
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="container bg_equipo contactForm p-5">
                    <form>
                        <h2>Contáctanos</h2>
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
                        <div class="text-end text-right">
                            <button type="submit" class="btn-enviar btn btn-primary">Enviar</button>     
                        </div>
                    </form>
                </div>
            </div> 
            
            <div class="col-md-6 d-flex align-items-center justify-content-center d-block d-md-none">
                <div class="text-center">
                    <button type="submit" class="btn-contacto btn btn-primary">Contactar</button>  
                </div>
            </div>
            
        </div>
    </div>
</section>