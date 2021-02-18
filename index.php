<?php

$countries = [
    'germany' =>
        ['capital-name' => 'berlin',
        'flag-file' => 'germany-flag-icon-256.png'],
    'belgique' =>
          ['capital-name' => 'bruxelles',
          'flag-file' => 'belgium-flag-icon-256.png'],
    'corée du nord' =>
        ['capital-name' => 'pyongyang',
            'flag-file' => 'north-korea-flag-icon-256.png'],
    'afrique du sud' =>
        ['capital-name' => 'pretoria',
            'flag-file' => 'south-africa-flag-icon-256.png']
];

if(isset($_GET['country'])) {
    if(array_key_exists($_GET['country'], $countries)) {
        $countrySelected = $_GET['country'];
    } else {
        $error = 'Ce pays ne fait pas partie de nos listes.';
    }
}

?>

<!-- Template d’affichage -->

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>C’est quoi la capitale ?</title>
</head>
<body>
<main class="container">
    <h1>Choisis un pays, je te donnerai sa capitale</h1>
    <form action="index.php">
        <div class="form-group">
            <label for="countries">Les pays disponibles : </label>
            <select class="form-control" name="country" id="countries">
                                    <?php foreach ($countries as $country => $value): ?>
                                    <option value="<?=$country?>"><?= mb_strtoupper($country); ?></option>
                                    <?php endforeach; ?>
                            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary mb-2">Donne moi sa capitale</button>
        </div
    </form>
            <?php if(isset($countrySelected)): ?>
        <img src="<?= $countries[$countrySelected]['flag-file'] ?>" class="mr-3" alt="Drapeau de <?= $countrySelected ?>">
        <div class="media-body">
            <h2><?= ucwords($countrySelected) ?></h2>
            <p>Sa capitale est <?= ucwords($countries[$countrySelected]['capital-name']) ?></p>
        </div>
        <?php endif; ?>
    <?php if(isset($error)): ?>
    <section class="alert alert-danger" role="alert">
        <h2 class="text-center mb-4">⚠️ Attention&nbsp;! ⚠️</h2>
        <p><?= $error ?> 🥺</p>
        <p>Merci d’en choisir un à l’aide du menu de sélection ci-dessus ☝🏼</p>
    </section>
    <?php endif; ?>
        </main>
</body>
</html>

