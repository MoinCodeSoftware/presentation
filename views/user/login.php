<?php include __DIR__ . "/../../views/layout/header.php"; ?>


<?php if(!empty($err)) : ?>
    <div class="text-center">
        <div class="alert alert-danger" role="alert">
            <?php echo $err; ?>
        </div>
    </div>
<?php endif; ?>


<form method="POST" method="login" class="form-horizontal">
    <div class="form-group">
        <label for="username" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
            <input type="text" name="username" class="form-control" id="username" placeholder="Benutzername eingeben">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="password" placeholder="Passwort eingeben">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" value="Login" class="btn btn-primary">
        </div>
    </div>
</form>



<?php include __DIR__ . "/../../views/layout/footer.php"; ?>