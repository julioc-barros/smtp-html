<?php

namespace app\classes;

/**
 * Gerencia os tipos de entrada get and post
 */
class Input{

    /**
     * Faz uma requisição do tipo Get
     * 
     * @param string $param Nome da variavel ou da query
     * @param int $filter Constante com o filtro para a variavel
     * 
     * @return string retorna false se nao encontrar o conteudo solicitado
     */
    public static function get(string $param, int $filter = FILTER_SANITIZE_STRING) : string{

        return filter_input(INPUT_GET, $param, $filter);

    }

    /**
     * Faz uma requisição do tipo POST
     * 
     * @param string $param Nome da variavel ou da query
     * @param int $filter Constante com o filtro para a variavel
     * 
     * @return string retorna false se nao encontrar o conteudo solicitado
     */
    public static function post(string $param, int $filter = FILTER_SANITIZE_STRING) : string{

        return filter_input(INPUT_POST, $param, $filter);

    }

}