<?php

namespace Komodo\Map;

/*******************************************************************************************
 Komodo Lib - Map
 ____________________________________________________________________________________________
 *
 * Desenvolvido por: Jhonnata Paixão (Líder de Projeto)
 * Iniciado em: 15/10/2022
 * Arquivo: Map.php
 * Data da Criação Tue Jul 11 2023
 * Copyright (c) 2023
 *
 *********************************************************************************************/

class Map
{
    private $collection = array();

    function __construct()
    {
    }

    function get($key)
    {
        return $this->collection[$key] ??  null;
    }

    function set($key, $value)
    {
        $this->collection[$key] = $value;
        return $this;
    }

    function delete($key)
    {
        unset($this->collection[$key]);
    }

    function map()
    {
        return $this->collection;
    }

    function clear()
    {
        $this->collection = array();
    }

    function has($key)
    {
        return array_key_exists($key, $this->collection);
    }

    function keys()
    {
        return array_keys($this->collection);
    }

    function values()
    {
        return array_values($this->collection);
    }

    function toJson()
    {
        return json_encode($this->collection);
    }
}
