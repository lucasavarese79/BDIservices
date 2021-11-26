
<?php

    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://10.6.6.145:8443/ghibli-soap-for-bdi/SendFileService?wsdl',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => "<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:prim="http://www.primeur.com">
      <soapenv:Header xmlns:wsa="http://www.w3.org/2005/08/addressing"><wsa:Action>send</wsa:Action><wsa:ReplyTo><wsa:Address>http://soa3-vsvilsf-osb.utenze.bankit.it/soa-infra/services/centrisc_free/free-process-sca!1.0*soa_6121489f-ff6f-4c7c-a700-318cd5d11342/FileTransfer%23FREEProcessoAcquisizione/Services.Externals.FileTransfer.reference</wsa:Address><wsa:ReferenceParameters><orasoa:PortType xmlns:orasoa="http://xmlns.oracle.com/soa" xmlns:ptns="http://www.axway.com">ptns:MFTAxwayPortTypeCallback</orasoa:PortType></wsa:ReferenceParameters></wsa:ReplyTo><wsa:From><wsa:Address>Ghibli</wsa:Address></wsa:From><wsa:FaultTo><wsa:Address>http://anaclu65.utenze.bankit.it/soa-infra/services/centrisc_free/free-process-sca!1.0*soa_6121489f-ff6f-4c7c-a700-318cd5d11342/FileTransfer%23FREEProcessoAcquisizione/Services.Externals.FileTransfer.reference</wsa:Address><wsa:ReferenceParameters><orasoa:PortType xmlns:orasoa="http://xmlns.oracle.com/soa" xmlns:ptns="http://www.axway.com">ptns:MFTAxwayPortTypeCallback</orasoa:PortType></wsa:ReferenceParameters></wsa:FaultTo><wsa:MessageID>uuid:031591e8-8fb0-40a8-a774-b8b0e45f5bfd</wsa:MessageID></soapenv:Header>
      <soapenv:Body>
      <prim:SendFileRequest>
              <!--You may enter the following 9 items in any order-->
              <prim:flowId>INBOUND_DATA_SVIL</prim:flowId>
              <prim:sourceAlias>MFT_DOM_WF_SVIL</prim:sourceAlias>
              <prim:destAlias>MFT_DOM_SF_SVIL</prim:destAlias>
              <prim:sourceRelPath>statdom/common/Users/C2C-00000001/TestLoad120K.pdf</prim:sourceRelPath>
              <prim:destRelPath>statdom/anac/TestLoad120K.pdf</prim:destRelPath>
              <prim:deleteSourceFile>false</prim:deleteSourceFile>
              <!--Optional:-->
              <prim:param>?</prim:param>
              <!--Optional:-->
              <prim:recLenght>?</prim:recLenght>
              <!--Optional:-->
              <prim:recType>?</prim:recType>
      </prim:SendFileRequest>
      </soapenv:Body>
      </soapenv:Envelope>",
      CURLOPT_HTTPHEADER => array(
        'Content-Type: text/xml;charset=UTF-8',
        'SOAPAction: "send"',
        'Authorization: Basic Z2hpYmxpLXN1cGVydXNlcjpwcmltZXVy'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
?>