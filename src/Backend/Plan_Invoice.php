<?php
/**
 * Plan_Invoice generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Plan_Invoice implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $contractId = null;
    protected ?User $user = null;
    protected ?int $transactionId = null;
    protected ?int $prevId = null;
    protected ?string $displayId = null;
    protected ?int $status = null;
    protected ?float $amount = null;
    protected ?int $points = null;
    protected ?\PSX\DateTime\Date $fromDate = null;
    protected ?\PSX\DateTime\Date $toDate = null;
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
    public function setContractId(?int $contractId) : void
    {
        $this->contractId = $contractId;
    }
    public function getContractId() : ?int
    {
        return $this->contractId;
    }
    public function setUser(?User $user) : void
    {
        $this->user = $user;
    }
    public function getUser() : ?User
    {
        return $this->user;
    }
    public function setTransactionId(?int $transactionId) : void
    {
        $this->transactionId = $transactionId;
    }
    public function getTransactionId() : ?int
    {
        return $this->transactionId;
    }
    public function setPrevId(?int $prevId) : void
    {
        $this->prevId = $prevId;
    }
    public function getPrevId() : ?int
    {
        return $this->prevId;
    }
    public function setDisplayId(?string $displayId) : void
    {
        $this->displayId = $displayId;
    }
    public function getDisplayId() : ?string
    {
        return $this->displayId;
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
    public function setFromDate(?\PSX\DateTime\Date $fromDate) : void
    {
        $this->fromDate = $fromDate;
    }
    public function getFromDate() : ?\PSX\DateTime\Date
    {
        return $this->fromDate;
    }
    public function setToDate(?\PSX\DateTime\Date $toDate) : void
    {
        $this->toDate = $toDate;
    }
    public function getToDate() : ?\PSX\DateTime\Date
    {
        return $this->toDate;
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
        return (object) array_filter(array('id' => $this->id, 'contractId' => $this->contractId, 'user' => $this->user, 'transactionId' => $this->transactionId, 'prevId' => $this->prevId, 'displayId' => $this->displayId, 'status' => $this->status, 'amount' => $this->amount, 'points' => $this->points, 'fromDate' => $this->fromDate, 'toDate' => $this->toDate, 'payDate' => $this->payDate, 'insertDate' => $this->insertDate), static function ($value) : bool {
            return $value !== null;
        });
    }
}
