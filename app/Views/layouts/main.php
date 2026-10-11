<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Tasks for Today') ?></title>
    <style>
        :root { color-scheme: light; font-family: Arial, Helvetica, sans-serif; color: #1f2937; background: #f3f6fb; }
        * { box-sizing: border-box; }
        body { margin: 0; }
        header { background: #12345a; color: #fff; }
        .nav, main { width: min(1100px, calc(100% - 2rem)); margin: 0 auto; }
        .nav { display: flex; align-items: center; justify-content: space-between; gap: 1rem; min-height: 68px; }
        .brand { color: #fff; font-size: 1.1rem; font-weight: 700; text-decoration: none; }
        nav { display: flex; flex-wrap: wrap; gap: .35rem; }
        nav a { color: #e6efff; padding: .65rem .8rem; border-radius: 6px; text-decoration: none; }
        nav a:hover, nav a:focus { background: #244c78; color: #fff; }
        main { padding: 2.5rem 0; min-height: calc(100vh - 68px); }
        .panel { background: #fff; border-radius: 12px; padding: clamp(1.25rem, 4vw, 2.5rem); box-shadow: 0 8px 24px #12345a12; }
        h1 { margin-top: 0; color: #12345a; }
        p { line-height: 1.65; }
        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(210px, 1fr)); gap: 1rem; margin-top: 1.5rem; }
        .card { display: block; padding: 1.2rem; border: 1px solid #d8e1ec; border-radius: 8px; color: #12345a; text-decoration: none; }
        .card:hover, .card:focus { border-color: #3975b9; background: #f7faff; }
        .card strong { display: block; margin-bottom: .4rem; font-size: 1.05rem; }
        .table-wrap { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 1.25rem; white-space: nowrap; }
        th, td { padding: .85rem 1rem; text-align: left; border-bottom: 1px solid #e5eaf0; }
        th { background: #edf3fa; color: #12345a; }
        tbody tr:hover { background: #f7faff; }
        .status { display: inline-block; padding: .3rem .65rem; border-radius: 999px; background: #edf3fa; color: #12345a; font-size: .875rem; }
        .empty { padding: 1.25rem; border: 1px dashed #c7d3e1; border-radius: 8px; color: #526174; }
        @media (max-width: 600px) {
            .nav { align-items: flex-start; flex-direction: column; padding: 1rem 0; }
            nav { width: 100%; }
            nav a { padding: .55rem .65rem; }
        }
    </style>
</head>
<body>
    <header>
        <div class="nav">
            <a class="brand" href="<?= site_url('/') ?>">Tasks for Today</a>
            <nav aria-label="Main navigation">
                <a href="<?= site_url('/') ?>">Welcome</a>
                <a href="<?= site_url('tasks') ?>">Task List</a>
                <a href="<?= site_url('profile') ?>">Profile</a>
                <a href="<?= site_url('about') ?>">About</a>
            </nav>
        </div>
    </header>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
</body>
</html>
