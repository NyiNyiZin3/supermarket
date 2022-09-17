<?php
// phpcs:ignore
namespace App\Models;

use App\Models\Cart;
use App\Models\Category;

// phpcs:ignore
class CartItem {    
    
    /**
     * Construct
     * 
     * @param Cart     $cart     cart
     * @param string   $name     name 
     * @param Category $category category
     * 
     * @return void
     */
    public function __construct(
        public Cart $cart,
        public string $name,
        public Category $category
    ) {
        
    }
}
