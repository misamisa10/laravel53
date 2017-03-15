<?php

namespace App\DataAccess\Fluent;

use Illuminate\Database\DatabaseManager;

class AbstractFluent
{
    /** @var string */
    protected $table;

    /** @var string */
    protected $primary = 'id';

    /**
     * master(更新系)とslave(参照系)はここで切り替えるようにする。
     * ex) $this->db->connection($this->slave)->table($this->table)->get($columns);
     * ex) $this->db->connection($this->master)->table($this->table)->where($this->primary, $id)->delete();
     */
    /** @var string */
//    protected $master = 'master';

    /** @var string */
//    protected $slave = 'slave';
    
    protected $db;


    public function __construct(DatabaseManager $db) {
        $this->db = $db;
    }

    public function all(array $columns = ['*']) {
        return $this->db->connection()->table($this->table)->get($columns);
    }
}

