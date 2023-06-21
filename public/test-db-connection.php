<?php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

use Illuminate\Support\Facades\DB;

try {
    DB::connection()->getPdo();
    echo "Conexión exitosa a la base de datos";
} catch (\Exception $e) {
    die("Error en la conexión a la base de datos: " . $e->getMessage());
}
