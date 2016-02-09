<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page while offline.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 *
 * Complete documentation for this file is available online.
 * @see https://www.drupal.org/node/1728174
 */
?>
<!DOCTYPE html>
<!--[if IE 9]><html lang="<?php print $language->language ?>" class="ie9 no-js" dir="<?php print $language->dir ?>"><![endif]-->
<html lang="<?php print $language->language ?>" class="no-js" dir="<?php print $language->dir ?>">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<title><?php print $title; ?> | <?php print $head_title; ?></title>
<?php print $head; ?>
<?php print $styles; ?>
<?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>">
<p id="skiplinks" class="skiplinks">
  <a href="#main"><?php print t('Main content'); ?></a>
</p>
<div id="page" class="page">
  <div class="banner">
    <header id="banner" role="banner" class="banner__region container">
      <div class="row row-height">
        <div class="branding col-xs-12">
          <p class="logo"><a href="<?php print $front_page; ?>" title="<?php print variable_get('site_name'); ?> (<?php print t('Home'); ?>)" rel="home" class="logo__link nounderline">
            <?php if ($logo): ?>
              <img class="logo__image" src="<?php print $logo; ?>" alt="<?php print variable_get('site_name'); ?> (<?php print t('Home'); ?>)" />
            <?php endif; ?>
            <?php if ($site_name || $site_slogan): ?>
              <span class="logo__inner inbl amiddle plm">
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
    </header>
  </div>
  <div id="container" class="container">
    <div class="row">
      <div id="content" class="content col-xs-12">
        <main id="main" class="main text-center" role="main">
          <?php if (!empty($title)) : ?>
            <h1 class="main__title caps mvn"><?php print $title; ?></h1>
          <?php endif; ?>
          <?php if (!empty($messages)): print $messages; endif; ?>
          <p class="mvn"><?php print $content; ?></p>
        </main>
      </div>
    </div>
  </div>
  <div class="contentinfo">
    <footer id="contentinfo" role="contentinfo" class="contentinfo__region container">
      <div class="row">
        <?php print render($page['contentinfo']); ?>
      </div>
    </footer>
</div>
</body>
</html>
