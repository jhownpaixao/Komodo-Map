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

/**
 * @template T
 */
class Map
{
    /**
     * collection
     *
     * @var T[]
     */
    private $collection = array();

    public function __construct()
    {
    }

    /**
     * Get var from collection
     *
     * @param  mixed $key
     * @return T|null
     */
    public function get($key)
    {
        return $this->collection[ $key ] ?? null;
    }

    /**
     * Add var on collection
     *
     * @param  mixed $key
     * @param  T $value
     * @return $this
     */
    public function set($key, $value)
    {
        $this->collection[ $key ] = $value;
        return $this;
    }

    /**
     * delete value from collection
     *
     * @param  mixed $key
     * @return void
     */
    public function delete($key)
    {
        unset($this->collection[ $key ]);
    }

    /**
     * Return all vars from collection
     *
     * @return T[]
     */
    public function map()
    {
        return $this->collection;
    }

    /**
     * clear collection
     *
     * @return void
     */
    public function clear()
    {
        $this->collection = array();
    }

    /**
     * Has value in collection
     *
     * @param  mixed $key
     * @return bool
     */
    public function has($key)
    {
        return array_key_exists($key, $this->collection);
    }

    /**
     * All keys in collections
     *
     * @return array
     */
    public function keys()
    {
        return array_keys($this->collection);
    }

    /**
     * All values in collection
     *
     * @return array
     */
    public function values()
    {
        return array_values($this->collection);
    }

    /**
     * encoded vars
     *
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->collection);
    }

    /**
     * first value in collection
     *
     * @return void
     */
    public function first()
    {
        return reset($this->collection);
    }

    /**
     * last value in collection
     *
     * @return void
     */
    public function last()
    {
        return end($this->collection);
    }
}
