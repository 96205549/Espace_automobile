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
                    <h3 class="text-info">Gestion de la bani&egrave;re</h3>
                    <span class="col-md-12">
                        &nbsp;
                    </span>
                    <span class="col-md-8">
                        <textarea class="form-control ckeditor" rows="8"></textarea>
                    </span>
                    <span class="col-md-4">
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
                    <span class="col-md-12">
                        <button type="submit" name="submit" class="fa fa-check btn btn-primary">&nbsp;Enregistrer</button>
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