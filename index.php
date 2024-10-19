<?php
    include_once ("modulos/header.php")
?>
    <body class="bg-dark">
        <header >
            <?php
                include_once ("modulos/navbar.php")
            ?>
        </header>
        <main >

            <div class="container-xl mt-3 mb-4">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img
                            src="./img/carrusel1.jpg"
                            class="w-100 d-block"
                            alt="First slide"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="./img/carrusel2.jpg"
                            class="w-100 d-block"
                            alt="Second slide"
                        />
                    </div>
                    <div class="carousel-item">
                        <img
                            src="./img/carrusel3.jpg"
                            class="w-100 d-block"
                            style=" object-fit: cover;"
                            alt="Third slide"
                        />
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="prev"
                >
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="next"
                >
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            </div>
            <!-- aqui finaliza el carrusel --> 


                <div class="container-fluid p-5 bg-dark">
                    <div class="py-5 card p-3 text-center">
                        <h1 class="fs-1 fw-bold card-title">Inventarios de maquinas expendedoras</h1>
                        <p class="fs-4 card-body ">
                            En nuestra pagina web vas a encontrar una variedad de opciones para
                            poder manejar tus inventarios y tenerlos al dia y evitar problemas 
                            de contabilidad y no tener incidentes con los inventarios.
                        </p>
                    </div>
                </div>
            
        </main>
<?php        
    include_once ("modulos/footer.php")
?>        
