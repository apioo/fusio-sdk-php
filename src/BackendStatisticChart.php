<?php
/**
 * BackendStatisticChart automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;


class BackendStatisticChart implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<string>|null
     */
    protected ?array $labels = null;
    /**
     * @var array<BackendStatisticChartSeries>|null
     */
    protected ?array $series = null;
    /**
     * @param array<string>|null $labels
     */
    public function setLabels(?array $labels): void
    {
        $this->labels = $labels;
    }
    /**
     * @return array<string>|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }
    /**
     * @param array<BackendStatisticChartSeries>|null $series
     */
    public function setSeries(?array $series): void
    {
        $this->series = $series;
    }
    /**
     * @return array<BackendStatisticChartSeries>|null
     */
    public function getSeries(): ?array
    {
        return $this->series;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('labels', $this->labels);
        $record->put('series', $this->series);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
