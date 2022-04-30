<?php
/**
 * Rate generated on 2022-04-30
 * @see https://sdkgen.app
 */

use PSX\Schema\Attribute\Minimum;
use PSX\Schema\Attribute\Pattern;

class Rate implements \JsonSerializable
{
    protected ?int $id = null;
    #[Minimum(0)]
    protected ?int $priority = null;
    #[Pattern('^[a-zA-Z0-9\\-\\_]{3,64}$')]
    protected ?string $name = null;
    #[Minimum(0)]
    protected ?int $rateLimit = null;
    protected ?\DateInterval $timespan = null;
    /**
     * @var array<Rate_Allocation>|null
     */
    protected ?array $allocation = null;
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?int
    {
        return $this->id;
    }
    public function setPriority(?int $priority) : void
    {
        $this->priority = $priority;
    }
    public function getPriority() : ?int
    {
        return $this->priority;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setRateLimit(?int $rateLimit) : void
    {
        $this->rateLimit = $rateLimit;
    }
    public function getRateLimit() : ?int
    {
        return $this->rateLimit;
    }
    public function setTimespan(?\DateInterval $timespan) : void
    {
        $this->timespan = $timespan;
    }
    public function getTimespan() : ?\DateInterval
    {
        return $this->timespan;
    }
    /**
     * @param array<Rate_Allocation>|null $allocation
     */
    public function setAllocation(?array $allocation) : void
    {
        $this->allocation = $allocation;
    }
    public function getAllocation() : ?array
    {
        return $this->allocation;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('id' => $this->id, 'priority' => $this->priority, 'name' => $this->name, 'rateLimit' => $this->rateLimit, 'timespan' => $this->timespan, 'allocation' => $this->allocation), static function ($value) : bool {
            return $value !== null;
        });
    }
}
