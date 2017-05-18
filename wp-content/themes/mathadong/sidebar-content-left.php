<?php
/**
 * The template for the content left widget areas on posts and pages
 *
 */
?>
<?php if ( is_active_sidebar( 'sidebar-content-left' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-content-left' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>

<div class="portlet box grey none-radius">
	<div class="portlet-title">
		<div class="caption">
			Giờ làm việc
		</div>
		<div class="tools">
			<a href="javascript:;" class="collapse" data-original-title="" title="">
			</a>
		</div>
	</div>
	<div class="portlet-body">
		 <div class="office-hours">
                                    	<!-- Timing 1 -->
                                    	<div class="timing">
                                            <div class="office-days">Thứ 2,3</div>
                                            <div class="office-time">8:00am</div>
                                            <div class="office-seperator">-</div>
                                            <div class="office-time">6:00pm</div>
                                        </div>
                                        <!-- Timing 1 -->
                                        
                                        <!-- Timing 2 -->
                                    	<div class="timing">
                                            <div class="office-days">Thứ 4</div>
                                            <div class="office-time">10:00am</div>
                                            <div class="office-seperator">-</div>
                                            <div class="office-time">7:00pm</div>
                                        </div>
                                        <!-- Timing 2 -->
                                        
                                        <!-- Timing 3 -->
                                    	<div class="timing">
                                            <div class="office-days">Thứ 5</div>
                                            <div class="office-time">9:30am</div>
                                            <div class="office-seperator">-</div>
                                            <div class="office-time">6:30pm</div>
                                        </div>
                                        <!-- Timing 3 -->
                                        
                                        <!-- Timing 4 -->
                                    	<div class="timing">
                                            <div class="office-days">Thứ 6</div>
                                            <div class="office-time">8:00am</div>
                                            <div class="office-seperator">-</div>
                                            <div class="office-time">12:00pm</div>
                                        </div>
                                        <!-- Timing 4 -->
                                    </div>
	</div>
</div>

