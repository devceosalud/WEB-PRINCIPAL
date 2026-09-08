@extends('layouts.app')


@section('main')
    <header id="header" class="header sticky-top">
        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="d-none d-md-flex align-items-center">
                    <i class="bi bi-clock me-1"></i>
                    Hoy: {{ now()->locale('es')->translatedFormat('l d/m/Y - H:i:s') }}

                </div>
                <div class="d-flex align-items-center" style="cursor: pointer"
                    onclick="window.location.href='tel:+51913557016'">
                    <i class="bi bi-phone me-1"></i> Llama ahora +51913557016
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-end">
                <a href="index.html" class="logo d-flex align-items-center me-auto">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                    <!-- Uncomment the line below if you also wish to use a text logo -->
                    <!-- <h1 class="sitename">Medicio</h1>  -->
                </a>

                {{-- NAV --}}
                @include('templates.nav')
                {{-- NAV --}}


                <a class="cta-btn" href="#appointment">Quiero una Cita</a>
            </div>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
                    <div class="container">
                        <h2>Bienvenido a Ceo Salud.</h2>
                        <p>Ceosalud es un Centro Médico en Lima especializado en el diagnóstico, tratamiento y salvataje del
                            pie diabético.</p>
                        <a href="#about" class="btn-get-started">Saber más</a>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="{{ asset('assets/img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
                    <div class="container">
                        <h2>Enfoque institucional y de confianza.</h2>
                        <p>¿Tienes una orden de amputación por pie diabético? En Ceosalud te ayudamos a evitarla. Somos
                            expertos en salvataje de extremidades y tratamiento avanzado de heridas infectadas complejas en
                            Lima.</p>
                        <a href="#about" class="btn-get-started">Saber más</a>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="{{ asset('assets/img/hero-carousel/hero-carousel-3.jpg') }}" alt="">
                    <div class="container">
                        <h2>En Ceosalud luchamos junto a ti</h2>
                        <p>En Ceosalud luchamos junto a ti para salvar tu pie y devolverte la tranquilidad. Nos
                            especializamos en el tratamiento avanzado de heridas por pie diabético mediante protocolos
                            médicos diseñados para prevenir amputaciones.</p>
                        <a href="#about" class="btn-get-started">Saber más</a>
                    </div>
                </div><!-- End Carousel Item -->

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>

            </div>
        </section><!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="fas fa-heartbeat icon"></i></div>
                            <h4><a href="" class="stretched-link">Salvataje de Pie Diabético</a></h4>
                            <p>Evitamos amputaciones mediante tratamientos avanzados y un enfoque médico multidisciplinario.
                            </p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="fas fa-pills icon"></i></div>
                            <h4><a href="" class="stretched-link">Control y Farmacología</a></h4>
                            <p>Manejo especializado de medicamentos y control metabólico para estabilizar al paciente
                                diabético.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="fas fa-thermometer icon"></i></div>
                            <h4><a href="" class="stretched-link">Control de Infecciones</a></h4>
                            <p>Monitoreo constante y detección temprana de signos de alerta para detener el avance
                                infeccioso.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="fas fa-dna icon"></i></div>
                            <h4><a href="" class="stretched-link">Medicina Avanzada</a></h4>
                            <p>Aplicación de protocolos médicos modernos y terapias biológicas para la regeneración celular
                                del pie.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Featured Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section accent-background">
            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>¿Enfrentas una emergencia por Pie Diabético?</h3>
                            <p>No pongas en riesgo tu movilidad. Nuestro equipo de expertos en Lima está listo para
                                intervenir de inmediato con tratamientos avanzados de salvataje para evitar amputaciones y
                                detener infecciones graves.</p>
                            <a class="cta-btn" target="_blank" rel="noopener noreferrer"
                                href="https://web.whatsapp.com/send?phone=51913557016&text=Hola%2C%20CEO%20Salud.%20Visité%20su%20página%20web%20y%20me%20gustaría%20recibir%20orientación%20sobre%20qué%20especialidad%20necesito.">Agendar
                                Cita de Emergencia</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Call To Action Section -->


        <!-- About Section -->
        <section id="about" class="about section">

            <!-- About Section -->
            <section id="about" class="about section">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Sobre Nosotros<br></h2>
                    <p>Atención médica especializada con un enfoque integral, humano y multidisciplinario.</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">
                        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/img/about.jpg" class="img-fluid"
                                alt="CEO Salud - Centro Médico Especializado">
                            <a href="https://www.youtube.com/watch?v=UNTLPt7tSLU"
                                class="glightbox pulsating-play-btn"></a>
                        </div>

                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">

                            <h3>Atención especializada para cuidar tu salud y proteger tu movilidad.</h3>

                            <p class="fst-italic">
                                En CEO Salud brindamos atención médica especializada con un enfoque integral,
                                combinando experiencia profesional, tecnología y un equipo multidisciplinario
                                para ofrecer tratamientos personalizados.
                            </p>

                            <ul>
                                <li>
                                    <i class="bi bi-check2-all"></i>
                                    <span>
                                        Especialistas en prevención y tratamiento del pie diabético,
                                        úlceras y heridas de difícil cicatrización.
                                    </span>
                                </li>

                                <li>
                                    <i class="bi bi-check2-all"></i>
                                    <span>
                                        Atención integral en traumatología, ortopedia y medicina física
                                        y rehabilitación.
                                    </span>
                                </li>

                                <li>
                                    <i class="bi bi-check2-all"></i>
                                    <span>
                                        Equipo multidisciplinario integrado por especialistas en traumatología,
                                        endocrinología, cardiología, fisioterapia, podología, nutrición y otras
                                        áreas de la salud.
                                    </span>
                                </li>
                            </ul>

                            <p>
                                Nuestro objetivo es brindar una atención cercana y especializada,
                                acompañando a cada paciente durante su proceso de diagnóstico,
                                tratamiento y recuperación. Contamos con servicios de manejo de heridas,
                                laboratorio, radiografías, ecografías, fisioterapia y otros servicios
                                complementarios en una misma sede.
                            </p>

                        </div>
                    </div>

                </div>

            </section> <!-- /About Section -->

        </section>
        <!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fas fa-user-md flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Doctores</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="far fa-hospital flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Especialidades</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fas fa-flask flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Laboratorio</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="fas fa-award flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Certificado</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->
                </div>
            </div>
        </section><!-- /Stats Section -->

        <!-- Features Section -->
        <section id="features" class="features section">
            <div class="container">
                <div class="row justify-content-around gy-4">

                    <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/img/features.jpg') }}"
                            alt="Atención médica especializada en CEO Salud">
                    </div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">

                        <h3>Atención especializada enfocada en la recuperación y bienestar de nuestros pacientes</h3>

                        <p>
                            En CEO Salud contamos con un equipo multidisciplinario que trabaja de manera
                            integral para brindar atención especializada, diagnóstico oportuno y
                            tratamientos personalizados.
                        </p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="fa-solid fa-hand-holding-medical flex-shrink-0"></i>
                            <div>
                                <h4>
                                    <a href="" class="stretched-link">Prevención y tratamiento del pie
                                        diabético</a>
                                </h4>
                                <p>
                                    Brindamos atención especializada para el manejo de heridas y lesiones
                                    relacionadas con el pie diabético, orientada a prevenir complicaciones
                                    y reducir el riesgo de amputaciones.
                                </p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="fa-solid fa-suitcase-medical flex-shrink-0"></i>
                            <div>
                                <h4>
                                    <a href="" class="stretched-link">Atención médica integral</a>
                                </h4>
                                <p>
                                    Integramos diferentes especialidades y servicios de apoyo para ofrecer
                                    una evaluación completa y un tratamiento adecuado para cada paciente.
                                </p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                            <i class="fa-solid fa-staff-snake flex-shrink-0"></i>
                            <div>
                                <h4>
                                    <a href="" class="stretched-link">Equipo multidisciplinario</a>
                                </h4>
                                <p>
                                    Contamos con profesionales de distintas áreas de la salud que trabajan
                                    de manera coordinada para acompañar al paciente durante su proceso de
                                    diagnóstico, tratamiento y recuperación.
                                </p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
                            <i class="fa-solid fa-person-walking flex-shrink-0"></i>
                            <div>
                                <h4>
                                    <a href="" class="stretched-link">Traumatología y rehabilitación</a>
                                </h4>
                                <p>
                                    Ofrecemos servicios especializados en traumatología, ortopedia,
                                    fisioterapia y rehabilitación para ayudar a nuestros pacientes a
                                    recuperar su movilidad y calidad de vida.
                                </p>
                            </div>
                        </div><!-- End Icon Box -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /Features Section -->


        <!-- Services Section -->
        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Servicios</h2>
                <p>
                    Contamos con servicios médicos y auxiliares especializados para brindar una
                    atención integral, segura y oportuna a nuestros pacientes.
                </p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    <!-- Manejo de heridas -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-hand-holding-medical"></i>
                            </div>

                            <a href="#" class="stretched-link">
                                <h3>Manejo de heridas</h3>
                            </a>

                            <p>
                                Curación, evaluación y seguimiento especializado de heridas,
                                con atención orientada a favorecer una adecuada recuperación.
                            </p>
                        </div>
                    </div><!-- End Service Item -->


                    <!-- Laboratorio -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-flask"></i>
                            </div>

                            <a href="#" class="stretched-link">
                                <h3>Laboratorio</h3>
                            </a>

                            <p>
                                Realizamos análisis clínicos como apoyo al diagnóstico y
                                seguimiento médico, con resultados oportunos.
                            </p>
                        </div>
                    </div><!-- End Service Item -->


                    <!-- Radiografías -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-x-ray"></i>
                            </div>

                            <a href="#" class="stretched-link">
                                <h3>Radiografías</h3>
                            </a>

                            <p>
                                Estudios de imágenes diagnósticas que permiten evaluar
                                estructuras óseas y apoyar la valoración médica.
                            </p>
                        </div>
                    </div><!-- End Service Item -->


                    <!-- Ecografías -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-wave-square"></i>
                            </div>

                            <a href="#" class="stretched-link">
                                <h3>Ecografías</h3>
                            </a>

                            <p>
                                Estudios mediante ultrasonido que permiten obtener imágenes
                                para complementar el diagnóstico médico.
                            </p>
                        </div>
                    </div><!-- End Service Item -->


                    <!-- Colocación y retiro de yeso -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-bandage"></i>
                            </div>

                            <a href="#" class="stretched-link">
                                <h3>Colocación y retiro de yeso</h3>
                            </a>

                            <p>
                                Atención ortopédica para la colocación y retiro de yesos,
                                realizada de manera segura y bajo supervisión profesional.
                            </p>
                        </div>
                    </div><!-- End Service Item -->


                    <!-- Infiltraciones -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-syringe"></i>
                            </div>

                            <a href="#" class="stretched-link">
                                <h3>Infiltraciones</h3>
                            </a>

                            <p>
                                Tratamientos locales utilizados para el manejo del dolor
                                y determinadas afecciones articulares, según evaluación médica.
                            </p>
                        </div>
                    </div><!-- End Service Item -->


                    <!-- Plantillas -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-shoe-prints"></i>
                            </div>

                            <a href="#" class="stretched-link">
                                <h3>Plantillas</h3>
                            </a>

                            <p>
                                Elaboración de plantillas y ortesis personalizadas de acuerdo
                                con las necesidades y características de cada paciente.
                            </p>
                        </div>
                    </div><!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- /Services Section -->


        <!-- Appointment Section -->
        <section id="appointment" class="appointment section light-background">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Solicita tu cita</h2>
                <p>
                    Agenda una consulta con nuestros especialistas y recibe la atención
                    que necesitas de manera oportuna y personalizada.
                </p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <form action="#" method="post" role="form" class="php-email-form">
                    <div class="row">

                        <!-- Nombre -->
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Nombre completo" required>
                        </div>

                        <!-- Correo -->
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Correo electrónico" required>
                        </div>

                        <!-- Teléfono -->
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="tel" class="form-control" name="phone" id="phone"
                                placeholder="Número de teléfono" required>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Fecha -->
                        <div class="col-md-4 form-group mt-3">
                            <input type="datetime-local" name="date" class="form-control datepicker" id="date"
                                required>
                        </div>

                        <!-- Especialidad -->
                        <div class="col-md-4 form-group mt-3">
                            <select name="department" id="department" class="form-select" required>

                                <option value="">Selecciona una especialidad</option>

                                <option value="Traumatología">
                                    Traumatología
                                </option>

                                <option value="Medicina Física y Rehabilitación">
                                    Medicina Física y Rehabilitación
                                </option>

                                <option value="Endocrinología">
                                    Endocrinología
                                </option>

                                <option value="Cardiología">
                                    Cardiología
                                </option>

                                <option value="Radiología">
                                    Radiología
                                </option>

                                <option value="Fisioterapia">
                                    Fisioterapia
                                </option>

                                <option value="Podología">
                                    Podología
                                </option>

                                <option value="Psicología">
                                    Psicología
                                </option>

                                <option value="Nutrición">
                                    Nutrición
                                </option>
                            </select>
                        </div>

                        <!-- Especialista -->
                        <div class="col-md-4 form-group mt-3">
                            <select name="doctor" id="doctor" class="form-select" required>

                                <option value="">
                                    Selecciona un especialista
                                </option>

                                <option value="Especialista 1">
                                    Especialista 1
                                </option>

                                <option value="Especialista 2">
                                    Especialista 2
                                </option>

                                <option value="Especialista 3">
                                    Especialista 3
                                </option>
                            </select>
                        </div>
                    </div>

                    <!-- Mensaje -->
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5"
                            placeholder="Cuéntanos brevemente el motivo de tu consulta (opcional)"></textarea>
                    </div>

                    <div class="mt-3">
                        <div class="loading">
                            Enviando solicitud...
                        </div>

                        <div class="error-message"></div>

                        <div class="sent-message">
                            ¡Tu solicitud de cita fue enviada correctamente!
                            Nuestro equipo se pondrá en contacto contigo para confirmar
                            la disponibilidad.
                        </div>

                        <div class="text-center">
                            <button type="submit">
                                Solicitar cita
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- /Appointment Section -->



        <!-- Tabs Section -->
        <section id="departments" class="tabs section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Especialidades</h2>
                <p>
                    Atención especializada y multidisciplinaria para cuidar tu salud de manera integral.
                </p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tabs-tab-1">
                                    Traumatología
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-2">
                                    Medicina Física y Rehabilitación
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-3">
                                    Endocrinología
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-4">
                                    Cardiología
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-5">
                                    Radiología
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-6">
                                    Fisioterapia
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-7">
                                    Podología
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-8">
                                    Psicología
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-9">
                                    Nutrición
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <!-- Traumatología -->
                            <div class="tab-pane active show" id="tabs-tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Traumatología</h3>

                                        <p class="fst-italic">
                                            Atención integral del aparato locomotor.
                                        </p>

                                        <p>
                                            Evaluación y tratamiento especializado de lesiones,
                                            enfermedades y alteraciones del sistema musculoesquelético,
                                            con un enfoque orientado a recuperar la movilidad y
                                            mejorar la calidad de vida del paciente.
                                        </p>
                                    </div>

                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/departments-1.jpg') }}" alt="Traumatología"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>


                            <!-- Medicina Física y Rehabilitación -->
                            <div class="tab-pane" id="tabs-tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Medicina Física y Rehabilitación</h3>

                                        <p class="fst-italic">
                                            Recupera tu funcionalidad con especialistas.
                                        </p>

                                        <p>
                                            Atención enfocada en la recuperación de la movilidad,
                                            funcionalidad y autonomía de los pacientes mediante
                                            programas de rehabilitación adaptados a sus necesidades.
                                        </p>
                                    </div>

                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/departments-2.jpg') }}"
                                            alt="Medicina Física y Rehabilitación" class="img-fluid">
                                    </div>
                                </div>
                            </div>


                            <!-- Endocrinología -->
                            <div class="tab-pane" id="tabs-tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Endocrinología</h3>

                                        <p class="fst-italic">
                                            Control de diabetes, tiroides y hormonas.
                                        </p>

                                        <p>
                                            Evaluación y seguimiento de enfermedades relacionadas
                                            con el sistema endocrino y metabólico, incluyendo
                                            diabetes y alteraciones de la tiroides y otras hormonas.
                                        </p>
                                    </div>

                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/departments-3.jpg') }}" alt="Endocrinología"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>


                            <!-- Cardiología -->
                            <div class="tab-pane" id="tabs-tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Cardiología</h3>

                                        <p class="fst-italic">
                                            Cuidado integral de tu salud cardiovascular.
                                        </p>

                                        <p>
                                            Evaluación, prevención y seguimiento de las principales
                                            condiciones cardiovasculares, promoviendo el cuidado
                                            integral de la salud del corazón y los vasos sanguíneos.
                                        </p>
                                    </div>

                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/departments-4.jpg') }}" alt="Cardiología"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>


                            <!-- Radiología -->
                            <div class="tab-pane" id="tabs-tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Radiología</h3>

                                        <p class="fst-italic">
                                            Diagnóstico por imágenes de alta precisión.
                                        </p>

                                        <p>
                                            Estudios de diagnóstico por imágenes que permiten
                                            complementar la evaluación médica y obtener información
                                            útil para determinar el diagnóstico y tratamiento.
                                        </p>
                                    </div>

                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/departments-5.jpg') }}" alt="Radiología"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>


                            <!-- Fisioterapia -->
                            <div class="tab-pane" id="tabs-tab-6">
                                <div class="row">

                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Fisioterapia</h3>

                                        <p class="fst-italic">
                                            Tratamiento físico y recuperación muscular.
                                        </p>

                                        <p>
                                            Terapias orientadas a mejorar la movilidad, disminuir
                                            molestias y favorecer la recuperación funcional de
                                            músculos y articulaciones.
                                        </p>
                                    </div>

                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/departments-6.jpg') }}" alt="Fisioterapia"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>


                            <!-- Podología -->
                            <div class="tab-pane" id="tabs-tab-7">
                                <div class="row">

                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Podología</h3>

                                        <p class="fst-italic">
                                            Salud y cuidado especializado del pie.
                                        </p>

                                        <p>
                                            Atención especializada para la prevención, cuidado y
                                            tratamiento de diferentes afecciones del pie, con especial
                                            atención a pacientes que requieren un manejo preventivo.
                                        </p>
                                    </div>

                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/departments-7.jpg') }}" alt="Podología"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>


                            <!-- Psicología -->
                            <div class="tab-pane" id="tabs-tab-8">
                                <div class="row">

                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Psicología</h3>

                                        <p class="fst-italic">
                                            Bienestar mental con profesionales especializados.
                                        </p>

                                        <p>
                                            Acompañamiento psicológico orientado al bienestar
                                            emocional y al desarrollo de herramientas para afrontar
                                            diferentes situaciones personales y de salud.
                                        </p>
                                    </div>

                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/departments-8.jpg') }}" alt="Psicología"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>


                            <!-- Nutrición -->
                            <div class="tab-pane" id="tabs-tab-9">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Nutrición</h3>

                                        <p class="fst-italic">
                                            Planes alimenticios personalizados para ti.
                                        </p>

                                        <p>
                                            Orientación nutricional personalizada de acuerdo con
                                            las necesidades, objetivos y características de cada
                                            paciente, promoviendo hábitos saludables y una adecuada
                                            alimentación.
                                        </p>
                                    </div>

                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assets/img/departments-9.jpg') }}" alt="Nutrición"
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Tabs Section -->



        {{-- TESTIMONIALES 
        @include('templates.testimoniales')
         TESTIMONIALES --}}

        <!-- Doctors Section -->
        <section id="doctors" class="doctors section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Nuestros especialistas</h2>
                <p> Profesionales de la salud comprometidos con brindarte una atención especializada, cercana y enfocada en
                    tus necesidades. </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/doctors/doctors-1.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Dr Julio Quiroz</h4>
                                <span>Médico Especialista</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    {{--
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/doctors/doctors-2.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Anesthesiologist</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/doctors/doctors-3.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>Cardiology</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/doctors/doctors-4.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Neurosurgeon</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                    --}}
                </div>
            </div>
        </section>
        <!-- /Doctors Section -->


        <!-- Gallery Section -->
        <section id="gallery" class="gallery section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Galería</h2>
                <p> Conoce nuestras instalaciones, servicios y el entorno donde brindamos atención especializada a nuestros
                    pacientes. </p>
            </div><!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('assets/img/gallery/gallery-1.jpg') }}"><img
                                    src="{{ asset('assets/img/gallery/gallery-1.jpg') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('assets/img/gallery/gallery-2.jpg') }}"><img
                                    src="{{ asset('assets/img/gallery/gallery-2.jpg') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('assets/img/gallery/gallery-3.jpg') }}"><img
                                    src="{{ asset('assets/img/gallery/gallery-3.jpg') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('assets/img/gallery/gallery-4.jpg') }}"><img
                                    src="{{ asset('assets/img/gallery/gallery-4.jpg') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('assets/img/gallery/gallery-5.jpg') }}"><img
                                    src="{{ asset('assets/img/gallery/gallery-5.jpg') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('assets/img/gallery/gallery-6.jpg') }}"><img
                                    src="{{ asset('assets/img/gallery/gallery-6.jpg') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('assets/img/gallery/gallery-7.jpg') }}"><img
                                    src="{{ asset('assets/img/gallery/gallery-7.jpg') }}" class="img-fluid"
                                    alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                                href="{{ asset('assets/img/gallery/gallery-8.jpg') }}"><img
                                    src="{{ asset('assets/img/gallery/gallery-8.jpg') }}" class="img-fluid"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- /Gallery Section -->


        {{-- Pricing Section  
            <section id="pricing" class="pricing section">

              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
              </div><!-- End Section Title -->

              <div class="container">

                <div class="row gy-3">

                  <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-item">
                      <h3>Free</h3>
                      <h4><sup>$</sup>0<span> / month</span></h4>
                      <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li class="na">Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                      </ul>
                      <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                      </div>
                    </div>
                  </div><!-- End Pricing Item -->

                  <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-item featured">
                      <h3>Business</h3>
                      <h4><sup>$</sup>19<span> / month</span></h4>
                      <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li>Pharetra massa</li>
                        <li class="na">Massa ultricies mi</li>
                      </ul>
                      <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                      </div>
                    </div>
                  </div><!-- End Pricing Item -->

                  <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="pricing-item">
                      <h3>Developer</h3>
                      <h4><sup>$</sup>29<span> / month</span></h4>
                      <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li>Pharetra massa</li>
                        <li>Massa ultricies mi</li>
                      </ul>
                      <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                      </div>
                    </div>
                  </div><!-- End Pricing Item -->

                  <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="pricing-item">
                      <span class="advanced">Advanced</span>
                      <h3>Ultimate</h3>
                      <h4><sup>$</sup>49<span> / month</span></h4>
                      <ul>
                        <li>Aida dere</li>
                        <li>Nec feugiat nisl</li>
                        <li>Nulla at volutpat dola</li>
                        <li>Pharetra massa</li>
                        <li>Massa ultricies mi</li>
                      </ul>
                      <div class="btn-wrap">
                        <a href="#" class="btn-buy">Buy Now</a>
                      </div>
                    </div>
                  </div><!-- End Pricing Item -->
                </div>
              </div>
            </section>
            Pricing Section  --}}


        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Preguntas Frecuentes</h2>
                <p>
                    Encuentra respuestas a las preguntas más frecuentes de nuestros pacientes
                    sobre nuestros servicios, especialidades y atención médica.
                </p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">
                            <div class="faq-item">
                                <h3>¿Qué especialidades médicas atiende CEO Salud?</h3>
                                <div class="faq-content">
                                    <p>
                                        Contamos con diferentes especialidades para brindar una
                                        atención integral, entre ellas Traumatología, Medicina Física
                                        y Rehabilitación, Endocrinología, Cardiología, Radiología,
                                        Fisioterapia, Podología, Psicología y Nutrición.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>¿CEO Salud atiende pacientes con pie diabético?</h3>
                                <div class="faq-content">
                                    <p>
                                        Sí. Brindamos atención especializada para pacientes con
                                        pie diabético, incluyendo evaluación, manejo de heridas,
                                        curaciones y seguimiento médico. La atención oportuna ayuda
                                        a prevenir complicaciones y favorecer una adecuada recuperación.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>¿Qué servicios médicos y auxiliares ofrece CEO Salud?</h3>
                                <div class="faq-content">
                                    <p>
                                        Ofrecemos manejo de heridas, laboratorio, radiografías,
                                        ecografías, colocación y retiro de yeso, infiltraciones
                                        y elaboración de plantillas y ortesis personalizadas.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>¿Necesito una cita previa para atenderme?</h3>
                                <div class="faq-content">
                                    <p>
                                        Recomendamos coordinar una cita previamente para conocer
                                        la disponibilidad del especialista y organizar tu atención.
                                        Puedes comunicarte con nuestro equipo para consultar horarios
                                        y disponibilidad.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>¿Puedo realizarme estudios de laboratorio e imágenes en CEO Salud?</h3>
                                <div class="faq-content">
                                    <p>
                                        Sí. Contamos con servicios de laboratorio, radiografías y
                                        ecografías que pueden complementar la evaluación médica.
                                        Consulta previamente por el estudio que necesitas y sus
                                        indicaciones.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->


                            <div class="faq-item">
                                <h3>¿CEO Salud cuenta con servicios de rehabilitación y fisioterapia?</h3>

                                <div class="faq-content">
                                    <p>
                                        Sí. Contamos con Medicina Física y Rehabilitación y Fisioterapia,
                                        orientadas a favorecer la recuperación funcional, mejorar la
                                        movilidad y acompañar al paciente durante su proceso de recuperación.
                                    </p>
                                </div>

                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item -->


                            <div class="faq-item">
                                <h3>¿Las plantillas son personalizadas para cada paciente?</h3>

                                <div class="faq-content">
                                    <p>
                                        Sí. Las plantillas y ortesis se elaboran considerando las
                                        características y necesidades de cada paciente, buscando
                                        brindar un soporte adecuado de acuerdo con su evaluación.
                                    </p>
                                </div>

                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item -->

                            <div class="faq-item">
                                <h3>¿Cómo puedo saber qué especialidad necesito?</h3>
                                <div class="faq-content">
                                    <p>
                                        Si no estás seguro de qué especialista consultar, puedes
                                        comunicarte con nuestro equipo de atención. Te orientaremos
                                        de acuerdo con el motivo de tu consulta para ayudarte a
                                        identificar el servicio más adecuado.

                                        <a href="https://web.whatsapp.com/send?phone=51913557016&text=Hola%2C%20CEO%20Salud.%20Visité%20su%20página%20web%20y%20me%20gustaría%20recibir%20orientación%20sobre%20qué%20especialidad%20necesito."
                                            class="cta-btn" target="_blank" rel="noopener noreferrer">
                                            <i class="bi bi-whatsapp"></i>
                                            Hablar con un asesor
                                        </a>
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->
                        </div>
                    </div><!-- End Faq Column-->
                </div>
            </div>
        </section>
        <!-- /Faq Section -->



        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contáctanos</h2>
                <p> ¿Tienes alguna consulta? Nuestro equipo está listo para brindarte información sobre nuestras
                    especialidades, servicios y atención médica. </p>
            </div><!-- End Section Title -->

            <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 370px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.353562078959!2d-77.07136582517406!3d-12.087930488152061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9a7f03b363d%3A0xcec1a5aa885b53b5!2sAv%20Antonio%20Jos%C3%A9%20de%20Sucre%201136%2C%20Magdalena%20del%20Mar%20LIMA%2017!5e0!3m2!1ses!2spe!4v1788885660786!5m2!1ses!2spe"
                    frameborder="0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                    <div class="col-lg-6">
                        <div class="row gy-4">

                            <!-- Dirección -->
                            <div class="col-lg-12">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="200">

                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Dirección</h3>
                                    <p>
                                        Av. Sucre 1136, Magdalena del Mar, Lima - Perú
                                    </p>
                                </div>
                            </div><!-- End Info Item -->


                            <!-- Teléfono -->
                            <div class="col-md-6">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="300">

                                    <i class="bi bi-telephone"></i>
                                    <h3>Teléfono</h3>
                                    <p>
                                        +51 913 557 016
                                    </p>
                                </div>
                            </div><!-- End Info Item -->


                            <!-- Correo -->
                            <div class="col-md-6">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center"
                                    data-aos="fade-up" data-aos-delay="400">

                                    <i class="bi bi-envelope"></i>
                                    <h3>Correo electrónico</h3>
                                    <p>
                                        info@ceosalud.pe
                                    </p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>
                    </div>


                    <!-- Contact Form -->
                    <div class="col-lg-6">

                        <form action="#" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="500">

                            <div class="row gy-4">

                                <!-- Nombre -->
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Nombre completo" required>
                                </div>

                                <!-- Correo -->
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Correo electrónico" required>
                                </div>

                                <!-- Asunto -->
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Asunto"
                                        required>
                                </div>

                                <!-- Mensaje -->
                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="4" placeholder="Escribe tu mensaje" required></textarea>
                                </div>

                                <!-- Botón -->
                                <div class="col-md-12 text-center">

                                    <div class="loading">
                                        Enviando mensaje...
                                    </div>

                                    <div class="error-message"></div>

                                    <div class="sent-message">
                                        ¡Tu mensaje ha sido enviado correctamente!
                                        Gracias por comunicarte con CEO Salud.
                                    </div>

                                    <button type="submit">
                                        Enviar mensaje
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->
                </div>
            </div>
        </section>
        <!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Ceo Salud</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Av. Sucre 1136, Magdalena del Mar, Lima - Perú</p>
                        <p>Lima, Perú</p>
                        <p class="mt-3"><strong>Celular:</strong> <span>+51913557016</span></p>
                        <p><strong>:</strong> <span></span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Accesos directos</h4>
                    <ul>
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#about">Nosotros</a></li>
                        <li><a href="#services">Servicios</a></li>
                        <li><a href="#departments">Especialidades</a></li>
                        <li><a href="#">Politica de la empresa</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Servicios</h4>
                    <ul>
                        <li><a href="#services">Manejo de heridas</a></li>
                        <li><a href="#services">Laboratorio</a></li>
                        <li><a href="#services">Radiografías</a></li>
                        <li><a href="#services">Ecografías</a></li>
                        <li><a href="#services">Colocación y retiro de hieso</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Especialidades</h4>
                    <ul>
                        <li><a href="#departments">Traumatología</a></li>
                        <li><a href="#departments">Medicina Física y Rehabilitación</a></li>
                        <li><a href="#departments">Endocrinología</a></li>
                        <li><a href="#departments">Cardiología</a></li>
                        <li><a href="#departments">Radiología</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Redes sociales</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/ceosalud.peru/" target="_blank">Facebook</a></li>
                        <li><a href="https://www.instagram.com/ceosalud.pe/?hl=es" target="_blank">Instagram</a></li>
                        <li><a href="https://pe.linkedin.com/company/ceo-salud-peru" target="_blank">Linkedin</a></li>
                        <li><a href="https://www.tiktok.com/@ceosalud.pe" target="_blank">Tiktok</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Ceo Salud</strong> <span></span></p>

            {{--
              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
              </div>
              --}}
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>
@endsection
