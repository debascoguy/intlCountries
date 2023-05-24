<?php

namespace Countries\Entity;

class Locale {

    protected string $isoAlphaCode2;

    protected string $isoAlphaCode3;

    protected array $locales;

    protected string $defaultLocale;

    protected array $language;
    
    private function __construct()
    {
        /** Use the create Function to get an Instance */
    }

    /**
     * @return self
     */
    public static function create(array $countryInfoArray): self
    {
        $locale = new self();
        $locale->isoAlphaCode2 = isset($countryInfoArray["isoAlphaCode2"]) ? $countryInfoArray["isoAlphaCode2"] : "";
        $locale->isoAlphaCode3 = isset($countryInfoArray["isoAlphaCode3"]) ? $countryInfoArray["isoAlphaCode3"] : "";
        $locale->locales = is_array($countryInfoArray["locales"]) ? $countryInfoArray["locales"] : [];
        $locale->defaultLocale = isset($countryInfoArray["defaultLocale"]) ? $countryInfoArray["defaultLocale"] : "";
        $locale->language = is_array($countryInfoArray["language"]) ? $countryInfoArray["language"] : [];
        return $locale;
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
}