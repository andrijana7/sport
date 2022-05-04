<?php
  require('./lib/template.php');
  require('./lib/request.php');
  require('./lib/response.php');
  require('./lib/router.php');

  use App\Lib\Template;
  use App\Lib\Request;
  use App\Lib\Response;
  use App\Lib\Router;

  Template::$template_dir = __DIR__ . '/templates';

  $GLOBALS['nav_items'] = [
    [
      'title' => 'Home',
      'url' => '/',
    ],
    [
      'title' => 'About Us',
      'url' => '/about-us',
    ],
    [
      'title' => 'Contact Us',
      'url' => '/contact-us',
    ],
    [
      'title' => 'Store',
      'url' => '/store',
    ]
  ];

  Router::get('/pera/', function() {
    $site_title = 'Sportswear Store';
    $headline = 'Main Headline';
    $content = '<p>This is PHP Generated sentence</p>';

    $template = new Template();

    echo $template->render('home.php', [
      'site_title' => $site_title,
      'nav_items' => $GLOBALS['nav_items'],
      'content' => $content,
      'headline' => $headline,
    ]);
  });

  Router::get('/pera/contact', function() {
    $template = new Template();

    echo $template->render('contact.php', [
      'nav_items' => $GLOBALS['nav_items']
    ]);
  });

  Router::get('/pera/store', function() {
  });

  Router::post('/pera/forma', function() {
  });

?>
