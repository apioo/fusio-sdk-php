<?php
/**
 * BackendBackupTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\Payload;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class BackendBackupTag extends TagAbstract
{
    /**
     * @return BackendBackupExport
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function export(): BackendBackupExport
    {
        $url = $this->parser->url('/backend/backup/export', [
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(BackendBackupExport::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * @param BackendBackupImport $payload
     * @return BackendBackupImportResult
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function import(BackendBackupImport $payload): BackendBackupImportResult
    {
        $url = $this->parser->url('/backend/backup/import', [
        ]);

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload,
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(BackendBackupImportResult::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(CommonMessage::class));

                throw new CommonMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }



}
