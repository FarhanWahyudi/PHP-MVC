<?php
    namespace Hans\Belajar\PHP\MVC\App;

    class view {
        public static function render(string $view, $model) {
            require __DIR__ . '/../View' . $view . '.php';
        }
    }