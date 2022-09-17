<?php
// phpcs:ignore
namespace App\Models;

use App\Models\User;

// phpcs:ignore
class Cart{    

    /**
     * Construct
     *
     * @param User $user user
     * 
     * @return void
     */
    public function __construct(
        public User $user
    ) {
        
    }
}