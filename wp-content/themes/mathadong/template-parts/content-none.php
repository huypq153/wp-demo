<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<!-- Content Row -->
<div class="page-content">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( __( 'Bạn đã sẵn sàng để đăng bài viết đầu tiên của bạn? <a href="%1$s">Bắt đầu tại đây</a>.', 'td1501' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

		<p><?php _e( 'Xin lỗi, không có gì phù hợp với điều kiện tìm kiếm của bạn. Vui lòng thử lại với một số từ khóa khác nhau.', 'td1501' ); ?></p>

	<?php else : ?>

		<p><?php _e( 'Xin lỗi hiên trang này đang được bảo trì.', 'td1501' ); ?></p>

	<?php endif; ?>
</div><!-- .page-content -->
