<?php
/**
 * Dashboard_Transaction generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Dashboard_Transaction implements \JsonSerializable
{
    protected ?string $status = null;
    protected ?string $provider = null;
    protected ?string $transactionId = null;
    protected ?float $amount = null;
    protected ?\DateTime $date = null;
    public function setStatus(?string $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?string
    {
        return $this->status;
    }
    public function setProvider(?string $provider) : void
    {
        $this->provider = $provider;
    }
    public function getProvider() : ?string
    {
        return $this->provider;
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
    public function setDate(?\DateTime $date) : void
    {
        $this->date = $date;
    }
    public function getDate() : ?\DateTime
    {
        return $this->date;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('status' => $this->status, 'provider' => $this->provider, 'transactionId' => $this->transactionId, 'amount' => $this->amount, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}
