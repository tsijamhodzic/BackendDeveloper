<?php

if (!empty($_GET)) {
    $pojam = $_GET['pojam'] ?? null;
    try {
        validate($pojam);
    } catch (Throwable $exception) {
        $errorMessage = $exception->getMessage();
    }
}

function validate(string $pojam): void
{
    $validateProperties = [];
    if (empty($pojam)) {
        $validateProperties[] = 'Pojam';
    }

    if (empty($pojam)) {

        throw new Exception(implode('/', $validateProperties) . ' je prazan');
    }
}

require_once 'getTemplate.html';