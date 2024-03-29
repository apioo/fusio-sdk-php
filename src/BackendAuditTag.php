<?php
/**
 * BackendAuditTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class BackendAuditTag extends TagAbstract
{
    /**
     * @param string $auditId
     * @return BackendAudit
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function get(string $auditId): BackendAudit
    {
        $url = $this->parser->url('/backend/audit/$audit_id<[0-9]+>', [
            'audit_id' => $auditId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendAudit::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 401:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 404:
                    throw new CommonMessageException($this->parser->parse($data, CommonMessage::class));
                case 410:
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
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $search
     * @param string|null $from
     * @param string|null $to
     * @param int|null $appId
     * @param int|null $userId
     * @param string|null $event
     * @param string|null $ip
     * @param string|null $message
     * @return BackendAuditCollection
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function getAll(?int $startIndex = null, ?int $count = null, ?string $search = null, ?string $from = null, ?string $to = null, ?int $appId = null, ?int $userId = null, ?string $event = null, ?string $ip = null, ?string $message = null): BackendAuditCollection
    {
        $url = $this->parser->url('/backend/audit', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'search' => $search,
                'from' => $from,
                'to' => $to,
                'appId' => $appId,
                'userId' => $userId,
                'event' => $event,
                'ip' => $ip,
                'message' => $message,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendAuditCollection::class);
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
