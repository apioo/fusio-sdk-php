<?php
/**
 * ConsumerUserAccount automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;


class ConsumerUserAccount implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?int $id = null;
    protected ?int $planId = null;
    protected ?int $status = null;
    protected ?string $name = null;
    protected ?string $email = null;
    protected ?int $points = null;
    /**
     * @var array<string>|null
     */
    protected ?array $scopes = null;
    /**
     * @var array<ConsumerUserPlan>|null
     */
    protected ?array $plans = null;
    protected ?CommonMetadata $metadata = null;
    protected ?\PSX\DateTime\LocalDateTime $date = null;
    public function setId(?int $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setPlanId(?int $planId): void
    {
        $this->planId = $planId;
    }
    public function getPlanId(): ?int
    {
        return $this->planId;
    }
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }
    public function getStatus(): ?int
    {
        return $this->status;
    }
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function setPoints(?int $points): void
    {
        $this->points = $points;
    }
    public function getPoints(): ?int
    {
        return $this->points;
    }
    /**
     * @param array<string>|null $scopes
     */
    public function setScopes(?array $scopes): void
    {
        $this->scopes = $scopes;
    }
    /**
     * @return array<string>|null
     */
    public function getScopes(): ?array
    {
        return $this->scopes;
    }
    /**
     * @param array<ConsumerUserPlan>|null $plans
     */
    public function setPlans(?array $plans): void
    {
        $this->plans = $plans;
    }
    /**
     * @return array<ConsumerUserPlan>|null
     */
    public function getPlans(): ?array
    {
        return $this->plans;
    }
    public function setMetadata(?CommonMetadata $metadata): void
    {
        $this->metadata = $metadata;
    }
    public function getMetadata(): ?CommonMetadata
    {
        return $this->metadata;
    }
    public function setDate(?\PSX\DateTime\LocalDateTime $date): void
    {
        $this->date = $date;
    }
    public function getDate(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->date;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('planId', $this->planId);
        $record->put('status', $this->status);
        $record->put('name', $this->name);
        $record->put('email', $this->email);
        $record->put('points', $this->points);
        $record->put('scopes', $this->scopes);
        $record->put('plans', $this->plans);
        $record->put('metadata', $this->metadata);
        $record->put('date', $this->date);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
