<nav role="hamburger-menu" id="navigation-drawer">
     <div class="mobile-toggle">
       <input type="checkbox">
       <span></span>
       <span></span>
       <span></span>
       <?php
       $args = array('menu_class' => 'menu', 'container' => false);
       wp_nav_menu($args);
       ?>
     </div>
</nav>
