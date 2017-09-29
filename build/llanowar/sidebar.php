<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) { return; } ?>
<aside>
	<div id="site-sidebar" class="site-sidebar">
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div>
</aside>
