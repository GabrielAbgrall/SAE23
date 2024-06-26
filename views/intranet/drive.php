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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success mt-4" data-bs-toggle="modal" data-bs-target="#uploadModal">
        Envoyer un fichier
    </button>

    <!-- Modal -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Envoyer un fichier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action='/intranet/drive?dir=<?=$_REQUEST['dir']?>' method='POST' enctype='multipart/form-data'>
                        <div class="mb-3">
                            <label for="file" class="form-label">Fichier</label>
                            <input type='file' name='file' id='file' class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="access_level" class="form-label">Permission d'accès</label>
                            <input type="number" name="access_level" id="access_level" class="form-control" required>
                        </div>
                        <button type='submit' class='btn btn-primary'>Envoyer le fichier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require './templates/intranet.php'; ?>