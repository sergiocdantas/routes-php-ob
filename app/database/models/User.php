<?php

namespace app\database\models;

class User extends Model
{

    function __construct()
    {
        $this->table = USER_TABLE;
    }

    public function teste ()
    {
        dd('Teste');
    }

}
