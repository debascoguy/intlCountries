<?php

namespace Countries\Entity;

class CurrencyDetails {

    protected string $currencyCode;

    protected string $currencyName;

    protected string $currencyNamePlural;

    protected string $decimalDigits;

    protected string $rounding;

    protected string $symbol;

    protected string $symbolNative;

    
    private function __construct()
    {
        /** Use the create Function to get an Instance */
    }

    /**
     * @param array $currency
     * @return self
     */
    public static function create(array $currency)
    {
        $currencyDetails = new self();
        $currencyDetails->currencyCode = isset($currency["code"]) ? $currency["code"] : "";
        $currencyDetails->currencyName = isset($currency["name"]) ? $currency["name"] : "";
        $currencyDetails->currencyNamePlural = isset($currency["name_plural"]) ? $currency["name_plural"] : "";
        $currencyDetails->decimalDigits = isset($currency["decimal_digits"]) ? $currency["decimal_digits"] : "";
        $currencyDetails->rounding = isset($currency["rounding"]) ? $currency["rounding"] : "";
        $currencyDetails->symbol = isset($currency["symbol"]) ? $currency["symbol"] : "";
        $currencyDetails->symbolNative = isset($currency["symbol_native"]) ? $currency["symbol_native"] : "";
    }

    /**
     * Get the value of currencyCode
     */ 
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set the value of currencyCode
     *
     * @return  self
     */ 
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get the value of currencyName
     */ 
    public function getCurrencyName()
    {
        return $this->currencyName;
    }

    /**
     * Set the value of currencyName
     *
     * @return  self
     */ 
    public function setCurrencyName($currencyName)
    {
        $this->currencyName = $currencyName;

        return $this;
    }

    /**
     * Get the value of currencyNamePlural
     */ 
    public function getCurrencyNamePlural()
    {
        return $this->currencyNamePlural;
    }

    /**
     * Set the value of currencyNamePlural
     *
     * @return  self
     */ 
    public function setCurrencyNamePlural($currencyNamePlural)
    {
        $this->currencyNamePlural = $currencyNamePlural;

        return $this;
    }
    
    /**
     * Get the value of decimalDigits
     */ 
    public function getDecimalDigits()
    {
        return $this->decimalDigits;
    }

    /**
     * Set the value of decimalDigits
     *
     * @return  self
     */ 
    public function setDecimalDigits($decimalDigits)
    {
        $this->decimalDigits = $decimalDigits;

        return $this;
    }

    /**
     * Get the value of rounding
     */ 
    public function getRounding()
    {
        return $this->rounding;
    }

    /**
     * Set the value of rounding
     *
     * @return  self
     */ 
    public function setRounding($rounding)
    {
        $this->rounding = $rounding;

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
     * Get the value of symbolNative
     */ 
    public function getSymbolNative()
    {
        return $this->symbolNative;
    }

    /**
     * Set the value of symbolNative
     *
     * @return  self
     */ 
    public function setSymbolNative($symbolNative)
    {
        $this->symbolNative = $symbolNative;

        return $this;
    }
}