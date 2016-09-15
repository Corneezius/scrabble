<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array("twig.path" => __DIR__."/../views"));

    $app->get("/", function() use($app) {
        return $app["twig"]->render("index.html.twig");
    });

    $app->get("/result", function() use($app) {
        $new_scrabble = new Scrabble($_GET["user_word"]);
        $user_input = $_GET["user_word"];
        $score = $new_scrabble->total_score();
        return $app["twig"]->render("index.html.twig", array("total_score" => $score, "word" => $user_input));
    });
    return $app;
 ?>
