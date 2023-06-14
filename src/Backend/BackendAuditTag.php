<?php
/**
 * BackendAuditTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk\Backend;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class BackendAuditTag extends TagAbstract
{
    /**
     * @param string $auditId
     * @return Audit
     * @throws ClientException
     */
    public function get(string $auditId): Audit
    {
        $url = $this->parser->url('/backend/audit/$audit_id<[0-9]+>', [
            'audit_id' => $auditId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, Audit::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @return AuditCollection
     * @throws ClientException
     */
    public function getAll(): AuditCollection
    {
        $url = $this->parser->url('/backend/audit', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, AuditCollection::class);
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }


}
