<?php

namespace horstoeko\zugferd\entities\extended\ram;

/**
 * Class representing TradeSettlementPaymentMeansType
 *
 *
 * XSD Type: TradeSettlementPaymentMeansType
 */
class TradeSettlementPaymentMeansType
{

    /**
     * @var string $typeCode
     */
    private $typeCode = null;

    /**
     * @var string $information
     */
    private $information = null;

    /**
     * @var \horstoeko\zugferd\entities\extended\ram\TradeSettlementFinancialCardType $applicableTradeSettlementFinancialCard
     */
    private $applicableTradeSettlementFinancialCard = null;

    /**
     * @var \horstoeko\zugferd\entities\extended\ram\DebtorFinancialAccountType $payerPartyDebtorFinancialAccount
     */
    private $payerPartyDebtorFinancialAccount = null;

    /**
     * @var \horstoeko\zugferd\entities\extended\ram\CreditorFinancialAccountType $payeePartyCreditorFinancialAccount
     */
    private $payeePartyCreditorFinancialAccount = null;

    /**
     * @var \horstoeko\zugferd\entities\extended\ram\CreditorFinancialInstitutionType $payeeSpecifiedCreditorFinancialInstitution
     */
    private $payeeSpecifiedCreditorFinancialInstitution = null;

    /**
     * Gets as typeCode
     *
     * @return string
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }

    /**
     * Sets a new typeCode
     *
     * @param string $typeCode
     * @return self
     */
    public function setTypeCode($typeCode)
    {
        $this->typeCode = $typeCode;
        return $this;
    }

    /**
     * Gets as information
     *
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * @param string $information
     * @return self
     */
    public function setInformation($information)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * Gets as applicableTradeSettlementFinancialCard
     *
     * @return \horstoeko\zugferd\entities\extended\ram\TradeSettlementFinancialCardType
     */
    public function getApplicableTradeSettlementFinancialCard()
    {
        return $this->applicableTradeSettlementFinancialCard;
    }

    /**
     * Sets a new applicableTradeSettlementFinancialCard
     *
     * @param \horstoeko\zugferd\entities\extended\ram\TradeSettlementFinancialCardType $applicableTradeSettlementFinancialCard
     * @return self
     */
    public function setApplicableTradeSettlementFinancialCard(\horstoeko\zugferd\entities\extended\ram\TradeSettlementFinancialCardType $applicableTradeSettlementFinancialCard)
    {
        $this->applicableTradeSettlementFinancialCard = $applicableTradeSettlementFinancialCard;
        return $this;
    }

    /**
     * Gets as payerPartyDebtorFinancialAccount
     *
     * @return \horstoeko\zugferd\entities\extended\ram\DebtorFinancialAccountType
     */
    public function getPayerPartyDebtorFinancialAccount()
    {
        return $this->payerPartyDebtorFinancialAccount;
    }

    /**
     * Sets a new payerPartyDebtorFinancialAccount
     *
     * @param \horstoeko\zugferd\entities\extended\ram\DebtorFinancialAccountType $payerPartyDebtorFinancialAccount
     * @return self
     */
    public function setPayerPartyDebtorFinancialAccount(\horstoeko\zugferd\entities\extended\ram\DebtorFinancialAccountType $payerPartyDebtorFinancialAccount)
    {
        $this->payerPartyDebtorFinancialAccount = $payerPartyDebtorFinancialAccount;
        return $this;
    }

    /**
     * Gets as payeePartyCreditorFinancialAccount
     *
     * @return \horstoeko\zugferd\entities\extended\ram\CreditorFinancialAccountType
     */
    public function getPayeePartyCreditorFinancialAccount()
    {
        return $this->payeePartyCreditorFinancialAccount;
    }

    /**
     * Sets a new payeePartyCreditorFinancialAccount
     *
     * @param \horstoeko\zugferd\entities\extended\ram\CreditorFinancialAccountType $payeePartyCreditorFinancialAccount
     * @return self
     */
    public function setPayeePartyCreditorFinancialAccount(\horstoeko\zugferd\entities\extended\ram\CreditorFinancialAccountType $payeePartyCreditorFinancialAccount)
    {
        $this->payeePartyCreditorFinancialAccount = $payeePartyCreditorFinancialAccount;
        return $this;
    }

    /**
     * Gets as payeeSpecifiedCreditorFinancialInstitution
     *
     * @return \horstoeko\zugferd\entities\extended\ram\CreditorFinancialInstitutionType
     */
    public function getPayeeSpecifiedCreditorFinancialInstitution()
    {
        return $this->payeeSpecifiedCreditorFinancialInstitution;
    }

    /**
     * Sets a new payeeSpecifiedCreditorFinancialInstitution
     *
     * @param \horstoeko\zugferd\entities\extended\ram\CreditorFinancialInstitutionType $payeeSpecifiedCreditorFinancialInstitution
     * @return self
     */
    public function setPayeeSpecifiedCreditorFinancialInstitution(\horstoeko\zugferd\entities\extended\ram\CreditorFinancialInstitutionType $payeeSpecifiedCreditorFinancialInstitution)
    {
        $this->payeeSpecifiedCreditorFinancialInstitution = $payeeSpecifiedCreditorFinancialInstitution;
        return $this;
    }


}

