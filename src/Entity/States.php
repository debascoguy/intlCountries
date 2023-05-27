<?php

namespace Emma\Countries\Entity;

class States {

    protected string $code;

    protected string $name;

    protected string $subdivision = null;

    private function __construct()
    {
        /** Use the create Function to get an Instance */
    }

    /**
     * @return self
     */
    public static function create(array $stateArray): self
    {
        $state = new self();
        $state->code = isset($stateArray["code"]) ? $stateArray["code"] : null;
        $state->name = isset($stateArray["name"]) ? $stateArray["name"] : null;
        $state->subdivision = isset($stateArray["subdivision"]) ? $stateArray["subdivision"] : null;
        return $state;
    }

    /**
     * Get the value of code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

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
     * Get the value of subdivision
     */ 
    public function getSubdivision()
    {
        return $this->subdivision;
    }

    /**
     * Set the value of subdivision
     *
     * @return  self
     */ 
    public function setSubdivision($subdivision)
    {
        $this->subdivision = $subdivision;

        return $this;
    }
}