<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>EspaceAutomobilePlus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Bootstrap 3 template for corporate business" />
        <!-- css -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/jasny-bootstrap.css">
         <link href="../css/font-awesome.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body>

        <div class="container-fluid">
            <div class="conteneur col-md-12">

                <?php include './menu.php'; ?>

                <div class="col-md-12">
                    <h3 class="col-md-push-2 col-md-8 col-md-pull-2 text-info">Activit&eacute; r&eacute;cente</h3>
                    <span class="col-md-12">
                        &nbsp;
                    </span>
                    
                    <span class="col-md-push-2 col-md-8 col-md-pull-2">
                        <select class="form-control" name="service">
                            <option>mecanique</option>
                            <option>informatique</option>
                            <option>domotique</option>
                            <option>climatisation</option>
                        </select>
                    </span>
                    <span class="col-md-12">
                        &nbsp;
                    </span>
                    
                    <span class="col-md-push-2 col-md-8 col-md-pull-2">
                        <input type="text" class="form-control" name="titre" placeholder="titre du service">
                    </span>
                    
                    <span class="col-md-12">
                        &nbsp;
                    </span>
                    <span class="col-md-push-2 col-md-8 col-md-pull-2">
                         <section class="col-sm-4">
                            <div>&nbsp;</div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail col-md-12" style="height: 150px;">
                                                <img src="../public/img/"  alt="profil">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn btn-default btn-file"><span class="fileinput-new">Selectionnez l&apos;image</span><span class="fileinput-exists"><i class="fa fa-pencil text-primary"></i></span><input type="file" name="profil"></span>
                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput"><i class="fa fa-remove text-danger"></i></a>
                                            </div>
                                        </div>                  
                                    </div>
                                </div>
                            </div>
                        </section>
                    </span>
                   
                    <span class="col-md-12">
                        &nbsp;
                    </span>
                    <span class="col-md-push-2 col-md-8 col-md-pull-2">
                        <button type="submit" name="submit" class="fa fa-check btn btn-primary">&nbsp;Enregistrer</button>
                    </span>
                    
                    <span class="col-md-12">
                        &nbsp;
                    </span>
                    <span class="col-md-push-2 col-md-8 col-md-pull-2">
                        <table class="table table-responsive table-hover">
                            <tr class="table table-striped">
                                <td><b class="text-danger">Domaine d'activit&eacute;</b></td>
                                <td><b class="text-danger">mot clé</b></td>
                                <td><b class="text-danger">image</b></td>
                                <td><b class="text-danger">Modifier</b></td>
                                <td><b class="text-danger">Supprimer</b></td>
                            </tr>
                            <tr class="table table-striped">
                                <td>informatique</td>
                                <td> maintenance réseaux</td>
                                <td><img src=""></td>
                                <td><i class="fa fa-pencil text-warning"></i>&nbsp;</td>
                                <td><i class="fa fa-remove text-danger"></i>&nbsp; X</td>
                            </tr>
                            <tr class="table table-striped">
                                <td>informatique</td>
                                <td> maintenance préventive</td>
                                <td><img src=""></td>
                                 <td><i class="fa fa-pencil text-warning"></i>&nbsp;</td>
                                <td><i class="fa fa-remove text-danger"></i>&nbsp; X</td>
                            </tr>
                            <tr class="table table-striped">
                                <td>informatique</td>
                                <td> maintenance curative</td>
                                <td><img src=""></td>
                                 <td><i class="fa fa-pencil text-warning"></i>&nbsp;</td>
                                <td><i class="fa fa-remove text-danger"></i>&nbsp; X</td>
                            </tr>
                        </table>
                    </span>
                </div>
            </div>

        </div>

      
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="ckeditor/ckeditor.js"></script>
        <script src="js/fileinput.js"></script>

    </body>
</html>
