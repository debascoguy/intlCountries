<?php

namespace Countries\Entity;

class Country {
    
    protected string $isoAlphaCode2;
    
    protected string $isoAlphaCode3;
    
    protected string $name;
    
    protected string $capital;

    protected int $phone;
    
    protected string $continent;
    
    protected string $continentSubRegion;

    protected string $continentCode;

    protected array $currencies = [];

    protected string $defaultCurrency = "";

    protected string $symbol = "";

    protected array $language = [];

    protected array $locales = [];

    protected string $defaultLocale = "";
    
    protected array $states = [];

    private function __construct()
    {
        /** Use the create Function to get an Instance */
    }
    
    /**
     * @return self
     */
    public static function create(array $countryInfoArray): self
    {
        $country = new self();
        $country->isoAlphaCode2 = isset($countryInfoArray["isoAlphaCode2"]) ? $countryInfoArray["isoAlphaCode2"] : "";
        $country->isoAlphaCode3 = isset($countryInfoArray["isoAlphaCode3"]) ? $countryInfoArray["isoAlphaCode3"] : "";
        $country->name = isset($countryInfoArray["name"]) ? $countryInfoArray["name"] : "";
        $country->phone = is_int($countryInfoArray["phone"]) ? $countryInfoArray["phone"] : 0;
        $country->capital = isset($countryInfoArray["capital"]) ? $countryInfoArray["capital"] : "";
        $country->continent = isset($countryInfoArray["continent"]) ? $countryInfoArray["continent"] : "";
        $country->continentSubRegion = isset($countryInfoArray["continentSubRegion"]) ? $countryInfoArray["continentSubRegion"] : "";
        $country->continentCode = isset($countryInfoArray["continentCode"]) ? $countryInfoArray["continentCode"] : "";
        $country->currencies = is_array($countryInfoArray["currencies"]) ? $countryInfoArray["currencies"] : [];
        $country->defaultCurrency = isset($countryInfoArray["defaultCurrency"]) ? $countryInfoArray["defaultCurrency"] : "";
        $country->symbol = isset($countryInfoArray["symbol"]) ? $countryInfoArray["symbol"] : "";
        $country->language = is_array($countryInfoArray["language"]) ? $countryInfoArray["language"] : [];
        $country->locales = is_array($countryInfoArray["locales"]) ? $country["locales"] : [];
        $country->defaultLocale = isset($countryInfoArray["defaultLocale"]) ? $countryInfoArray["defaultLocale"] : "";
        $country->states = is_array($countryInfoArray["states"]) ? $countryInfoArray["states"] : [];
        return $country;
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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of capital
     */ 
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set the value of capital
     *
     * @return  self
     */ 
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get the value of continent
     */ 
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * Set the value of continent
     *
     * @return  self
     */ 
    public function setContinent($continent)
    {
        $this->continent = $continent;

        return $this;
    }

    /**
     * Get the value of continentSubRegion
     */ 
    public function getContinentSubRegion()
    {
        return $this->continentSubRegion;
    }

    /**
     * Set the value of continentSubRegion
     *
     * @return  self
     */ 
    public function setContinentSubRegion($continentSubRegion)
    {
        $this->continentSubRegion = $continentSubRegion;

        return $this;
    }

    /**
     * Get the value of continentCode
     */ 
    public function getContinentCode()
    {
        return $this->continentCode;
    }

    /**
     * Set the value of continentCode
     *
     * @return  self
     */ 
    public function setContinentCode($continentCode)
    {
        $this->continentCode = $continentCode;

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

    /**
     * Get the value of language
     */ 
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set the value of language
     *
     * @return  self
     */ 
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get the value of locales
     */ 
    public function getLocales()
    {
        return $this->locales;
    }

    /**
     * Set the value of locales
     *
     * @return  self
     */ 
    public function setLocales($locales)
    {
        $this->locales = $locales;

        return $this;
    }

    /**
     * Get the value of defaultLocale
     */ 
    public function getDefaultLocale()
    {
        return $this->defaultLocale;
    }

    /**
     * Set the value of defaultLocale
     *
     * @return  self
     */ 
    public function setDefaultLocale($defaultLocale)
    {
        $this->defaultLocale = $defaultLocale;

        return $this;
    }

    /**
     * Get the value of states
     */ 
    public function getStates()
    {
        return $this->states;
    }

    /**
     * Set the value of states
     *
     * @return  self
     */ 
    public function setStates($states)
    {
        $this->states = $states;

        return $this;
    }
}