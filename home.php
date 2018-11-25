<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <?php
      session_start();
      $LinksRoute="./";
      include './inc/links.php';
    ?>
</head>
<body>
    <?php
        include './library/configServer.php';
        include './library/consulSQL.php';
        if (!$_SESSION['UserPrivilege']=='Admin' && $_SESSION['SessionToken']=="") {
            header("Location: process/logout.php");
            exit();
        }
        include './inc/NavLateral.php';
    ?>
    <div class="content-page-container full-reset custom-scroll-containers">
        <?php
            include './inc/NavUserInfo.php';
        ?>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Buses-GPS<small>Inicio</small></h1>
            </div>
        </div>
        <section class="full-reset text-center" style="padding: 40px 0;">
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-bus"></i></div>
            <div class="tile-name all-tittles">Rutas</div>
            <div class="tile-num full-reset">1</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-pin"></i></div>
            <div class="tile-name all-tittles">Paradas oficiales</div>
            <div class="tile-num full-reset">15</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-train"></i></div>
            <div class="tile-name all-tittles">Tren ligero</div>
            <div class="tile-num full-reset">1</div>
        </article>
        <article class="tile">
            <div class="tile-icon full-reset"><i class="zmdi zmdi-bus"></i></div>
            <div class="tile-name all-tittles" style="width: 90%;">Macrobus</div>
            <div class="tile-num full-reset">0</div>
        </article>
                </section>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    <?php include './help/help-home.php'; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        <?php include './inc/footer.php'; ?>
    </div>
</body>
</html>
