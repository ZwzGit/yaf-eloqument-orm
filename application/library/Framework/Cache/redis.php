<?php
namespace Cache;

use Redis;

class Redis_Abstract
{
    const DEFAULE_HOST = '127.0.0.1';

    const DEFAULT_PORT = '6379';

    protected $_options = [
        'host' => self::DEFAULE_HOST,
        'port' => self::DEFAULT_PORT,
        'auth' => ''
    ];

    protected $redis;

    protected $_connect;

    public function __construct(array $config)
    {
        $this->_options = array_merge($this->_options, $config);

        $this->redis = $this->_connect();
    }


    private function _connect()
    {
        /* @var $connect redis */
        $connect = new redis();

        $connect->connect($this->_options['host'],$this->_options['port']);

        if(!empty($this->_options['auth'])){
            $connect->auth($this->_options['auth']);
        }

        return $this->_connect;

    }
}