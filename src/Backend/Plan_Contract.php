<?php
/**
 * Plan_Contract generated on 2022-04-30
 * @see https://sdkgen.app
 */

class Plan_Contract implements \JsonSerializable
{
    protected ?int $id = null;
    protected ?User $user = null;
    protected ?Plan $plan = null;
    protected ?int $status = null;
    protected ?float $amount = null;
    protected ?int $points = null;
    protected ?int $period = null;
    protected ?\DateTime $insertDate = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setUser(?User $user) : void
    {
        $this->user = $user;
    }
    public function getUser() : ?User
    {
        return $this->user;
    }
    public function setPlan(?Plan $plan) : void
    {
        $this->plan = $plan;
    }
    public function getPlan() : ?Plan
    {
        return $this->plan;
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
    public function setPeriod(?int $period) : void
    {
        $this->period = $period;
    }
    public function getPeriod() : ?int
    {
        return $this->period;
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
        return (object) array_filter(array('id' => $this->id, 'user' => $this->user, 'plan' => $this->plan, 'status' => $this->status, 'amount' => $this->amount, 'points' => $this->points, 'period' => $this->period, 'insertDate' => $this->insertDate), static function ($value) : bool {
            return $value !== null;
        });
    }
}
