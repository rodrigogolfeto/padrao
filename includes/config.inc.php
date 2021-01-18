<?php
    $config                     = array();    
    $config['titleBase']        = 'Projeto Padrão';
    $config['urlSite']          = (($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == 'padrao.localhost') ? 'http://padrao.localhost/' : 'https://' . $_SERVER['HTTP_HOST'] . '/');
    $config['descriptionSite']  = "";
    $config['keywordsSite']     = "";
    $config['cacheFiles']       = "";
?>