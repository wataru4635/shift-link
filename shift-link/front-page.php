<?php
/*
* Template Name: トップページ
*/
?>
<?php get_header(); ?>

<main>

  <section class="fv">
    <div class="fv__inner">
      <div class="fv__content js-fv-content">
        <div class="fv__text-wrap">
          <h2 class="fv__title">
            <span class="fv__title-text-wrap"><span class="fv__title-text">スマホにかざすだけ。</span></span>
            <span class="fv__title-text-wrap"><span class="fv__title-text">イベントがもっと特別になる。</span></span>
          </h2>
          <p class="fv__text">
            <span class="fv__text-inner">貴重なメイキング動画やメッセージを独占配信</span>
          </p>
        </div>
        <div class="fv__links">
          <a href="#" class="fv__link link-btn">
            資料請求はこちら
          </a>
          <a href="#" class="fv__link link-btn link-btn--white">
            無料見積りはこちら
          </a>
        </div>
      </div>
    </div>
  </section>

  <!---------  公開当初は実装なし  --------->

  <!-- <section class="partner-logos">
    <div class="partner-logos__inner inner">
    <ul class="partner-logos__list">
      <li class="partner-logos__item">
        <img src="logo1.png" alt="協賛企業のロゴ1" loading="lazy" class="partner-logos__image">
      </li>
      <li class="partner-logos__item">
        <img src="logo2.png" alt="協賛企業のロゴ2" loading="lazy" class="partner-logos__image">
      </li>
      <li class="partner-logos__item">
        <img src="logo3.png" alt="協賛企業のロゴ3" loading="lazy" class="partner-logos__image">
      </li>
      <li class="partner-logos__item">
        <img src="logo4.png" alt="協賛企業のロゴ4" loading="lazy" class="partner-logos__image">
      </li>
      <li class="partner-logos__item">
        <img src="logo5.png" alt="協賛企業のロゴ5" loading="lazy" class="partner-logos__image">
      </li>
    </ul>
    </div>
  </section> -->

  <!---------  ここまで  --------->

  <section class="top-about" id="about">
    <div class="top-about__inner">
      <div class="top-about__content">
        <div class="top-about__img-wrap js-clip-img">
          <picture>
            <source srcset="<?php echo IMAGEPATH; ?>/top/top-about-sp.webp" media="(max-width: 767px)" type="image/webp"
              width="375" height="300">
            <img src="<?php echo IMAGEPATH; ?>/top/top-about.webp" alt="スマホにカードをかざす様子" width="760" height="320"
              loading="lazy" class="top-about__img">
          </picture>
        </div>
        <div class="top-about__text-block">
          <h2 class="top-about__title section-title js-text-split">SHIFT&nbsp;LINKとは</h2>
          <p class="top-about__lead js-slide-right --delay-2">
            SHIFT LINKは、スマホにかざすだけで特別な映像やメッセージが流れる、<br class="u-desktop">次世代のイベントプロモーショングッズです。
          </p>
          <p class="top-about__description js-slide-right --delay-3">
            NFC技術と独自の特許システム（特許第7250387号）を活用し、配布後もコンテンツを自由に更新可能。1枚のカードが、ファンとの継続的な接点を生み出します。「配るだけ」で情報が届き、ファンの心を動かす。それがSHIFT
            LINKです。
          </p>
          <ul class="top-about__features js-slide-right --delay-4">
            <li class="top-about__feature-item">「あとから配信」可能</li>
            <li class="top-about__feature-item">拡散防止 <br class="u-mobile">セキュリティ設計</li>
            <li class="top-about__feature-item">デザイン性と<br class="u-mobile">機能性の特別仕様</li>
            <li class="top-about__feature-item">1枚から数万枚まで<br class="u-mobile">柔軟に対応</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="top-solution">
    <div class="top-solution__inner inner">
      <h2 class="top-solution__title section-title js-text-split">SHIFT&nbsp;LINKなら、お悩みを解決</h2>
      <ul class="top-solution__list">
        <li class="top-solution__item">
          <div class="top-solution__img-wrap js-scaleImg">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/solution-quickplay-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="375" height="160">
              <img src="<?php echo IMAGEPATH; ?>/top/solution-quickplay.webp" alt="スマホで動画を再生する手のクローズアップ" width="560"
                height="160" loading="lazy" class="top-solution__img">
            </picture>
          </div>
          <div class="top-solution__item-body js-animation">
            <p class="top-solution__item-tag">QUICK PLAY</p>
            <h3 class="top-solution__item-title">スマホにかざすだけで限定映像を再生</h3>
            <p class="top-solution__item-text">
              DVDやオンライン配信に頼らず、ファン限定の映像やメッセージを、特別な形で手軽に届けることが可能です。従来の手段では難しかったコンテンツ共有もスムーズに実現できます。
            </p>
          </div>
        </li>

        <li class="top-solution__item">
          <div class="top-solution__img-wrap js-scaleImg">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/solution-control-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="375" height="160">
              <img src="<?php echo IMAGEPATH; ?>/top/solution-control.webp" alt="ノートパソコンを操作する手元" width="560"
                height="160" loading="lazy" class="top-solution__img">
            </picture>
          </div>
          <div class="top-solution__item-body js-animation">
            <p class="top-solution__item-tag">CONTROL</p>
            <h3 class="top-solution__item-title">動画公開のタイミングを自由にコントロール</h3>
            <p class="top-solution__item-text">
              イベント終了後に動画を公開したい場合でも、管理画面から柔軟な運用が可能です。
            </p>
          </div>
        </li>

        <li class="top-solution__item">
          <div class="top-solution__img-wrap js-scaleImg">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/solution-security-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="375" height="160">
              <img src="<?php echo IMAGEPATH; ?>/top/solution-security.webp" alt="スマホのロック画面と鍵アイコン" width="560"
                height="160" loading="lazy" class="top-solution__img">
            </picture>
          </div>
          <div class="top-solution__item-body js-animation">
            <p class="top-solution__item-tag">SECURITY</p>
            <h3 class="top-solution__item-title">セキュリティも安心の独自認証システムを搭載</h3>
            <p class="top-solution__item-text">
              スマホで手軽に再生できる仕組みにしたいが、拡散リスクやセキュリティが心配。そんな場合でも、登録したスマホ限定の再生で無断拡散を防止。安心して配信できます。
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="top-features" id="feature">
    <div class="top-features__inner inner">
      <h2 class="top-features__title section-title js-text-split">SHIFT&nbsp;LINKの3つの特徴</h2>
      <ul class="top-features__list">
        <li class="top-features__item js-fade-up">
          <div class="top-features__img-wrap">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/top-feature-01-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="335" height="130">
              <img src="<?php echo IMAGEPATH; ?>/top/top-feature-01.webp" alt="スマホにかざして特別体験を提供" width="380" height="190"
                loading="lazy" class="top-features__img">
            </picture>
          </div>
          <h3 class="top-features__item-title">特別体験は“かざすだけ”</h3>
          <p class="top-features__item-text">
            DVDや配信なしで、<br class="u-mobile">特別なコンテンツを簡単に届けられます。
          </p>
        </li>

        <li class="top-features__item js-fade-up --delay-1">
          <div class="top-features__img-wrap">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/top-feature-02-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="335" height="130">
              <img src="<?php echo IMAGEPATH; ?>/top/top-feature-02.webp" alt="ノートパソコンにコンテンツを更新する様子" width="380"
                height="190" loading="lazy" class="top-features__img">
            </picture>
          </div>
          <h3 class="top-features__item-title">自由に更新。コンテンツはあとから</h3>
          <p class="top-features__item-text">
            自由に更新できるから、<br class="u-mobile">コンテンツは後から追加できます。
          </p>
        </li>

        <li class="top-features__item js-fade-up --delay-2">
          <div class="top-features__img-wrap">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/top-feature-03-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="335" height="130">
              <img src="<?php echo IMAGEPATH; ?>/top/top-feature-03.webp" alt="ギフトが矢印で届けられるイメージ" width="380"
                height="190" loading="lazy" class="top-features__img">
            </picture>
          </div>
          <h3 class="top-features__item-title">届けたい人だけにしっかり届く</h3>
          <p class="top-features__item-text">
            登録スマホ限定再生。<br class="u-mobile">拡散を防ぎ、安全に手軽な配信が可能。
          </p>
        </li>
      </ul>
    </div>
  </section>

  <section class="top-scene" id="scene">
    <div class="top-scene__title-wrap">
      <h2 class="top-scene__title section-title js-text-split">SHIFT&nbsp;LINKの活用シーン</h2>
    </div>
    <div class="top-scene__content js-animation">
      <div class="top-scene_carousel_wrap swiper">
        <div class="top-scene_carousel swiper-wrapper">
          <div class="top-scene_carousel-item swiper-slide">
            <div class="top-scene_carousel-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-scene-01.webp" alt="音楽イベントの観客が手を挙げている様子" width="210"
                height="100" loading="lazy" class="top-scene_carousel-img">
            </div>
            <h3 class="top-scene_carousel-title">
              音楽イベントの入場特典に
            </h3>
            <p class="top-scene_carousel-text">
              特別映像やバックステージメッセージを配信し、来場体験の価値をアップ。
            </p>
          </div>
          <div class="top-scene_carousel-item swiper-slide">
            <div class="top-scene_carousel-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-scene-02.webp" alt="企業イベント会場の展示ブース風景" width="210" height="100"
                loading="lazy" class="top-scene_carousel-img">
            </div>
            <h3 class="top-scene_carousel-title">
              企業イベントのノベルティに
            </h3>
            <p class="top-scene_carousel-text">
              製品紹介やプレゼン資料を後から配信。紙資料不要のスマートな情報提供が可能。
            </p>
          </div>
          <div class="top-scene_carousel-item swiper-slide">
            <div class="top-scene_carousel-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-scene-03.webp" alt="自動車販売店に並ぶ複数の新車" width="210" height="100"
                loading="lazy" class="top-scene_carousel-img">
            </div>
            <h3 class="top-scene_carousel-title">
              高額商材の来店記念品に
            </h3>
            <p class="top-scene_carousel-text">
              アフターフォロー動画や契約特典情報を配信し、購入意欲を高める接点として活用。
            </p>
          </div>
          <div class="top-scene_carousel-item swiper-slide">
            <div class="top-scene_carousel-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-scene-04.webp" alt="野球の試合中に塁上で選手がプレーする様子" width="210"
                height="100" loading="lazy" class="top-scene_carousel-img">
            </div>
            <h3 class="top-scene_carousel-title">
              スポーツ大会の記念品に
            </h3>
            <p class="top-scene_carousel-text">
              試合の名場面や選手の限定メッセージを後日配信するサプライズに。
            </p>
          </div>
          <div class="top-scene_carousel-item swiper-slide">
            <div class="top-scene_carousel-img-wrap">
              <img src="<?php echo IMAGEPATH; ?>/top/top-scene-05.webp" alt="観光地で記念撮影する旅行客" width="210" height="100"
                loading="lazy" class="top-scene_carousel-img">
            </div>
            <h3 class="top-scene_carousel-title">
              旅行や観光の旅記念に
            </h3>
            <p class="top-scene_carousel-text">
              旅先の風景や参加者写真をまとめて配信。記憶に残るプレミアム体験を提供。
            </p>
          </div>
        </div>
      </div>
      <div class="genesis_carousel_scrollbar">
        <div class="top-scene_carousel_scrollbar swiper-scrollbar swiper-scrollbar-horizontal">
          <div class="swiper-scrollbar-drag"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="top-cases">
    <div class="top-cases__inner inner">
      <h2 class="top-scene__title section-title js-text-split">導入事例</h2>
      <ul class="top-cases__list">
        <li class="top-cases__item js-fade-up">
          <div class="top-cases__body">
            <p class="top-cases__company">株式会社アーバンリンク</p>
            <p class="top-cases__meta">業種：不動産管理／導入時期：2024年4月／導入目的：ブランド認知の向上</p>
            <p class="top-cases__text">
              この文章はダミーの文章です。株式会社アーバンリンクでは、物件設備の点検業務を紙と電話で行っており、記録ミスや情報共有の遅れが課題となっていました。対応の迅速化と業務効率の向上を目指し、NFCサービスを導入。給湯器や防災設備などにNFCタグを設置し、スタッフがスマートフォンをかざすだけで点検記録を入力・送信できる仕組みを構築しました。情報は即時クラウドへ反映され、本社でもリアルタイムに確認可能となっています。
            </p>
          </div>
          <div class="top-cases__img-wrap">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/top-case-01-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="295" height="160">
              <img src="<?php echo IMAGEPATH; ?>/top/top-case-01.webp" alt="SAKURAの看板のクローズアップ" width="320" height="160"
                loading="lazy" class="top-cases__img">
            </picture>
          </div>
        </li>

        <li class="top-cases__item js-fade-up">
          <div class="top-cases__body">
            <p class="top-cases__company">株式会社アーバンリンク</p>
            <p class="top-cases__meta">業種：不動産管理／導入時期：2024年4月／導入目的：ファンづくり・愛着の醸成</p>
            <p class="top-cases__text">
              この文章はダミーの文章です。株式会社アーバンリンクでは、物件設備の点検業務を紙と電話で行っており、記録ミスや情報共有の遅れが課題となっていました。対応の迅速化と業務効率の向上を目指し、NFCサービスを導入。給湯器や防災設備などにNFCタグを設置し、スタッフがスマートフォンをかざすだけで点検記録を入力・送信できる仕組みを構築しました。情報は即時クラウドへ反映され、本社でもリアルタイムに確認可能となっています。
            </p>
          </div>
          <div class="top-cases__img-wrap">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/top-case-02-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="295" height="160">
              <img src="<?php echo IMAGEPATH; ?>/top/top-case-02.webp" alt="店舗ロゴ前で並ぶ担当者の写真" width="320" height="160"
                loading="lazy" class="top-cases__img">
            </picture>
          </div>
        </li>

        <li class="top-cases__item js-fade-up">
          <div class="top-cases__body">
            <p class="top-cases__company">株式会社アーバンリンク</p>
            <p class="top-cases__meta">業種：不動産管理／導入時期：2024年4月／導入目的：話題性・SNS拡散</p>
            <p class="top-cases__text">
              この文章はダミーの文章です。株式会社アーバンリンクでは、物件設備の点検業務を紙と電話で行っており、記録ミスや情報共有の遅れが課題となっていました。対応の迅速化と業務効率の向上を目指し、NFCサービスを導入。給湯器や防災設備などにNFCタグを設置し、スタッフがスマートフォンをかざすだけで点検記録を入力・送信できる仕組みを構築しました。情報は即時クラウドへ反映され、本社でもリアルタイムに確認可能となっています。
            </p>
          </div>
          <div class="top-cases__img-wrap">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/top-case-03-sp.webp" media="(max-width: 767px)"
                type="image/webp" width="295" height="160">
              <img src="<?php echo IMAGEPATH; ?>/top/top-case-03.webp" alt="TOYOTAロゴのクローズアップ" width="320" height="160"
                loading="lazy" class="top-cases__img">
            </picture>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="top-howto">
    <div class="top-howto__inner inner">
      <h2 class="top-scene__title section-title js-text-split">ご利用方法</h2>
      <div class="top-howto__list">
        <div class="top-howto__item js-slide-right">
          <p class="top-howto__number">1</p>
          <h3 class="top-howto__title">デザインして制作</h3>
          <p class="top-howto__text">
            ブランドや目的に合わせて、オリジナル仕様のノベルティを設計・制作します。
          </p>
        </div>
        <span class="top-howto__arrow js-slide-right --delay-1" aria-hidden="true"></span>
        <div class="top-howto__item js-slide-right --delay-2">
          <p class="top-howto__number">2</p>
          <h3 class="top-howto__title">配布して展開</h3>
          <p class="top-howto__text">
            イベントや営業現場で配布し、スマホにかざすだけで体験がスタートします。
          </p>
        </div>
        <span class="top-howto__arrow js-slide-right --delay-3" aria-hidden="true"></span>
        <div class="top-howto__item js-slide-right --delay-4">
          <p class="top-howto__number">3</p>
          <h3 class="top-howto__title">更新して運用</h3>
          <p class="top-howto__text">
            デザインはそのままに、配信内容は管理画面からいつでも差し替え可能です。
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="top-faq">
    <div class="top-faq__inner inner">
      <h2 class="top-faq__title section-title section-title--center js-text-split">よくある質問</h2>
      <dl class="top-faq__list js-fade-up">

        <div class="top-faq__item">
          <dt class="top-faq__item-question">
            <button class="top-faq__item-question-btn js-faq-question">
              <span class="top-faq__item-question-icon">Q</span>
              <span class="top-faq__item-question-text">質問のタイトルが入ります</span>
              <span class="top-faq__item-question-toggle-icon"></span>
            </button>
          </dt>
          <dd class="top-faq__item-answer">
            <span class="top-faq__item-answer-text">
              質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
            </span>
          </dd>
        </div>

        <div class="top-faq__item">
          <dt class="top-faq__item-question">
            <button class="top-faq__item-question-btn js-faq-question">
              <span class="top-faq__item-question-icon">Q</span>
              <span class="top-faq__item-question-text">質問のタイトルが入ります</span>
              <span class="top-faq__item-question-toggle-icon"></span>
            </button>
          </dt>
          <dd class="top-faq__item-answer">
            <span class="top-faq__item-answer-text">
              質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
            </span>
          </dd>
        </div>

        <div class="top-faq__item">
          <dt class="top-faq__item-question">
            <button class="top-faq__item-question-btn js-faq-question">
              <span class="top-faq__item-question-icon">Q</span>
              <span class="top-faq__item-question-text">質問のタイトルが入ります</span>
              <span class="top-faq__item-question-toggle-icon"></span>
            </button>
          </dt>
          <dd class="top-faq__item-answer">
            <span class="top-faq__item-answer-text">
              質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
            </span>
          </dd>
        </div>

        <div class="top-faq__item">
          <dt class="top-faq__item-question">
            <button class="top-faq__item-question-btn js-faq-question">
              <span class="top-faq__item-question-icon">Q</span>
              <span class="top-faq__item-question-text">質問のタイトルが入ります</span>
              <span class="top-faq__item-question-toggle-icon"></span>
            </button>
          </dt>
          <dd class="top-faq__item-answer">
            <span class="top-faq__item-answer-text">
              質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
            </span>
          </dd>
        </div>

        <div class="top-faq__item">
          <dt class="top-faq__item-question">
            <button class="top-faq__item-question-btn js-faq-question">
              <span class="top-faq__item-question-icon">Q</span>
              <span class="top-faq__item-question-text">質問のタイトルが入ります</span>
              <span class="top-faq__item-question-toggle-icon"></span>
            </button>
          </dt>
          <dd class="top-faq__item-answer">
            <span class="top-faq__item-answer-text">
              質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。質問のこたえが入ります。
            </span>
          </dd>
        </div>

      </dl>

      <div class="top-faq__link-wrap js-fade-up">
        <a href="https://the-shift.tokyo/faq/" class="top-faq__link link-btn-more" target="_blank"
          rel="noopener noreferrer">詳しくはこちら</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>