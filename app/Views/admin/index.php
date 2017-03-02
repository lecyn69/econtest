<?php $this->layout('LayoutAdmin', ['title' => 'Connexion Admin']) ?>

<?php $this->start('main_content') ?>

<?php if(isset($_SESSION['error'])) : ?>
<p class="bg-danger"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>

<?php endif; ?>
<form method="post" action="<?= $this->url('admin_connexionAdmin'); ?>">
    <div class="col-md-6 col-md-offset-3">
        <div class="row">
            <div class="form-group">
                <label for="pseudoOrEmail">Pseudo ou Email :</label>
                <input type="text" class="form-control" name="pseudoOrEmail" id="pseudoOrEmail" placeholder="Pseudo Ou Email" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="pwd">Password :</label>
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Se connecter</button>
            </div>
        </div>
    </div>
</form>

<?php $this->stop('main_content') ?>




<?php $this->start('script') ?>

<?php $this->stop('script') ?>