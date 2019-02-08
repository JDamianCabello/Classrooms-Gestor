<?php
/**
 * Created by PhpStorm.
 * User: jdami
 * Date: 07/02/2019
 * Time: 23:53
 */

?>

<div id="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar(this)">
        <!--<p>&#9776;</p>-->
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="list">
        <div class="item">Home</div>
        <div class="item">About us</div>
        <div class="item">Contact us</div>
    </div>
</div>

<script type="text/javascript">
    function toggleSidebar(ref){
        document.body.classList.toggle('sidebar-active');
        document.getElementById('pie').toggle('sidebar-active');
    }
</script>