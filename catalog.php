<!DOCTYPE html>
<html lang="es">
<head>
    <title>Rutas</title>
    <?php
        session_start();
        $LinksRoute="./";
        include './inc/links.php';
    ?>
    <script type="text/javascript" src="js/jPages.js"></script>
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
                    <h1 class="all-tittles">BUSES GPS <small>Rutas</small></h1>
                  </div>
              </div>
              <div class="conteiner-fluid">
          <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation" class="active"><a href="catalog.php">Todas las rutas</a></li>
              <li role="presentation"><a href="paradas.php">Paradas oficiales</a></li>
          </ul>
      </div>
      <div class="container-fluid" style="margin: 0 0 50px 0;">
          <form class="pull-right" style="width: 30% !important;" autocomplete="off">
              <div class="group-material">
                  <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar ruta" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe la ruta">
                  <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
                      <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                  </button>
              </div>
          </form>
          <h2 class="text-center all-tittles" style="margin: 25px 0; clear: both;">Tipo de transporte</h2>
          <ul class="list-unstyled text-center list-catalog-container">
              <li class="list-catalog">Camión</li>
              <li class="list-catalog">Tren ligero</li>
              <li class="list-catalog">Macrobus</li>
          </ul>
      </div>
      <div class="container-fluid">
          <h2 class="text-center all-tittles">listado de rutas</h2>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">
                      <div class="div-table-cell" style="width: 18%;">No de ruta</div>
                      <div class="div-table-cell" style="width: 32%;">Tipo</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 18%;">622</div>
                    <div class="div-table-cell" style="width: 32%;">Camión</div>
                </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 18%;">Línea 1</div>
                    <div class="div-table-cell" style="width: 32%;">Tren ligero</div>
                  </div>
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
