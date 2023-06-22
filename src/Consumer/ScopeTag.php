<?php
/**
 * ScopeTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Consumer;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class ScopeTag extends TagAbstract
{
    /**
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @return ScopeCollection
     * @throws MessageException
     * @throws ClientException
     */
    public function getAll(?int $startIndex = null, ?int $count = null, ?string $search = null): ScopeCollection
    {
        $url = $this->parser->url('/consumer/scope', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, ScopeCollection::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }


}
