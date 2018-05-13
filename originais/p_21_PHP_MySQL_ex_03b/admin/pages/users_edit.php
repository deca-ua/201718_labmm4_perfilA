<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php
    include_once "../components/navbars.php";
    ?>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Gestão de utilizadores</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edição de utilizador
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                            <form role="form" method="post" action="../scripts/users_update.php">
                                                <input type="hidden" name="id_users" value="##ID DO UTILIZADOR">
                                                <div class="form-group">
                                                    <label>ID do utilizador</label>
                                                    <p class="form-control-static">##ID DO UTILIZA|DOR</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Data de criação</label>
                                                    <p class="form-control-static">##DATA CRIAÇÃO</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input class="form-control" name="username"
                                                           value="##USERNAME">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" name="email" value="##EMAIL">
                                                </div>
                                                <div class="form-group">
                                                    <label>Estado</label>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="active">Activo
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Perfil</label>
                                                    <select class="form-control" name="id_roles">
                                                        <option value="1" $selected>##GENERAL</option>;
                                                        <option value="2" $selected>##CAPITÃO</option>;
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-default">Submeter alterações
                                                </button>
                                            </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
