<?php //if ( ! is_active_sidebar( 'sidebar-1' ) ) { return; } ?>
<aside id="sidebar" class="site-sidebar">
	<div class="site-sidebar__header">
		<div class="site-sidebar__header__close_btn"><span class="c-table"><span class="c-table__midle"><label class="header_btn" for="sidebar_flag"><span class="c-hamburger_close"><span class="c-hamburger_close__bar"></span><span class="c-hamburger_close__bar"></span></span></label></span></span></div>
	</div>
	<div class="site-sidebar__main">
		<div class="c-scroll_y">
			<div class="c-scroll_y__inner">
				<ul class="site-sidebar_widget-area"><?php dynamic_sidebar( 'common-sidebar' ); ?></ul>
			</div>
		</div>
	</div>
</aside>
