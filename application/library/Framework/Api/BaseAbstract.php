<?php
namespace Framework\Api;
use Yaf\Controller_Abstract;

class BaseAbstract extends Controller_Abstract
{

    public function init()
    {

    }

    public function _sentResponse(array $data,string $msg = 'Success', int $code = 200)
    {

        $responseData = [
            'code' => $code,
            'data' => $data,
            'msg' => $msg
        ];

        $this->_response->setHeader('Access-Control-Allow-Origin', '*');
        $this->_response->setHeader('Content-type', 'application/x-javascript; charset=utf-8');
        $this->_response->setBody(json_encode($responseData));
        $this->_response->response();
        exit;
    }

}