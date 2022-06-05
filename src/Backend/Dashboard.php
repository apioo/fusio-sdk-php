<?php
/**
 * Dashboard generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;


class Dashboard implements \JsonSerializable
{
    protected ?Statistic_Chart $errorsPerRoute = null;
    protected ?Statistic_Chart $incomingRequests = null;
    protected ?Statistic_Chart $incomingTransactions = null;
    protected ?Statistic_Chart $mostUsedRoutes = null;
    protected ?Statistic_Chart $timePerRoute = null;
    protected ?Dashboard_Apps $latestApps = null;
    protected ?Dashboard_Requests $latestRequests = null;
    protected ?Dashboard_Users $latestUsers = null;
    protected ?Dashboard_Transactions $latestTransactions = null;
    public function setErrorsPerRoute(?Statistic_Chart $errorsPerRoute) : void
    {
        $this->errorsPerRoute = $errorsPerRoute;
    }
    public function getErrorsPerRoute() : ?Statistic_Chart
    {
        return $this->errorsPerRoute;
    }
    public function setIncomingRequests(?Statistic_Chart $incomingRequests) : void
    {
        $this->incomingRequests = $incomingRequests;
    }
    public function getIncomingRequests() : ?Statistic_Chart
    {
        return $this->incomingRequests;
    }
    public function setIncomingTransactions(?Statistic_Chart $incomingTransactions) : void
    {
        $this->incomingTransactions = $incomingTransactions;
    }
    public function getIncomingTransactions() : ?Statistic_Chart
    {
        return $this->incomingTransactions;
    }
    public function setMostUsedRoutes(?Statistic_Chart $mostUsedRoutes) : void
    {
        $this->mostUsedRoutes = $mostUsedRoutes;
    }
    public function getMostUsedRoutes() : ?Statistic_Chart
    {
        return $this->mostUsedRoutes;
    }
    public function setTimePerRoute(?Statistic_Chart $timePerRoute) : void
    {
        $this->timePerRoute = $timePerRoute;
    }
    public function getTimePerRoute() : ?Statistic_Chart
    {
        return $this->timePerRoute;
    }
    public function setLatestApps(?Dashboard_Apps $latestApps) : void
    {
        $this->latestApps = $latestApps;
    }
    public function getLatestApps() : ?Dashboard_Apps
    {
        return $this->latestApps;
    }
    public function setLatestRequests(?Dashboard_Requests $latestRequests) : void
    {
        $this->latestRequests = $latestRequests;
    }
    public function getLatestRequests() : ?Dashboard_Requests
    {
        return $this->latestRequests;
    }
    public function setLatestUsers(?Dashboard_Users $latestUsers) : void
    {
        $this->latestUsers = $latestUsers;
    }
    public function getLatestUsers() : ?Dashboard_Users
    {
        return $this->latestUsers;
    }
    public function setLatestTransactions(?Dashboard_Transactions $latestTransactions) : void
    {
        $this->latestTransactions = $latestTransactions;
    }
    public function getLatestTransactions() : ?Dashboard_Transactions
    {
        return $this->latestTransactions;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_filter(array('errorsPerRoute' => $this->errorsPerRoute, 'incomingRequests' => $this->incomingRequests, 'incomingTransactions' => $this->incomingTransactions, 'mostUsedRoutes' => $this->mostUsedRoutes, 'timePerRoute' => $this->timePerRoute, 'latestApps' => $this->latestApps, 'latestRequests' => $this->latestRequests, 'latestUsers' => $this->latestUsers, 'latestTransactions' => $this->latestTransactions), static function ($value) : bool {
            return $value !== null;
        });
    }
}
