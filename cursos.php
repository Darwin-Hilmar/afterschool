<?php
    require 'includes/app.php';
    includeTemplate('headerTip');

    use App\Curso;
    $cursos = Curso::all();
?>

<section class="section-tam mt-5">
    <div class="container-fluid size_nst mt-3">
        <div class="select-option">
            <select class="form-select" aria-label="Default select example">
                <option selected>Todas</option>
                <option value="firstCat">Básico</option>
                <option value="secCat">Intermedio</option>
                <option value="thrCat">Avanzado</option>
            </select>
        </div>
        
        <div class="row">
            <?php foreach( $cursos as $curso): ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card card-bord">
                    <div class="control-video">
                        <iframe
                            src="<?php echo $curso->video; ?>"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $curso->titulo; ?></h5>

                        <?php
                            $texto = $curso->descripcion;
                            if(strlen($texto) > 190){
                                $texto = substr($texto, 0, 190) . " .... ";
                            }
                        ?>
                        
                        <p class="card-text"><?php echo $texto; ?></p>
                        <p class="card-autor"><?php echo $curso->autor; ?></p>
                        <p class="card-pclave"><?php echo $curso->pclave; ?></p>
                        <a href="#" class="btn btn-primary form-control">Me interesa</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card card-bord">
                    <div class="control-video">
                        <iframe
                            src="https://www.youtube.com/embed/Y8DYAyKlvI0?si=9VNIxouNdJNADZhR&amp;controls=0"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Mindfulness</h5>
                        <p class="card-text">En este curso aprenderás técnicas para navegar en el mundo de las emociones y los sentimientos, logrando una mayor sintonía con el propio mundo afectivo y el de los demás.</p>
                        <p class="card-autor">Curso de Melissa León Bustamante</p>
                        <p class="card-pclave">Emociones, Mindfulness, gestión</p>
                        <a href="#" class="btn btn-primary form-control">Me interesa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card card-bord">
                    <div class="control-video">
                        <iframe
                            src="https://www.youtube.com/embed/Y8DYAyKlvI0?si=9VNIxouNdJNADZhR&amp;controls=0"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                        ></iframe>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Mindfulness</h5>
                        <p class="card-text">En este curso aprenderás técnicas para navegar en el mundo de las emociones y los sentimientos, logrando una mayor sintonía con el propio mundo afectivo y el de los demás.</p>
                        <p class="card-autor">Curso de Melissa León Bustamante</p>
                        <p class="card-pclave">Emociones, Mindfulness, gestión</p>
                        <a href="#" class="btn btn-primary form-control">Me interesa</a>
                    </div>
                </div>
            </div>   -->
        </div>

        <div class="content-description">
            <div class="marg-content">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <img src="assets/images/Group.svg" alt="">
                    </div>
                    <div class="col-md-8 d-flex align-items-center justify-content-center">
                        <p>(texto en revisión) Todos nuestros cursos son        llevados por expertos en el campo y tienen certificación previa solicitud por parte del estudiante.
                            Nuestros cursos son variados y están dirigidos a padres, madres, estudiantes y docentes que quieran ampliar su conocimiento en estos temas.
                        </p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>

<?php
    includeTemplate('footer');
?>