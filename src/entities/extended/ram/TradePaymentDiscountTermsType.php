<?php

namespace horstoeko\zugferd\entities\extended\ram;

/**
 * Class representing TradePaymentDiscountTermsType
 *
 *
 * XSD Type: TradePaymentDiscountTermsType
 */
class TradePaymentDiscountTermsType
{

    /**
     * @var \horstoeko\zugferd\entities\extended\udt\DateTimeType $basisDateTime
     */
    private $basisDateTime = null;

    /**
     * @var \horstoeko\zugferd\entities\extended\udt\MeasureType $basisPeriodMeasure
     */
    private $basisPeriodMeasure = null;

    /**
     * @var \horstoeko\zugferd\entities\extended\udt\AmountType $basisAmount
     */
    private $basisAmount = null;

    /**
     * @var float $calculationPercent
     */
    private $calculationPercent = null;

    /**
     * @var \horstoeko\zugferd\entities\extended\udt\AmountType $actualDiscountAmount
     */
    private $actualDiscountAmount = null;

    /**
     * Gets as basisDateTime
     *
     * @return \horstoeko\zugferd\entities\extended\udt\DateTimeType
     */
    public function getBasisDateTime()
    {
        return $this->basisDateTime;
    }

    /**
     * Sets a new basisDateTime
     *
     * @param \horstoeko\zugferd\entities\extended\udt\DateTimeType $basisDateTime
     * @return self
     */
    public function setBasisDateTime(\horstoeko\zugferd\entities\extended\udt\DateTimeType $basisDateTime)
    {
        $this->basisDateTime = $basisDateTime;
        return $this;
    }

    /**
     * Gets as basisPeriodMeasure
     *
     * @return \horstoeko\zugferd\entities\extended\udt\MeasureType
     */
    public function getBasisPeriodMeasure()
    {
        return $this->basisPeriodMeasure;
    }

    /**
     * Sets a new basisPeriodMeasure
     *
     * @param \horstoeko\zugferd\entities\extended\udt\MeasureType $basisPeriodMeasure
     * @return self
     */
    public function setBasisPeriodMeasure(\horstoeko\zugferd\entities\extended\udt\MeasureType $basisPeriodMeasure)
    {
        $this->basisPeriodMeasure = $basisPeriodMeasure;
        return $this;
    }

    /**
     * Gets as basisAmount
     *
     * @return \horstoeko\zugferd\entities\extended\udt\AmountType
     */
    public function getBasisAmount()
    {
        return $this->basisAmount;
    }

    /**
     * Sets a new basisAmount
     *
     * @param \horstoeko\zugferd\entities\extended\udt\AmountType $basisAmount
     * @return self
     */
    public function setBasisAmount(\horstoeko\zugferd\entities\extended\udt\AmountType $basisAmount)
    {
        $this->basisAmount = $basisAmount;
        return $this;
    }

    /**
     * Gets as calculationPercent
     *
     * @return float
     */
    public function getCalculationPercent()
    {
        return $this->calculationPercent;
    }

    /**
     * Sets a new calculationPercent
     *
     * @param float $calculationPercent
     * @return self
     */
    public function setCalculationPercent($calculationPercent)
    {
        $this->calculationPercent = $calculationPercent;
        return $this;
    }

    /**
     * Gets as actualDiscountAmount
     *
     * @return \horstoeko\zugferd\entities\extended\udt\AmountType
     */
    public function getActualDiscountAmount()
    {
        return $this->actualDiscountAmount;
    }

    /**
     * Sets a new actualDiscountAmount
     *
     * @param \horstoeko\zugferd\entities\extended\udt\AmountType $actualDiscountAmount
     * @return self
     */
    public function setActualDiscountAmount(\horstoeko\zugferd\entities\extended\udt\AmountType $actualDiscountAmount)
    {
        $this->actualDiscountAmount = $actualDiscountAmount;
        return $this;
    }


}

