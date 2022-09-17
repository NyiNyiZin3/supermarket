<?php
// phpcs:ignore
namespace App\Models;

// phpcs:ignore
class Category{   

    /**
     * Construct
     *
     * @param string $name name
     * 
     * @return void
     */
    public function __construct( 
        public string $name
    ) {

    }
}