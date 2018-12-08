<?php

namespace App\Models;

use App\Core\App;

class Model
{

    public static function get($where = null)
    {
        return App::get("db")->selectAll(static::$table, static::class, $where);
    }

    public static function find($campos = ["id", 0])
    {
        $response = App::get('db')->find(
            static::$table, 
            $campos, 
            static::class
        );
        return $a = array_shift($response);
    }

    public static function delete($campos = ["id", 0])
    {
        $response = App::get('db')->delete(static::$table, $campos);
        return "deletado com sucesso";
    }

    public static function store($dados)
    {
        return App::get('db')->insert(static::$table, $dados);
    }

    public static function update($dados, $campos = [])
    {
        return App::get('db')->update(static::$table, $dados, $campos);
    }
}
