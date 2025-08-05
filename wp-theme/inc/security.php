<?php

// ==========================================================================
// 投稿者アーカイブ無効化
// ==========================================================================

add_filter('author_rewrite_rules', '__return_empty_array');
add_action('init', function () {
	if (preg_match('#/author/.+#', $_SERVER['REQUEST_URI'])) {
		wp_redirect(home_url('/404.php'));
		exit;
	}
});