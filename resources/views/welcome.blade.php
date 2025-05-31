<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Consultório</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">


</head>

<body class="index-page">

    <header id="header" class="header sticky-top">
        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center">
                        <a href="mailto:contact@example.com">sarom@gmail.com</a>
                    </i>
                    <i class="bi bi-phone d-flex align-items-center ms-4">
                        <span>+25884444444</span>
                    </i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-center">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center me-auto">
                    <h1 class="sitename">Sarom</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="index.html"><i class="bi bi-house-door-fill me-1"></i>Home</a></li>
                        <li><a href="#services"><i class="bi bi-gear-fill me-1"></i>Serviços</a></li>
                        <li><a href="#appointment"><i class="bi bi-calendar-check-fill me-1"></i>Marcar Consulta</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm me-2">
                        <i class="bi bi-box-arrow-in-right me-1"></i>Login
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-person-plus-fill me-1"></i>Registrar
                    </a>
                </div>
            </div>
        </div>
    </header>


    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="Imagem de fundo" data-aos="fade-in">

            <div class="container position-relative">

                <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
                    <h2>BEM-VINDO À SAROM</h2>
                    <p>Promovemos saúde e bem-estar através de uma alimentação equilibrada.</p>
                </div><!-- End Welcome -->

                <div class="content row gy-4">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
                            <h3>Por que escolher a Sarom?</h3>
                            <p>
                                Oferecemos um acompanhamento nutricional personalizado, focado nas suas necessidades e objetivos. Com profissionais qualificados, ajudamos você a alcançar uma vida mais saudável de forma natural e consciente.
                            </p>
                            <div class="text-center">
                                <a href="#about" class="more-btn"><span>Saiba Mais</span> <i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="row gy-4">

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                                        <i class="bi bi-clipboard-data"></i>
                                        <h4>Avaliação Nutricional</h4>
                                        <p>Analisamos seus hábitos alimentares e histórico de saúde para montar um plano sob medida.</p>
                                    </div>
                                </div><!-- End Icon Box -->

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                                        <i class="bi bi-egg-fried"></i>
                                        <h4>Planos Alimentares Personalizados</h4>
                                        <p>Desenvolvemos dietas práticas e equilibradas para o seu dia a dia.</p>
                                    </div>
                                </div><!-- End Icon Box -->

                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                                        <i class="bi bi-people-fill"></i>
                                        <h4>Acompanhamento Contínuo</h4>
                                        <p>Suporte próximo em cada etapa da sua jornada para uma vida mais saudável.</p>
                                    </div>
                                </div><!-- End Icon Box -->

                            </div>
                        </div>
                    </div>
                </div><!-- End Content -->

            </div>

        </section><!-- /Hero Section -->


        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Serviços</h2>
                <p>Conheça nossos serviços voltados para o seu bem-estar e saúde.</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-apple-alt"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Nutrição</h3>
                            </a>
                            <p>Avaliação e orientação nutricional personalizada para promover saúde, qualidade de vida e atingir seus objetivos alimentares.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-5 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Consultas</h3>
                            </a>
                            <p>Atendimento especializado com profissionais qualificados para cuidar da sua saúde com atenção e compromisso.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>
            </div>

        </section><!-- /Services Section -->


        <!-- Secção de Marcação -->
        <section id="appointment" class="appointment section">

            <!-- Título da Secção -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Marcação</h2>
                <p>Agende a sua consulta ou serviço de forma rápida e cómoda.</p>
            </div><!-- Fim do Título da Secção -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <form action="{{ route('consultations.store') }}" method="POST" role="form" class="php-email-form">
                    @csrf

                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                placeholder="O seu nome" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="O seu email" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                placeholder="O seu contacto telefónico" value="{{ old('phone') }}" required>
                            @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="datetime-local" name="appointment_datetime"
                                class="form-control @error('appointment_datetime') is-invalid @enderror"
                                value="{{ old('appointment_datetime') }}" required>
                            @error('appointment_datetime')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="situation" class="form-select @error('situation') is-invalid @enderror" required>
                                <option value="">Selecione o serviço</option>
                                <option value="Nutrição" {{ old('situation') == 'Nutrição' ? 'selected' : '' }}>Nutrição</option>
                                <option value="Consulta" {{ old('situation') == 'Consulta' ? 'selected' : '' }}>Consulta</option>
                            </select>
                            @error('situation')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="doctor" class="form-select @error('doctor') is-invalid @enderror" required>
                                <option value="">Selecione o profissional</option>
                                @foreach($staffList as $staff)
                                <option value="{{ $staff->user->name }}" {{ old('doctor') == $staff->user->name  ? 'selected' : '' }}>{{ $staff->user->name }}</option>
                                @endforeach
                            </select>
                            @error('doctor')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea name="message" rows="5" class="form-control @error('message') is-invalid @enderror"
                            placeholder="Mensagem (opcional)">{{ old('message') }}</textarea>
                        @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit">Efetuar Marcação</button>
                    </div>
                </form>


            </div>

        </section><!-- /Secção de Marcação -->




        <!-- Secção de Contactos -->
        <section id="contact" class="contact section">

            <!-- Título da Secção -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contactos</h2>
                <p>Estamos ao seu dispor para qualquer dúvida ou sugestão. Contacte-nos!</p>
            </div><!-- Fim do Título da Secção -->

            <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.823691251718!2d32.57474131523091!3d-25.969322183633454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1efd05b9445b3d65%3A0x379d8d4f8a7d8c7!2sMaputo%2C%20Mo%C3%A7ambique!5e0!3m2!1spt-PT!2smz!4v1676961268712!5m2!1spt-PT!2smz"
                    frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- Fim do Google Maps -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Localização</h3>
                                <p>Av. Julius Nyerere, Maputo, Moçambique</p>
                            </div>
                        </div><!-- Fim do Item de Informação -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Ligue-nos</h3>
                                <p>+258 21 123 4567</p>
                            </div>
                        </div><!-- Fim do Item de Informação -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>info@exemplo.co.mz</p>
                            </div>
                        </div><!-- Fim do Item de Informação -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="O seu nome" required>
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="O seu email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Assunto" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">A enviar...</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">A sua mensagem foi enviada. Obrigado!</div>

                                    <button type="submit">Enviar Mensagem</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- Fim do Formulário de Contacto -->

                </div>

            </div>

        </section><!-- /Secção de Contactos -->


    </main>

    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Medilab</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Av. Julius Nyerere</p>
                        <p>Maputo, Moçambique</p>
                        <p class="mt-3"><strong>Telefone:</strong> <span>+258 21 123 4567</span></p>
                        <p><strong>Email:</strong> <span>info@sarom.co.mz</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Serviços</a></li>
                        <li><a href="#">Marcar Consulta</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Serviços</h4>
                    <ul>
                        <li><a href="#">Nutrição</a></li>
                        <li><a href="#">Consultas</a></li>
                    </ul>
                </div>

                <!-- Pode remover as outras colunas ou deixar vazias se preferir -->
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>&nbsp;</h4>
                    <ul></ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>&nbsp;</h4>
                    <ul></ul>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Sarom</strong> <span>Todos os direitos reservados</span></p>
        </div>

    </footer>


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script> -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>