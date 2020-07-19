<?php
/*
    ***********************************************
   Password .PHP -
   Class responsible for handling, verifying and generating passwords through the native PHP function called: Bcrypt.
   Classe responsável pelo tratar, verificar e gerar senhas através da função nativa do PHP chamada: Bcrypt.

   With this class you can generate a random password automatically, just by calling the GeneratePass method.
   Com esta classe você pode gerar uma senha aleatória automaticamente, apenas chamando o método GeneratePass.
    ***********************************************

    Copyright (c) 2020, Jeferson L. Souza INTERLIG SOLUÇÕES INTELIGENTES
    E-mail: contato@interligsolucoes.com.br
    Site: http://interligsolucoes.com.br/
*/

namespace Developers;

class Password
{
    /**
     * Criptografa Uma Senha (String)
     * @param $pass
     * @return bool|false|string
     */
    public function CreatePass ($pass)
    {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        if($hash){
            return $hash;
        }else{
            return false;
        }
    }

    /**
     * Verifica a Criptografia e a String Inserida Pelo Usuário
     * @param $pass
     * @param $hash
     * @return bool
     */
    public function VerifyPass ($pass, $hash)
    {
        $verify = password_verify($pass, $hash);
        if($verify){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Gera Automaticamente Uma Senha
     * @return bool|false|string
     */
    public function GeneratePass ()
    {
        $pass = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVYXWZabcdefghijklmnopqrstuvyxwz0123456789!@#$%¨&*()_+="),
            0, 10);
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        if($hash){
            return $pass;
        }else{
            return false;
        }

    }
}