<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Customsms {

    private $_CI;
    var $api_key = "YOUR_SMS_BD_API_KEY";
    var $sender_id = "";
    var $base_url = "https://api.sms.net.bd/sendsms";

    function __construct($array = array()) {
        $this->_CI = & get_instance();

        if (isset($array['api_key']) && !empty($array['api_key'])) {
            $this->api_key = $array['api_key'];
        }

        if (isset($array['sender_id']) && !empty($array['sender_id'])) {
            $this->sender_id = $array['sender_id'];
        }
    }

    function sendSMS($to, $message) {
        $params = array(
            'api_key' => $this->api_key,
            'msg'     => $message,
            'to'      => $to,
        );

        if (!empty($this->sender_id)) {
            $params['sender_id'] = $this->sender_id;
        }

        $ch = curl_init($this->base_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curl_error = curl_error($ch);
        curl_close($ch);

        if ($response === false) {
            return json_encode(array(
                'error'     => 1,
                'msg'       => 'Curl error: ' . $curl_error,
                'http_code' => $http_code,
            ));
        }

        return $response;
    }
}
?>
