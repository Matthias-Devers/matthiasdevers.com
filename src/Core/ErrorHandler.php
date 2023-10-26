<?php

namespace Matthiasdevers\Website\Core;

class ErrorHandler
{

    public static function handle(int $level, string $message, string $file, int $line): void {
        if($_ENV["APP_DEBUG"] === "true") {
            echo "Developer Mode.";
            switch($level) {
                case E_ERROR:
                case E_USER_ERROR:
                    echo "[$level] $message";
                    echo "Fatal Error";
                    break;
                case E_WARNING:
                case E_USER_WARNING:
                    echo "[$level] $message";
                    echo "Warning";
                    break;
                case E_NOTICE:
                case E_USER_NOTICE:
                    echo "[$level] $message";
                    echo "Notice";
                    break;
            }
        } elseif($_ENV["APP_DEBUG"] === "false" && $_ENV["LOG_MODE"] === "true") {
            echo "User message and log.";

            $logMessage = "[" . date("D M d H:i:s Y") . "] " . $level . " ". $message . " in file: " . $file . " on line: " . $line;
            error_log($logMessage . "\n", 3, ROOT . $_ENV["LOG_DESTINATION"] . "/errors.log");
            exit;
        } elseif($_ENV["APP_DEBUG"] === "false" && $_ENV["LOG_MODE"] === "false") {
            echo "User message.";
        }
    }

}