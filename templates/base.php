<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?=$title?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/src/img/37.ico" />
    
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="d-flex flex-column vh-100">
    <div class="vw-100 bg-danger text-light text-center"><?=@$_REQUEST['error']?></div>

    <?=$header?>
    <?=$main?>
    <?=$footer?>
</body>
</html>