<?php
/**
 * Transaction generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class Transaction implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?string $transactionId = null;
    protected ?float $amount = null;
    protected ?int $updateDate = null;
    protected ?int $insertDate = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setStatus(?int $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?int
    {
        return $this->status;
    }
    public function setTransactionId(?string $transactionId) : void
    {
        $this->transactionId = $transactionId;
    }
    public function getTransactionId() : ?string
    {
        return $this->transactionId;
    }
    public function setAmount(?float $amount) : void
    {
        $this->amount = $amount;
    }
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    public function setUpdateDate(?int $updateDate) : void
    {
        $this->updateDate = $updateDate;
    }
    public function getUpdateDate() : ?int
    {
        return $this->updateDate;
    }
    public function setInsertDate(?int $insertDate) : void
    {
        $this->insertDate = $insertDate;
    }
    public function getInsertDate() : ?int
    {
        return $this->insertDate;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'transactionId' => $this->transactionId, 'amount' => $this->amount, 'updateDate' => $this->updateDate, 'insertDate' => $this->insertDate), static function ($value) : bool {
            return $value !== null;
        });
    }
}
