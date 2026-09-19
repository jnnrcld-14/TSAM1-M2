<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Tasks for Today') ?></title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.5; margin: 0; background: #f5f7fb; color: #1f2937; }
        nav { background: #1d4ed8; padding: 1rem; }
        nav a { color: #fff; margin-right: 1rem; text-decoration: none; font-weight: bold; }
        main { max-width: 850px; margin: 2rem auto; background: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 10px #0001; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        th, td { border: 1px solid #d1d5db; padding: .7rem; text-align: left; }
        th { background: #eff6ff; }
        .empty { padding: 1rem; background: #fef3c7; border-radius: 4px; }
        .profile dt { font-weight: bold; margin-top: 1rem; }
        .profile dd { margin-left: 0; }
    </style>
</head>
<body>
    <nav>
        <a href="<?= site_url('/') ?>">Today</a>
        <a href="<?= site_url('tasks') ?>">Task List</a>
        <a href="<?= site_url('profile') ?>">Profile</a>
        <a href="<?= site_url('about') ?>">About</a>
    </nav>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
</body>
</html>
