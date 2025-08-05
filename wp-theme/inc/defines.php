<?php
// ==========================================================================
// 定義
// ==========================================================================
/* ---------- パスの短縮 ---------- */
define('IMAGEPATH',            get_template_directory_uri() . '/assets/images');

/* ---------- 各ページのリンク ---------- */
define('HOME_URL',             esc_url(home_url('/')));                          // トップページ
define('ABOUT_URL',            esc_url(home_url('/about/')));                    // 私たちについて
define('DUTIES_URL',           esc_url(home_url('/duties/')));                   // 業務内容
define('WORKS_URL',            esc_url(home_url('/works/')));                    // 施工事例
define('COMPANY_URL',          esc_url(home_url('/company/')));                  // 会社概要
define('RECRUIT_URL',          esc_url(home_url('/recruit/')));                  // 採用情報
define('NEWS_URL',             esc_url(home_url('/news/')));                     // お知らせ
define('CONTACT_URL',          esc_url(home_url('/contact/')));                  // お問い合わせ
define('CONTACT_CONFIRM_URL',  esc_url(home_url('/contact-confirm/')));          // お問い合わせ確認
define('CONTACT_THANKS_URL',   esc_url(home_url('/contact-thanks/')));           // お問い合わせ完了
define('PRIVACY_POLICY_URL',   esc_url(home_url('/privacy-policy/')));           // プライバシーポリシー