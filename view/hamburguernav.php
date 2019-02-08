<?php
/**
 * Created by PhpStorm.
 * User: jdami
 * Date: 07/02/2019
 * Time: 23:53
 */

require('../core/Language.php');
?>

<div id="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">
        <!--<p>&#9776;</p>-->
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="list">
        <a class="nav-item nav-link fondo" href="../pages/lobby.php">HOME</a>
        <div class="item">Reservas
            <ul>
                <li><a class="nav-item nav-link fondo" href="../pages/reservaAula.php"><?php echo $reservas_anadir; ?></a></li>
                <li><a class="nav-item nav-link fondo" href="../pages/listReservas.php"><?php echo $reservas_listar; ?></a></li>
            </ul>
        </div>
        <div class="item">Aulas
            <ul class="sublist">
                <li><a class="nav-item nav-link fondo" href="../pages/anadirAula.php"><?php echo $aula_anadir; ?></a></li>
                <li><a class="nav-item nav-link fondo" href="../pages/listarAulas.php"><?php echo $aula_listar; ?></a></li>
            </ul>
        </div>
        <a class="nav-item nav-link fondo" href="#">Administrar sitio web</a>
        <li class="nav-item dropdown fondo">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                <?php echo $cambiaidioma; ?>
            </a>
            <div class="dropdown-menu">
                <a class="nav-item nav-link fondo" href="../pages/cambiaidioma.php?language=es"><?php echo $cambiaidioma_es; ?></a>
                <a class="nav-item nav-link fondo" href="../pages/cambiaidioma.php?language=en"><?php echo $cambiaidioma_en; ?></a>
            </div>
        </li>
        <div><a class="nav-item nav-link fondo" href="../pages/logout.php"><?php echo $cierrasesion; ?></a></div>
    </div>
</div>

<script type="text/javascript">
    function toggleSidebar(){
        document.body.classList.toggle('sidebar-active');
        document.getElementById('pie').toggle('sidebar-active');
    }
</script>