<?php
echo "<h1>¡Entorno PHP con Nginx funcionando!</h1>";
echo "<p>Versión de PHP: " . phpversion() . "</p>";

// La información de Xdebug aparecerá si la extensión está cargada
if (extension_loaded('xdebug')) {
    echo "<p style='color: green;'>✅ Xdebug está cargado y listo para depurar.</p>";
} else {
    echo "<p style='color: red;'>❌ Xdebug no está cargado.</p>";
}

// Puedes probar un breakpoint en la siguiente línea
$variableParaDepurar = "¡Hola, mundo!";
echo "<p>Valor de la variable: " . $variableParaDepurar . "</p>";
?>