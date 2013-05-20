<aside id="sidebar1" class="sidebar clearfix" role="complementary"><?php
  if(is_active_sidebar( 'sidebar1' )) :
    dynamic_sidebar( 'sidebar1' );
  else : ?>
    <div class="widget">
      <h1 class="widget-title">Static Sidebar</h1>
      <p>Make a static sidebar in sidebar.php</p>
    </div><?php
  endif; ?>
</aside>
