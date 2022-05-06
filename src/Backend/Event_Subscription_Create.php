<?php
/**
 * Event_Subscription_Create generated on 2022-05-06
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use PSX\Schema\Attribute\Required;

#[Required(array('eventId', 'userId', 'endpoint'))]
class Event_Subscription_Create extends Event_Subscription implements \JsonSerializable
{
}
