<?php

namespace App\DataAccess\Fluent; 

class User extends AbstractFluent
{
    /** @var string */
    protected $table = 'test_tbl';

    public function findAll(){
        return $this->all();
    }
}

