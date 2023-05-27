<?php
namespace Emma\Countries\Repository;

use Emma\Countries\Entity\States;
use Emma\Countries\Singleton;

class StatesRepository extends CountryRepository {
    
    use Singleton;

    protected function __construct()
    {
        parent::__construct();
    }
    
    /**
     * @return array|null
     */
    public function findAllStatesArray(string $countryNameORisoAlphaCode2ORisoAlphaCode2): ?array
    {
        $country = $this->findCountryArray($countryNameORisoAlphaCode2ORisoAlphaCode2);
        return !empty($country) && isset($country["states"]) ? $country["states"] : null;
    }

    /**
     * @return array|States[]|null
     */
    public function findAllStates(string $countryNameORisoAlphaCode2ORisoAlphaCode2): ?States
    {
        $states = $this->findAllStatesArray($countryNameORisoAlphaCode2ORisoAlphaCode2);
        return !empty($states) ? States::create($states) : null;
    }

    /**
     * @return array|null
     */
    public function findStateInfo(string $countryNameORisoAlphaCode2ORisoAlphaCode2, string $stateCode): ?array
    {
        $states = $this->findAllStatesArray($countryNameORisoAlphaCode2ORisoAlphaCode2);
        if (empty($states)) {
            return null;
        }

        foreach($states as $state) {
            if ($state["code"] == $stateCode) {
                return $state;
            }
        }
        return null;
    }

    /**
     * @return States|null
     */
    public function findStateInfoEntity(string $countryNameORisoAlphaCode2ORisoAlphaCode2, string $stateCode): ?States
    {
        $state = $this->findStateInfo($countryNameORisoAlphaCode2ORisoAlphaCode2, $stateCode);
        return !empty($state) ? States::create($state) : null;
    }

    /**
     * @param string $countryNameORisoAlphaCode2ORisoAlphaCode2
     * @return array|null
     */
    public function findStatesKeyValuePair(string $countryNameORisoAlphaCode2ORisoAlphaCode2): ?array
    {
        $states = $this->findAllStatesArray($countryNameORisoAlphaCode2ORisoAlphaCode2);
        if (empty($states)) {
            return null;
        }
        return $this->createKeyValuePair($states, "code", "name");
    }
}