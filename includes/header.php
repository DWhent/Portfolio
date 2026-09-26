<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? "Emil Ivanov" ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/portfolio/assets/css/style.css?v=2">
</head>
<body>
<header>
    <div class="header-inner">
            <a href="/portfolio/index.php" class="logo">Emil.</a>

    <nav class="navbar">
        <ul class="nav-list">
            <li class="nav-item"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) === 'index.php' ? 'active' : '' ?>" href="/portfolio/index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) === 'about.php' ? 'active' : '' ?>" href="/portfolio/about.php">About</a></li>
            <li class="nav-item"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) === 'projects.php' ? 'active' : '' ?>" href="/portfolio/projects.php">Projects</a></li>
        </ul>
        <a class="button" href="/portfolio/contact.php">Let's connect</a>
    </nav>
    </div>
</header>

<main>