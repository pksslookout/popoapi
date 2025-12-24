<?php

namespace Modules\Core\Helpers;

use ThrowException;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

class HttpClient
{
    public $baseUrl;
    public $client;

    public function __construct($url = NULL)
    {
        $this->baseUrl = $url;
    }

    public function getClient()
    {
        if (!$this->client)
            $this->client = new \GuzzleHttp\Client();

        return $this->client;
    }

    public function post($path, $body, $headers = [])
    {
        $url = $this->baseUrl . $path;

        $client = $this->getClient();

        $headers['Content-Type'] = @$headers['Content-Type'] ?: 'application/json';

        $res = $client->request('POST', $url, [
            'body' => json_encode($body),
            'headers' => $headers
        ]);

        $data = $res->getBody()->getContents();
 
        return $data;
    }
 
    public function get($path, $header = [])
    {
        $url = $this->baseUrl . $path;

        $client = $this->getClient();

        try {
            \Log::error($url);
            $res = $client->request('GET', $url, ['headers' => $header]);
        }
        catch (ClientException $e) {
            \Log::error('http请求发送失败: GET ' . $url);
            \Log::error($e->getMessage());
            return null;
        }
        catch (ServerException $e) {
            \Log::error('http请求发送失败: GET ' . $url);
            \Log::error($e->getMessage());
            return null;
        }
 
        $data = $res->getBody();
        
        return $data;
    }
}
