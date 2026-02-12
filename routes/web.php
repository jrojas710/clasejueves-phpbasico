<?php

use Illuminate\Http\Request;
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
            body {
                margin: 0;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                background: linear-gradient(135deg, #020617, #0f172a);
                font-family: Arial, Helvetica, sans-serif;
                color: white;
            }

            .container {
                width: 100%;
                max-width: 480px;
                padding: 40px;
                border-radius: 20px;
                background: rgba(255, 255, 255, 0.06);
                backdrop-filter: blur(12px);
                border: 1px solid rgba(255, 255, 255, 0.15);
                box-shadow: 0 0 40px rgba(56, 189, 248, 0.4);
                animation: appear 1s ease;
            }

            @keyframes appear {
                from { opacity: 0; transform: translateY(30px); }
                to { opacity: 1; transform: translateY(0); }
            }

            h1 {
                margin: 0 0 10px;
                font-size: 26px;
                background: linear-gradient(90deg, #38bdf8, #a78bfa, #f472b6);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            .subtitle {
                color: #cbd5f5;
                font-size: 14px;
                margin-bottom: 25px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            label {
                display: block;
                margin-bottom: 6px;
                font-size: 13px;
                color: #e5e7eb;
            }

            input, textarea {
                width: 100%;
                padding: 12px 14px;
                border-radius: 10px;
                border: none;
                outline: none;
                background: rgba(255, 255, 255, 0.08);
                color: white;
                font-size: 14px;
            }

            input::placeholder, textarea::placeholder {
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
                background: linear-gradient(90deg, #38bdf8, #a78bfa, #f472b6);
                box-shadow: 0 0 20px rgba(168, 85, 247, 0.6);
                transition: transform 0.2s ease, box-shadow 0.2s ease;
            }

            .btn:hover {
                transform: scale(1.03);
                box-shadow: 0 0 30px rgba(244, 114, 182, 0.9);
            }
        </style>
    </head>
    <body>

        <div class="container">
            <h1>Contáctanos</h1>
            <p class="subtitle">Completa el formulario y te responderemos pronto</p>

            <form action="/store" method="GET">
                <div class="form-group">
                    <label for="email">Correo electrónico *</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="tu@email.com" 
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje *</label>
                    <textarea 
                        id="mensaje" 
                        name="mensaje" 
                        rows="4" 
                        placeholder="Escribe tu mensaje aquí..." 
                        required
                    ></textarea>
                </div>

                <button type="submit" class="btn">Enviar mensaje 🚀</button>
            </form>
        </div>

    </body>
    </html>
    ';
});

Route::get('/store', function(Request $request) {
    print_r($request->all());

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
