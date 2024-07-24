<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= url('public/assets/css/styles.css') ?>">
    <title><?= $this->e($title) ?></title>
</head>
<body>

    <?= $this->insert('partials/header') ?>
    
    <div class="container">
        <?= $this->section('content') ?>
    </div>
    
</body>
</html>