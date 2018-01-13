<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 13/01/2018
 * Time: 17:03
 */
function xml_development_handler(){
    return "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<methodCall>
    <methodName>USSD_MESSAGE</methodName>
    <params>
        <param>
            <value>
                <struct>
                    <member>
                        <name>SEQUENCE</name>
                        <value>
                            <string>1</string>
                        </value>
                    </member>
                    <member>
                        <name>END_OF_SESSION</name>
                        <value>
                            <string>FALSE</string>
                        </value>
                    </member>
                    <member>
                        <name>LANGUAGE</name>
                        <value>
                            <string>FRA</string>
                        </value>
                    </member>
                    <member>
                        <name>SESSION_ID</name>
                        <value>
                            <string>55704</string>
                        </value>
                    </member>
                    <member>
                        <name>SERVICE_KEY</name>
                        <value>
                            <string>868</string>
                        </value>
                    </member>
                    <member>
                        <name>MOBILE_NUMBER</name>
                        <value>
                            <string>260987767676</string>
                        </value>
                    </member>
                    <member>
                        <name>USSD_BODY</name>
                        <value>
                            <string>0</string>
                        </value>
                    </member>
                </struct>
            </value>
        </param>
    </params>
</methodCall>";
//end
}

