<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/cube-icon.svg" type="image/x-icon">
    <title>Crear Curso</title>
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/aside.css">
    <link rel="stylesheet" href="./css/vercurso.css">
    <link rel="stylesheet" href="./css/crearcurso.css">
</head>

<body>
    <header class="header">
        <div class="header__container">
            <div class="header__btns">
                <button class="header__back" title="Regresar" onClick="navigateTo()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 12l14 0"></path>
                        <path d="M5 12l6 6"></path>
                        <path d="M5 12l6 -6"></path>
                    </svg>
                    <span>Regresar</span>
                </button>
            </div>
            <h2 class="header__title">Crear Curso</h2>
            <p class="header__teacher">Administrador de Creación de Clases</p>
        </div>

        <svg class="header__svg" id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 150"
            version="1.1" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(1, 22, 64, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(1, 22, 64, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)"
                d="M0,105L240,100C480,95,960,85,1440,67.5C1920,50,2400,25,2880,17.5C3360,10,3840,20,4320,20C4800,20,5280,10,5760,10C6240,10,6720,20,7200,30C7680,40,8160,50,8640,65C9120,80,9600,100,10080,107.5C10560,115,11040,110,11520,105C12000,100,12480,95,12960,82.5C13440,70,13920,50,14400,37.5C14880,25,15360,20,15840,30C16320,40,16800,65,17280,72.5C17760,80,18240,70,18720,57.5C19200,45,19680,30,20160,22.5C20640,15,21120,15,21600,30C22080,45,22560,75,23040,77.5C23520,80,24000,55,24480,57.5C24960,60,25440,90,25920,85C26400,80,26880,40,27360,32.5C27840,25,28320,50,28800,65C29280,80,29760,85,30240,85C30720,85,31200,80,31680,67.5C32160,55,32640,35,33120,42.5C33600,50,34080,85,34320,102.5L34560,120L34560,150L34320,150C34080,150,33600,150,33120,150C32640,150,32160,150,31680,150C31200,150,30720,150,30240,150C29760,150,29280,150,28800,150C28320,150,27840,150,27360,150C26880,150,26400,150,25920,150C25440,150,24960,150,24480,150C24000,150,23520,150,23040,150C22560,150,22080,150,21600,150C21120,150,20640,150,20160,150C19680,150,19200,150,18720,150C18240,150,17760,150,17280,150C16800,150,16320,150,15840,150C15360,150,14880,150,14400,150C13920,150,13440,150,12960,150C12480,150,12000,150,11520,150C11040,150,10560,150,10080,150C9600,150,9120,150,8640,150C8160,150,7680,150,7200,150C6720,150,6240,150,5760,150C5280,150,4800,150,4320,150C3840,150,3360,150,2880,150C2400,150,1920,150,1440,150C960,150,480,150,240,150L0,150Z">
            </path>
            <defs>
                <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                    <stop stop-color="rgba(255, 100, 146, 1)" offset="0%"></stop>
                    <stop stop-color="rgba(255, 100, 146, 1)" offset="100%"></stop>
                </linearGradient>
            </defs>
            <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)"
                d="M0,90L240,87.5C480,85,960,80,1440,65C1920,50,2400,25,2880,25C3360,25,3840,50,4320,62.5C4800,75,5280,75,5760,82.5C6240,90,6720,105,7200,115C7680,125,8160,130,8640,125C9120,120,9600,105,10080,85C10560,65,11040,40,11520,42.5C12000,45,12480,75,12960,77.5C13440,80,13920,55,14400,55C14880,55,15360,80,15840,87.5C16320,95,16800,85,17280,90C17760,95,18240,115,18720,107.5C19200,100,19680,65,20160,47.5C20640,30,21120,30,21600,40C22080,50,22560,70,23040,85C23520,100,24000,110,24480,117.5C24960,125,25440,130,25920,127.5C26400,125,26880,115,27360,115C27840,115,28320,125,28800,110C29280,95,29760,55,30240,40C30720,25,31200,35,31680,55C32160,75,32640,105,33120,105C33600,105,34080,75,34320,60L34560,45L34560,150L34320,150C34080,150,33600,150,33120,150C32640,150,32160,150,31680,150C31200,150,30720,150,30240,150C29760,150,29280,150,28800,150C28320,150,27840,150,27360,150C26880,150,26400,150,25920,150C25440,150,24960,150,24480,150C24000,150,23520,150,23040,150C22560,150,22080,150,21600,150C21120,150,20640,150,20160,150C19680,150,19200,150,18720,150C18240,150,17760,150,17280,150C16800,150,16320,150,15840,150C15360,150,14880,150,14400,150C13920,150,13440,150,12960,150C12480,150,12000,150,11520,150C11040,150,10560,150,10080,150C9600,150,9120,150,8640,150C8160,150,7680,150,7200,150C6720,150,6240,150,5760,150C5280,150,4800,150,4320,150C3840,150,3360,150,2880,150C2400,150,1920,150,1440,150C960,150,480,150,240,150L0,150Z">
            </path>
        </svg>
    </header>
    <main class="main">
        <form class="form">
            <div class="flex-column">
                <label>Nombre completo del curso</label>
            </div>
            <div class="inputForm">
                <input placeholder="Ingresa el curso" class="input" type="text">
            </div>

            <div class="flex-column">
                <label>Nombre corto del curso</label>
            </div>
            <div class="inputForm">
                <input placeholder="Ingresa el curso" class="input" type="text">
            </div>

            <div class="flex-column checkbox">
                <label>Visibilidad del curso</label>
                <input class="input" type="checkbox">
            </div>

            <div class="flex-column">
                <label>Fecha de inicio del curso</label>
            </div>
            <div class="inputForm">
                <input placeholder="Ingresa el curso" class="input" type="date">
            </div>

            <div class="flex-column">
                <label>Fecha de fin del curso</label>
            </div>
            <div class="inputForm">
                <input placeholder="Ingresa el curso" class="input" type="date">
            </div>

            <button class="button-submit">Guardar cambios y mostrar</button>

            </div>
        </form>
    </main>
    <script src="./js/crearcurso.js"></script>
</body>

</html>