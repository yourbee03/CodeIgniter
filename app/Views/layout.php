<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek Management</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header>
        <h1>Proyek Management</h1>
        <nav>
            <ul>
                <li><a href="/proyek">Proyek List</a></li>
                <li><a href="/proyek/create">Tambah Proyek</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
    <footer>
        <p>&copy; 2024 Proyek Management</p>
    </footer>
</body>
</html>
