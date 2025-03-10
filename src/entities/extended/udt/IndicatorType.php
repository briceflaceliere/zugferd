<?php

namespace horstoeko\zugferd\entities\extended\udt;

/**
 * Class representing IndicatorType
 *
 *
 * XSD Type: IndicatorType
 */
class IndicatorType
{

    /**
     * @var bool $indicator
     */
    private $indicator = null;

    /**
     * Gets as indicator
     *
     * @return bool
     */
    public function getIndicator()
    {
        return $this->indicator;
    }

    /**
     * Sets a new indicator
     *
     * @param bool $indicator
     * @return self
     */
    public function setIndicator($indicator)
    {
        $this->indicator = $indicator;
        return $this;
    }


}

