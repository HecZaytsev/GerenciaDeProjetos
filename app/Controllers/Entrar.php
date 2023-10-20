<?php

namespace App\Controllers;

class Entrar extends BaseController
{

    public function realizarLogin()
    {
        $usuario = $this->request->getPost('username');
        $senha = $this->request->getPost('password');

        // Verifique o usuário e a senha no banco de dados
        if ($this->verificarCredenciais($usuario, $senha)) {
            // Sucesso no login

            // Inicie a sessão e armazene informações do usuário
            session()->set('logged_in', true);
            session()->set('username', $usuario);

            // Você pode redirecionar o usuário para a página de dashboard, por exemplo
            return redirect()->to(base_url('/menu'));
        } else {
            // Falha no login
            // Você pode mostrar uma mensagem de erro na tela de login
            echo "<h2 class='text-center'>Usuário ou senha incorretos</h2>";
            return view('tela_login\login');
        }
    }

    // Verifica as credenciais do usuário no banco de dados
    public function verificarCredenciais($usuario, $senha)
    {
        // Faça a verificação das credenciais no banco de dados
        $builder = $this->db->table('usuario');
        $builder->select('senha'); // Seleciona apenas o campo 'senha'
        $builder->where('username', $usuario);
        $query = $builder->get();
        $result = $query->getRow();

        if ($result !== null && password_verify($senha, $result->senha)) {
            return true; // Credenciais válidas
        } else {
            return false; // Credenciais inválidas
        }
    }
}
