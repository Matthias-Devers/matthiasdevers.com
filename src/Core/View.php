<?php

namespace Matthiasdevers\Website\Core;

class View
{

    public static function render(string $template, array $arguments): void
    {
        $loader = new \Twig\Loader\FilesystemLoader(ROOT . '/resources/views');
        $twig   = new \Twig\Environment($loader);

        echo $twig->render($template, $arguments);
    }

}