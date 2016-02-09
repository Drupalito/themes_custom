<?php

/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page" class="page">

  <div class="banner">
    <header id="banner" role="banner" class="banner__region container">
      <div class="row row-sm-height">
        <div class="col-xs-12 col-sm-9">
          <div class="logo">
            <p class="logo__inner"><a href="<?php print $front_page; ?>" title="<?php print variable_get('site_name'); ?> (<?php print t('Home'); ?>)" rel="home" class="logo__link nounderline">
              <?php if ($logo): ?>
                <img class="logo__image" src="<?php print $logo; ?>" alt="<?php print variable_get('site_name'); ?> (<?php print t('Home'); ?>)" />
              <?php endif; ?>
              <?php if ($site_name || $site_slogan): ?>
                <span class="logo__inner inbl amiddle pls">
                  <?php if ($site_name): ?>
                    <span class="logo__name h4 caps bl mvn"><?php print $site_name; ?></span>
                  <?php endif; ?>
                  <?php if ($site_slogan): ?>
                    <span class="logo__slogan bl"><?php print $site_slogan; ?></span>
                  <?php endif; ?>
                </span>
              <?php endif; ?>
            </a></p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3">
          <div class="branding">
            <?php print render($page['header']); ?>
          </div>
        </div>
      </div>
    </header>
  </div>

  <div class="navigation noprint">
    <nav id="navigation" role="navigation" aria-label="<?php print t('Primary navigation'); ?>" class="navigation__region container">
      <div class="row">
        <?php print render($page['navigation']); ?>
      </div>
    </nav>
  </div>

  <div id="container" class="container">
    <div class="row">

      <?php print render($page['breadcrumb']); ?>

      <?php
        // Render the sidebars to see if there's anything in them.
        $sidebar_first  = render($page['sidebar_first']);
        if ($sidebar_first): ?>
        <div class="aside aside--left col-xs-12 col-sm-4 xs-mbl">
          <aside id="aside_left" role="complementary" class="aside__region">
            <?php print $sidebar_first; ?>
          </aside>
        </div>
      <?php endif; ?>

      <div id="content"<?php print $content_column_class; ?>>

        <?php if ($messages): ?>
          <?php print $messages; ?>
        <?php endif; ?>
        <?php print render($page['highlighted']); ?>
        <?php print render($page['help']); ?>

        <main id="main" class="main" role="main">
          <?php print render($main_prefix); ?>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php print render($tabs); ?>
          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
          <?php print $feed_icons; ?>
          <?php print render($main_suffix); ?>
        </main>
      </div>

      <?php
        // Render the sidebars to see if there's anything in them.
        $sidebar_second  = render($page['sidebar_second']);
        if ($sidebar_second): ?>
        <div class="aside aside--right col-xs-12 col-sm-4 xs-mtl">
          <aside id="aside_right" role="complementary" class="aside__region">
            <?php print $sidebar_second; ?>
          </aside>
        </div>
      <?php endif; ?>

    </div>
  </div>

  <div class="contentinfo">
    <footer id="contentinfo" role="contentinfo" class="contentinfo__region container">
      <div class="row">
        <?php print render($page['footer']); ?>
      </div>
    </footer>
  </div>

</div>
