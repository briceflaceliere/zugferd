<?php

namespace horstoeko\zugferd\ram;

/**
 * Class representing TaxRegistrationType
 *
 *
 * XSD Type: TaxRegistrationType
 */
class TaxRegistrationType
{

    /**
     * @property \horstoeko\zugferd\udt\IDType $iD
     */
    private $iD = null;

    /**
     * Gets as iD
     *
     * @return \horstoeko\zugferd\udt\IDType
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param \horstoeko\zugferd\udt\IDType $iD
     * @return self
     */
    public function setID(\horstoeko\zugferd\udt\IDType $iD)
    {
        $this->iD = $iD;
        return $this;
    }


}

