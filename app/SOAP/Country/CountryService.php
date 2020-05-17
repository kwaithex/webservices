<?php

namespace App\SOAP\Country;

use SoapFault;
use App\SOAP\Country\CountryProvider as Provider;

/**
 * An example of a class that is used as a SOAP gateway to application functions.
 */
class CountryService
{
    /*
    |--------------------------------------------------------------------------
    | Public Methods
    |--------------------------------------------------------------------------
    */

    /**
     * Returns an array of products by search criteria.
     *
     * @param int $itemCount
     * @return \App\SOAP\Types\Country[]
     * @throws SoapFault
     */
    public function getCountries($itemCount = 1)
    {
        return Provider::getCountriesAndCities($itemCount);
    }

}
