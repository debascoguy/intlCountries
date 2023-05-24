<?php
namespace Countries\Formatter;

use Countries\Repository\CountryRepository;
use Exception;

class CurrencyFormatter extends CountriesNumberFormatter {

    /**
     * @return string
     */
    public static function formatCurrencyByCountry(float $amount, string $countryNameORisoAlphaCode2ORisoAlphaCode2)
    {
        /** @var Country $country */
        $country = CountryRepository::getInstance()->findCountry($countryNameORisoAlphaCode2ORisoAlphaCode2);
        if (empty($country)) {
            throw new Exception("Country Not Found! Please check the country name or isoAlphaCode2 or isoAlphaCode3");
        }
        return self::formatCurrencyBy(
            $amount,
            $country->getDefaultLocale(),
            $country->getDefaultCurrency()
        );
    }

    /**
     * @return string
     */
    public static function formatCurrencyBy(float $amount, string $locale, string $currency)
    {
        return self::createCurrencyFormatter($locale)->formatCurrency($amount, $currency);
    }
    
}