<?php
/**
 * Plan_Contract generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;


class Plan_Contract implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?int $status = null;
    protected ?Plan $plan = null;
    protected ?float $amount = null;
    protected ?int $points = null;
    protected ?int $period = null;
    /**
     * @var array<Plan_Invoice>|null
     */
    protected ?array $invoices = null;
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
    public function setPlan(?Plan $plan) : void
    {
        $this->plan = $plan;
    }
    public function getPlan() : ?Plan
    {
        return $this->plan;
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
    public function setPeriod(?int $period) : void
    {
        $this->period = $period;
    }
    public function getPeriod() : ?int
    {
        return $this->period;
    }
    /**
     * @param array<Plan_Invoice>|null $invoices
     */
    public function setInvoices(?array $invoices) : void
    {
        $this->invoices = $invoices;
    }
    public function getInvoices() : ?array
    {
        return $this->invoices;
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
        return (object) array_filter(array('id' => $this->id, 'status' => $this->status, 'plan' => $this->plan, 'amount' => $this->amount, 'points' => $this->points, 'period' => $this->period, 'invoices' => $this->invoices, 'insertDate' => $this->insertDate), static function ($value) : bool {
            return $value !== null;
        });
    }
}
