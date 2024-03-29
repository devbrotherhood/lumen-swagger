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

/**
 * Aplicação XPTO Swagger 
 * @version 1.0.0
 */

$app->get('/', function () use ($app) {
    return $app->version();
});

/**
 * post autenticar
 * Summary: Obtém as informações do Usuario
 * Notes: Obtém as informações do Usuario
 * Output-Formats: [application/xml, application/json]
 */
$app->post('/v1/autenticacao', 'AutenticaoApi@autenticar');
/**
 * get logoff
 * Summary: Remove a autenticação do Usuario logado
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->get('/v1/autenticacao', 'AutenticaoApi@logoff');
/**
 * post criarUsuario
 * Summary: Criar um novo usuario
 * Notes: Funcionalidade para cadastrar Usuario.
 * Output-Formats: [application/xml, application/json]
 */
$app->post('/v1/usuario', 'UsuarioApi@criarUsuario');
/**
 * put atualizarUsuario
 * Summary: Altera as informações do Usuario
 * Notes: Isso só pode ser feito pelo Usuario logado.
 * Output-Formats: [application/xml, application/json]
 */
$app->put('/v1/usuario/{co_usuario}', 'UsuarioApi@atualizarUsuario');
/**
 * get obterUsuario
 * Summary: Obtém informações do Usuario à partir do identificador
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->get('/v1/usuario/{co_usuario}', 'UsuarioApi@obterUsuario');
/**
 * delete removerUsuario
 * Summary: Remove um Usuario
 * Notes: Isso só pode ser feito pelo Usuario logado.
 * Output-Formats: [application/xml, application/json]
 */
$app->delete('/v1/usuario/{co_usuario}', 'UsuarioApi@removerUsuario');

