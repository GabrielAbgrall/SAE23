<?php $title = "Document"; ?>

<?php ob_start(); ?>

<div class="container mt-5">
    <h1 class="mb-4">Système de fichiers</h1>


    <?php foreach($files as $f) { ?>
    <div class="d-flex justify-content-between align-items-center border-bottom py-2">
        <p class="mb-0"><?=$f['name']?></p>
        <a href='/intranet/drive?dir=<?=$_REQUEST['dir']?>&file=<?=$f['path']?>' class="btn btn-primary">Télécharger</a>
    </div>
    <?php } ?>

    <?php foreach($dirs as $d) { ?>
    <div class="d-flex justify-content-between align-items-center border-bottom py-2">
        <a href='/intranet/drive?dir=<?=$_REQUEST['dir'].$d?>' class="text-decoration-none">
            <p class="mb-0"><?=$d?></p>
        </a>
    </div>
    <?php } ?>
</div>

<?php foreach($dirs as $d) { ?>

<div class="d-flex flex-row">
    <a href='/intranet/drive?dir=<?=$_REQUEST['dir'].$d?>'><p><?=$d?></p></a>
</div>

<?php } ?>

<form action='/intranet/drive?dir=<?=$_REQUEST['dir']?>' method='POST' enctype='multipart/form-data'>
    <input type='file' name='file' id='file' required>
    <label for="access_level">Permission d'accès :</label>
    <input type="number" name="access_level" id="access_level" required>
    <input type='submit' value='Envoyer le fichier'>
</form>

<?php $content = ob_get_clean(); ?>

<?php require './templates/intranet.php'; ?>