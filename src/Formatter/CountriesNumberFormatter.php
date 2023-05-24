<?php
namespace Countries\Formatter;

use NumberFormatter;

class CountriesNumberFormatter extends NumberFormatter
{
    /**
     * @param string $locale
     * @return NumberFormatter
     */
    public static function createCurrencyFormatter(string $locale)
    {
        return self::create($locale, NumberFormatter::CURRENCY);
    }

    /**
     * @param string $locale
     * @return NumberFormatter
     */
    public static function createDecimalFormatter(string $locale)
    {
        return self::create($locale, NumberFormatter::DECIMAL);
    }
}