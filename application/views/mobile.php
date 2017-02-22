<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?></title>

    <link href="<?= $base ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= $base ?>assets/css/style.css" rel="stylesheet" />

  </head>
  <body>
    <?php include("conf.php"); ?>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <h3 class="text-primary">
                <?= $header ?>
            </h3>
            <h4>
                <?= $header2 ?>
            </h4>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <h3>
                
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <?= $client ?>
                    </h3>
                </div>
                <div class="panel-body">
                    <h2> <?= $content ?> </h2>
                </div> 
                
                <div class="panel-footer">
                    <?= $footer ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>

    <script src="<?= $base ?>js/jquery.min.js"></script>
    <script src="<?= $base ?>js/bootstrap.min.js"></script>
    <script src="<?= $base ?>js/scripts.js"></script>
  </body>
</html>
