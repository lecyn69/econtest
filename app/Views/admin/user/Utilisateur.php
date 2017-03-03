<?php $this->layout('LayoutAdmin', ['title' => 'Ajouter un administrateur' ] ); ?>

<?php $this->start('main_content') ?>

<form method="post" action="<?= $this->url('user_addUser'); ?>">
    <div class="col-md-6">
        <div class="row">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
            </div>
        </div>
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
                <button type="submit" class="btn btn-success btn-lg">Ajouter</button>
            </div>
        </div>
    </div>
</form>


<?php $this->stop('main_content') ?>




