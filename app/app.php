<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/CoinCombo.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('home.twig');
  });

  $app->post("/generate", function() use ($app) {
    $cents = $_POST['cents'];
    $newCombo = new CoinCombo();
    $combo = $newCombo->combo($cents);
    return $app['twig']->render('generate.twig', array('cents' => $cents, 'combo' => $combo));
  });

  return $app;
?>
