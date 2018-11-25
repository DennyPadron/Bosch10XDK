<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mapa</title>
    <?php
        session_start();
        $LinksRoute="./";
        include './inc/links.php';
    ?>
    <script type="text/javascript" src="js/jmaps.js"></script>
    <script>
        $(document).ready(function(){
            $(function(){
              $("div.holder").jPages({
                containerID : "itemContainer",
                perPage: 15
              });
            });
           $('.btn-info-book').click(function(){
               window.location ="infobook.php?codeBook="+$(this).attr("data-code-book");
           });
           $('.list-catalog-container li').click(function(){
               window.location="catalog.php?CategoryCode="+$(this).attr("data-code-category");
           });
        });
    </script>
</head>
<body>
    <?php
        include './library/configServer.php';
        include './library/consulSQL.php';
        include './process/SecurityUser.php';
        $VarCategoryCatalog=consultasSQL::CleanStringText($_GET['CategoryCode']);
        include './inc/NavLateral.php';
    ?>
    <div class="content-page-container full-reset custom-scroll-containers">
        <?php
            include './inc/NavUserInfo.php';
        ?>
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">BUSES-GPS <small>Maps</small></h1>
            </div>
                <form action="../process/AddCategory.php" method="post" class="form_SRCB" data-type-form="save"  autocomplete="off">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el punto de partida" name="categoryCode" required="" pattern="[0-9]{1,20}" maxlength="20" data-toggle="tooltip" data-placement="top">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Punto de partida</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Escribe aquí la dirección de destino" name="categoryName" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Punto de destino</label>
                            </div>
                            <p class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-search"></i> &nbsp;&nbsp; Buscar</button>
                            </p>
                       </div>
                    </div>
                </form>
         <div class="container-fluid"  style="margin: 40px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                  <div id="googleMap" style="width:100%;height:400px;"></div>


                    <script type="text/javascript">
                    function myMap() {
                        var mapProp= {
                            center:new google.maps.LatLng(20.653763, -103.325676),
                            zoom:25,
                        };
                        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?&callback=myMap"></script>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    <?php include './help/help-catalog.php'; ?>
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
