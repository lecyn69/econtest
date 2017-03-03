<?php $this->layout('LayoutAdmin', ['title' => ' Gestion des utilisateurs']) ?>

<?php $this->start('main_content') ?>

	<div class="col-lg-10 col-lg-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liste des Utilisateur
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <?php if(isset($_SESSION['message'])){ ?>
            <div class="alert alert-success">
                <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
            </div>
           <?php    } ?>
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Pseudo</th>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach($users as $user) { ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['nom']; ?></td>
                        <td><?php echo $user['prenom']; ?></td>
                        <td><?php echo $user['pseudo']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['role']; ?></td>
                        <td>
                            <form style="display: inline-block" method="post" action="<?php echo $this->url('admin_deleteUser',['id' => $user['id']]); ?>">
                                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                            <form style="display: inline-block" method="post" action="<?php echo $this->url('admin_modifUser',['id' => $user['id']]); ?>">
                                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                <button type="submit" class="btn btn-primary">Modifier</button>
                            </form>

                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->



<?php $this->stop('main_content') ?>




<?php $this->start('script') ?>

<?php $this->stop('script') ?>
