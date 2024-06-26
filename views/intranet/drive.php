<?php $title = "Document"; ?>

<?php ob_start(); ?>

<?php foreach($files as $f) { ?>

<div class="d-flex flex-row">
    <p><?=$f['name']?></p>
    <a href='/intranet/drive?dir=<?=$_REQUEST['dir']?>&file=<?=$f['path']?>'><button>Télécharger</button></a>
</div>

<?php } ?>

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