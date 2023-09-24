<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;

class ApiBaseController extends FrontendController
{
    protected $code;
    protected $data;
    protected $message;
    protected $status;
    protected $httpCode = 200;

    /**
     * @return int
     */
    public function getHttpCode()
    {
        return $this->httpCode;
    }

    /**
     * @param int $httpCode
     */
    public function setHttpCode($httpCode)
    {
        $this->httpCode = $httpCode;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    /**
     * @return mixed
     */
    public function getReturn()
    {
        $return['code']       = $this->code;
        $return['message']    = $this->message;
        $return['data']       = $this->data;
        $return['status']     = $this->status;
        return $this->json($return, $this->httpCode);
    }
}
