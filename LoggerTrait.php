<?php
    trait LoggerTrait{
        public function log($message)
        {
            echo "Loggin Message: $message";
        }
    }