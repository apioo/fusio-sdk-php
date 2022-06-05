<?php
/**
 * Statistic_Count generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Statistic_Count implements \JsonSerializable
{
    protected ?int $count = null;
    protected ?\DateTime $from = null;
    protected ?\DateTime $to = null;
    public function setCount(?int $count) : void
    {
        $this->count = $count;
    }
    public function getCount() : ?int
    {
        return $this->count;
    }
    public function setFrom(?\DateTime $from) : void
    {
        $this->from = $from;
    }
    public function getFrom() : ?\DateTime
    {
        return $this->from;
    }
    public function setTo(?\DateTime $to) : void
    {
        $this->to = $to;
    }
    public function getTo() : ?\DateTime
    {
        return $this->to;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('count' => $this->count, 'from' => $this->from, 'to' => $this->to), static function ($value) : bool {
            return $value !== null;
        });
    }
}
