<aside id="sidebar1" class="sidebar" role="complementary"><?php
  if ( is_active_sidebar( 'sidebar1' ) ) :
    dynamic_sidebar( 'sidebar1' );
  else : ?>
    <div class="widget">
      <h1 class="widget-title">Static Sidebar</h1>
      <p>Girl, it looks like you need to either define a static sidebar in sidebar.php or you need to add some widgets.</p>
    </div><?php
  endif; ?>
</aside>
