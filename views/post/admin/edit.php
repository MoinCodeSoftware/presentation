<?php include __DIR__ . "/../../../views/layout/header.php"; ?>
<?php if (!empty($savedSuccess)): ?>
        <div class="alert alert-success" role="alert">
            Erfolgreich gespeichert!
        </div>
    <?php endif; ?>
<form method="POST" action="posts-edit?id=<?php echo secOutput($entry->id); ?>">
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form>
                <div class="form-group">
                    <label for="title">Titel</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php  echo secOutput($entry->title); ?>">
                </div>
                <div class="form-group">
                    <label for="content">Inhalt</label>
                    <textarea class="form-control" id="content" name="content" rows="5"><?php  echo secOutput($entry->content); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Speichern</button>
            </form>
        </div>
    </div>

 

</div>

<?php include __DIR__ . "/../../../views/layout/footer.php"; ?>