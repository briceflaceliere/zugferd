<?php

namespace horstoeko\zugferd\entities\en16931\ram;

/**
 * Class representing ReferencedDocumentType
 *
 *
 * XSD Type: ReferencedDocumentType
 */
class ReferencedDocumentType
{

    /**
     * @var \horstoeko\zugferd\entities\en16931\udt\IDType $issuerAssignedID
     */
    private $issuerAssignedID = null;

    /**
     * @var \horstoeko\zugferd\entities\en16931\udt\IDType $uRIID
     */
    private $uRIID = null;

    /**
     * @var \horstoeko\zugferd\entities\en16931\udt\IDType $lineID
     */
    private $lineID = null;

    /**
     * @var string $typeCode
     */
    private $typeCode = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var \horstoeko\zugferd\entities\en16931\udt\BinaryObjectType $attachmentBinaryObject
     */
    private $attachmentBinaryObject = null;

    /**
     * @var string $referenceTypeCode
     */
    private $referenceTypeCode = null;

    /**
     * @var \horstoeko\zugferd\entities\en16931\qdt\FormattedDateTimeType $formattedIssueDateTime
     */
    private $formattedIssueDateTime = null;

    /**
     * Gets as issuerAssignedID
     *
     * @return \horstoeko\zugferd\entities\en16931\udt\IDType
     */
    public function getIssuerAssignedID()
    {
        return $this->issuerAssignedID;
    }

    /**
     * Sets a new issuerAssignedID
     *
     * @param \horstoeko\zugferd\entities\en16931\udt\IDType $issuerAssignedID
     * @return self
     */
    public function setIssuerAssignedID(\horstoeko\zugferd\entities\en16931\udt\IDType $issuerAssignedID)
    {
        $this->issuerAssignedID = $issuerAssignedID;
        return $this;
    }

    /**
     * Gets as uRIID
     *
     * @return \horstoeko\zugferd\entities\en16931\udt\IDType
     */
    public function getURIID()
    {
        return $this->uRIID;
    }

    /**
     * Sets a new uRIID
     *
     * @param \horstoeko\zugferd\entities\en16931\udt\IDType $uRIID
     * @return self
     */
    public function setURIID(\horstoeko\zugferd\entities\en16931\udt\IDType $uRIID)
    {
        $this->uRIID = $uRIID;
        return $this;
    }

    /**
     * Gets as lineID
     *
     * @return \horstoeko\zugferd\entities\en16931\udt\IDType
     */
    public function getLineID()
    {
        return $this->lineID;
    }

    /**
     * Sets a new lineID
     *
     * @param \horstoeko\zugferd\entities\en16931\udt\IDType $lineID
     * @return self
     */
    public function setLineID(\horstoeko\zugferd\entities\en16931\udt\IDType $lineID)
    {
        $this->lineID = $lineID;
        return $this;
    }

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
     * Gets as attachmentBinaryObject
     *
     * @return \horstoeko\zugferd\entities\en16931\udt\BinaryObjectType
     */
    public function getAttachmentBinaryObject()
    {
        return $this->attachmentBinaryObject;
    }

    /**
     * Sets a new attachmentBinaryObject
     *
     * @param \horstoeko\zugferd\entities\en16931\udt\BinaryObjectType $attachmentBinaryObject
     * @return self
     */
    public function setAttachmentBinaryObject(\horstoeko\zugferd\entities\en16931\udt\BinaryObjectType $attachmentBinaryObject)
    {
        $this->attachmentBinaryObject = $attachmentBinaryObject;
        return $this;
    }

    /**
     * Gets as referenceTypeCode
     *
     * @return string
     */
    public function getReferenceTypeCode()
    {
        return $this->referenceTypeCode;
    }

    /**
     * Sets a new referenceTypeCode
     *
     * @param string $referenceTypeCode
     * @return self
     */
    public function setReferenceTypeCode($referenceTypeCode)
    {
        $this->referenceTypeCode = $referenceTypeCode;
        return $this;
    }

    /**
     * Gets as formattedIssueDateTime
     *
     * @return \horstoeko\zugferd\entities\en16931\qdt\FormattedDateTimeType
     */
    public function getFormattedIssueDateTime()
    {
        return $this->formattedIssueDateTime;
    }

    /**
     * Sets a new formattedIssueDateTime
     *
     * @param \horstoeko\zugferd\entities\en16931\qdt\FormattedDateTimeType $formattedIssueDateTime
     * @return self
     */
    public function setFormattedIssueDateTime(\horstoeko\zugferd\entities\en16931\qdt\FormattedDateTimeType $formattedIssueDateTime)
    {
        $this->formattedIssueDateTime = $formattedIssueDateTime;
        return $this;
    }


}

