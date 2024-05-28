<?php

use Illuminate\Encryption\Encrypter;

$key = 'base64:'.base64_encode(
        Encrypter::generateKey(config('app.cipher'))
    );
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel APP_KEY Generator</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
</head>
<body>
<div class="container pt-6">
    <h1 class="title">Laravel APP_KEY Generator</h1>

    <div class="message">
        <div class="message-header">
            <p>APP_KEY</p>
        </div>
        <div class="message-body">
            {{ $key }}
        </div>
    </div>
</div>
</body>
</html>
