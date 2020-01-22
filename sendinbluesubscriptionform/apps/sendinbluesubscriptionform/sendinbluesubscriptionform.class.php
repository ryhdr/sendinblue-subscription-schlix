<?php
namespace App;
/**
 * sendinblue subscription form - Main Class
 * 
 * 
 * 
 * @copyright 2019 Roy Hadrianoro
 *
 * @license MIT
 *
 * @package sendinbluesubscriptionform
 * @version 1.0
 * @author  Roy Hadrianoro <roy.hadrianoro@schlix.com>
 * @link    https://www.schlix.com
 */

class sendinbluesubscriptionform extends \SCHLIX\cmsApplication_Basic {


    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct("sendinblue subscription form");

        if (isset($this->config['str_api_key'])) {
            $this->api_key = $this->config['str_api_key'];
        }
    }
        

    /**
     * View Main Page
     */
    public function viewMainPage() {
        return false;
    }

    public function isConfigured() {
        return !empty($this->api_key);
    }

    private function createContact($email=NULL, $list_ids=NULL) {
        if (!$email)
            $email = ___h(fpost_string_noquotes_notags('sendinblue_email'));
        if (!$list_ids)
            $list_ids = ___h(fpost_string('sendinblue_list_ids'));

        if (!$email)
            return ["success" => false, "message" => 'Please provide email address.'];

        $curl = curl_init();

        if(empty($list_ids)) {
            $list_ids = $this->config['str_list_ids'];
        }
        $arr_list_ids = array_map(function($id){
            return (int) trim($id);
        }, explode(',', $list_ids));
        $list_ids = implode(',', $arr_list_ids);

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.sendinblue.com/v3/contacts",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"email\":\"".$email."\",\"listIds\":[".$list_ids."],\"updateEnabled\":true}",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "api-key: " . $this->api_key,
                "content-type: application/json"
            ),
        ));


        $response = curl_exec($curl);
        $err = curl_error($curl);
        $success = false;

        curl_close($curl);

        if ($err) {
            // echo "cURL Error #:" . $err;
            $message = "Unexpected error, please try again after a few minutes.";
        } else {
            $result = json_decode($response);
            if($result->id) {
                $message = "Your email <strong>" . ___h($email) . "</strong> subscribed successfully.";
                $success = true;
            } elseif (isset($result->message) && $result->code != 'duplicate_parameter') {
                $message = ___h($result->message);
            } else {
                $message = "Your email <strong>" . ___h($email) . "</strong> has already been subscribed.";
                $success = true;
            }
            return ["success" => $success, "message" => $message];
        }
    }

    public function ajxp_create ($command) {
        $result = $this->createContact();
        $reply = [
            'messages' => [$result['message']],
            'hide_form' => $result['success']
        ];
        return ajax_reply($result['success'], $reply);
    }
    
    public function Run($command) {

        switch ($command['action']) {
            default: return parent::Run($command);
        }
        return true;
    }

}

?>