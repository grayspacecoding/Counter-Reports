<? session_start() ?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Counter Reports</title>
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-icons-1.11.3/font/bootstrap-icons.min.css">

</head>
<body>

<div class="d-flex flex-column gap-1" style="min-height: 100vh">

    <header class="container-fluid text-bg-dark py-1">
        <button class="btn btn-sm btn-dark" data-trigger="change-section" data-section-goto="home">Home <i class="bi bi-house"></i></button>
        <button class="btn btn-sm btn-dark" data-trigger="change-section" data-section-goto="docs">Docs <i class="bi bi-journals"></i></button>
        <button class="btn btn-sm btn-dark" data-trigger="change-section" data-section-goto="help">Help <i class="bi bi-question-circle"></i></button>
    </header>
    
    <main>
        <? require('../segments/home.php') ?>
        <? require('../segments/report.php') ?>
        <? require('../segments/docs.php') ?>
        <? require('../segments/help.php') ?>
        <? require('../segments/allreports.php') ?>
        <? require('../segments/settings.php') ?>
    </main>
    
    <footer class="mt-auto py-1 text-center text-secondary font-monospace">
        Version <span data-content="verson-number"><?= date("y.m\a") ?></span>
    </footer>

</div>
    
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <script type="module">
        import * as ChangeSection from './modules/ChangeSection.js';
    </script>

</body>
</html>