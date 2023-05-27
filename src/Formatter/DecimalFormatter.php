<?php
namespace Emma\Countries\Formatter;

use Emma\Countries\Repository\CountryRepository;
use Exception;

class DecimalFormatter extends CountriesNumberFormatter {

    /**
     * @return string
     */
    public static function formatDecimalByCountry(float $amount, string $countryNameORisoAlphaCode2ORisoAlphaCode2)
    {
        /** @var Country $country */
        $country = CountryRepository::getInstance()->findCountry($countryNameORisoAlphaCode2ORisoAlphaCode2);
        if (empty($country)) {
            throw new Exception("Country Not Found! Please check the country name or isoAlphaCode2 or isoAlphaCode3");
        }
        return self::formatDecimalByLocale(
            $amount,
            $country->getDefaultLocale()
        );
    }

    /**
     * @return string
     */
    public static function formatDecimalByLocale(float $amount, string $locale)
    {
        return self::createDecimalFormatter($locale)->format($amount);
    }
    
}