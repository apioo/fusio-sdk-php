<?php
/**
 * Dashboard_User generated on 2022-04-30
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Dashboard_User implements \JsonSerializable
{
    protected ?string $status = null;
    protected ?string $name = null;
    protected ?\DateTime $date = null;
    public function setStatus(?string $status) : void
    {
        $this->status = $status;
    }
    public function getStatus() : ?string
    {
        return $this->status;
    }
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
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
        return (object) array_filter(array('status' => $this->status, 'name' => $this->name, 'date' => $this->date), static function ($value) : bool {
            return $value !== null;
        });
    }
}
