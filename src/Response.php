<?php

namespace GeniePress;

use GeniePress\Traits\HasData;

class Response
{

    use HasData;

    /**
     * The default http response code
     *
     * @var int
     */
    protected $responseCode;



    /**
     * Response constructor.
     *
     * @param  int  $responseCode
     */
    public function __construct(int $responseCode = 200)
    {
        $this->responseCode = $responseCode;
    }



    /**
     * Send an error response
     *
     * @param  mixed  $data
     */
    public static function error($data = []): void
    {
        $response = new static(500);
        $response->withData($data)
            ->send();
    }



    /**
     * Send a failure response
     *
     * @param  mixed  $data
     */
    public static function failure($data = []): void
    {
        $response = new static(400);
        $response->withData($data)
            ->send();
    }



    /**
     * Send a not found response
     *
     * @param  mixed  $data
     */
    public static function notFound($data): void
    {
        $response = new static(404);
        $response->withData($data)
            ->send();
    }



    /**
     * @param  mixed  $data
     * Send a Success response
     */
    public static function success($data = []): void
    {
        $response = new static(200);
        $response->withData($data)
            ->send();
    }



    /**
     * Send the response back to the browser.
     */
    public function send(): void
    {
        http_response_code($this->responseCode);
        header('Content-Type: application/json');
        echo json_encode($this->data);
        exit;
    }



    /**
     * Specify the data to return
     *
     * @param  mixed  $data
     *
     * @return $this
     */
    public function withData($data): Response
    {
        $this->data = $data;

        return $this;
    }

}
