<?php
/**
 * BackendRateRate_idPath generated on 2022-04-30
 * @see https://sdkgen.app
 */

class BackendRateRate_idPath implements \JsonSerializable
{
    protected ?string $rate_id = null;
    public function setRate_id(?string $rate_id) : void
    {
        $this->rate_id = $rate_id;
    }
    public function getRate_id() : ?string
    {
        return $this->rate_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('rate_id' => $this->rate_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
