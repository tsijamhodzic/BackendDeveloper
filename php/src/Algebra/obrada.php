<?php

if (!empty($_POST)) {
    $name = $_POST['Name'] ?? null;
    $lastName = $_POST['LastName'] ?? null;
    try {
        validate($name, $lastName);
    } catch (Throwable $exception) {
        $errorMessage = $exception->getMessage();
    }
}

function validate(string $name, string $lastName): void
{
    $validateProperties = [];
    if (empty($name)) {
        $validateProperties[] = 'Ime';
    }

    if (empty($lastName)) {
        $validateProperties[] = 'Prezime';
    }

    if (empty($name) || empty($lastName)) {

        throw new Exception(implode('/', $validateProperties) . ' je prazno!');
    }
}

require_once 'obrazac.html';