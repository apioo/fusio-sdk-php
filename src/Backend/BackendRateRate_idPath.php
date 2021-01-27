<?php 
/**
 * BackendRateRate_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendRateRate_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $rate_id;
    /**
     * @param string|null $rate_id
     */
    public function setRate_id(?string $rate_id) : void
    {
        $this->rate_id = $rate_id;
    }
    /**
     * @return string|null
     */
    public function getRate_id() : ?string
    {
        return $this->rate_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('rate_id' => $this->rate_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}