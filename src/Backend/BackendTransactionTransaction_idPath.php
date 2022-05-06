<?php
/**
 * BackendTransactionTransaction_idPath generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendTransactionTransaction_idPath implements \JsonSerializable
{
    protected ?string $transaction_id = null;
    public function setTransaction_id(?string $transaction_id) : void
    {
        $this->transaction_id = $transaction_id;
    }
    public function getTransaction_id() : ?string
    {
        return $this->transaction_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('transaction_id' => $this->transaction_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
