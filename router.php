<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve static files from the project root directly (public/css, public/js, etc.)
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

// All other requests go through Laravel via root index.php
require __DIR__ . '/index.php';
