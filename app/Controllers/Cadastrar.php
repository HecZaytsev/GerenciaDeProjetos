<?php

namespace App\Controllers;

class Cadastrar extends BaseController
{
    public function realizarCadastro()
    {
        $usuario = $this->request->getPost('username');
        $senha = $this->request->getPost('password');
        $nomeCompleto = $this->request->getPost('nome_completo');
        $dataNascimento = $this->request->getPost('data_nascimento');
        $email = $this->request->getPost('email');
        $telefone = $this->request->getPost('telefone');

        if ($this->verificarUsuario()){

        // Inserir os dados no banco de dados
        $data = [
            'username' => $usuario,
            'senha' => password_hash($senha, PASSWORD_DEFAULT), // Hash da senha
            'nome_completo' => $nomeCompleto,
            'data_nascimento' => $dataNascimento,
            'email' => $email,
            'telefone' => $telefone
        ];

        $builder = $this->db->table('usuario');
        $builder->insert($data);

        echo "<h2 class='text-center'>Cadastro realizado com sucesso!</h2>";
        return view('tela_login\login');


        }else{
            
            echo "<h2 class='text-center'>'Usuário' indisponivel, utilize outro!</h2>";
            return view('tela_login\cadastro');
        }

        exit;
    }

    //Verifica se o nome de usuario (username) esta disponivel
    public function verificarUsuario()
    {
        $usuario = $this->request->getPost('username');
    
        $builder = $this->db->table('usuario');
        $builder->select('username'); // Seleciona apenas o campo 'username'
        $builder->where('username', $usuario); // WHERE username = 'valor'
        $query = $builder->get();
        $result = $query->getRow(); // Obter apenas uma linha
    
        if ($result === null) {
            return true; // Nome de usuário não existe, pode ser utilizado
        } else {
            return false; // Nome de usuário já existe
        }
    }
}
