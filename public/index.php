<?php
// Una lista de datos y un bucle: todavía no hay base de datos.
// Personalización PHP limitada a los datos de la lista (3 actividades).
$activitats = [
    // Dos actividades de la lista proporcionada:
    ['titol' => 'Tarde de juegos', 'tipus' => 'Encuentro'],
    ['titol' => 'Liga de demostración', 'tipus' => 'Torneo'],
    // Actividad añadida (coherente con la propuesta de Punto de Juego):
    ['titol' => 'Monopoly Mataró - La ciudad es tu tablero', 'tipus' => 'Actividad de ciudad'],
];

function h(string $text): string {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Punto de Juego</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <!-- Navegación con la identidad del encargo 1. -->
    <nav>
        <a href="../portal/index.html">Inicio</a>
        <a href="../portal/activitats.html">Actividades</a>
        <a href="../portal/torneig.html">Torneo</a>
    </nav>

    <main>
        <h1>Actividades de <span>Punto de Juego</span></h1>

        <!-- El bucle genera un bloque por cada elemento de la lista. -->
        <section id="activitats">
        <?php foreach ($activitats as $activitat): ?>
            <article>
                <h2><?= h($activitat['titol']) ?></h2>
                <p><?= h($activitat['tipus']) ?></p>
            </article>
        <?php endforeach; ?>
        </section>

        <p>Respuesta generada en el servidor: <?= date('H:i:s') ?></p>
    </main>

    <footer>DAW2 · AEA2 · RA1</footer>
</body>
</html>
