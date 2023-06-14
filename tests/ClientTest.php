<?php

namespace Fusio\Sdk\Tests;

use Fusio\Sdk;
use Fusio\Sdk\Client;
use PHPUnit\Framework\TestCase;

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
        $client = new Client('https://my-fusio.app', 'test', 'test1234', ['foo', 'bar']);

        $this->assertInstanceOf(Sdk\Backend\Client::class, $client->backend());
        $this->assertInstanceOf(Sdk\Consumer\Client::class, $client->consumer());
    }
}
