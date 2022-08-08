<?php
include('header.php');

?>
    <!-- Inicio Carrousel -->
    
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="img/carrusel1.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5
                      class="text-light text-uppercase mb-3 animated slideInDown"
                    >
                      Bienvenido a K&B
                    </h5>
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                      <b>Una Empresa de consultoria e inmobiliaria</b>
                    </h1>
                    <ol class="breadcrumb mb-4 pb-2">
                      <li class="breadcrumb-item fs-5 text-light">
                        Terrenos
                      </li>
                      <li class="breadcrumb-item fs-5 text-light">
                        Casas
                      </li>
                      <li class="breadcrumb-item fs-5 text-light">
                        Departamentos
                      </li>
                    </ol>
                    <a href="" class="btn btn-primary py-3 px-5"
                      >Consultoria</a>
                    <a href="" class="btn btn-primary py-3 px-5"
                      >Proyectos</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="img/carrusel2.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5
                      class="text-light text-uppercase mb-3 animated slideInDown"
                    >
                      Bienvenido a K&B
                    </h5>
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                      <b>Profesionales dedicados y servicio de calidad</b>
                    </h1>
                    <ol class="breadcrumb mb-4 pb-2">
                      <li class="breadcrumb-item fs-5 text-light">
                        Terrenos
                      </li>
                      <li class="breadcrumb-item fs-5 text-light">
                        Casas
                      </li>
                      <li class="breadcrumb-item fs-5 text-light">
                        Departamentos
                      </li>
                    </ol>
                    <a href="" class="btn btn-primary py-3 px-5"
                      >Consultoria</a>
                    <a href="" class="btn btn-primary py-3 px-5"
                      >Proyectos</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
    <!-- Carousel End -->

    <!-- Search Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
      <div class="container">
          <div class="row g-2">
              <div class="col-md-10">
                  <div class="row g-2">
                      
                      <div class="col-md-6">
                          <select class="form-select border-0">
                              <option selected>Categoria</option>
                              <option value="1">Terrenos</option>
                              <option value="2">Casas</option>
                              <option value="3">Departamentos</option>
                          </select>
                      </div>
                      <div class="col-md-6">
                          <select class="form-select border-0">
                              <option selected>Ubicacion</option>
                              <option value="1">Ubicacion 1</option>
                              <option value="2">Ubicacion 2</option>
                              <option value="3">Ubicacion 3</option>
                          </select>
                      </div>
                  </div>
              </div>
              <div class="col-md-2">
                  <button class="btn btn-dark border-0 w-100">Buscar</button>
              </div>
          </div>
      </div>
    </div>
    </div>
    <!-- Search End -->

    <!-- Category Start -->
    <div class="container-xxl py-5">
      <div class="container">
          <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explora por Categoria</h1>
          <div class="row g-3">
              <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                  <a class="cat-item rounded p-4" href="">
                      <i class="fa fa-3x fa-image text-primary mb-4"></i>
                      <h6 class="mb-3">Terrenos</h6>
                      <p class="mb-0">123 Proyectos</p>
                  </a>
              </div>
              <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                  <a class="cat-item rounded p-4" href="">
                      <i class="fa fa-3x fa-home text-primary mb-4"></i>
                      <h6 class="mb-3">Casas</h6>
                      <p class="mb-0">123 Proyectos</p>
                  </a>
              </div>
              <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                  <a class="cat-item rounded p-4" href="">
                      <i class="fa fa-3x fa-building text-primary mb-4"></i>
                      <h6 class="mb-3">Departamentos</h6>
                      <p class="mb-0">123 Proyectos</p>
                  </a>
              </div>                 
          </div>
      </div>
  </div>
  <!-- Category End -->

  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div
            class="position-relative overflow-hidden ps-5 pt-5 h-100"
            style="min-height: 400px"
          >
            <img
              class="position-absolute w-100 h-100"
              src="img/nosotros2.jpg"
              alt=""
              style="object-fit: cover"
            />
            <div
              class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
              style="width: 250px; height: 200px"
            >
              <div
                class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3"
              >
                <h1 class="text-white">Nosotros</h1>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h1 class="display-6 mb-0">
                Unica solucion para buscar los mejores Proyectos Inmobiliarios
              </h1>
            </div>
            <p>
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
              Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
              sed stet lorem sit clita duo justo magna dolore erat amet
            </p>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
              Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
              sed stet lorem sit clita duo justo magna dolore erat amet
            </p>
            <div class="border-top mt-4 pt-4">
              <div class="row g-4">
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                  <i
                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                  ></i>
                  <h6 class="mb-0">Ontime at services</h6>
                </div>
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                  <i
                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                  ></i>
                  <h6 class="mb-0">24/7 horas de servicio</h6>
                </div>
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                  <i
                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                  ></i>
                  <h6 class="mb-0">Verified professionals</h6>
                </div>
              </div>
              <a class="btn btn-primary py-3 px-5 mt-3" href="nosotros.php">Conócenos</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <?php include('footer.php');?>