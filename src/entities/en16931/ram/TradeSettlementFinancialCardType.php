<?php

namespace horstoeko\zugferd\entities\en16931\ram;

/**
 * Class representing TradeSettlementFinancialCardType
 *
 *
 * XSD Type: TradeSettlementFinancialCardType
 */
class TradeSettlementFinancialCardType
{

    /**
     * @var \horstoeko\zugferd\entities\en16931\udt\IDType $iD
     */
    private $iD = null;

    /**
     * @var string $cardholderName
     */
    private $cardholderName = null;

    /**
     * Gets as iD
     *
     * @return \horstoeko\zugferd\entities\en16931\udt\IDType
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * @param \horstoeko\zugferd\entities\en16931\udt\IDType $iD
     * @return self
     */
    public function setID(\horstoeko\zugferd\entities\en16931\udt\IDType $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as cardholderName
     *
     * @return string
     */
    public function getCardholderName()
    {
        return $this->cardholderName;
    }

    /**
     * Sets a new cardholderName
     *
     * @param string $cardholderName
     * @return self
     */
    public function setCardholderName($cardholderName)
    {
        $this->cardholderName = $cardholderName;
        return $this;
    }


}

