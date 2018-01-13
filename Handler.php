<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class handler{
    
    function getSequence() {
        return $this->sequence;
    }

    function getRequest_type() {
        return $this->request_type;
    }

    function getMobile_number() {
        return $this->mobile_number;
    }

    function getSession_id() {
        return $this->session_id;
    }

    function getService_key() {
        return $this->service_key;
    }

    function getUssd_body() {
        return $this->ussd_body;
    }

    function getEnd_of_session() {
        return $this->end_of_session;
    }

    function getLanguage() {
        return $this->language;
    }

    function getResponse_code() {
        return $this->response_code;
    }

    function setSequence($sequence) {
        $this->sequence = $sequence;
    }

    function setRequest_type($request_type) {
        $this->request_type = $request_type;
    }

    function setMobile_number($mobile_number) {
        $this->mobile_number = $mobile_number;
    }

    function setSession_id($session_id) {
        $this->session_id = $session_id;
    }

    function setService_key($service_key) {
        $this->service_key = $service_key;
    }

    function setUssd_body($ussd_body) {
        $this->ussd_body = $ussd_body;
    }

    function setEnd_of_session($end_of_session) {
        $this->end_of_session = $end_of_session;
    }

    function setLanguage($language) {
        $this->language = $language;
    }

    function setResponse_code($response_code) {
        $this->response_code = $response_code;
    }
    


}
?>

