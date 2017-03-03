<?php $this->layout('LayoutAdmin', ['title' => 'Modifier un utilisateur ' ] ); ?>

<?php $this->start('main_content') ?>

<form method="post" action="<?= $this->url('user_modifUser',['id' => $user['id']]); ?>">
    <div class="col-md-6">
        <div class="row">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" 
                       value="<?= $user['nom'] ;?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom" 
                       value="<?= $user['prenom']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="pseudo">Pseudo :</label>
                <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudo" 
                       value="<?= $user['pseudo']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="role">Rôle :</label>
                <input type="text" class="form-control" name="role" id="role" placeholder="Role" 
                       value="<?= $user['role']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" 
                       value="<?= $user['email'] ;?>">
                <input type="hidden" name="id" value="<?= $user['id'] ;?>" />
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" 
                       value="<?= $user['password'] ; ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg">Modifier</button>
            </div>
        </div>
    </div>
</form>


<?php $this->stop('main_content') ?>




