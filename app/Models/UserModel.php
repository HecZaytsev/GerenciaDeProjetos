<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'usuario';
    
    protected $allowedFields = [
        'username',
        'nome_completo',
        'senha',
        'data_nascimento',
        'email',
        'telefone'
    ];
}

/*
  username VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nome_completo VARCHAR(100) NOT NULL,
    data_nascimento DATE NOT NULL,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
*/