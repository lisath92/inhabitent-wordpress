<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label class="search-form">
		<button class="search-submit">
				<i class="fa fa-search"></i>
		</button>
			<input type="search" class="search-field" placeholder="Type and hit enter ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />		
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</label>
	</fieldset>
</form>
