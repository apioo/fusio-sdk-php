<?php 
/**
 * BackendCronjobCronjob_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendCronjobCronjob_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $cronjob_id;
    /**
     * @param string|null $cronjob_id
     */
    public function setCronjob_id(?string $cronjob_id) : void
    {
        $this->cronjob_id = $cronjob_id;
    }
    /**
     * @return string|null
     */
    public function getCronjob_id() : ?string
    {
        return $this->cronjob_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('cronjob_id' => $this->cronjob_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}