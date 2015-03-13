<?php

  date_default_timezone_set('America/Sao_Paulo');
  
  set_include_path('app/'
                   . PATH_SEPARATOR
                   . get_include_path());
  
  $pages = array(
      'home',
      'empresa',
      'produtos',
      'servicos',
      'contato'      
  );