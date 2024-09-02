<?php get_header(); ?>
<section class="l-top-works l-wrap" id="works">
  <div class="inner">
    <div class="c-bg-en --bg-works">
    </div>
    <div class="c-section-title">
      <h2>制作実績</h2><span class="c-boder__navy"></span>
    </div>
    <?php get_template_part('includes/works-items'); ?>
  </div>
  <div class="p-top-works__bottom-btn-wrap">
    <a class="c-btn c-btn-arrow --big" href="<?php echo esc_url( home_url( '/works' ) ); ?>">制作事例一覧を見る</a>
  </div>
</section>
<section class="l-profile l-container p-profile l-wrap" id="profile">
  <div class="c-bg-en --bg-plofile"></div>
  <div class="inner">
    <div class="l-content-inner">
      <div class="c-section-title --white">
        <h2>プロフィール＆スキル</h2><span class="c-boder__white"></span>
      </div>
      <article class="p-profile__body">
        <p class="p-profile__text">
          教員歴14年、通信制高校の沖縄校立ち上げから携わり叩き上げで沖縄校の責任者に。健康とパスタをテーマにした薬膳パスタTSUMUGI-つむぎ-を開業。
          軌道に乗り始めた、2020年に新型コロナウィルスにより売上減少。
          店の存続のため、兼業としてウェブ制作を学び、3ヶ月で案件獲得。
          web制作×パスタ屋×健康を目指し活動している
          資格：健康管理士 、学校心理士、薬膳コーディネーター
        </p>
        <figure class="p-profile__img">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/profile.png')); ?>" alt="ヒガ画像">
        </figure>
      </article>
    </div>
  </div>

  <div class="inner">
    <div class="p-profile-cards p-profile__bottom" id="skill">
      <article class="p-profile-card">
        <figure class="p-profile-card__hearing p-profile-card__img">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/hearing.svg')); ?>" alt="矢印のアイコン">
        </figure>
        <p class="p-profile-card__desc">
          お客様から要望をヒアリングさせて頂き、その上で効果の高い戦略をご提案いたします。「ビジネスの認知を高めたい」「ブランディングのためにサイトを作りたい」などご要望を丁寧にヒアリングしながら、目的に合わせたサイト設計の土台を作ります。
        </p>
      </article>
      <article class="p-profile-card">
        <figure class="p-profile-card__hearing p-profile-card__img">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/icon_design.svg')); ?>"
            alt="デザインのアイコン">
        </figure>
        <p class="p-profile-card__desc">
          お客様の求めていることが達成できるように戦略をたて、効果的なデザインを行っていきます。
        </p>
      </article>
      <article class="p-profile-card">
        <figure class="p-profile-card__hearing p-profile-card__img">
          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/coding.svg')); ?>" alt="コーディングのアイコン">
        </figure>
        <p class="p-profile-card__desc">
          <span>HTML/CSS/SCSS/JavaScript/Git Hub/ WordPress</span>
        </p>
      </article>
    </div>
  </div>
