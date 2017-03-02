<?php $this->layout('layout', ['title' => 'Inscription' ] ); ?>

<?php $this->start('main_content') ?>
<form method="post" action="<?= $this->url('admin_inscription'); ?>">
    <div class="col-md-6">
        <div class="row">
            <div class="form-group">
                <label for="pseudo">Pseudo :</label>
                <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg">S'inscrire</button>
            </div>
        </div>
    </div>
</form>

<?php $this->stop('main_content') ?>





