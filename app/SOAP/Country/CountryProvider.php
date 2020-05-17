<?php

namespace App\SOAP\Country;

use App\Country;
use App\SOAP\Types\Country as CountryType;
use App\SOAP\Types\City as CityType;
use Illuminate\Support\Facades\DB;

/**
 * Methods used by Demo service class.
 */
class CountryProvider
{

    /**
     * Returns array of products by search criteria.
     *
     * @param int $itemCount
     * @return App\SOAP\Types\Country[]
     */
    public static function getCountriesAndCities($itemCount = 1)
    {
        $countries_cities = Country::all()->random($itemCount)->load('cities');
        $result = array();
        foreach ($countries_cities as $item){
            $cities = array();

            foreach ($item->cities as $city){
                array_push($cities, new CityType($city->name));
            }

            array_push($result, 
                new CountryType(
                    $item->id, 
                    $item->name,
                    $item->sortname, 
                    $item->phonecode,
                    $cities
                )
            );
        }

        return $result;
    }
    
}
