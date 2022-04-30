<?php
/**
 * Plan_Order_Response generated on 2022-04-30
 * @see https://sdkgen.app
 */

class Plan_Order_Response implements \JsonSerializable
{
    protected ?int $contractId = null;
    protected ?int $invoiceId = null;
    public function setContractId(?int $contractId) : void
    {
        $this->contractId = $contractId;
    }
    public function getContractId() : ?int
    {
        return $this->contractId;
    }
    public function setInvoiceId(?int $invoiceId) : void
    {
        $this->invoiceId = $invoiceId;
    }
    public function getInvoiceId() : ?int
    {
        return $this->invoiceId;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('contractId' => $this->contractId, 'invoiceId' => $this->invoiceId), static function ($value) : bool {
            return $value !== null;
        });
    }
}
