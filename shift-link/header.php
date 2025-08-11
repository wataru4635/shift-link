<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!---------  header  --------->

  <header class="header">
    <div class="header__inner">
      <div class="header__logo-nav">
        <a href="<?php echo HOME_URL; ?>" class="header__logo-link">
          <?php
            $logo_tag = (is_front_page() || is_home()) ? 'h1' : 'p';
          ?>
          <<?php echo $logo_tag; ?> class="header__logo-text logo-text" aria-label="SHIFTLINK">
            SHI<span class="logo-text__spacing" aria-hidden="true">F</span>T<span class="logo-text__black"
              aria-hidden="true">LINK</span>
          </<?php echo $logo_tag; ?>>
        </a>
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item"><a href="#about" class="header__nav-link"><span
                  class="header__nav-link-text">SHIFT LINKとは</span></a></li>
            <li class="header__nav-item"><a href="#feature" class="header__nav-link"><span
                  class="header__nav-link-text">特徴</span></a></li>
            <li class="header__nav-item"><a href="#scene" class="header__nav-link"><span
                  class="header__nav-link-text">活用シーン</span></a></li>
            <li class="header__nav-item"><a href="#qa" class="header__nav-link"><span
                  class="header__nav-link-text">よくあるご質問</span></a></li>
          </ul>
        </nav>
      </div>
      <div class="header__contact-btn-hamburger">
        <a href="https://the-shift.tokyo/contact/" class="header__contact-btn contact-btn js-contact-btn"
          target="_blank" rel="noopener noreferrer">お問合せはこちら</a>
        <button class="header__hamburger js-hamburger" type="button" aria-label="メニューを開く">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <!---------  drawer  --------->
  <div class="header__drawer js-drawer">
    <nav class="header__drawer-nav">
      <ul class="header__drawer-items">
        <li class="header__drawer-item">
          <a href="#about" class="header__drawer-item-link">SHIFT LINKとは</a>
        </li>
        <li class="header__drawer-item">
          <a href="#feature" class="header__drawer-item-link">特徴</a>
        </li>
        <li class="header__drawer-item">
          <a href="#scene" class="header__drawer-item-link">活用シーン</a>
        </li>
        <li class="header__drawer-item">
          <a href="#qa" class="header__drawer-item-link">よくあるご質問</a>
        </li>
      </ul>
      <div class="header__drawer-contact-btn">
        <a href="https://the-shift.tokyo/contact/" class="header__drawer-contact-btn-link" target="_blank"
          rel="noopener noreferrer">お問合せはこちら</a>
      </div>
    </nav>
    <div class="header__drawer-bottom">
      <ul class="header__drawer-bottom-nav-list">
        <li class="header__drawer-bottom-nav-item">
          <a href="https://the-shift.tokyo/company/" class="header__drawer-bottom-nav-link" target="_blank" rel="noopener noreferrer">会社概要</a>
        </li>
        <li class="header__drawer-bottom-nav-item">
          <a href="https://the-shift.tokyo/terms/" class="header__drawer-bottom-nav-link" target="_blank" rel="noopener noreferrer">利用規約</a>
        </li>
        <li class="header__drawer-bottom-nav-item">
          <a href="https://the-shift.tokyo/privacy/" class="header__drawer-bottom-nav-link" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>
        </li>
        <li class="header__drawer-bottom-nav-item">
          <a href="https://the-shift.tokyo/disclaimer/" class="header__drawer-bottom-nav-link" target="_blank" rel="noopener noreferrer">セキュリティーポリシー</a>
        </li>
      </ul>
      <div class="header__drawer-logo">
        <p class="header__drawer-logo-text logo-text">
          SHI<span class="logo-text__spacing" aria-hidden="true">F</span>T<span class="logo-text__black"
            aria-hidden="true">LINK</span>
        </p>
      </div>
    </div>
  </div>