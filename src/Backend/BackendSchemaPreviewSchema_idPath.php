<?php 
/**
 * BackendSchemaPreviewSchema_idPath generated on 2021-01-27
 * @see https://github.com/apioo
 */

namespace Fusio\Sdk\Backend;


class BackendSchemaPreviewSchema_idPath implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $schema_id;
    /**
     * @param string|null $schema_id
     */
    public function setSchema_id(?string $schema_id) : void
    {
        $this->schema_id = $schema_id;
    }
    /**
     * @return string|null
     */
    public function getSchema_id() : ?string
    {
        return $this->schema_id;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('schema_id' => $this->schema_id), static function ($value) : bool {
            return $value !== null;
        });
    }
}