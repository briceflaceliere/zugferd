<?php

namespace horstoeko\zugferd\entities\extended\ram;

/**
 * Class representing TradeProductType
 *
 *
 * XSD Type: TradeProductType
 */
class TradeProductType
{

    /**
     * @var \horstoeko\zugferd\entities\extended\udt\IDType $globalID
     */
    private $globalID = null;

    /**
     * @var \horstoeko\zugferd\entities\extended\udt\IDType $sellerAssignedID
     */
    private $sellerAssignedID = null;

    /**
     * @var \horstoeko\zugferd\entities\extended\udt\IDType $buyerAssignedID
     */
    private $buyerAssignedID = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @var \horstoeko\zugferd\entities\extended\ram\ProductCharacteristicType[] $applicableProductCharacteristic
     */
    private $applicableProductCharacteristic = [
        
    ];

    /**
     * @var \horstoeko\zugferd\entities\extended\ram\ProductClassificationType[] $designatedProductClassification
     */
    private $designatedProductClassification = [
        
    ];

    /**
     * @var \horstoeko\zugferd\entities\extended\ram\TradeCountryType $originTradeCountry
     */
    private $originTradeCountry = null;

    /**
     * @var \horstoeko\zugferd\entities\extended\ram\ReferencedProductType[] $includedReferencedProduct
     */
    private $includedReferencedProduct = [
        
    ];

    /**
     * Gets as globalID
     *
     * @return \horstoeko\zugferd\entities\extended\udt\IDType
     */
    public function getGlobalID()
    {
        return $this->globalID;
    }

    /**
     * Sets a new globalID
     *
     * @param \horstoeko\zugferd\entities\extended\udt\IDType $globalID
     * @return self
     */
    public function setGlobalID(\horstoeko\zugferd\entities\extended\udt\IDType $globalID)
    {
        $this->globalID = $globalID;
        return $this;
    }

    /**
     * Gets as sellerAssignedID
     *
     * @return \horstoeko\zugferd\entities\extended\udt\IDType
     */
    public function getSellerAssignedID()
    {
        return $this->sellerAssignedID;
    }

    /**
     * Sets a new sellerAssignedID
     *
     * @param \horstoeko\zugferd\entities\extended\udt\IDType $sellerAssignedID
     * @return self
     */
    public function setSellerAssignedID(\horstoeko\zugferd\entities\extended\udt\IDType $sellerAssignedID)
    {
        $this->sellerAssignedID = $sellerAssignedID;
        return $this;
    }

    /**
     * Gets as buyerAssignedID
     *
     * @return \horstoeko\zugferd\entities\extended\udt\IDType
     */
    public function getBuyerAssignedID()
    {
        return $this->buyerAssignedID;
    }

