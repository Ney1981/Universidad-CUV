<!-- En esta página se maneja en sentido general, 
solo se descrimina en algunas opciones dependiendo del perfil -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/cube-icon.svg" type="image/x-icon">
    <title>Mis Cursos</title>
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/aside.css">
    <link rel="stylesheet" href="./css/curso.css">
</head>

<body>
    <div class="container">
        <div class="container__aside">
            <aside class="aside">
                <div class="aside__avatar">
                    <img src="https://randomuser.me/api/portraits/men/64.jpg" alt="Avatar user" class="aside__img">
                    <div class="aside__user">
                        <h2 class="aside__name">Erik Rhodes</h2>
                        <span class="aside__profile">Estudiante</span>
                    </div>
                </div>
                <div class="aside__line"></div>
                <nav class="aside__nav">
                    <ul class="aside__list">
                        <!-- - Esto se puede utilizar un ciclo para imprimir el item
                        -  Activa el item donde esta ubicado -->
                        <a href="areapersonal.php" class="aside__item">
                            <svg class="aside__icon" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-books" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z">
                                </path>
                                <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z">
                                </path>
                                <path d="M5 8h4"></path>
                                <path d="M9 16h4"></path>
                                <path
                                    d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z">
                                </path>
                                <path d="M14 9l4 -1"></path>
                                <path d="M16 16l3.923 -.98"></path>
                            </svg>
                            <span class="aside__text">Área Personal</span>
                        </a>
                        <a href="cursos.php" class="aside__item aside__item--active">
                            <svg class="aside__icon" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-certificate" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M15 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                <path
                                    d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                </path>
                                <path d="M6 9l12 0"></path>
                                <path d="M6 12l3 0"></path>
                                <path d="M6 15l2 0"></path>
                            </svg>
                            <span class="aside__text">Mis Cursos</span>
                        </a>

                        <a href="crearcurso.php" class="aside__item">
                            <svg class="aside__icon" xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-certificate" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M15 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                                <path
                                    d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73">
                                </path>
                                <path d="M6 9l12 0"></path>
                                <path d="M6 12l3 0"></path>
                                <path d="M6 15l2 0"></path>
                            </svg>
                            <span class="aside__text">Crear Curso</span>
                        </a>
                    </ul>

                </nav>

                <a class="aside__logout">
                    <svg class="aside__icon" xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-logout-2" width="24" height="24" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2">
                        </path>
                        <path d="M15 12h-12l3 -3"></path>
                        <path d="M6 15l-3 -3"></path>
                    </svg>
                    <span class="aside__text">Cerrar Sesión</span>
                </a>
            </aside>
        </div>
        <main class="cursos">
            <section class="banner">
                <h1 class="banner__title">Logros</h1>
                <div class="banner__container">
                    <div class="banner__profile">
                        <div class="aside__avatar banner__avatar">
                            <img src="https://randomuser.me/api/portraits/men/64.jpg" alt="Avatar user"
                                class="aside__img">
                            <div class="aside__user">
                                <h2 class="aside__name banner__name">Erik Rhodes</h2>
                                <span class="aside__profile banner__text">Tecnología en desarrollo de software.</span>
                            </div>
                        </div>
                        <h2 class="banner__progress--title">Progreso del curso</h2>
                        <div class="banner__progress">
                            <div class="range">
                                <div class="range__content">
                                    <div class="range__slider">
                                        <div class="range__slider-line" id="range-line"></div>
                                    </div>

                                    <div class="range__thumb" id="range-thumb">
                                        <div class="range__value">
                                            <span class="range__value-number" id="range-number">50%</span>
                                        </div>
                                    </div>

                                    <input disabled type="range" class="range__input" id="slider" min="0" max="100"
                                        value="50" step="1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner__skills">
                        <div class="banner__card">
                            <img src="./assets/icons/folder.gif" alt="folder" class="banner__img">
                            <div class="banner__card__body">
                                <span class="banner__card__number">10</span>
                                <span class="banner__card__name">Proyectos</span>
                            </div>
                        </div>
                        <div class="banner__card">
                            <img src="./assets/icons/list.gif" alt="folder" class="banner__img">
                            <div class="banner__card__body">
                                <span class="banner__card__number">15</span>
                                <span class="banner__card__name">Lugar de grupo</span>
                            </div>
                        </div>
                        <div class="banner__card">
                            <img src="./assets/icons/date.gif" alt="folder" class="banner__img">
                            <div class="banner__card__body">
                                <span class="banner__card__number">4</span>
                                <span class="banner__card__name">Fechas importantes</span>
                            </div>
                        </div>
                        <div class="banner__card">
                            <img src="./assets/icons/check.gif" alt="folder" class="banner__img">
                            <div class="banner__card__body">
                                <span class="banner__card__number">15</span>
                                <span class="banner__card__name">Tareas hechas</span>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="cursos__container">

                <h1 class="cursos__title">Mis cursos</h1>
                <h3 class="cursos__description">Vista general de curso</h3>

                <div class="cursos__box">
                    <div class="current">
                        <div class="cursos__card">
                            <img src="https://images.pexels.com/photos/5428260/pexels-photo-5428260.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Imagen curso" class="cursos__img">
                            <div class="cursos__body">
                                <p class="cursos__name">Análisis de datos</p>
                                <p class="cursos__category">Categoria 1</p>
                                <span class="cursos__label">Exclusivo para estudiantes</span>
                            </div>
                        </div>
                        <div class="cursos__card">
                            <img src="https://images.pexels.com/photos/5428260/pexels-photo-5428260.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Imagen curso" class="cursos__img">
                            <div class="cursos__body">
                                <p class="cursos__name">Análisis de datos</p>
                                <p class="cursos__category">Categoria 1</p>
                                <span class="cursos__label">Exclusivo para estudiantes</span>
                            </div>
                        </div>
                        <div class="cursos__card">
                            <img src="https://images.pexels.com/photos/5428260/pexels-photo-5428260.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Imagen curso" class="cursos__img">
                            <div class="cursos__body">
                                <p class="cursos__name">Análisis de datos</p>
                                <p class="cursos__category">Categoria 1</p>
                                <span class="cursos__label">Exclusivo para estudiantes</span>
                            </div>
                        </div>
                        <div class="cursos__card">
                            <img src="https://images.pexels.com/photos/5428260/pexels-photo-5428260.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Imagen curso" class="cursos__img">
                            <div class="cursos__body">
                                <p class="cursos__name">Análisis de datos</p>
                                <p class="cursos__category">Categoria 1</p>
                                <span class="cursos__label">Exclusivo para estudiantes</span>
                            </div>
                        </div>
                        <div class="cursos__card">
                            <img src="https://images.pexels.com/photos/5428260/pexels-photo-5428260.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Imagen curso" class="cursos__img">
                            <div class="cursos__body">
                                <p class="cursos__name">Análisis de datos</p>
                                <p class="cursos__category">Categoria 1</p>
                                <span class="cursos__label">Exclusivo para estudiantes</span>
                            </div>
                        </div>
                    </div>
                </div>

            </section>




        </main>
    </div>
    <script src="./js/cursos.js"></script>
</body>

</html>