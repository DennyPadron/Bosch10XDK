<div class="navbar-lateral full-reset">
    <div class="visible-xs font-movile-menu mobile-menu-button"></div>
    <div class="full-reset container-menu-movile custom-scroll-containers">
        <div class="logo full-reset all-tittles">
            <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i>
            Buses-GPS
        </div>
        <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
            <figure>
                <img src="<?php echo $LinksRoute; ?>assets/img/logo.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
            </figure>
            <p class="text-center" style="padding-top: 15px;">BUSES GPS</p>
        </div>
        <div class="full-reset nav-lateral-list-menu">
            <ul class="list-unstyled">
                <?php
                if($_SESSION['UserPrivilege']=='Admin'){
                        echo '
                        <li><a href="'.$LinksRoute.'home.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                        <li>
                        <a href="'.$LinksRoute.'maps.php"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Mapa</a></li>
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-bus zmdi-hc-fw"></i>&nbsp;&nbsp; Rutas <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                                <li><a href="'.$LinksRoute.'paradas.php"><i class="zmdi zmdi-bus zmdi-hc-fw"></i>&nbsp;&nbsp; Paradas oficiales</a></li>
                                <li><a href="'.$LinksRoute.'catalog.php"><i class="zmdi zmdi-bus zmdi-hc-fw"></i>&nbsp;&nbsp; Todas las rutas</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="dropdown-menu-button"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i>&nbsp;&nbsp; ¿Cómo llegar? <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
                            <ul class="list-unstyled">
                                <li><a href="'.$LinkRouteAdmin.'howto.php">
                                    <i class="zmdi zmdi-time-restore zmdi-hc-fw"></i>&nbsp;&nbsp; Buscar como llegar';
                                    '</a></li>
                                <li><a href="'.$LinkRouteAdmin.'adminreservation.php">
                                    <i class="zmdi zmdi-timer zmdi-hc-fw"></i>&nbsp;&nbsp; Reservaciones';
                                    $checkReservation1=ejecutarSQL::consultar("SELECT * FROM prestamo WHERE Estado='Reservacion'");
                                    if(mysqli_num_rows($checkReservation1)>0){ echo '<span class="label label-danger pull-right label-mhover">'.mysqli_num_rows($checkReservation1).'</span>'; }
                                    mysqli_free_result($checkReservation1);
                                echo '</a></li>
                            </ul>
                        </li>
                        <li><a href="'.$LinkRouteAdmin.'report.php"><i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes</a></li>
                        <li><a href="'.$LinkRouteAdmin.'help.php"><i class="zmdi zmdi-help zmdi-hc-fw"></i>&nbsp;&nbsp; Ayuda</a></li>
                        ';
                    }
                ?>
            </ul>
        </div>
    </div>
</div>
