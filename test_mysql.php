<?php

// Test de conexión a MySQL
echo "=== Test de Conexión MySQL ===\n";

// Verificar drivers disponibles
echo "Drivers PDO disponibles:\n";
print_r(PDO::getAvailableDrivers());

echo "\n=== Intentando conexión ===\n";

try {
    $host = '127.0.0.1';
    $dbname = 'laravel_backend';
    $username = 'root';
    $password = '';
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "✅ Conexión exitosa!\n";
    echo "Driver: " . $pdo->getAttribute(PDO::ATTR_DRIVER_NAME) . "\n";
    echo "Server version: " . $pdo->getAttribute(PDO::ATTR_SERVER_VERSION) . "\n";
    
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage() . "\n";
} 