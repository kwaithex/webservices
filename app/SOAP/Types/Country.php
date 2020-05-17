<?php

namespace App\SOAP\Types;


class Country
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sortname;

    /**
     * @var int
     */
    public $phonecode;

    /**
     * @var array
     */
    public $cities;

    /**
     * Product constructor.
     *
     * @param int $id
     * @param string $name
     * @param string $sortname
     * @param int $phonecode
     * @param array $cities
     */
    public function __construct($id, $name, $sortname, $phonecode, $cities)
    {
        $this->id = $id;
        $this->name = $name;
        $this->sortname = $sortname;
        $this->phonecode = $phonecode;
        $this->cities = $cities;
    }

}
