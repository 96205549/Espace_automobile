<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>EspaceAutomobilePlus</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Bootstrap 3 template for corporate business" />
        <!-- css -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/font-awesome.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body>

        <div class="container-fluid">
            <div class="conteneur col-md-12">

                <?php include './menu.php'; ?>

                <div class="col-md-12">
                    <div class="row-fluid">
                        <h3 class="text-info">Gestions des slides</h3>
                        <span class="col-md-12">
                            &nbsp;
                        </span>
                        <span class="col-md-12">
                            <input type="file" name="slide" class="form-control">
                        </span>
                         <span class="col-md-12">
                            &nbsp;
                        </span>
                        <span class="col-md-12">
                            <button type="submit" name="submit" class="btn btn-primary fa fa-check"> Enregistrer</button>
                                    
                        </span>
                        <span class="col-md-12">
                            &nbsp;
                        </span>
                        <span class="row col-md-12">
                            <table class="table table-responsive table-striped table-hover">
                                <tr class="table table-striped">
                                    <td>N°</td>
                                    <td>image</td>
                                    <td>nom image</td>
                                    <td>taille</td>
                                    <td>Modifier</td>
                                    <td>Supprimer</td>
                                </tr>
                                <tr class="table-striped">
                                    <td>1</td>
                                    <td><div style="width: 100px; height: 80px;"></div></td>
                                    <td>image.jpg</td>
                                    <td>1105 ko</td>
                                    <td><a href="#"><i class="fa fa-pencil text-warning"></i>&nbsp;</a></td>
                                    <td><a href="#" class=" text-danger"> x</a></td>
                                </tr>
                            </table>
                        </span>
                    </div>
                </div>
            </div>

        </div>

        <script src="../js/jquery.min.js"></script>
        <script src="ckeditor/ckeditor.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>