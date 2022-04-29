




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login - MagtimusPro</title>
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>

    <div class="container-all">

        <div class="ctn-form">
            <img src="images/logo-magtimus-small.png" alt="" class="logo">

            <h1 class="title">Iniciar Sesión</h1>

            <form action="{{ url('api/login') }}" method="POST">

                <label for="">Email</label>
                <input type="text" name="usuario">
                <span class="msg-error"></span>
                <label for="">Contraseña</label>
                <input type="password" name="clave">
                <span class="msg-error"></span>
                <input type="submit"  value="login">

            </form>

        </div>

        <div class="ctn-text">
            <div class="capa"></div>
            <h1 class="title-description">Lorem ipsum dolor sit amet.</h1>
            <p class="text-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat natus dolore ea dicta molestias totam iusto perspiciatis iste obcaecati quod dolor, eaque qui asperiores? Molestias ad nemo placeat est quidem?</p>
        </div>

    </div>

</body>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i');


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
    text-decoration: none;
}

body {
    background: linear-gradient(90deg, #BF4222, #E30F87);
    padding: 20px;
}

.container-all {
    width: 100%;
    max-width: 1000px;
    margin: auto;
    margin-top: 100px;
    display: flex;
    border-radius: 20px;
    overflow: hidden;
}

.ctn-form {
    width: 80%;
    padding: 40px;
    background: #f7f7f7;
}

.logo {
    width: 150px;
    display: block;
    margin: auto;
}

.title {
    text-align: center;
    margin-top: 20px;
    font-weight: 300;
    color: #7a7a7a;
}

label {
    display: block;
    margin-top: 30px;
    font-size: 20px;
    font-weight: 300;
    color: #7a7a7a;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    height: 30px;
    background: rgba(0, 0, 0, 0);
    border: 0px;
    outline: 0px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.12);
    color: #E30F87;
    font-size: 16px;
}

input[type="submit"] {
    width: 100%;
    height: 50px;
    margin-top: 60px;
    color: white;
    border: 0px;
    background: linear-gradient(90deg, #BF4222, #E30F87);
    font-weight: 300;
    cursor: pointer;
    font-size: 18px;
}

input[type="submit"]:hover {
    background: linear-gradient(90deg, #E30F87, #BF4222);
}


.text-footer {
    display: block;
    margin-top: 100px;
    text-align: center;
    color: #7a7a7a;
    font-weight: 300;
}

.text-footer a {
    color: #029EE1;
    font-weight: 500;
}

/* LADO DERECHO */


.ctn-text {
    width: 100%;
    background-image: url(../images/img1.jpg);
    background-position: center;
    background-size: cover;
    padding: 40px;
    position: relative;
}

.capa {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: linear-gradient(90deg, #E30F87, #BF4222);
    opacity: 0.8;
}

.title-description {
    position: relative;
    top: 80px;
    color: white;
    font-weight: 300;
    font-size: 40px;
}

.text-description {
    position: relative;
    top: 110px;
    color: white;
    font-size: 18px;
    font-weight: 200;
}

/* TEXTO DE ERROR */

.msg-error {
    color: red;
    display: block;
    margin-top: 10px;
}


/* BIENVEBIDA  */


.ctn-welcome {
    width: 100%;
    max-width: 800px;
    text-align: center;
    padding: 40px;
    margin: auto;
    margin-top: 100px;
    background: white;
    border-radius: 20px;
}


.logo-welcome {
    width: 200px;
    margin: 20px;
}

.title-welcome {
    font-weight: 400;
    font-size: 40px;
    margin-top: 20px;
}

.title-welcome b {
    color: #BF4222;
}


.close-sesion {
    width: 100%;
    max-width: 600px;
    margin: auto;
    display: block;
    padding: 20px;
    margin-top: 40px;
    background: linear-gradient(90deg, #BF4222, #E30F87);
    color: white;
    font-size: 20px;
    font-weight: 300;
}

.close-sesion:hover {
    background: linear-gradient(90deg, #E30F87, #BF4222);
}



/* RESPONSIVE */


@media screen and (max-width: 800px) {

    .ctn-text {
        display: none;
    }

    .ctn-form {
        margin: auto;
        width: 100%;
        background: white;
    }
}

@media screen and (max-width: 500px) {

    .title-welcome {
        font-weight: 400;
        font-size: 30px;
        margin-top: 20px;
    }

}

</style>
</html>
