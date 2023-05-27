<?php

namespace Emma\Countries\Entity;

class Currency {

    protected string $countryName;

    protected string $isoAlphaCode2;

    protected string $isoAlphaCode3;

    protected array $currencies;

    protected string $defaultCurrency;

    protected string $symbol;
    
    private function __construct()
    {
        /** Use the create Function to get an Instance */
    }

    /**
     * @return self
     */
    public static function create(array $countryInfoArray): self
    {
        $currency = new self();
        $currency->countryName = isset($countryInfoArray["name"]) ? $countryInfoArray["name"] : "";
        $currency->isoAlphaCode2 = isset($countryInfoArray["isoAlphaCode2"]) ? $countryInfoArray["isoAlphaCode2"] : "";
        $currency->isoAlphaCode3 = isset($countryInfoArray["isoAlphaCode3"]) ? $countryInfoArray["isoAlphaCode3"] : "";
        $currency->currencies = is_array($countryInfoArray["currencies"]) ? $countryInfoArray["currencies"] : [];
        $currency->defaultCurrency = isset($countryInfoArray["defaultCurrency"]) ? $countryInfoArray["defaultCurrency"] : "";
        $currency->symbol = isset($countryInfoArray["symbol"]) ? $countryInfoArray["symbol"] : "";
        return $currency;
    }
    
    /**
     * Get the value of countryName
     */ 
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Set the value of countryName
     *
     * @return  self
     */ 
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }
    
    /**
     * Get the value of isoAlphaCode2
     */ 
    public function getIsoAlphaCode2()
    {
        return $this->isoAlphaCode2;
    }

    /**
     * Set the value of isoAlphaCode2
     *
     * @return  self
     */ 
    public function setIsoAlphaCode2($isoAlphaCode2)
    {
        $this->isoAlphaCode2 = $isoAlphaCode2;

        return $this;
    }

    /**
     * Get the value of isoAlphaCode3
     */ 
    public function getIsoAlphaCode3()
    {
        return $this->isoAlphaCode3;
    }

    /**
     * Set the value of isoAlphaCode3
     *
     * @return  self
     */ 
    public function setIsoAlphaCode3($isoAlphaCode3)
    {
        $this->isoAlphaCode3 = $isoAlphaCode3;

        return $this;
    }
    
    /**
     * Get the value of currencies
     */ 
    public function getCurrencies()
    {
        return $this->currencies;
    }

    /**
     * Set the value of currencies
     *
     * @return  self
     */ 
    public function setCurrencies($currencies)
    {
        $this->currencies = $currencies;

        return $this;
    }

    /**
     * Get the value of defaultCurrency
     */ 
    public function getDefaultCurrency()
    {
        return $this->defaultCurrency;
    }

    /**
     * Set the value of defaultCurrency
     *
     * @return  self
     */ 
    public function setDefaultCurrency($defaultCurrency)
    {
        $this->defaultCurrency = $defaultCurrency;

        return $this;
    }

    /**
     * Get the value of symbol
     */ 
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Set the value of symbol
     *
     * @return  self
     */ 
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }
}