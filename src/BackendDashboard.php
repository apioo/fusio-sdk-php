<?php
/**
 * BackendDashboard automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;


class BackendDashboard implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?BackendStatisticChart $errorsPerOperation = null;
    protected ?BackendStatisticChart $incomingRequests = null;
    protected ?BackendStatisticChart $incomingTransactions = null;
    protected ?BackendStatisticChart $mostUsedOperations = null;
    protected ?BackendStatisticChart $timePerOperation = null;
    protected ?BackendDashboardApps $latestApps = null;
    protected ?BackendDashboardRequests $latestRequests = null;
    protected ?BackendDashboardUsers $latestUsers = null;
    protected ?BackendDashboardTransactions $latestTransactions = null;
    public function setErrorsPerOperation(?BackendStatisticChart $errorsPerOperation) : void
    {
        $this->errorsPerOperation = $errorsPerOperation;
    }
    public function getErrorsPerOperation() : ?BackendStatisticChart
    {
        return $this->errorsPerOperation;
    }
    public function setIncomingRequests(?BackendStatisticChart $incomingRequests) : void
    {
        $this->incomingRequests = $incomingRequests;
    }
    public function getIncomingRequests() : ?BackendStatisticChart
    {
        return $this->incomingRequests;
    }
    public function setIncomingTransactions(?BackendStatisticChart $incomingTransactions) : void
    {
        $this->incomingTransactions = $incomingTransactions;
    }
    public function getIncomingTransactions() : ?BackendStatisticChart
    {
        return $this->incomingTransactions;
    }
    public function setMostUsedOperations(?BackendStatisticChart $mostUsedOperations) : void
    {
        $this->mostUsedOperations = $mostUsedOperations;
    }
    public function getMostUsedOperations() : ?BackendStatisticChart
    {
        return $this->mostUsedOperations;
    }
    public function setTimePerOperation(?BackendStatisticChart $timePerOperation) : void
    {
        $this->timePerOperation = $timePerOperation;
    }
    public function getTimePerOperation() : ?BackendStatisticChart
    {
        return $this->timePerOperation;
    }
    public function setLatestApps(?BackendDashboardApps $latestApps) : void
    {
        $this->latestApps = $latestApps;
    }
    public function getLatestApps() : ?BackendDashboardApps
    {
        return $this->latestApps;
    }
    public function setLatestRequests(?BackendDashboardRequests $latestRequests) : void
    {
        $this->latestRequests = $latestRequests;
    }
    public function getLatestRequests() : ?BackendDashboardRequests
    {
        return $this->latestRequests;
    }
    public function setLatestUsers(?BackendDashboardUsers $latestUsers) : void
    {
        $this->latestUsers = $latestUsers;
    }
    public function getLatestUsers() : ?BackendDashboardUsers
    {
        return $this->latestUsers;
    }
    public function setLatestTransactions(?BackendDashboardTransactions $latestTransactions) : void
    {
        $this->latestTransactions = $latestTransactions;
    }
    public function getLatestTransactions() : ?BackendDashboardTransactions
    {
        return $this->latestTransactions;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('errorsPerOperation', $this->errorsPerOperation);
        $record->put('incomingRequests', $this->incomingRequests);
        $record->put('incomingTransactions', $this->incomingTransactions);
        $record->put('mostUsedOperations', $this->mostUsedOperations);
        $record->put('timePerOperation', $this->timePerOperation);
        $record->put('latestApps', $this->latestApps);
        $record->put('latestRequests', $this->latestRequests);
        $record->put('latestUsers', $this->latestUsers);
        $record->put('latestTransactions', $this->latestTransactions);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
