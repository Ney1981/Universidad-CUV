<?php  
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
  $url = "https://";   
else  
 $url = "http://";   
 // Append the host(domain name, ip) to the URL.   
 $url.= $_SERVER['HTTP_HOST'];   
    
 // Append the requested resource location to the URL   
 $url.= $_SERVER['REQUEST_URI'];    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/cube-icon.svg" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<!-- Simula el guardado de token en el SessionStorage -->
<script>
    const getToken = sessionStorage.getItem("token");

    if(getToken) window.location.href = "areapersonal.php";
</script>

<body>
    <main class="main">
        <div class="container">
            <section class="formulario">
                <div class="formulario__header" onClick="goHome()">
                    <img src="./assets/images/cube-icon.svg" alt="Logo" class="formulario__img">
                    <h2 class="formulario__title">Aula Virtual</h2>
                </div>
                <div class="formulario__legend">
                    <p class="formulario__description">
                        Explora nuestra aula virtual premium, donde brillan docentes expertos y la tecnología de
                        vanguardia. Aprende de manera interactiva y envolvente, donde la calidad se encuentra con la
                        comodidad.
                    </p>
                </div>
                <form action="POST" class="formulario__form">
                    <label for="username" class="formulario__label">
                        <span>Usuario *</span>
                        <input placeholder="maferarq" id="username" class="formulario__input" type="text" required>
                    </label>
                    <label for="password" class="formulario__label">
                        <span>Contraseña *</span>
                        <input id="password" placeholder="*************" class="formulario__input" type="password"
                            required>
                    </label>
                    <!-- DESCOMENTAR - ORIGINAL, EL OTRO ES PARA PRUEBA DE GUARDAR EL TOKEN -->
                    <!-- <button type="submit" class="formulario__btn">Iniciar Sesión</button> -->
                    <button type="button" class="formulario__btn" onClick="setToken()">Iniciar Sesión</button>

                    <p class="formulario__signin">¿Aún no tienes una cuenta? <a href="#">Registrarse</a> </p>
                </form>

            </section>
            <div class="image">
                <img src="./assets/images/cube-icon.svg" alt="Logo" class="image__img">
                <div class="image__legend">
                    <h2 class="image__title">Docentes, apasionados y altamente calificados</h2>
                    <p class="image__description">Expertos en guiar a los estudiantes hacia un aprendizaje
                        significativo.
                        Con tecnología de última generación, cada clase se convierte en una experiencia interactiva y
                        envolvente.</p>
                </div>
            </div>
        </div>
    </main>
    <script src="./js/login.js"></script>
</body>

</html>