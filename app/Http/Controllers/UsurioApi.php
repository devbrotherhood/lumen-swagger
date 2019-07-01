<?php

/**
 * Aplicação XPTO Swagger 
 * Exemplo de aplicação server-side utilizano o domínio de usuario como referência.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: atendimento@basis.com.br
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class UsurioApi extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation criarUsuario
     *
     * Criar um novo usuario.
     *
     *
     * @return Http response
     */
    public function criarUsuario()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling criarUsuario');
        }
        $body = $input['body'];


        return response('How about implementing criarUsuario as a post method ?');
    }
    /**
     * Operation atualizarUsuario
     *
     * Altera as informações do usuário.
     *
     * @param string $co_usuario Identificador do usuário (required)
     *
     * @return Http response
     */
    public function atualizarUsuario($co_usuario)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing atualizarUsuario as a put method ?');
    }
    /**
     * Operation obterUsuario
     *
     * Obtém informações do usuário à partir do identificador.
     *
     * @param string $co_usuario Identificador do usuário que deseja encontrar (required)
     *
     * @return Http response
     */
    public function obterUsuario($co_usuario)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing obterUsuario as a get method ?');
    }
    /**
     * Operation removerUsuario
     *
     * Remove um usuário.
     *
     * @param string $co_usuario Identificador do usuário (required)
     *
     * @return Http response
     */
    public function removerUsuario($co_usuario)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing removerUsuario as a delete method ?');
    }
}
