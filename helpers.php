<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Helper Funktionen
|--------------------------------------------------------------------------
*/

function e(?string $text): string
{
    return htmlspecialchars(
        $text ?? '',
        ENT_QUOTES,
        'UTF-8'
    );
}

function redirect(string $url): never
{
    header("Location: {$url}");
    exit;
}

function db(): PDO
{
    return Database::get();
}

function loadJson(string $file): array
{
    if (!file_exists($file)) {
        return [];
    }

    $json = file_get_contents($file);

    return json_decode($json, true) ?? [];
}

function saveJson(string $file, array $data): bool
{
    return file_put_contents(
        $file,
        json_encode(
            $data,
            JSON_PRETTY_PRINT |
            JSON_UNESCAPED_UNICODE
        )
    ) !== false;
}
