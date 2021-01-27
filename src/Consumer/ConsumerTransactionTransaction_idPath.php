<?php 
/**
 * ConsumerTransactionTransaction_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Consumer;


class ConsumerTransactionTransaction_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $transaction_id;
    /**
     * @param string|null $transaction_id
     */
    public function setTransaction_id(?string $transaction_id) : void
    {
        $this->transaction_id = $transaction_id;
    }
    /**
     * @return string|null
     */
    public function getTransaction_id() : ?string
    {
        return $this->transaction_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('transaction_id' => $this->transaction_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}