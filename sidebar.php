<div id="sidebar-primary" class="sidebar">

	<?php if ( is_active_sidebar( 'primary' ) ) : ?>

		<?php dynamic_sidebar( 'primary' ); ?>

	<?php else : ?>

		<div id="sidebar">
          <h2 class="sidebartitle">Here is the Sidebar</h2>          
        </div><!-- Create some custom HTML or call the_widget().  It's up to you. -->

	<?php endif; ?>	

</div>
