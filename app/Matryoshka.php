<?php

namespace App;


/**
 * Class Matryoshka
 * @package App
 */
class Matryoshka
{
    public static function setUp($model)
    {
        return 'Hola!';
    }

    public static function tearDown()
    {
        return 'Adéu!';
    }
}