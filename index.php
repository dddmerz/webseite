<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Startseite';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';

/*
|--------------------------------------------------------------------------
| Live Statistiken
|--------------------------------------------------------------------------
*/

$totalPlayers = 0;
$totalCards = 0;
$totalBattles = 0;

try {

    $totalPlayers = (int) $db->query("
        SELECT COUNT(*)
        FROM users
    ")->fetchColumn();

    $totalCards = (int) $db->query("
        SELECT COUNT(*)
        FROM user_cards
    ")->fetchColumn();

    $totalBattles = (int) $db->query("
        SELECT COUNT(*)
        FROM battles
    ")->fetchColumn();

} catch (Throwable $e) {

    // Datenbank noch leer
}

?>

<section class="hero">

    <div class="hero-background"></div>

    <div class="container">

        <div class="hero-content fade-up">

            <span class="hero-badge">

                COMMUNITY SAMMELKARTENSPIEL

            </span>

            <h1>

                DeMerzli Arena

            </h1>

            <p>

                Sammle Karten, kämpfe gegen andere Spieler,
                steige im Rang auf und werde zur Legende.

            </p>

            <div class="hero-buttons">

                <a
                    href="arena.php"
                    class="btn btn-primary">

                    Arena betreten

                </a>

                <?php if(!isLoggedIn()): ?>

                    <a
                        href="login.php"
                        class="btn btn-twitch">

                        Mit Twitch anmelden

                    </a>

                <?php else: ?>

                    <a
                        href="profile.php"
                        class="btn btn-secondary">

                        Mein Profil

                    </a>

                <?php endif; ?>

            </div>

        </div>

    </div>

</section>
<section class="stats">

    <div class="container">

        <div class="stats-grid">

            <div class="stat-card card-hover glow">

                <span class="stat-icon">👥</span>

                <h2><?= number_format($totalPlayers) ?></h2>

                <p>Registrierte Spieler</p>

            </div>

            <div class="stat-card card-hover glow">

                <span class="stat-icon">🎴</span>

                <h2><?= number_format($totalCards) ?></h2>

                <p>Gesammelte Karten</p>

            </div>

            <div class="stat-card card-hover glow">

                <span class="stat-icon">⚔</span>

                <h2><?= number_format($totalBattles) ?></h2>

                <p>Ausgetragene Kämpfe</p>

            </div>

            <div class="stat-card card-hover glow">

                <span class="stat-icon">🏆</span>

                <h2>Season 1</h2>

                <p>Aktuelle Season</p>

            </div>

        </div>

    </div>

</section>

<section class="features">

    <div class="container">

        <div class="section-title">

            <span>WARUM DEMERZLI ARENA?</span>

            <h2>Ein Spiel für die Community</h2>

            <p>

                Nicht einfach nur Karten sammeln –
                sondern kämpfen, leveln und gemeinsam wachsen.

            </p>

        </div>

        <div class="features-grid">

            <article class="feature-card card-hover">

                <div class="feature-icon">

                    🎴

                </div>

                <h3>Karten sammeln</h3>

                <p>

                    Erhalte Karten im Stream und vervollständige deine Sammlung.

                </p>

            </article>

            <article class="feature-card card-hover">

                <div class="feature-icon">

                    ⚔

                </div>

                <h3>Arena</h3>

                <p>

                    Fordere andere Spieler heraus und kämpfe um den Sieg.

                </p>

            </article>

            <article class="feature-card card-hover">

                <div class="feature-icon">

                    ⭐

                </div>

                <h3>Levelsystem</h3>

                <p>

                    Gewinne Erfahrungspunkte und schalte neue Ränge frei.

                </p>

            </article>

            <article class="feature-card card-hover">

                <div class="feature-icon">

                    👑

                </div>

                <h3>Rangliste</h3>

                <p>

                    Beweise dich gegen die Community und erklimme die Spitze.

                </p>

            </article>

        </div>

    </div>

</section>
<section class="showcase">

    <div class="container">

        <div class="section-title">

            <span>KARTEN</span>

            <h2>Seltene Sammelkarten</h2>

            <p>
                Jede Karte besitzt ihre eigene Seltenheit, Werte und später einzigartige Fähigkeiten.
            </p>

        </div>

        <div class="showcase-grid">

            <div class="card-preview card-hover">
                <img src="assets/images/cards/placeholder.webp" alt="">
                <h3>Bronze</h3>
                <p>Gewöhnliche Karten</p>
            </div>

            <div class="card-preview card-hover">
                <img src="assets/images/cards/placeholder.webp" alt="">
                <h3>Silber</h3>
                <p>Seltene Karten</p>
            </div>

            <div class="card-preview card-hover">
                <img src="assets/images/cards/placeholder.webp" alt="">
                <h3>Gold</h3>
                <p>Epische Karten</p>
            </div>

            <div class="card-preview legendary glow">
                <img src="assets/images/cards/placeholder.webp" alt="">
                <h3>Legendär</h3>
                <p>Extrem selten</p>
            </div>

        </div>

    </div>

</section>

<section class="stream-section">

    <div class="container">

        <div class="section-title">

            <span>LIVE</span>

            <h2>Streamzeiten</h2>

        </div>

        <div class="stream-grid">

            <div class="stream-card">
                <h3>Montag</h3>
                <span>17:30 Uhr</span>
            </div>

            <div class="stream-card">
                <h3>Mittwoch</h3>
                <span>17:30 Uhr</span>
            </div>

            <div class="stream-card">
                <h3>Freitag</h3>
                <span>17:30 Uhr</span>
            </div>

            <div class="stream-card">
                <h3>Sonntag</h3>
                <span>15:00 Uhr</span>
            </div>

        </div>

    </div>

</section>

<section class="cta">

    <div class="container">

        <div class="cta-box">

            <h2>

                Bereit für die Arena?

            </h2>

            <p>

                Melde dich mit Twitch an, sammle Karten und stelle dein erstes Deck zusammen.

            </p>

            <?php if(!isLoggedIn()): ?>

                <a href="login.php" class="btn btn-primary btn-lg">

                    Jetzt kostenlos starten

                </a>

            <?php else: ?>

                <a href="arena.php" class="btn btn-primary btn-lg">

                    Zur Arena

                </a>

            <?php endif; ?>

        </div>

    </div>

</section>
<section class="community">

    <div class="container">

        <div class="section-title">

            <span>COMMUNITY</span>

            <h2>Werde Teil der DeMerzli Arena</h2>

            <p>

                Tausche Karten, fordere andere Spieler heraus und bleibe über Discord immer auf dem neuesten Stand.

            </p>

        </div>

        <div class="community-grid">

            <a href="https://discord.gg/demerzli"
               target="_blank"
               class="community-card discord card-hover">

                <div class="community-icon">

                    💬

                </div>

                <h3>Discord</h3>

                <p>

                    Events, News und Arena-Challenges.

                </p>

            </a>

            <a href="https://www.twitch.tv/demerzli"
               target="_blank"
               class="community-card twitch card-hover">

                <div class="community-icon">

                    🎮

                </div>

                <h3>Twitch</h3>

                <p>

                    Live Streams und Karten ziehen.

                </p>

            </a>

            <a href="https://www.youtube.com/@DeMerzli_TV"
               target="_blank"
               class="community-card youtube card-hover">

                <div class="community-icon">

                    ▶

                </div>

                <h3>YouTube</h3>

                <p>

                    Highlights, Tutorials und Updates.

                </p>

            </a>

        </div>

    </div>

</section>

<section class="roadmap">

    <div class="container">

        <div class="section-title">

            <span>ROADMAP</span>

            <h2>Was kommt als Nächstes?</h2>

        </div>

        <div class="roadmap-grid">

            <div class="roadmap-item completed">

                <span>✔</span>

                Twitch Login

            </div>

            <div class="roadmap-item completed">

                <span>✔</span>

                Kartensammlung

            </div>

            <div class="roadmap-item active">

                <span>⚔</span>

                Arena Beta

            </div>

            <div class="roadmap-item">

                <span>★</span>

                Battle Engine

            </div>

            <div class="roadmap-item">

                <span>👑</span>

                Seasons

            </div>

            <div class="roadmap-item">

                <span>🤖</span>

                Discord Integration

            </div>

        </div>

    </div>

</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
