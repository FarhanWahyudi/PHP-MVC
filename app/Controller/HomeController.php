<?php
    namespace Hans\Belajar\PHP\MVC\Controller;
    
    use Hans\Belajar\PHP\MVC\App\View;

    class homeController {
        function index(): void {
            $model = [
                'title' => 'Belajar PHP MVC',
                'content' => 'Selamat belajar php mvc dari programmer zaman now'
            ];
            
            View::render('/Home/index', $model);
        }
        
        function hello(): void {
            echo "HomeController.hello()";
        }

        function world(): void {
            echo "HomeController.world()";
        }

        function login(): void {
            $request = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
            ];

            $user = [

            ];

            $response = [
                'message' => 'login success'
            ];
        }
    }