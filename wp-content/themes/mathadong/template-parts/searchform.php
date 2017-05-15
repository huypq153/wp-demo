<?php
/**
 * The template for displaying search forms in PQHEyeDoctor
 *
 * @package PQHEyeDoctor
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="text" class="form-control" placeholder="Search" name="query" value="<?php echo esc_attr( get_search_query() ); ?>">
		<span class="input-group-btn">
		<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
		</span>
	</div>
</form>
