<?php

namespace App\SOAP\HelloWorld;

use SoapFault;
use App\SOAP\HelloWorld\HelloWorldProvider as Provider;

/**
 * An example of a class that is used as a SOAP gateway to application functions.
 */
class HelloWorldService
{
    /*
    |--------------------------------------------------------------------------
    | Public Methods
    |--------------------------------------------------------------------------
    */

    /**
     * Returns a product by id.
     *
     * @return \App\SOAP\Types\HelloWorld
     * @throws SoapFault
     */
    public function getHelloWorld()
    {
        return Provider::setHelloWorld();
    }

}
