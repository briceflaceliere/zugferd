<?php

namespace horstoeko\zugferd\entities\extended\ram;

/**
 * Class representing CreditorFinancialAccountType
 *
 *
 * XSD Type: CreditorFinancialAccountType
 */
class CreditorFinancialAccountType
{

    /**
     * @var \horstoeko\zugferd\entities\extended\udt\IDType $iBANID
     */
    private $iBANID = null;

    /**
     * @var string $accountName
     */
    private $accountName = null;

    /**
     * @var \horstoeko\zugferd\entities\extended\udt\IDType $proprietaryID
     */
    private $proprietaryID = null;

    /**
     * Gets as iBANID
     *
     * @return \horstoeko\zugferd\entities\extended\udt\IDType
     */
    public function getIBANID()
    {
        return $this->iBANID;
    }

    /**
     * Sets a new iBANID
     *
     * @param \horstoeko\zugferd\entities\extended\udt\IDType $iBANID
     * @return self
     */
    public function setIBANID(\horstoeko\zugferd\entities\extended\udt\IDType $iBANID)
    {
        $this->iBANID = $iBANID;
        return $this;
    }

    /**
     * Gets as accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Sets a new accountName
     *
     * @param string $accountName
     * @return self
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * Gets as proprietaryID
     *
     * @return \horstoeko\zugferd\entities\extended\udt\IDType
     */
    public function getProprietaryID()
    {
        return $this->proprietaryID;
    }

    /**
     * Sets a new proprietaryID
     *
     * @param \horstoeko\zugferd\entities\extended\udt\IDType $proprietaryID
     * @return self
     */
    public function setProprietaryID(\horstoeko\zugferd\entities\extended\udt\IDType $proprietaryID)
    {
        $this->proprietaryID = $proprietaryID;
        return $this;
    }


}

