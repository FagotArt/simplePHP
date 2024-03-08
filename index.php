<?php
require __DIR__ . '/vendor/autoload.php';

use App\StartClass;
use Jenssegers\Blade\Blade;

$blade = new Blade('views', 'cache');
$classData = StartClass::startClass();

$html = $blade->make('index', [
    'name' => 'SimpleAPP',
    'data' => $classData,
])->render();

echo $html;
