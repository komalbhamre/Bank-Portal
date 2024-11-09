<?php
include("admin/conf/config.php");
/* Persisit System Settings On Brand */
$ret = "SELECT * FROM `iB_SystemSettings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Bank Portal ..Way towards the digital banking...</title>
        <link href="dist/css/robust.css" rel="stylesheet">
    </head>

    <body>

        <nav class="navbar navbar-lg navbar-expand-lg navbar-transparant navbar-dark navbar-absolute w-100">
            <div class="container">
                <a class="navbar-brand" href="index.php">Bank Portal</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" target="_blank" href="admin/pages_index.php">Admin Portal</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" target="_blank" href="staff/pages_staff_index.php">Staff Portal</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" target="_blank" href="client/pages_client_index.php">Client Portal</a>
                        </li>
                    </ul>
                    <!--<a class="btn btn-danger" href="client/pages_client_signup.php" target="_blank">Join Us</a>-->
                </div>
            </div>
        </nav>

        <div class="intro py-5 py-lg-9 position-relative text-Black">
            <div class="bg-overlay-gray">
                <img src="dist/bg1.jpg"class="img-fluid img-cover"/>
            </div>
            <div class="intro-content py-6 text-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto text-center">
                            <h1 class="my-3 display-4 d-none d-lg-inline-block">Bank Portal</h1>
                            <p class="lead mb-3">
                                Way towards the digital banking
                            </p>
                            <br>
                            <!--<a class="btn btn-success btn-lg mr-lg-2 my-1" target="_blank" href="client/pages_client_signup.php" role="button"></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('footer.php');?>
        <script src="dist/js/bundle.js"></script>
    </body>

    </html>
<?php
} ?>