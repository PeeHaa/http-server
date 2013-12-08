<?php

/**
 * Aerys has many server-wide options available for customization. To assign these options, the
 * server binary looks for any variables in your config file's global namespace prefixed with a
 * double underscore ($__) matching server option directives (case-insensitive). The server operates
 * with sensible defaults, but if you want to customize such values this is the place to do it. Note
 * again that server-wide options apply to ALL apps registered on your server.
 *
 * The example below sets only a small number of the available server options. To see a full and
 * up-to-date list of possible options please consult the `Aerys\Server` source code.
 *
 * To run:
 * $ bin/aerys -c examples/ex104_server_options.php
 *
 * Once started, load http://127.0.0.1/ in your browser.
 */

require __DIR__ . '/../vendor/autoload.php';

$__maxConnections = 2500;
$__maxRequests = 100;
$__keepAliveTimeout = 1;
$__disableKeepAlive = FALSE;
$__defaultContentType = 'text/html';
$__defaultTextCharset = 'utf-8';
$__allowedMethods = ['GET', 'HEAD', 'POST', 'PUT'];

$myApp = (new Aerys\Framework\App)->addResponder(function() {
    $body = '<html><body><h1>Hello, world.</h1></body></html>';
    return [$status = 200, $reason = 'OK', $headers = [], $body];
});
