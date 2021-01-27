<?php 
/**
 * BackendPlanInvoiceInvoice_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendPlanInvoiceInvoice_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $invoice_id;
    /**
     * @param string|null $invoice_id
     */
    public function setInvoice_id(?string $invoice_id) : void
    {
        $this->invoice_id = $invoice_id;
    }
    /**
     * @return string|null
     */
    public function getInvoice_id() : ?string
    {
        return $this->invoice_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('invoice_id' => $this->invoice_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}