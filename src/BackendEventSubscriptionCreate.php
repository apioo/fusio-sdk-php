<?php
/**
 * BackendEventSubscriptionCreate automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use PSX\Schema\Attribute\Required;

#[Required(array('eventId', 'userId', 'endpoint'))]
class BackendEventSubscriptionCreate extends BackendEventSubscription implements \JsonSerializable, \PSX\Record\RecordableInterface
{
}
