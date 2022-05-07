<?php
/**
 * Plan_Invoice generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class Plan_Invoice implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?float $amount = null;
    protected ?int $points = null;
    protected ?\DateTime $payDate = null;
    protected ?\DateTime $insertDate = null;
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
    public function setAmount(?float $amount) : void
    {
        $this->amount = $amount;
    }
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    public function setPoints(?int $points) : void
    {
        $this->points = $points;
    }
    public function getPoints() : ?int
    {
        return $this->points;
    }
    public function setPayDate(?\DateTime $payDate) : void
    {
        $this->payDate = $payDate;
    }
    public function getPayDate() : ?\DateTime
    {
        return $this->payDate;
    }
    public function setInsertDate(?\DateTime $insertDate) : void
    {
        $this->insertDate = $insertDate;
    }
    public function getInsertDate() : ?\DateTime
    {
        return $this->insertDate;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'amount' => $this->amount, 'points' => $this->points, 'payDate' => $this->payDate, 'insertDate' => $this->insertDate), static function ($value) : bool {
            return $value !== null;
        });
    }
}
