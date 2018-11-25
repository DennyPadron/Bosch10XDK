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
              <li role="presentation"><a href="catalog.php">Todas las rutas</a></li>
              <li role="presentation" class="active"><a href="paradas.php">Paradas oficiales</a></li>
          </ul>
      </div>
      <div class="container-fluid">
          <h2 class="text-center all-tittles">listado de paradas oficiales</h2>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">
                      <div class="div-table-cell" style="width: 28%;">Nombre de la parada</div>
                      <div class="div-table-cell" style="width: 28%;">Calle</div>
                      <div class="div-table-cell" style="width: 28%;">Cruce</div>
                      <div class="div-table-cell" style="width: 15%;">Rutas</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Periférico Sur</div>
                    <div class="div-table-cell" style="width: 28%;">Cristobal colón</div>
                    <div class="div-table-cell" style="width: 28%;">Periférico Sur</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Santuario Martires de Cristo rey</div>
                    <div class="div-table-cell" style="width: 28%;">Cristoba Colón</div>
                    <div class="div-table-cell" style="width: 28%;">Paseo de los Balcones</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">España</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Cristoba Colón</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Jaime Torres Bodet</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Patria</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Cristoba Colón</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Patria</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Isla Raza</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Cristoba Colón</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Isla Raza</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">18 de Marzo</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Cristoba Colón</div>
                    <div class="div-table-cell" style="width: 28%;">Av. iguel Lopez de Legazpi</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Urdante</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Cristoba Colón</div>
                    <div class="div-table-cell" style="width: 28%;">Fray Andrés de Urdaneta</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Unidad deportiva</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Cristoba Colón</div>
                    <div class="div-table-cell" style="width: 28%;">Calle Isla Barlovento</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Santa Filomena</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Cristoba Colón</div>
                    <div class="div-table-cell" style="width: 28%;">Calle Pino</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Washington</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Cristoba Colón</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Circunvalación Agustín Yañéz</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Mexicaltzingo</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Federalismo</div>
                    <div class="div-table-cell" style="width: 28%;">Calle Mexicaltzingo</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Juarez</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Federalismo</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Juarez</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Refugio</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Federalismo</div>
                    <div class="div-table-cell" style="width: 28%;">Calle Joaquin Angulo</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Mezquitan</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Federalismo</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Maestro</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Ávila Camacho</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Federalismo</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Ávila Camacho</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">División Norte</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Federalismo</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Circunvalación División Norte</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Atemajac</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Federalismo</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Zoquipan</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div>
          <div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Dermatológico</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Federalismo</div>
                    <div class="div-table-cell" style="width: 28%;">Calle Ricardo Flores Magón</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
                  </div>
              </div>
          </div><div class="table-responsive">
              <div class="div-table" style="margin:0 !important;">
                  <div class="div-table-row div-table-row-list">
                    <div class="div-table-cell" style="width: 28%;">Periférico Norte</div>
                    <div class="div-table-cell" style="width: 28%;">Av. Federalismo</div>
                    <div class="div-table-cell" style="width: 28%;">Periférico Norte</div>
                    <div class="div-table-cell" style="width: 15%;">Línea 1</div>
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
