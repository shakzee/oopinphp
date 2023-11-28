<?php

namespace MyApp;

trait LoggerTrait {
    public function log($message) {
        echo "Log: $message\n";
    }
}
