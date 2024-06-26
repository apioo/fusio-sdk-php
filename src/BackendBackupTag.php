<?php
/**
 * BackendBackupTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Sdk;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class BackendBackupTag extends TagAbstract
{
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
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendBackupImportResult::class);
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
     * @return BackendBackupExport
     * @throws CommonMessageException
     * @throws ClientException
     */
    public function export(): BackendBackupExport
    {
        $url = $this->parser->url('/backend/backup/export', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, BackendBackupExport::class);
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
