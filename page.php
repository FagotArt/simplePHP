<?php
require __DIR__ . '/vendor/autoload.php';

use App\StartClass;
use Jenssegers\Blade\Blade;

$blade = new Blade('views', 'cache');

$html = $blade->make('page', [
    'name' => 'pageData',
])->render();

echo $html;

