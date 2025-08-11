<?php
// ==========================================================================
// WordPress テーマの基本設定
// ==========================================================================
function my_theme_setup() {
    // アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');

    // タイトルタグ自動生成を有効化
    add_theme_support('title-tag');

    // RSSフィードリンクを自動生成
    add_theme_support('automatic-feed-links');

    // HTML5 マークアップのサポート（フォーム、コメント、ギャラリーなど）
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // ウィジェットの部分的なリフレッシュを有効化
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'my_theme_setup');

// ==========================================================================
// スクリプトとスタイルのエンキュー（共通 + 特定ページ）
// ==========================================================================
function enqueue_custom_scripts() {
    $theme_path = get_theme_file_path();
    $asset_uri  = get_theme_file_uri('/assets');

    $get_ver = function($file_path) {
        return file_exists($file_path) ? filemtime($file_path) : wp_get_theme()->get('Version');
    };

    // トップページ専用JS・CSS
    if (is_front_page()) {
        // Swiper JS
        wp_enqueue_script(
            'swiper-js',
            'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
            [],
            '8.0.0',
            true
        );

        // Swiper CSS
        wp_enqueue_style(
            'swiper-css',
            'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
            [],
            '8.0.0'
        );
        wp_enqueue_script(
            'top-js',
            "{$asset_uri}/js/top.js",
            [],
            $get_ver("{$theme_path}/assets/js/top.js"),
            true
        );
    }

    // 共通 CSS
    $style_file = '/css/style.css';
    wp_enqueue_style(
        'common-style',
        "{$asset_uri}{$style_file}",
        [],
        $get_ver("{$theme_path}/assets{$style_file}")
    );

    // 共通 JS
    $script_file = '/js/script.js';
    wp_enqueue_script(
        'common-script',
        "{$asset_uri}{$script_file}",
        [],
        $get_ver("{$theme_path}/assets{$script_file}"),
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// ==========================================================================
// ヘッダーへのプリロード
// ==========================================================================
function enqueue_preload_headers() {
  ?>
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Jockey+One:wght@400&family=Zen+Kaku+Gothic+New:wght@400;500;600;700&display=swap" rel="preload"
    as="style" fetchpriority="high">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&family=Jockey+One:wght@400&family=Zen+Kaku+Gothic+New:wght@400;500;600;700&display=swap" rel="stylesheet"
    media="print" onload="this.media='all'">
<?php
}
add_action('wp_head', 'enqueue_preload_headers');

// ==========================================================================
// Adobe Fonts を WordPress の wp_enqueue_scripts で管理
// ==========================================================================
function enqueue_adobe_fonts_script() {
    // 外部スクリプトを明示的に読み込まない（代わりに手動で追加）
    wp_register_script('adobe-typekit', '', [], null, false);
    wp_enqueue_script('adobe-typekit');

    $inline_script = <<<EOD
(function(d) {
  var config = {
    kitId: "fxx0kgg",
    scriptTimeout: 3000,
    async: true
  },
  h = d.documentElement,
  t = setTimeout(function() {
    h.className = h.className.replace(/\\bwf-loading\\b/g,"") + " wf-inactive";
  }, config.scriptTimeout),
  tk = d.createElement("script"),
  f = false,
  s = d.getElementsByTagName("script")[0],
  a;
  h.className += " wf-loading";
  tk.src = "https://use.typekit.net/" + config.kitId + ".js";
  tk.async = true;
  tk.onload = tk.onreadystatechange = function() {
    a = this.readyState;
    if (f || a && a != "complete" && a != "loaded") return;
    f = true;
    clearTimeout(t);
    try { Typekit.load(config); } catch (e) {}
  };
  s.parentNode.insertBefore(tk, s);
})(document);
EOD;

    wp_add_inline_script('adobe-typekit', $inline_script);
}
add_action('wp_enqueue_scripts', 'enqueue_adobe_fonts_script');


// ==========================================================================
// 不要な head内のタグやスクリプトを削除する関数
// ==========================================================================
function codeups_clean_up_head() {
    // WordPressのバージョン情報を削除（セキュリティ対策）
    remove_action('wp_head', 'wp_generator');

    // 絵文字関連のスクリプトとスタイルを削除（パフォーマンス向上）
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    // 外部ツールとの連携用の不要なタグを削除（セキュリティ・軽量化）
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');

    // 追加フィードリンクを削除（必要な場合は残す）
    remove_action('wp_head', 'feed_links_extra', 3);
  }

  // テーマが読み込まれた後に実行
  add_action('after_setup_theme', 'codeups_clean_up_head');