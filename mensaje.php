<?php
session_start();
$archivo_notas = 'notas.json';

// Crear el archivo si no existe
if (!file_exists($archivo_notas)) {
    file_put_contents($archivo_notas, json_encode([]));
}

// Cargar las notas existentes
$notas = json_decode(file_get_contents($archivo_notas), true);

// Guardar nueva nota
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nota'])) {
    $nueva_nota = [
        'texto' => htmlspecialchars(trim($_POST['nota'])),
        'fecha' => date("Y-m-d H:i")
    ];
    $notas[] = $nueva_nota;
    file_put_contents($archivo_notas, json_encode($notas, JSON_PRETTY_PRINT));
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Feliz 1 Año y 10 Meses ❤️</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>❤️ Feliz 1 Año y 10 Meses ❤️</h1>
    <p class="subtitulo">Hace ya 22 meses que comenzó nuestra historia...</p>

    <div class="mensaje">
    <p>Hoy es <strong>15 de mayo</strong>, y eso significa que estamos celebrando un día muy especial en nuestra historia de amor. ❤️</p>

    <p>Mi cielo… hoy ya son <strong>1 año y 10 meses</strong>, ¡¡22 meses juntos!! 🥺💛 Qué rápido ha pasado el tiempo, ¿verdad?</p>

    <p>Aunque no todo ha sido perfecto, seguimos aquí… juntos. Y eso para mí ya lo dice todo.</p>

    <p>Sé que no han sido meses fáciles. Hemos tenido días buenos, otros no tanto, y momentos en los que ni siquiera sabíamos cómo seguir… pero aquí estamos, mi amor. Porque a pesar de nuestras diferencias, de nuestras formas tan distintas de ver y sentir las cosas, <strong>seguimos eligiéndonos</strong>. Y eso tiene mucho valor.</p>

    <p>Gracias por todo tu amor, por tu paciencia, por quedarte incluso cuando a veces no soy fácil de entender.  
    Sé que tengo mis días complicados, mis enredos mentales y mis silencios raros… pero <strong>no te rindas, ¿sí?</strong></p>

    <p>Tú eres mi lugar seguro, mi persona favorita, mi paz cuando todo parece ruido.</p>

    <p><strong>Estoy tan orgulloso de la mujer que eres</strong>. De cómo luchas, de cómo sueñas, de cómo te esfuerzas…  
    De cómo, incluso en medio de tus propias batallas, tienes amor para dar.</p>

    <p>Y yo quiero estar aquí siempre, para aplaudir cada uno de tus logros, grandes o pequeños…  
    Para abrazarte cuando el mundo te pese, para secar tus lágrimas si llegan, y para recordarte que <strong>nunca estás sola</strong>.</p>

    <p>Eres mi princesa hermosa, mi consentida, <strong>mi girasol 🌻</strong>.  
    La que ilumina mis días sin darse cuenta, la que me inspira incluso cuando no lo sabe.</p>

    <p>Gracias por hacerme sentir querido.  
    Gracias por quedarte.  
    Y sobre todo… gracias por ser tú.</p>

    <p><strong>Te amo muchísimo, mi amor.</strong> Nunca olvides lo feliz que me haces.</p>

    <p>Con mucho cariño,<br>
    <strong>Tu negrito hermoso 😍😘</strong></p>
</div>


    <div class="imagenes">
        <img src="./385904ef-24e2-4870-8d0e-5d58ed21f6f6.png" alt="Amor 1">
        <img src="./Imagen de WhatsApp 2025-05-15 a las 00.44.18_ecd9c96f.jpg" alt="Amor 2">
        <img src="./Imagen de WhatsApp 2025-05-15 a las 00.44.19_43a713bc.jpg " alt="Amor 3">
    </div>

    <p class="amor">TE AMO DESDE LOS 3 MILLONES HASTA EL INFINITO 💫</p>

    <div class="notas">
        <h2>Escribe una Nota para Recordar:</h2>
        <form method="post">
            <textarea name="nota" placeholder="Escribe algo lindo aquí..."></textarea><br>
            <button type="submit">Guardar Nota</button>
        </form>

        <h3>Tus Notas:</h3>
        <?php if (!empty($notas)): ?>
            <ul>
                <?php foreach ($notas as $n): ?>
                    <li>
                        <strong><?= $n['fecha'] ?></strong><br>
                        <?= nl2br($n['texto']) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Aún no hemos escrito ninguna nota... pero sabía que llegarías a este corazón tan especial ❤️</p>
        <?php endif; ?>
    </div>

</div>

<!-- Reproducir música -->
<iframe width="1" height="1" src="https://www.youtube.com/embed/eMfaW6aOJ_U?autoplay=1&loop=1&playlist=eMfaW6aOJ_U " frameborder="0" allow="autoplay; encrypted-media"></iframe>

</body>
</html>