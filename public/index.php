<?php

#==========================================================================
# The entry point for all requests entering the application
#==========================================================================

#--------------------------------------------------------------------------
# Enable strict types

declare(strict_types = 1);

#--------------------------------------------------------------------------
# Set the root path const

DEFINE('ROOT', realpath(dirname(__DIR__)));

#--------------------------------------------------------------------------
# Load autoloader

require ROOT . '/vendor/autoload.php';

#--------------------------------------------------------------------------
# Load .env file variables

$dotenv = Dotenv\Dotenv::createImmutable(ROOT);
$dotenv->safeLoad();

#--------------------------------------------------------------------------
# Set default timezone

date_default_timezone_set($_ENV["APP_TIMEZONE"]);

#--------------------------------------------------------------------------
# Set error handler & exception handler

error_reporting(E_ALL);

//set_error_handler("Matthiasdevers\Website\Core\ErrorHandler::handle");
//set_exception_handler("Matthiasdevers\Website\Core\ExceptionHandler::handle");

//trigger_error("This is an triggered Error.", E_USER_ERROR);

#--------------------------------------------------------------------------
# Conif files etc. bootstrap

#--------------------------------------------------------------------------
# Router

$router = new \Matthiasdevers\Website\Core\Router();

// Core
$router->add("/", "index.php", [
    "title"         => "Matthias Devers",
    "description"   => "Welcome to my website.",
    "author"        => $_ENV["APP_AUTHOR"],
    "robots"        => "index,follow",
    "name"          => $_ENV["APP_NAME"],
    "url"           => $_ENV["APP_URL"],
    "image"         => ""
]);

$router->add("/home", "index.php", []);
$router->add("/about", "index.php", []);

$router->add("/projects", "projects.php", [
    "title"         => "Projects - Matthias Devers",
    "description"   => "",
    "author"        => $_ENV["APP_AUTHOR"],
    "robots"        => "index,follow",
    "name"          => $_ENV["APP_NAME"],
    "url"           => $_ENV["APP_URL"] . "/projects",
    "image"         => ""
]);

$router->add("/visuals", "visuals.php", [
    "title"         => "Visuals - Matthias Devers",
    "description"   => "",
    "author"        => $_ENV["APP_AUTHOR"],
    "robots"        => "index,follow",
    "name"          => $_ENV["APP_NAME"],
    "url"           => $_ENV["APP_URL"] . "/visuals",
    "image"         => ""
]);

$router->add("/legal-notice", "legal-notice.php", [
    "title"         => "Legal Notice - Matthias Devers",
    "description"   => "",
    "author"        => $_ENV["APP_AUTHOR"],
    "robots"        => "noindex,nofollow",
    "name"          => $_ENV["APP_NAME"],
    "url"           => $_ENV["APP_URL"] . "/legal-notice",
    "image"         => ""
]);

// Projects
$router->add("/projects/plantanika", "/projects/plantanika.php", ["color" => "blue", "fruit" => "Orange"]);

// Run the router
$router->run();