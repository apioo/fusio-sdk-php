<?php
/**
 * Statistic_Chart generated on 2022-04-30
 * @see https://sdkgen.app
 */

class Statistic_Chart implements \JsonSerializable
{
    /**
     * @var array<string>|null
     */
    protected ?array $labels = null;
    /**
     * @var array<Statistic_Chart_Data>|null
     */
    protected ?array $data = null;
    /**
     * @var array<string>|null
     */
    protected ?array $series = null;
    /**
     * @param array<string>|null $labels
     */
    public function setLabels(?array $labels) : void
    {
        $this->labels = $labels;
    }
    public function getLabels() : ?array
    {
        return $this->labels;
    }
    /**
     * @param array<Statistic_Chart_Data>|null $data
     */
    public function setData(?array $data) : void
    {
        $this->data = $data;
    }
    public function getData() : ?array
    {
        return $this->data;
    }
    /**
     * @param array<string>|null $series
     */
    public function setSeries(?array $series) : void
    {
        $this->series = $series;
    }
    public function getSeries() : ?array
    {
        return $this->series;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('labels' => $this->labels, 'data' => $this->data, 'series' => $this->series), static function ($value) : bool {
            return $value !== null;
        });
    }
}
