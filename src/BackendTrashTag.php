<?php
/**
 * BackendTrashTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class BackendTrashTag extends TagAbstract
{
    /**
     * @param string $type
     * @param BackendTrashRestore $payload
     * @return CommonMessage
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function restore(string $type, BackendTrashRestore $payload): CommonMessage
    {
        $url = $this->parser->url('/backend/trash/:type', [
            'type' => $type,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, CommonMessage::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param string $type
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @return BackendTrashDataCollection
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getAllByType(string $type, ?int $startIndex = null, ?int $count = null, ?string $search = null): BackendTrashDataCollection
    {
        $url = $this->parser->url('/backend/trash/:type', [
            'type' => $type,
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendTrashDataCollection::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @return BackendTrashTypes
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getTypes(): BackendTrashTypes
    {
        $url = $this->parser->url('/backend/trash', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendTrashTypes::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 500:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }


}