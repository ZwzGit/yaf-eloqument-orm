<?php
use Framework\Api\BaseAbstract;

class IndexController extends BaseAbstract
{
	public function indexAction()
	{

        echo "非法访问";
        exit;

	}


    public function loadMessageAction()
    {

        $message = [
            'qq' => "123456789",
            'latest' => "博主很自闭，并不想留下什么动态",
            'span'  => "博主纠结综合征，还没想好留下什么标签"
        ];

        $this->_sentResponse($message);

    }

}