</section>
<section class="l-flow l-container p-flow inner" id="flow">
  <div class="c-bg-en --bg-flow"></div>
  <div class="c-section-title">
    <h2>制作の流れ</h2><span class="c-boder__navy"></span>
  </div>
  <ul class="p-flow-cards">
    <li class="p-flow-card">
      <div class="p-flow-card__no"><span class="p-flow-card__step">STEP</span>01</div>
      <div class="p-flow-card__text">
        <h3 class="p-flow-card__title">プロジェクト開始とニーズ分析</h3>
        <p class="p-flow-card__desc">
          お客様との初回打ち合わせを行い、ビジネスの目的、目標、ターゲットオーディエンスを理解し、具体的なニーズを分析します。この情報は、効果的なウェブサイトを設計する基礎となります。</p>
        <div class="p-flow-card__bottom">
          <figure class="p-flow-card__bottom-img"><img
              src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/flow1.svg')); ?>" alt=""></figure>
        </div>
      </div>
    </li>
    <li class="p-flow-card">
      <div class="p-flow-card__no"><span class="p-flow-card__step">STEP</span>02</div>
      <div class="p-flow-card__text">
        <h3 class="p-flow-card__title">デザイン案の作成と確認</h3>
        <p class="p-flow-card__desc">お客様の要件に基づいて、初期のデザインコンセプトを作成します。提案されたデザインについてのフィードバックを受け、必要に応じて改善を行います。</p>
        <div class="p-flow-card__bottom">
          <figure class="p-flow-card__bottom-img"><img
              src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/flow2.svg')); ?>" alt=""></figure>
        </div>
      </div>
    </li>
    <li class="p-flow-card">
      <div class="p-flow-card__no"><span class="p-flow-card__step">STEP</span>03</div>
      <div class="p-flow-card__text">
        <h3 class="p-flow-card__title">ウェブサイトの開発と実装</h3>
        <p class="p-flow-card__desc">デザインが承認された後、ウェブサイトの開発に着手します。この段階では、HTML/CSSコーディング、CMSの設定、必要に応じてカスタムプログラミングを行います
        </p>
        <div class="p-flow-card__bottom">
          <figure class="p-flow-card__bottom-img"><img
              src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/flow3.svg')); ?>" alt=""></figure>
        </div>
      </div>
    </li>
    <li class="p-flow-card">
      <div class="p-flow-card__no"><span class="p-flow-card__step">STEP</span>04</div>
      <div class="p-flow-card__text">
        <h3 class="p-flow-card__title">品質保証とテスト</h3>
        <p class="p-flow-card__desc">
          サイトが完成すると、綿密なテストを行い、全てのリンクが正しく機能しているか、レスポンシブデザインが全てのデバイスで適切に表示されるかを確認します。また、ロード速度の最適化とSEO基準の遵守もこの段階で確認します。
        </p>
        <div class="p-flow-card__bottom">
          <figure class="p-flow-card__bottom-img"><img
              src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/flow4.svg')); ?>" alt=""></figure>
        </div>
      </div>
    </li>
    <li class="p-flow-card">
      <div class="p-flow-card__no"><span class="p-flow-card__step">STEP</span>05</div>
      <div class="p-flow-card__text">
        <h3 class="p-flow-card__title">サイトの公開とアフターサポート</h3>
        <p class="p-flow-card__desc">全てのテストと最終承認が完了したら、ウェブサイトを公開します。サイト公開後も、必要に応じて技術的サポート、定期的なメンテナンス、コンテンツの更新支援を提供します。
        </p>
        <div class="p-flow-card__bottom">
          <figure class="p-flow-card__bottom-img"><img
              src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/flow5.svg')); ?>" alt=""></figure>
        </div>
      </div>
    </li>
  </ul>
</section>
<section class="l-faq l-container inner l-wrap">
  <div class="c-bg-en --bg-faq"></div>
  <div class="c-section-title">
    <h2>よくあるご質問</h2><span class="c-boder__navy"></span>
  </div>
  <div class="p-faq-cards">
    <?php
    $fields = $cfs->get('faq_repeater_field');
    if (is_array($fields)) {
        foreach ($fields as $field) :
    ?>
    <div class="p-faq-card">
      <div class="p-faq-card__title">
        <p class="p-faq-card__q">Q</p>
        <h3><?php echo $field['q_field']; ?></h3>
      </div>
      <div class="p-faq-card__title">
        <p class="p-faq-card__a">A</p>
        <p><?php echo $field['a_field']; ?></p>
      </div>
    </div>
    <?php endforeach;
    } ?>
  </div>
  <div class="c-bg-thread"></div>
</section>
<?php //get_template_part('includes/works-swiper'); ?>
<!-- <section class="l-contact">
  <div class="c-section-title --white">
    <h2>お問い合わせ</h2><span class="c-boder__white"></span>
  </div>
  <div class="p-contact">
    <div class="inner">
    </div>
  </div>
</section> -->
<?php get_footer(); ?>