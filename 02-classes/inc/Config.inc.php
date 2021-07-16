<?php
    #Arquivo se responsabiliza pela carga automática e demais configurações fixas
    spl_autoload_register(function ($Class){
        $dirName = 'class';
        if(file_exists("{$dirName}/{$Class}.class.php")):
            require_once("{$dirName}/{$Class}.class.php");
        else:
            die("Erro ao incluir {$dirName}/{$Class}.class.php");
        endif;    
    });