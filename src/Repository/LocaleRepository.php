<?php
namespace Emma\Countries\Repository;

use Emma\Countries\Entity\Locale;
use Emma\Countries\Singleton;

class LocaleRepository extends CountryRepository {

    use Singleton;

    protected function __construct()
    {
        parent::__construct();
    }
    
    /**
     * @return array|null
     */
    public function findAllLocalesArray()
    {
        $result = [];
        $countries = $this->findAllCountryArray();
        foreach($countries as $isoAlphaCode2 => $country) {
            $result[$isoAlphaCode2] = [
                "isoAlphaCode2" => $country["isoAlphaCode2"],
                "isoAlphaCode3" => $country["isoAlphaCode3"],
                "locales" => $country["locales"],
                "defaultLocale" => $country["defaultLocale"],
                "language" => $country["language"]
            ];
        }
        return $result;
    }

    /**
     * @return array|null
     */
    public function findAllLocales()
    {
        $result = [];
        $countries = $this->findAllCountryArray();
        foreach($countries as $isoAlphaCode2 => $country) {
            $result[$isoAlphaCode2] = Locale::create($country);
        }
        return $result;
    }

    /**
     * @return array|null
     */
    public function findLocaleArray(string $countryNameORisoAlphaCode2ORisoAlphaCode2): ?array
    {
        $country = $this->findAllCountryArray($countryNameORisoAlphaCode2ORisoAlphaCode2);
        return !empty($country) ? [
            "isoAlphaCode2" => $country["isoAlphaCode2"],
            "isoAlphaCode3" => $country["isoAlphaCode3"],
            "locales" => $country["locales"],
            "defaultLocale" => $country["defaultLocale"],
            "language" => $country["language"]
        ] : null;
    }

    

    /**
     * @return Locale|null
     */
    public function findLocale(string $countryNameORisoAlphaCode2ORisoAlphaCode2): ?Locale
    {
        $currency = $this->findLocaleArray($countryNameORisoAlphaCode2ORisoAlphaCode2);
        return !empty($currency) ? Locale::create($currency) : null;
    }
}