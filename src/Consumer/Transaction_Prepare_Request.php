<?php
/**
 * Transaction_Prepare_Request generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use PSX\Schema\Attribute\Required;

#[Required(array('invoiceId', 'returnUrl'))]
class Transaction_Prepare_Request implements \JsonSerializable
{
    protected ?int $invoiceId = null;
    protected ?string $returnUrl = null;
    public function setInvoiceId(?int $invoiceId) : void
    {
        $this->invoiceId = $invoiceId;
    }
    public function getInvoiceId() : ?int
    {
        return $this->invoiceId;
    }
    public function setReturnUrl(?string $returnUrl) : void
    {
        $this->returnUrl = $returnUrl;
    }
    public function getReturnUrl() : ?string
    {
        return $this->returnUrl;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('invoiceId' => $this->invoiceId, 'returnUrl' => $this->returnUrl), static function ($value) : bool {
            return $value !== null;
        });
    }
}
