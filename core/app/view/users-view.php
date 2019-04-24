        <ol class="breadcrumb">
          <li class="breadcrumb-item">Usuarios</li>
        </ol>



<section class="container-fluid">
<?php
$data["posts"]=UserData::getAll();
?>

 <div class="card">
                  <div class="card-header">
                    <strong>Nuevo Usuario</strong>
                  </div>
                  <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                    <a href="./?view=newuser" class="btn btn-secondary">Agregar</a><br><br>
                        <div class="box box-primary">
                            <div class="box-body">
                                    <table class="table datatable table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Nombre de usuario</th>
                                                <th>Email</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data["posts"] as $post):?>
                                            <tr>
                                                <td><?=$post->name;?></td>
                                                <td><?=$post->username;?></td>
                                                <td><?=$post->email;?></td>
                                                <td style="width:170px;">
                                                <a href="./?view=edituser&id=<?=$post->id;?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="./?action=deluser&id=<?=$post->id;?>" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                        </div>
                        </div>
                    </div>
                </div>
</div>
</div>

                <!-- /.row -->
                </section>