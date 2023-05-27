<?php 

namespace Emma\Countries;

use Emma\Countries\Formatter\CurrencyFormatter;
use Emma\Countries\Formatter\DecimalFormatter;
use Emma\Countries\Repository\CountryRepository;
use Emma\Countries\Repository\CurrencyRepository;
use Emma\Countries\Repository\LocaleRepository;
use Emma\Countries\Repository\StatesRepository;

class Countries {

    /**
     * @return CountryRepository
     */
    public static function getCountryRepository(): CountryRepository
    {
        return CountryRepository::getInstance();
    }

    /**
     * @return CurrencyRepository
     */
    public static function getCurrencyRepository(): CurrencyRepository
    {
        return CurrencyRepository::getInstance();
    }

    /**
     * @return LocaleRepository
     */
    public static function getLocaleRepository(): LocaleRepository
    {
        return LocaleRepository::getInstance();
    }

    /**
     * @return StatesRepository
     */
    public static function getStatesRepository(): StatesRepository
    {
        return StatesRepository::getInstance();
    }

    /**
     * @param string $locale
     * @return string
     */
    public static function formatCurrencyByCountry(float $amount, string $countryNameORisoAlphaCode2ORisoAlphaCode2): string
    {
        return CurrencyFormatter::formatCurrencyByCountry($amount, $countryNameORisoAlphaCode2ORisoAlphaCode2);
    }

    /**
     * @return string
     */
    public static function formatCurrencyBy(float $amount, string $locale, string $currency): string
    {
        return CurrencyFormatter::createCurrencyFormatter($locale)->formatCurrency($amount, $currency);
    }

    /**
     * @return string
     */
    public static function formatDecimalByCountry(float $amount, string $countryNameORisoAlphaCode2ORisoAlphaCode2): string
    {
       return DecimalFormatter::formatDecimalByCountry($amount, $countryNameORisoAlphaCode2ORisoAlphaCode2);
    }

    /**
     * @return string
     */
    public static function formatDecimalByLocale(float $amount, string $locale): string
    {
        return DecimalFormatter::formatDecimalByLocale($amount, $locale);
    }

}