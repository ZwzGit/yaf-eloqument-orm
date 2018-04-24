<?php
namespace Extension;
/**
 * Class Ext_Function
 */
class extFunction
{

    /**
     * @param bool $status
     * @param null $params
     * @param bool $data
     */
    public static function returnJson($status = false, $params = null, $data = false)
    {
        if (is_string($params) || is_numeric($params)) {
            $params = array('message' => $params);
        }

        $json = array('success' => (boolean) $status);

        if (is_array($params)) {

            // 加上最后的参数是为了防止success被重置
            $json = array_merge($json, $params, $json);
        }

        if (false !== $data) {
            $json['data'] = $data;
        }

        header('Content-Type: application/x-javascript; charset=utf-8');

        echo json_encode($json);
        exit;

    }

}