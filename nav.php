<?php
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$current = basename($_SERVER['PHP_SELF']);
?>

<header class="header">

    <div class="container">

        <nav class="navbar">

            <a href="index.php" class="logo">

                <span class="logo-icon">⚔</span>

                <div class="logo-text">

                    <span class="logo-title">
                        DeMerzli Arena
                    </span>

                    <span class="logo-subtitle">
                        Community Card Game
                    </span>

                </div>

            </a>

            <ul class="nav-menu">

                <li>
                    <a class="<?= $current === 'index.php' ? 'active' : ''; ?>"
                       href="index.php">
                        Start
                    </a>
                </li>

                <li>
                    <a class="<?= $current === 'cards.php' ? 'active' : ''; ?>"
                       href="cards.php">
                        Karten
                    </a>
                </li>

                <li>
                    <a class="<?= $current === 'arena.php' ? 'active' : ''; ?>"
                       href="arena.php">
                        Arena
                    </a>
                </li>

                <li>
                    <a class="<?= $current === 'leaderboard.php' ? 'active' : ''; ?>"
                       href="leaderboard.php">
                        Rangliste
                    </a>
                </li>

                <li>
                    <a class="<?= $current === 'wiki.php' ? 'active' : ''; ?>"
                       href="wiki.php">
                        Wiki
                    </a>
                </li>

            </ul>

            <div class="nav-user">

                <?php if (isLoggedIn()) : ?>

                    <a href="profile.php" class="user-box">

                        <?php if (!empty($_SESSION['avatar'])) : ?>

                            <img
                                src="<?= e($_SESSION['avatar']); ?>"
                                alt="Avatar"
                                class="user-avatar">

                        <?php else : ?>

                            <div class="user-avatar placeholder">
                                DM
                            </div>

                        <?php endif; ?>

                        <div class="user-info">

                            <span class="user-name">

                                <?= e($_SESSION['twitch_user']); ?>

                            </span>

                            <span class="user-level">

                                Level 1

                            </span>

                        </div>

                    </a>

                    <a
                        href="logout.php"
                        class="btn btn-outline">

                        Logout

                    </a>

                <?php else : ?>

                    <a
                        href="login.php"
                        class="btn btn-primary">

                        Twitch Login

                    </a>

                <?php endif; ?>

            </div>

        </nav>

    </div>

</header>
