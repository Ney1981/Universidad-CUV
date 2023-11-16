<!-- En esta página se maneja en sentido general, 
solo se descrimina en algunas opciones dependiendo del perfil -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./assets/images/cube-icon.svg" type="image/x-icon">
    <title>Area Personal</title>
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/aside.css">
    <link rel="stylesheet" href="./css/dashboard.css">
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
                        <a href="areapersonal.php" class="aside__item aside__item--active">
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
                        <a href="cursos.php" class="aside__item">
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
        <main class="dashboard">
            <section class="dashboard__header">
                <h1 class="dashboard__title">¡Hola, Erik Rhodes! 👋</h1>
                <p class="dashboard__welcome">¡Bienvenido al aula virtual! Estamos emocionados de tenerte aquí.
                    ¡Comencemos a aprender y crecer juntos! <br>
                    Una experiencia educativa de calidad, diseñada para enriquecer sus vidas, expandir sus horizontes y
                    prepararlos para un futuro lleno de oportunidades.</p>

                <div class="dashboard__box">
                    <div class="dashboard__card">
                        <img class="dashboard__icon" src="./assets/icons/certificate.png" alt="icon">
                        <div class="dashboard__description">
                            <p class="dashboard__text--card">Cursos Actuales</p>
                            <p class="dashboard__text--info">10</p>
                        </div>
                    </div>
                    <div class="dashboard__card">
                        <img class="dashboard__icon" src="./assets/icons/calendar-event.png" alt="icon">
                        <div class="dashboard__description">
                            <p class="dashboard__text--card">Eventos disponibles</p>
                            <p class="dashboard__text--info">40</p>
                        </div>
                    </div>
                    <div class="dashboard__card">
                        <img class="dashboard__icon" src="./assets/icons/checklist.png" alt="icon">
                        <div class="dashboard__description">
                            <p class="dashboard__text--card">Tareas disponibles</p>
                            <p class="dashboard__text--info">8</p>
                        </div>
                    </div>
                    <div class="dashboard__card">
                        <img class="dashboard__icon" src="./assets/icons/school.png" alt="icon">
                        <div class="dashboard__description">
                            <p class="dashboard__text--card">Docentes Actuales</p>
                            <p class="dashboard__text--info">40</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="time">
                <article class="line">
                    <h3 class="line__title">Línea de tiempo</h3>
                    <div class="line__divisor"></div>
                    <div class="line__course">
                        <div class="line__card">
                            <img src="https://images.pexels.com/photos/1652544/pexels-photo-1652544.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Course" class="line__img">
                            <div class="line__description">
                                <h2 class="line__course__title">Programación Orientada a Objetos</h2>
                                <p class="line__course__teacher">Mauricio Alonso Villalba</p>
                                <p class="line__course__room">Salón 215</p>
                                <p class="line__course__date">19/12/2023 9:15 a.m</p>
                                <button class="line__course__btn" onClick="navigateTo()">Ver curso</button>
                            </div>
                        </div>
                        <div class="line__divisor"></div>
                        <div class="line__card">
                            <img src="https://images.pexels.com/photos/1652544/pexels-photo-1652544.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="Course" class="line__img">
                            <div class="line__description">
                                <h2 class="line__course__title">Estructura de datos</h2>
                                <p class="line__course__teacher">Martha Yaneth Segura</p>
                                <p class="line__course__room">Salón 120</p>
                                <p class="line__course__date">05/12/2023 10:15 a.m</p>
                                <button class="line__course__btn" onClick="navigateTo()">Ver curso</button>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="date">
                    <div id="monthName"></div>
                    <div id="dayName"></div>
                    <div id="dayNumber"></div>
                    <div id="year"></div>
                </article>
            </section>
            <section class="event">
                <h2 class="event__title">Eventos</h2>
                <article class="event__container">
                    <div class="container-calendar">
                        <div class="calendar">
                            <header>
                                <h2 id="date-current">April</h2>
                                <a class="btn-prev fontawesome-angle-left" href="#"></a>
                                <a class="btn-next fontawesome-angle-right" href="#"></a>
                            </header>
                            <table>
                                <thead>
                                    <tr>
                                        <td>Lun</td>
                                        <td>Mar</td>
                                        <td>Mier</td>
                                        <td>Jue</td>
                                        <td>Vie</td>
                                        <td>Sab</td>
                                        <td>Dom</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="prev-month">29</td>
                                        <td class="prev-month">30</td>
                                        <td class="prev-month">31</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td class="event">9</td>
                                        <td class="current-day event">10</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>13</td>
                                        <td>14</td>
                                        <td>15</td>
                                        <td>16</td>
                                        <td>17</td>
                                        <td>18</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>20</td>
                                        <td>21</td>
                                        <td class="event">22</td>
                                        <td>23</td>
                                        <td>24</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>27</td>
                                        <td>28</td>
                                        <td>29</td>
                                        <td>30</td>
                                        <td class="next-month">1</td>
                                        <td class="next-month">2</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div> <!-- end calendar -->

                    </div> <!-- end container -->
                    <div class="event__new">
                        <h1 class="event__text">Campus virtual</h1>
                    </div>
                </article>
            </section>
        </main>
    </div>
    <script src="./js/dashboard.js"></script>
    <script src="./js/area-personal.js"></script>
</body>

</html>