<!doctype html>
<html lang="de" class="p-<?= $page->slug() ?>">

<head>
  <meta charset="utf-8">
  <title><?= $page->title() ?> | <?= $site->title() ?></title>

  <?= css(['assets/index.css', '@auto']) ?>

  <link rel="canonical" href="{{ .RelPermalink | absURL }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="keywords" content="{{ delimit .Params.meta_keywords ", " }}">
  <meta name="description" content="{{ .Params.meta_description }}">
  <meta name="apple-mobile-web-app-title" content="{{ .Site.Title }}">
  <meta property="og:site_name" content="{{ .Site.Title }}">
  <meta name="twitter:title" property="og:title" content="{{ .Params.Title }}">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ .RelPermalink | absURL }}">
  <meta name="twitter:image" property="og:image" content="{{ .Params.meta_image }}">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="{{ .Params.meta_description }}">
  <meta name="twitter:domain" content="{{ .Site.BaseURL }}">
</head>

<body>
  <div class="site">
    <header id="top" class="container top <?= $page->isHomePage() ? "top--home" : "" ?>">
      <a href="/" class="header__logo">
        <svg width="152" height="23" viewBox="0 0 152 23" xmlns="http://www.w3.org/2000/svg">
          <title>Das Habitat Augsburg e.V.</title>
          <g fill="#0F0F0E" fill-rule="nonzero">
            <path d="M9.244 13.812V9.997c0-1.171-1.14-1.932-2.62-1.932-1.6 0-2.692 1.126-2.692 2.827v2.068c0 1.701 1.092 2.805 2.693 2.805 1.477 0 2.62-.713 2.62-1.953zm0 2.433C8.784 17.6 7.304 18.2 5.63 18.2c-3.18 0-4.95-2.275-4.95-6.296 0-4 1.77-6.25 4.95-6.25 1.675 0 3.18.554 3.615 1.934V.92h3.106v17.006H9.244v-1.681zM27.36 15.95l1.892-1.758c.923 1.017 2.04 1.642 3.471 1.642 1.48 0 2.11-.53 2.11-1.388 0-.693-.435-1.133-1.553-1.273l-1.261-.162c-2.718-.323-4.223-1.456-4.223-3.654 0-2.335 1.917-3.816 4.805-3.816 2.476 0 3.737.693 4.95 1.896l-1.818 1.734c-.727-.739-1.796-1.294-3.033-1.294-1.335 0-1.917.51-1.917 1.248 0 .81.46 1.181 1.649 1.365l1.287.162c2.766.37 4.101 1.55 4.101 3.562 0 2.335-2.062 3.956-5.216 3.956-2.407 0-3.982-.831-5.244-2.22M91.571 13.946v-3.84c0-1.181-1.128-1.944-2.593-1.944-1.584 0-2.665 1.132-2.665 2.845v2.081c0 1.713 1.08 2.824 2.665 2.824 1.465 0 2.593-.718 2.593-1.966zm0 2.449c-.456 1.364-1.92 1.968-3.578 1.968-3.147 0-4.9-2.29-4.9-6.337 0-4.024 1.753-6.292 4.9-6.292 1.657 0 3.147.558 3.578 1.947V6.012h3.074v12.076h-3.074v-1.693zM22.462 13.946v-3.84c0-1.181-1.129-1.944-2.593-1.944-1.585 0-2.665 1.132-2.665 2.845v2.081c0 1.713 1.08 2.824 2.665 2.824 1.464 0 2.593-.718 2.593-1.966zm0 2.449c-.457 1.364-1.92 1.968-3.578 1.968-3.147 0-4.9-2.29-4.9-6.337 0-4.024 1.753-6.292 4.9-6.292 1.657 0 3.147.558 3.578 1.947V6.012h3.074v12.076h-3.074v-1.693zM137.745 13.946v-3.84c0-1.181-1.14-1.944-2.62-1.944-1.6 0-2.692 1.132-2.692 2.845v2.081c0 1.713 1.091 2.824 2.692 2.824 1.477 0 2.62-.718 2.62-1.966zm0 2.449c-.461 1.364-1.94 1.968-3.615 1.968-3.18 0-4.95-2.29-4.95-6.337 0-4.024 1.77-6.292 4.95-6.292 1.674 0 3.18.558 3.615 1.947V6.012h3.106v12.076h-3.106v-1.693zM116.661 15.75V6.012h-4.786v2.336h1.824v7.402h-2.536v2.338h8.034V15.75zM124.777 18.088c-2.136 0-3.276-1.111-3.276-3.077V8.35h-1.867V6.015h2.184V3.027l2.79-1.594v4.582h2.933V8.35h-2.934v7.378h2.739v2.36h-2.57zM106.306 13.09v-2.08c0-1.713-1.117-2.846-2.718-2.846-1.48 0-2.597.763-2.597 1.944v3.84c0 1.249 1.118 1.966 2.597 1.966 1.601-.002 2.718-1.11 2.718-2.823zM97.886.97h3.105V7.68c.461-1.389 1.918-1.947 3.593-1.947 3.202 0 4.973 2.268 4.973 6.292 0 4.048-1.771 6.337-4.973 6.337-1.675 0-3.106-.604-3.593-1.968v1.69h-3.106V.97zM145.12 15.01V8.35h-1.868V6.015h2.184V3.027l2.612-1.594v4.582h3.11V8.35h-3.11v7.378h2.916v2.36h-2.569c-2.136 0-3.276-1.111-3.276-3.077zM113.19 2.216c0 .982.837 1.776 1.873 1.776 1.035 0 1.876-.794 1.876-1.776S116.099.44 115.063.44s-1.874.794-1.874 1.776M70.335.97h3.083v6.733c.505-1.295 1.685-1.969 3.636-1.969 2.577 0 4.023 1.713 4.023 4.72v7.634h-3.083v-7.333c0-1.712-.6-2.59-2.072-2.59-1.277 0-2.504.646-2.504 1.943v7.982h-3.083V.97zM38.507 20.12h29.387V23H38.507z" />
          </g>
        </svg>
      </a>

      <nav id="nav" class="top-nav">
        <?php $menus = $site->menus()->toStructure(); ?>
        <?php if ($menus->isNotEmpty()) : ?>
          <?php foreach ($menus as $menu) : ?>
            <?php $menuItems = $menu->menuItems()->toPages(); ?>
            <?php if ($menuItems->isNotEmpty()) : ?>
              <h4><?= $menu->menuHeadline()->html() ?></h4>
              <ul>
                <?php foreach ($menuItems as $menuItem) : ?>
                  <li><a href="<?= $menuItem->url() ?>"><?= $menuItem->title() ?></a></li>
                <?php endforeach ?>
              </ul>
            <?php endif ?>
          <?php endforeach ?>
        <?php endif ?>
      </nav>
    </header>
    <div class="page">