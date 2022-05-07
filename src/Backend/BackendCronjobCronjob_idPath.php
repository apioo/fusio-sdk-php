<?php
/**
 * BackendCronjobCronjob_idPath generated on 2022-05-07
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class BackendCronjobCronjob_idPath implements \JsonSerializable
{
    protected ?string $cronjob_id = null;
    public function setCronjob_id(?string $cronjob_id) : void
    {
        $this->cronjob_id = $cronjob_id;
    }
    public function getCronjob_id() : ?string
    {
        return $this->cronjob_id;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('cronjob_id' => $this->cronjob_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}
