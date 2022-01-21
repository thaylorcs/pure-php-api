<?php
/**
 * @param $classe
 */
function autoload($classe)
{
    $diretoriobase = DIR_APP . DS;
    $classe = $diretoriobase . '/Classes' . DS . str_replace('\\', DS, $classe) . '.php';

    if (file_exists($classe) && !is_dir($classe)) {
        include $classe;
    }
}

spl_autoload_register('autoload');
