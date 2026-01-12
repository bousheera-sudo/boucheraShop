<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$app->bind(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

try {
    $request = Request::capture();

    $response = $app->handle($request);
    $response->send();

    $app->terminate($request, $response);
} catch (Throwable $e) {
    // Log full exception to STDERR so it's visible in Vercel logs
    error_log((string) $e);

    // Return a 500 response
    http_response_code(500);
    echo "Internal Server Error";
}
