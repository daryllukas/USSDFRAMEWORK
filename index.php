<?php
ob_start();

header("Content-type: text/xml");
include 'Handler.php';
include 'Menu.php';
include 'functions/functions.php';
$postData = file_get_contents('php://input');

const in_Production = false;

$menu = new Menu();
$handler = new handler();
//you need this xml if you are development mode and you make changes to it.
$xml_Data = xml_development_handler();


if(in_Production){
    setResponse($postData,$handler);
}
else{
    setResponse($xml_Data,$handler);
}

if($handler->getSequence()=="0"){
        //
        $handler->setUssd_body("Hello World");
        $handler->setRequest_type("REQUEST");
        $handler->setSequence("1");
        $handler->setEnd_of_session("FALSE");

        echo getResponse($handler);


    }
    if($handler->getSequence()=="2"){
        $handler->setUssd_body("Menu 2");
        $handler->setRequest_type("REQUEST");
        $handler->setSequence("3");
        $handler->setEnd_of_session("FALSE");

        echo getResponse($handler);

    }
if($handler->getSequence()=="4"){
    $handler->setUssd_body("Menu 2");
    $handler->setRequest_type("RESPONSE");
    $handler->setSequence("3");
    $handler->setEnd_of_session("TRUE");

    echo getResponse($handler);

}


function setResponse($request_xml,$handler){


    $xml_response = simplexml_load_string($request_xml);
    $json = json_encode($xml_response);
    $array = json_decode($json);


    if($array->params->param->value->struct->member[0]->value->string=="0"){
        //getting values from xml
        $sequence = $array->params->param->value->struct->member[0]->value->string;
        $end_of_session = $array->params->param->value->struct->member[1]->value->string;
        $language = $array->params->param->value->struct->member[2]->value->string;
        $session_id = $array->params->param->value->struct->member[3]->value->string;
        $service_key = $array->params->param->value->struct->member[4]->value->string;
        $mobile_number = $array->params->param->value->struct->member[5]->value->string;
        $handler->setSequence($sequence);
        $handler->setMobile_number($mobile_number);
        $handler->setLanguage($language);
    }
    else {

        $sequence = $array->params->param->value->struct->member[0]->value->string;
        $handler->setSequence($sequence);
        $end_of_session = $array->params->param->value->struct->member[1]->value->string;
        $language = $array->params->param->value->struct->member[2]->value->string;
        $session_id = $array->params->param->value->struct->member[3]->value->string;
        $service_key = $array->params->param->value->struct->member[4]->value->string;
        $mobile_number = $array->params->param->value->struct->member[5]->value->string;
        $input = $array->params->param->value->struct->member[6]->value->string;
        $handler->setUssd_body($input);
        $handler->setMobile_number($mobile_number);
        $handler->setLanguage($language);
    }


}

function getResponse($handler){
    //
    $main_menu_response = "<methodResponse>
<params><param>
<value>
<struct>
<member>
<name>RESPONSE_CODE</name>
<value>
<string>0</string>
</value>
</member><member>
<name>REQUEST_TYPE</name>
<value>
<string>".$handler->getRequest_type()."</string>
</value>
</member><member>
<name>SESSION_ID</name>
<value>
<string>29848</string>
</value>
</member><member>
<name>SEQUENCE</name>
<value>
<string>".$handler->getSequence()."</string>
</value>
</member><member>
<name>USSD_BODY</name>
<value>
<string>".$handler->getUssd_body()."
</string>
</value>
</member><member>
<name>END_OF_SESSION</name>
<value>
<string>".$handler->getEnd_of_session()."</string>
</value>
</member>
</struct>
</value>
</param></params>
</methodResponse>";

    return $main_menu_response;
}



ob_end_flush();



?>








