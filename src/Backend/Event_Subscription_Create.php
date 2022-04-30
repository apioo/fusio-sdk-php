<?php
/**
 * Event_Subscription_Create generated on 2022-04-30
 * @see https://sdkgen.app
 */

use PSX\Schema\Attribute\Required;

#[Required(array('eventId', 'userId', 'endpoint'))]
class Event_Subscription_Create extends Event_Subscription implements \JsonSerializable
{
}
