<?php
/**
 * Collection generated on 2022-04-30
 * @see https://sdkgen.app
 */

/**
 * @template T
 */
class Collection implements \JsonSerializable
{
    protected ?int $totalResults = null;
    protected ?int $startIndex = null;
    /**
     * @var array<T>|null
     */
    protected ?array $entry = null;
    public function setTotalResults(?int $totalResults) : void
    {
        $this->totalResults = $totalResults;
    }
    public function getTotalResults() : ?int
    {
        return $this->totalResults;
    }
    public function setStartIndex(?int $startIndex) : void
    {
        $this->startIndex = $startIndex;
    }
    public function getStartIndex() : ?int
    {
        return $this->startIndex;
    }
    /**
     * @param array<T>|null $entry
     */
    public function setEntry(?array $entry) : void
    {
        $this->entry = $entry;
    }
    public function getEntry() : ?array
    {
        return $this->entry;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('totalResults' => $this->totalResults, 'startIndex' => $this->startIndex, 'entry' => $this->entry), static function ($value) : bool {
            return $value !== null;
        });
    }
}
