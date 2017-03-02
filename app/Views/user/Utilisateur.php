<?php $this->layout('backend', ['title' => 'Modifier un utilisateur' ] ); ?>

<?php $this->start('main_content') ?>

<form method="post" action="<?= $this->url('user_modifUser',['id' => $user['id']]); ?>">
    <div class="col-md-6">
        <div class="row">
            <div class="form-group">
                <label for="pseudo">Pseudo :</label>
                <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo" 
                       value="<?= isset($user['pseudo'])? $user['pseudo'] :  '' ; ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" 
                       value="<?= isset($user['pseudo'])? $user['email'] :  '' ; ?>">
                <?= isset($user['pseudo']) ? '<input type="hidden" name="id" value="'.$user['id'].'" />' : '' ; ?>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" 
                       value="<?= isset($user['pseudo'])? $user['password'] :  '' ; ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg"><?= isset($user['pseudo']) ? 'Modifier' : 'Ajouter'; ?></button>
            </div>
        </div>
    </div>
</form>


<?php $this->stop('main_content') ?>




