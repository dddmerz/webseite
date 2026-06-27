<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| DeMerzli Arena 2.0
|--------------------------------------------------------------------------
| Authentifizierung
|--------------------------------------------------------------------------
*/

if (!defined('APP_NAME'))
{
    exit('Direkter Aufruf nicht erlaubt.');
}

function isLoggedIn(): bool
{
    return isset($_SESSION['twitch_user']);
}

function requireLogin(): void
{
    if (!isLoggedIn())
    {
        redirect(APP_URL . '/login.php');
    }
}

function currentUser(): ?array
{
    if (!isLoggedIn())
    {
        return null;
    }

    return getUserByTwitchId($_SESSION['twitch_id']);
}