    /**
     * Sets a new buyerAssignedID
     *
     * @param \horstoeko\zugferd\entities\extended\udt\IDType $buyerAssignedID
     * @return self
     */
    public function setBuyerAssignedID(\horstoeko\zugferd\entities\extended\udt\IDType $buyerAssignedID)
    {
        $this->buyerAssignedID = $buyerAssignedID;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as applicableProductCharacteristic
     *
     * @return self
     * @param \horstoeko\zugferd\entities\extended\ram\ProductCharacteristicType $applicableProductCharacteristic
     */
    public function addToApplicableProductCharacteristic(\horstoeko\zugferd\entities\extended\ram\ProductCharacteristicType $applicableProductCharacteristic)
    {
        $this->applicableProductCharacteristic[] = $applicableProductCharacteristic;
        return $this;
    }

    /**
     * isset applicableProductCharacteristic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplicableProductCharacteristic($index)
    {
        return isset($this->applicableProductCharacteristic[$index]);
    }

    /**
     * unset applicableProductCharacteristic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplicableProductCharacteristic($index)
    {
        unset($this->applicableProductCharacteristic[$index]);
    }

    /**
     * Gets as applicableProductCharacteristic
     *
     * @return \horstoeko\zugferd\entities\extended\ram\ProductCharacteristicType[]
     */
    public function getApplicableProductCharacteristic()
    {
        return $this->applicableProductCharacteristic;
    }

    /**
     * Sets a new applicableProductCharacteristic
     *
     * @param \horstoeko\zugferd\entities\extended\ram\ProductCharacteristicType[] $applicableProductCharacteristic
     * @return self
     */
    public function setApplicableProductCharacteristic(array $applicableProductCharacteristic)
    {
        $this->applicableProductCharacteristic = $applicableProductCharacteristic;
        return $this;
    }

    /**
     * Adds as designatedProductClassification
     *
     * @return self
     * @param \horstoeko\zugferd\entities\extended\ram\ProductClassificationType $designatedProductClassification
     */
    public function addToDesignatedProductClassification(\horstoeko\zugferd\entities\extended\ram\ProductClassificationType $designatedProductClassification)
    {
        $this->designatedProductClassification[] = $designatedProductClassification;
        return $this;
    }

    /**
     * isset designatedProductClassification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDesignatedProductClassification($index)
    {
        return isset($this->designatedProductClassification[$index]);
    }

    /**
     * unset designatedProductClassification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDesignatedProductClassification($index)
    {
        unset($this->designatedProductClassification[$index]);
    }

    /**
     * Gets as designatedProductClassification
     *
     * @return \horstoeko\zugferd\entities\extended\ram\ProductClassificationType[]
     */
    public function getDesignatedProductClassification()
    {
        return $this->designatedProductClassification;
    }

    /**
     * Sets a new designatedProductClassification
     *
     * @param \horstoeko\zugferd\entities\extended\ram\ProductClassificationType[] $designatedProductClassification
     * @return self
     */
    public function setDesignatedProductClassification(array $designatedProductClassification)
    {
        $this->designatedProductClassification = $designatedProductClassification;
        return $this;
    }

    /**
     * Gets as originTradeCountry
     *
     * @return \horstoeko\zugferd\entities\extended\ram\TradeCountryType
     */
    public function getOriginTradeCountry()
    {
        return $this->originTradeCountry;
    }

    /**
     * Sets a new originTradeCountry
     *
     * @param \horstoeko\zugferd\entities\extended\ram\TradeCountryType $originTradeCountry
     * @return self
     */
    public function setOriginTradeCountry(\horstoeko\zugferd\entities\extended\ram\TradeCountryType $originTradeCountry)
    {
        $this->originTradeCountry = $originTradeCountry;
        return $this;
    }

    /**
     * Adds as includedReferencedProduct
     *
     * @return self
     * @param \horstoeko\zugferd\entities\extended\ram\ReferencedProductType $includedReferencedProduct
     */
    public function addToIncludedReferencedProduct(\horstoeko\zugferd\entities\extended\ram\ReferencedProductType $includedReferencedProduct)
    {
        $this->includedReferencedProduct[] = $includedReferencedProduct;
        return $this;
    }

    /**
     * isset includedReferencedProduct
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIncludedReferencedProduct($index)
    {
        return isset($this->includedReferencedProduct[$index]);
    }

    /**
     * unset includedReferencedProduct
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIncludedReferencedProduct($index)
    {
        unset($this->includedReferencedProduct[$index]);
    }

    /**
     * Gets as includedReferencedProduct
     *
     * @return \horstoeko\zugferd\entities\extended\ram\ReferencedProductType[]
     */
    public function getIncludedReferencedProduct()
    {
        return $this->includedReferencedProduct;
    }

    /**
     * Sets a new includedReferencedProduct
     *
     * @param \horstoeko\zugferd\entities\extended\ram\ReferencedProductType[] $includedReferencedProduct
     * @return self
     */
    public function setIncludedReferencedProduct(array $includedReferencedProduct)
    {
        $this->includedReferencedProduct = $includedReferencedProduct;
        return $this;
    }
}
