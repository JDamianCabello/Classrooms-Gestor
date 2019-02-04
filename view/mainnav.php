<?php
/**
 * Created by PhpStorm.
 * User: Damián Cabello.
 * Date: 28/01/19
 * Time: 9:08
 *
 * Este archivo es el main Nav de mi sitio web
 */

    require('../core/Language.php');
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="lobby.php">Lobby</a>
    <ul class="navbar-nav mr-auto">
        <!-- Dropdown alumnos -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                <?php echo $reservas; ?>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><?php echo $reservas_anadir; ?></a>
                <a class="dropdown-item" href="#"><?php echo $reservas_listar; ?></a>
            </div>
        </li>

        <!-- Dropdown aula -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                <?php echo $aula; ?>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="../pages/anadirAulaForm.php"><?php echo $aula_anadir; ?></a>
                <a class="dropdown-item" href="../pages/listarAulas.php"><?php echo $aula_listar; ?></a>
            </div>
        </li>

        <!-- Dropdown admin panel-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                <?php echo $administraaula; ?>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><?php echo $administraaula_op1; ?></a>
                <a class="dropdown-item" href="#"><?php echo $administraaula_op2; ?></a>
                <a class="dropdown-item" href="#"><?php echo $administraaula_op3; ?></a>
            </div>

        <!-- Dropdown cambiar idioma -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                <?php echo $cambiaidioma; ?>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="../pages/cambiaidioma.php?language=es"><?php echo $cambiaidioma_es; ?></a>
                <a class="dropdown-item" href="../pages/cambiaidioma.php?language=en"><?php echo $cambiaidioma_en; ?></a>
            </div>
        </li>
    </ul>
    <a class="nav-item nav-link" href="../pages/logout.php"><?php echo $cierrasesion; ?></a>

</nav>

