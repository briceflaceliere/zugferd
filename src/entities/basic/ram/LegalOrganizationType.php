<?php

namespace horstoeko\zugferd\entities\basic\ram;

/**
 * Class representing LegalOrganizationType
 *
 *
 * XSD Type: LegalOrganizationType
 */
class LegalOrganizationType
{

    /**
     * @var \horstoeko\zugferd\entities\basic\udt\IDType $iD
     */
    private $iD = null;

    /**
     * @var string $tradingBusinessName
     */
    private $tradingBusinessName = null;

    /**
     * Gets as iD
     *
     * @return \horstoeko\zugferd\entities\basic\udt\IDType
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param \horstoeko\zugferd\entities\basic\udt\IDType $iD
     * @return self
     */
    public function setID(\horstoeko\zugferd\entities\basic\udt\IDType $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as tradingBusinessName
     *
     * @return string
     */
    public function getTradingBusinessName()
    {
        return $this->tradingBusinessName;
    }

    /**
     * Sets a new tradingBusinessName
     *
     * @param string $tradingBusinessName
     * @return self
     */
    public function setTradingBusinessName($tradingBusinessName)
    {
        $this->tradingBusinessName = $tradingBusinessName;
        return $this;
    }
}
