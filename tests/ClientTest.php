<?php

namespace Fusio\Sdk\Tests;

use Fusio\Sdk;
use Fusio\Sdk\Client;
use PHPUnit\Framework\TestCase;
use Sdkgen\Client\Credentials\OAuth2;

/**
 * ClientTest
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    https://www.fusio-project.org
 */
class ClientTest extends TestCase
{
    public function testClient()
    {
        $client = new Client('https://demo.fusio-project.org/', new OAuth2('test', 'test1234', 'https://demo.fusio-project.org/authorization/token', '', null, ['foo', 'bar']));

        $this->assertInstanceOf(Sdk\BackendTag::class, $client->backend());
        $this->assertInstanceOf(Sdk\ConsumerTag::class, $client->consumer());
    }
}
