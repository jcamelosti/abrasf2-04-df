<?php    
    libxml_use_internal_errors(true);
    $xml = file_get_contents('xml_exemplo_baseados_xsd/EnviarLoteRpsEnvio.xml');
    $objDom = new DomDocument();
    $objDom->loadXML($xml);

    if (!$objDom->schemaValidate("schema-nfse-v2-04.xsd")) {
        $arrayAllErrors = libxml_get_errors();
        echo "<pre>";
        print_r($arrayAllErrors);
        echo "</pre>";
        exit;
    }