<?php
/**
 * CommonMessageException automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use Sdkgen\Client\Exception\KnownStatusCodeException;

class CommonMessageException extends KnownStatusCodeException
{
    private CommonMessage $payload;

    public function __construct(CommonMessage $payload)
    {
        parent::__construct('The server returned an error');

        $this->payload = $payload;
    }

    /**
     * @return CommonMessage
     */
    public function getPayload(): CommonMessage
    {
        return $this->payload;
    }
}
