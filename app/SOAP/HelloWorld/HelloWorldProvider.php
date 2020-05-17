<?php

namespace App\SOAP\HelloWorld;

use App\SOAP\Types\HelloWorld;

/**
 * Methods used by Demo service class.
 */
class HelloWorldProvider
{

    /**
     * Returns simple hello world.
     *
     * @return \App\SOAP\Types\HelloWorld
     */
    public static function setHelloWorld()
    {
        return new HelloWorld("Hello world!");
    }
    
}
