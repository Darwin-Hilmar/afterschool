<?php

    use App\Blog;
    $blogTam = Blog::off();
    $blogs = Blog::hidd(3);

?>


<section class="section-tam mt-5">
    <div class="container-fluid size_nst mt-3">
        <div class="title-txt">
            <h2>Lo más reciente</h2>
        </div>

        <div class="row">
            <div class="col-md-6 col-12 align-self-center">
                <a href="blog.php">
                    <div class="card card-blog mb-4 d-flex align-items-center justify-content-center blog-first">
                        <img class="card-img-top" src="assets/images/blogOne.png" alt="Card image cap">
                        <div class="card-body-blog">
                            <p class="text-fecha">25/11/2023</p>
                            <p class="text-titulo">Feria del Libro de Lima</p>
                            <p class="text-descripcion">Con motivo de navidad, salimos a celebrar esta festividad al parque haciendo un compartir, aquí te compartimos algunas fotos de este bonito momento, nuestros niños se
                            </p>
                            <p class="text-autor">Por: María Rosario Cabanillas</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-12">
                <?php foreach($blogTam as $blog): ?>
                <div class="blog-item d-flex mb-4">
                    <a href="blog.php?id=<?php echo $blog->id; ?>" target="_blank">
                        <div class="thumb">
                            <img src="assets/images/blogTwo.png" alt="blog">
                        </div>
                        <div class="cont-content d-flex">
                            <div class="down-content">
                                <p class="text-fecha"><?php echo $blog->creado ?></p>
                                <p class="text-titulo"><?php echo $blog->titulo ?></p>
                                <?php
                                    $texto = $blog->descripcion;
                                    if(strlen($texto) > 150){
                                        $texto = substr($texto, 0, 150) . " .... ";
                                    }
                                ?>
                                <p class="text-descripcion"><?php echo $texto ?></p>
                                <p class="text-autor">Por: <?php echo $blog->autor ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>

                <div class="blog-item d-flex mb-4">
                    <div class="thumb">
                        <img src="assets/images/blogTwo.png" alt="blog">
                    </div>
                    <div class="cont-content d-flex">
                        <div class="down-content">
                            <p class="text-fecha">25/11/2023</p>
                            <p class="text-titulo">Feria del Libro de Lima</p>
                            <p class="text-descripcion">Con motivo de navidad, salimos a celebrar esta festividad al parque
                                haciendo un compartir, aquí te compartimos algunas fotos de este bonito momento, nuestros niños
                                se
                            </p>
                            <p class="text-autor">Por: María Rosario Cabanillas</p>
                        </div>
                    </div>
                </div>
                <div class="blog-item d-flex mb-4">
                    <div class="thumb">
                        <img src="assets/images/blogTwo.png" alt="blog">
                    </div>
                    <div class="cont-content d-flex">
                        <div class="down-content">
                            <p class="text-fecha">25/11/2023</p>
                            <p class="text-titulo">Feria del Libro de Lima</p>
                            <p class="text-descripcion">Con motivo de navidad, salimos a celebrar esta festividad al parque
                                haciendo un compartir, aquí te compartimos algunas fotos de este bonito momento, nuestros niños
                                se
                            </p>
                            <p class="text-autor">Por: María Rosario Cabanillas</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        


        <div class="title-txt">
            <h2>Publicaciones anteriores</h2>
        </div>

        <div class="row">
            <?php foreach($blogs as $blog): ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
            <a href="blog.php?id=<?php echo $blog->id; ?>">
                <div class="card card-blog mb-4" style="width: 30rem;">
                    <img class="card-img-top" src="assets/images/blogThree.png" alt="<?php echo $blog->url; ?>">
                    <div class="card-body-blog">
                        <p class="text-fecha"><?php echo $blog->creado; ?></p>
                        <p class="text-titulo"><?php echo $blog->titulo; ?></p>

                        <?php
                            $texto = $blog->descripcion;
                            if(strlen($texto) > 170){
                                $texto = substr($texto, 0, 170) . " .... ";
                            }
                        ?>

                        <p class="text-descripcion"><?php echo $texto; ?></p>
                        <p class="text-autor">Por: <?php echo $blog->autor; ?></p>
                    </div>
                </div>
            </a>
            </div>
            <?php endforeach; ?>

            <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card card-blog mb-4">
                    <img class="card-img-top" src="assets/images/blogThree.png" alt="Card image cap">
                    <div class="card-body-blog">
                        <p class="text-fecha">25/11/2023</p>
                        <p class="text-titulo">Feria del Libro de Lima</p>
                        <p class="text-descripcion">Con motivo de navidad, salimos a celebrar esta festividad al parque
                            haciendo un compartir, aquí te compartimos algunas fotos de este bonito momento, nuestros niños
                            se
                        </p>
                        <p class="text-autor">Por: María Rosario Cabanillas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="card card-blog mb-4">
                    <img class="card-img-top" src="assets/images/blogThree.png" alt="Card image cap">
                    <div class="card-body-blog">
                        <p class="text-fecha">25/11/2023</p>
                        <p class="text-titulo">Feria del Libro de Lima</p>
                        <p class="text-descripcion">Con motivo de navidad, salimos a celebrar esta festividad al parque
                            haciendo un compartir, aquí te compartimos algunas fotos de este bonito momento, nuestros niños
                            se
                        </p>
                        <p class="text-autor">Por: María Rosario Cabanillas</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>