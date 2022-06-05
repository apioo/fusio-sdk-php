<?php
/**
 * BackendEventByEventIdResource generated on 2022-06-05
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Client;
use PSX\Schema\SchemaManager;
use Sdkgen\Client\ResourceAbstract;

class BackendEventByEventIdResource extends ResourceAbstract
{
    private string $url;

    private string $event_id;

    public function __construct(string $event_id, string $baseUrl, ?Client $httpClient = null, ?SchemaManager $schemaManager = null)
    {
        parent::__construct($baseUrl, $httpClient, $schemaManager);

        $this->event_id = $event_id;
        $this->url = $this->baseUrl . '/backend/event/' . $event_id . '';
    }

    /**
     * @return Event
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionEventGet(): Event
    {
        $options = [
        ];

        $response = $this->httpClient->request('GET', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Event::class);
    }

    /**
     * @param Event_Update $data
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionEventUpdate(Event_Update $data): Message
    {
        $options = [
            'json' => $data
        ];

        $response = $this->httpClient->request('PUT', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

    /**
     * @return Message
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function backendActionEventDelete(): Message
    {
        $options = [
        ];

        $response = $this->httpClient->request('DELETE', $this->url, $options);
        $data     = (string) $response->getBody();

        return $this->parse($data, Message::class);
    }

}
