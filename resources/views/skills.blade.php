<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="img/Title.png" type="image/x-icon" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/responsiveStyle.css" />
        <link rel="stylesheet" href="css/animation.css" />
        <title>Muhammad Azis | Web Dev</title>
    </head>

    <body>
        <!-- Navbar/header -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand me-auto" href="#">Maetr.</a>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel" style="width: 300px">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Maetr.</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" aria-current="page" href="/"
                                    data-section="hero">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="/Services" data-section="services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="/Portofolios"
                                    data-section="portofolios">Portofolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2 active" href="/Skills" data-section="skills">Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="/Contacts" data-section="contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="download/MyCurriculumVitae.pdf" class="login-button">Resume</a>
                <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Skills & Education -->
        <section id="skills" class="mt-5">
            <div class="skills container">
                <h3 class="pre-title">Learning Path</h3>
                <h1 class="section-title">Education & Skills</h1>

                <div class="skills-grid">
                    <div class="skills-left">
                        {{-- Education 1 --}}
                        <div class="education">
                            <div class="line">
                                <div></div>
                            </div>

                            <div class="education-info">
                                <h4 class="education-title">Universitas Teknologi Digital Indonesia</h4>
                                <p>Teknologi Informasi - Teknik Informatika</p>
                                <h4 class="education-years">2021 - present</h4>
                            </div>
                        </div>

                        {{-- Education 2 --}}
                        <div class="education">
                            <div class="line">
                                <div></div>
                            </div>

                            <div class="education-info">
                                <h4 class="education-title">SMAN 4 PARE-PARE Sulawesi Selatan</h4>
                                <p>Ilmu Pengetahuan Alam</p>
                                <h4 class="education-years">2018 - 2021</h4>
                            </div>
                        </div>


                    </div>
                    <div class="skills-right">
                        <p>The following are the skills that I have learned from lecturers and self-taught until now.
                        </p>
                        <div class="skills-list">
                                <ul>
                             <?php
                                $directory = 'img/logo'; // Ganti dengan path folder Anda
                                $files = scandir($directory);
                                foreach ($files as $file) {
                                    if ($file !== '.' && $file !== '..' && preg_match('/\.(jpg|jpeg|png|gif|svg)$/i', $file)) {
                                       echo '<li><img src="' . $directory . '/' . $file . '" alt="' . $file . '" style="max-width: 50px; height: 50px;"></li>';
                                    }
                                }
                                ?>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#21262b" fill-opacity="1"
                d="M0,160L80,186.7C160,213,320,267,480,266.7C640,267,800,213,960,202.7C1120,192,1280,224,1360,240L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
        <footer>
            <div class="footer-icons">
                <!-- Instagram -->
                <a href="https://www.instagram.com/m.zhys_/"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg></a>

                <!-- Twitter -->
                <a href="https://twitter.com/Maetr_22"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                    </svg></a>

                <!-- Github -->
                <a href="https://github.com/Etrama22"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24">
                        <path
                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                    </svg></a>
            </div>
            <p>&#169; 2024 - Made by Muhammad Azis Etrama</p>
        </footer>

        <!-- End Footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const skillsSection = document.querySelector("#skills");
                const skillsLeft = document.querySelector(".skills-left");
                const skillsRight = document.querySelector(".skills-right");
                const educationItems = document.querySelectorAll(".education");

                // Tambahkan kelas animasi ke elemen yang sesuai
                skillsSection.classList.add("animate-fadeIn");
                skillsLeft.classList.add("animate-scaleIn");
                skillsRight.classList.add("animate-slideInBottom");
                educationItems.forEach(function(item) {
                    item.classList.add("animate-rotateIn");
                });
            });
        </script>
    </body>

</html>
