<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return "Juan Rojas";
});

Route::get('/contactanos', function () {

    echo '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Contacto Cinemático</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            * {
                box-sizing: border-box;
                font-family: Arial, Helvetica, sans-serif;
            }

            body {
                margin: 0;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background: radial-gradient(circle at top, #0f172a, #020617);
                color: white;
                overflow: hidden;
            }

            .bg-glow {
                position: absolute;
                width: 400px;
                height: 400px;
                background: radial-gradient(circle, rgba(99,102,241,0.35), transparent 70%);
                filter: blur(80px);
                animation: float 8s ease-in-out infinite alternate;
            }

            .bg-glow.two {
                top: 10%;
                left: 10%;
                background: radial-gradient(circle, rgba(236,72,153,0.35), transparent 70%);
                animation-delay: 2s;
            }

            .bg-glow.three {
                bottom: 10%;
                right: 10%;
                background: radial-gradient(circle, rgba(34,211,238,0.35), transparent 70%);
                animation-delay: 4s;
            }

            @keyframes float {
                from { transform: translateY(0px); }
                to { transform: translateY(-40px); }
            }

            .panel {
                position: relative;
                z-index: 10;
                width: 100%;
                max-width: 480px;
                padding: 40px;
                border-radius: 20px;
                background: rgba(255,255,255,0.05);
                backdrop-filter: blur(12px);
                border: 1px solid rgba(255,255,255,0.15);
                box-shadow: 0 0 40px rgba(99,102,241,0.3);
                animation: enter 1s ease;
            }

            @keyframes enter {
                from { opacity: 0; transform: scale(0.9); }
                to { opacity: 1; transform: scale(1); }
            }

            .panel h1 {
                margin: 0 0 10px;
                font-size: 28px;
                letter-spacing: 1px;
                background: linear-gradient(90deg, #818cf8, #22d3ee, #ec4899);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .panel p {
                margin-bottom: 25px;
                color: #cbd5f5;
                font-size: 14px;
            }

            .field {
                margin-bottom: 20px;
            }

            .field input,
            .field textarea {
                width: 100%;
                padding: 12px 14px;
                border-radius: 10px;
                border: none;
                outline: none;
                background: rgba(255,255,255,0.08);
                color: white;
                font-size: 14px;
            }

            .field input::placeholder,
            .field textarea::placeholder {
                color: #94a3b8;
            }

            .btn {
                width: 100%;
                padding: 14px;
                border-radius: 12px;
                border: none;
                cursor: pointer;
                font-weight: bold;
                letter-spacing: 1px;
                color: #020617;
                background: linear-gradient(90deg, #818cf8, #22d3ee, #ec4899);
                box-shadow: 0 0 20px rgba(99,102,241,0.6);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

            .btn:hover {
                transform: scale(1.03);
                box-shadow: 0 0 30px rgba(236,72,153,0.9);
            }

            .footer {
                text-align: center;
                margin-top: 20px;
                font-size: 12px;
                color: #94a3b8;
                opacity: 0.8;
            }
        </style>
    </head>
    <body>

        <div class="bg-glow"></div>
        <div class="bg-glow two"></div>
        <div class="bg-glow three"></div>

        <div class="panel">
            <h1>Transmisión Abierta</h1>
            <p>Envía tu señal al sistema. Nuestro equipo recibirá tu mensaje en breve.</p>

            <form>
                <div class="field">
                    <input type="email" placeholder="Canal de contacto (email)" required>
                </div>

                <div class="field">
                    <textarea rows="4" placeholder="Escribe tu mensaje cifrado..." required></textarea>
                </div>

                <button class="btn" type="submit">ENVIAR SEÑAL</button>
            </form>

            <div class="footer">
                Sistema de comunicación activo · 24/7
            </div>
        </div>

    </body>
    </html>
    ';
});


Route::get('/php-basico', function () {

    echo "<h1 style= 'color:red;'> Aprendiendo PHP </h1>";

    $name = "Juan Rojas";
    $height = 1.81;
    $isLogin = true;
    $age = 26;

    echo "<h2> " . $name . " </h4> ";
    echo "<p> " . $name . " </p> ";


    echo "<br><br><br> **************** ESTRUCTURAS DE CONTROL **************** <br><br>";
    $message = "Soy $name, tengo $age años. " . valadateAge($age);
    $message .= $isLogin ? " Estoy logueado" : " No estoy logueado";
    echo $message;

    echo "<br><br><br> **************** ESTRUCTURAS DE DATOS **************** <br><br>";

    $pc = [
        "name" => "pc Gamer core9",
        "price" => 6000,
        "marca" => "Lenovo"
    ];

    $teclado = [
        "name" => "Teclado",
        "price" => 200,
        "marca" => "Asus"
    ];

    $listaProductos =[$pc, $teclado];

    foreach ($listaProductos as $item){
        echo $item['name'] . "<br>";
    }



});

function valadateAge($age){
    if ($age >= 18){
        return " Soy mayor de edad.";
    }else{
        return " Soy menor de edad.";
    }
}
