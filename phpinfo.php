<?php
echo "<h1>Entorno Servidor Compilado Desde Cero Exitosamente</h1>";
echo "Módulo GD (Procesamiento de Imágenes): " . (extension_loaded('gd') ? '✅ Operativo' : '❌ Error') . "<br>";
echo "Módulo Intl (Internacionalización/Fechas): " . (extension_loaded('intl') ? '✅ Operativo' : '❌ Error') . "<br>";

phpinfo();
?>
