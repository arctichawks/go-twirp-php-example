<?php

use App\ServiceHaberdasher;
use GuzzleHttp\Psr7\ServerRequest;
use App_php_golang_client_server\HaberdasherServer;

require __DIR__ . '/vendor/autoload.php';

$request = ServerRequest::fromGlobals();

$handler = new HaberdasherServer(new ServiceHaberdasher());

$response = $handler->handle($request);

if (!headers_sent()) {
    // status
    header(sprintf('HTTP/%s %s %s', $response->getProtocolVersion(), $response->getStatusCode(), $response->getReasonPhrase()), true, $response->getStatusCode());
    // headers
    foreach ($response->getHeaders() as $header => $values) {
        foreach ($values as $value) {
            header($header . ': ' . $value, false, $response->getStatusCode());
        }
    }
}

echo $response->getBody();