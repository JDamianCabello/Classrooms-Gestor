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
    <a class="navbar-brand" href=""><?php echo $external_tittle; ?></a>
    <ul class="navbar-nav mr-auto">

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
    <div class="login-container">
        <form method="post">
            <input type="text" name="user" id="inputUser" placeholder="<?php echo $user_name; ?>">
            <input type="password" name="password" id="inputPassword" placeholder="<?php echo $user_password; ?>">
            <input type="submit" name="" value="<?php echo $acess; ?>">
        </form>
    </div>
</nav>

