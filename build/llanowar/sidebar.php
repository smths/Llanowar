<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) { return; } ?>
<aside>
	<div id="site-header" class="site-header">
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div>
</aside>
