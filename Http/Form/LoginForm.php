<?php

namespace Http\Form;

use Core\Validator;

class LoginForm
{

    protected $erros = [];

    public function validate($email, $password)
    {
        if (!Validator::email($email)) {
            $this->erros["email"] = "O formato do email é inválido";
        }

        if (!Validator::string($password)) {
            $this->erros["password"] = "O formato da senha inválida";
        }

        return empty($this->erros);
    }

    public function erros()
    {
        return $this->erros;
    }

    public function erro($field, $message)
    {
        $this->erros[$field] = $message;
    }
}
