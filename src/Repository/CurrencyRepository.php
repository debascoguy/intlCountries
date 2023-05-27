<?php
namespace Emma\Countries\Repository;

use Emma\Countries\Entity\Currency;
use Emma\Countries\Entity\CurrencyDetails;
use Emma\Countries\Singleton;

class CurrencyRepository extends CountryRepository {
    
    use Singleton;

    private array $currencyInfo = [];

    protected function __construct()
    {
        parent::__construct();
        $this->currencyInfo = $this->loadData(dirname(__DIR__) . DIRECTORY_SEPARATOR . "Data" . DIRECTORY_SEPARATOR . "common-currency.json");
    }

    /**
     * @return array
     */
    public function findAllCountryAndCurrencyArray()
    {
        $countries = $this->findAllCountryArray();
        if (empty($countries)) {
            return null;
        }
        $result = [];
        foreach($countries as $country) {
            $result[$country["isoAlphaCode2"]] = [
                "countryName" => $country["name"],
                "isoAlphaCode2" => $country["isoAlphaCode2"],
                "isoAlphaCode3" => $country["isoAlphaCode3"],
                "currencies" => $country["currencies"],
                "defaultCurrency" => $country["defaultCurrency"],
                "symbol" => $country["symbol"]
            ];
        }
        return $result;
    }

    /**
     * @return array
     */
    public function findAllCountryAndCurrency()
    {
        $countries = $this->findAllCountryAndCurrencyArray();
        if (empty($countries)) {
            return null;
        }
        $result = [];
        foreach($countries as $country) {
            $result[$country["isoAlphaCode2"]] = Currency::create($country);
        }
        return $result;
    }
    
    /**
     * @return array|null
     */
    public function findCountryAndCurrencyArray(string $countryNameORisoAlphaCode2ORisoAlphaCode2): ?array
    {
        $country = $this->findCountryArray($countryNameORisoAlphaCode2ORisoAlphaCode2);
        return (empty($countries)) ? null : [
            "countryName" => $country["name"],
            "isoAlphaCode2" => $country["isoAlphaCode2"],
            "isoAlphaCode3" => $country["isoAlphaCode3"],
            "currencies" => $country["currencies"],
            "defaultCurrency" => $country["defaultCurrency"],
            "symbol" => $country["symbol"]
        ];
    }

    /**
     * @return Currency|null
     */
    public function findCountryCurrency(string $countryNameORisoAlphaCode2ORisoAlphaCode2): ?Currency
    {
        $currency = $this->findCountryAndCurrencyArray($countryNameORisoAlphaCode2ORisoAlphaCode2);
        return !empty($currency) ? Currency::create($currency) : null;
    }

    
    /**
     * @param string $currencyCode
     * @return array|null
     */
    public function findAllCurrencyDetailsArray()
    {
        return $this->currencyInfo;
    }

    /**
     * @param string $currencyCode
     * @return array|null
     */
    public function findAllCurrencyDetails()
    {
        $result = [];
        foreach($this->currencyInfo as $code => $currency) {
            $result[$code] = CurrencyDetails::create($currency);
        }
        return $result;
    }

    /**
     * @param string $currencyCode
     * @return array|null
     */
    public function findCurrencyDetailsArray(string $currencyCode)
    {
        return isset($this->currencyInfo[$currencyCode]) ? $this->currencyInfo[$currencyCode] : null;
    }

    /**
     * @param string $currencyCode
     * @return array|null
     */
    public function findCurrencyDetails(string $currencyCode)
    {
        return isset($this->currencyInfo[$currencyCode]) ? CurrencyDetails::create($this->currencyInfo[$currencyCode]) : null;
    }

}