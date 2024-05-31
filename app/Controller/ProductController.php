<?php
    namespace Hans\Belajar\PHP\MVC\Controller;
    
    class ProductController {
        function categories(string $productId, string $categoryId): void {
            echo "product: $productId, category: $categoryId";
        }
    }