<?php

    use App\Curso;
    $cursos = Curso::all();

?>


<section class="section-tam mt-5">
    <div class="container-fluid size_nst mt-3">
        <!-- <div class="select-option">
            <select class="form-select" aria-label="Default select example">
                <option selected>Todos</option>
                <option value="firstCat">Estudiantes</option>
                <option value="secCat">Docentes</option>
                <option value="thrCat">Padres y madres de familia</option>
            </select>
        </div> -->
        
        <div class="row">
            <?php foreach($cursos as $curso): ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card card-bord">
                    <div class="img">
                        <img src="/assets/images/curso.png" alt="" width="100%">
                    </div>

                    <div class="card-body">
                        <?php
                            $title = $curso->titulo;
                            if (strlen($title) < 40) {
                                $title .= "</br>"; 
                            }

                        ?>
                        <h5 class="card-title"><?php echo $title ?></h5>
                        <?php
                            $texto = $curso->descripcion;
                            if(strlen($texto) > 125){
                                $texto = substr($texto, 0, 125) . " .... ";
                            }
                        ?>
                        <p class="card-text"><?php echo $texto ?></p>
                        <p class="card-autor"><?php echo $curso->autor ?></p>
                        <p class="card-pclave"><?php echo $curso->pclave ?></p>
                        <a href="whatsApp.php?id=<?php echo $curso->id; ?>" target="_blank" class="btn btn-primary form-control">Me interesa</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>


            <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card card-bord">
                    <div class="img">
                        <img src="/assets/images/curso.png" alt="" width="100%">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Mindfulness</h5><br>
                        <p class="card-text">En este curso aprenderás técnicas para navegar en el mundo de las emociones y los sentimientos, logrando una mayor sintonía con el propio mundo afectivo y el de los demás.</p>
                        <p class="card-autor">Curso de Melissa León Bustamante</p>
                        <p class="card-pclave">Emociones, Mindfulness, gestión</p>
                        <a href="#" class="btn btn-primary form-control">Me interesa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card card-bord">
                    <div class="img">
                        <img src="/assets/images/acompañamiento_tdah.jpg" alt="" width="100%">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Acompañamiento para  niños y niñas con TDAH</h5>
                        <p class="card-text">En este curso aprenderás técnicas para navegar en el mundo de las emociones y los sentimientos, logrando una mayor sintonía con el propio mundo afectivo y el de los demás.</p>
                        <p class="card-autor">Curso de Melissa León Bustamante</p>
                        <p class="card-pclave">Emociones, Mindfulness, gestión</p>
                        <a href="#" class="btn btn-primary form-control">Me interesa</a>
                    </div>
                </div>
            </div> 
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card card-bord">
                    <div class="img">
                        <img src="/assets/images/clases_de_idiomas_para_niños.jpg" alt="" width="100%">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Clases de Idiomas para niños</h5><br>
                        <p class="card-text">En este curso aprenderás técnicas para navegar en el mundo de las emociones y los sentimientos, logrando una mayor sintonía con el propio mundo afectivo y el de los demás.</p>
                        <p class="card-autor">Curso de Melissa León Bustamante</p>
                        <p class="card-pclave">Emociones, Mindfulness, gestión</p>
                        <a href="#" class="btn btn-primary form-control">Me interesa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card card-bord">
                    <div class="img">
                        <img src="/assets/images/crianza_positiva.jpg" alt="" width="100%">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Crianza positiva</h5><br>
                        <p class="card-text">En este curso aprenderás técnicas para navegar en el mundo de las emociones y los sentimientos, logrando una mayor sintonía con el propio mundo afectivo y el de los demás.</p>
                        <p class="card-autor">Curso de Melissa León Bustamante</p>
                        <p class="card-pclave">Emociones, Mindfulness, gestión</p>
                        <a href="#" class="btn btn-primary form-control">Me interesa</a>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="content-description">
            <div class="marg-content">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <img src="assets/images/Group.svg" alt="">
                    </div>
                    <div class="col-md-8 d-flex align-items-center justify-content-center">
                        <p>
                        Todos nuestros cursos son llevados por expertos en el campo y tienen una constancia de participación previa solicitud por parte del estudiante.
                        Nuestros cursos son variados y están dirigidos a padres, madres, estudiantes, docentes e incluso cuidadores que quieran enriquecer sus habilidades y conocimientos de manera significativa. <br><br>
                        ¡Únete a nuestra comunidad y descubre cómo cada curso se convierte en un paso significativo!

                        </p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>