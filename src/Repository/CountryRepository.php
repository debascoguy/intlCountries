<?php

namespace Countries\Repository;

use Countries\Entity\Country;
use Countries\Singleton;

class CountryRepository {

    use Singleton;

    private $data = [];

    protected function __construct()
    {
        $this->data = $this->loadData();
    }

    /**
     * @return array
     */
    public function findAllCountry()
    {
        $countriesDto = [];
        foreach($this->data as $country) {
            $countriesDto[$country["isoAlphaCode2"]] = Country::create($country);
        }
        return $countriesDto;
    }

    /**
     * @return array|CountryDto[]
     */
    public function findAllCountryArray()
    {
        return $this->data;
    }

    /**
     * @param string $countryNameORisoAlphaCode2ORisoAlphaCode2
     * @param array $default
     * @return array|null
     */
    public function findCountryArray(string $countryNameORisoAlphaCode2ORisoAlphaCode2, array $default = null)
    {
        if (empty($countryNameORisoAlphaCode2ORisoAlphaCode2)) {
            return $default;
        }
        
        $countryNameORisoAlphaCode2ORisoAlphaCode2 = strtoupper($countryNameORisoAlphaCode2ORisoAlphaCode2);
        
        if (isset($this->data[$countryNameORisoAlphaCode2ORisoAlphaCode2])) {
            return $this->data[$countryNameORisoAlphaCode2ORisoAlphaCode2];
        }

        foreach($this->data as $country) {
            if ($countryNameORisoAlphaCode2ORisoAlphaCode2 == strtoupper($country["name"]) 
                || $countryNameORisoAlphaCode2ORisoAlphaCode2 == $country["isoAlphaCode3"]) {
                return $country;
            }
        }
        return $default;
    }
    
    /**
     * @param string $countryNameORisoAlphaCode2ORisoAlphaCode2
     * @return CountryDto|null
     */
    public function findCountry(string $countryNameORisoAlphaCode2ORisoAlphaCode2) 
    {
        $country = $this->findCountryArray($countryNameORisoAlphaCode2ORisoAlphaCode2);
        if (!empty($country) && is_array($country)) {
            return Country::create($country);
        }
        return null;
    }

    /**
     * @param string $countryNameORisoAlphaCode2ORisoAlphaCode2
     * @return array|null
     */
    public function findCountryKeyValuePair(string $countryNameORisoAlphaCode2ORisoAlphaCode2, string $isoAlphaCode2ORisoAlphaCode2 = "isoAlphaCode3"): ?array
    {
        $country = $this->findCountryArray($countryNameORisoAlphaCode2ORisoAlphaCode2);
        if (empty($country)) {
            return null;
        }
        return $this->createKeyValuePair($country, $isoAlphaCode2ORisoAlphaCode2, "name");
    }

    /**
     * @param array $container
     * @param string $fieldIndex
     * @param string $valueIndex
     * @return array
     */
    public function createKeyValuePair(array $container, string $fieldIndex, string $valueIndex): array
    {
        $result = [];
        foreach($container as $record) {
            $result[$record[$fieldIndex]] = $record[$valueIndex];
        }
        return $result;
    }

    /**
     * @return array
     */
    protected function loadData(string $file = null): array
    {
        $file ??= dirname(__DIR__) . DIRECTORY_SEPARATOR . "Data" . DIRECTORY_SEPARATOR . "countries-master.json";
        return file_exists($file) ? 
                json_decode(
                    file_get_contents(
                        $file
                    ), 
                    true
                ) : 
                json_decode("{}");
    }

}