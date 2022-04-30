<?php
/**
 * BackendPlanInvoiceInvoice_idPath generated on 2022-04-30
 * @see https://sdkgen.app
 */

class BackendPlanInvoiceInvoice_idPath implements \JsonSerializable
{
    protected ?string $invoice_id = null;
    public function setInvoice_id(?string $invoice_id) : void
    {
        $this->invoice_id = $invoice_id;
    }
    public function getInvoice_id() : ?string
    {
        return $this->invoice_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('invoice_id' => $this->invoice_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
