<?php
session()->destroy(); // Destroi a sessão, se existir
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Cinza claro */
        }
        .login-box {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            background-color: #ffffff; /* Branco */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #ffc107; /* Amarelo */
            border-color: #ffc107; /* Amarelo */
        }
        .btn-primary:hover {
            background-color: #ffa000; /* Laranja mais escuro */
            border-color: #ffa000; /* Laranja mais escuro */
        }
        p {
            color: #000000; /* Preto */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="login-box">
                <h2 class="text-center mb-4">Login</h2>

                <form id="log" method="post" action="<?= base_url('/entrar') ?>">                   
                    <div class="mb-3 input-group">
                        <span class="input-group-text">Usuário:</span>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>

                    <div class="mb-3 input-group">
                        <span class="input-group-text">Senha:</span>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                    
                    <div class="text-center mt-3">
                        <p>Não tem uma conta? <a href="<?= base_url('/cadastro') ?>">Cadastre-se aqui</a></p>
                    </div>  

                </form>
            </div>
        </div>
    </div>
</div>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
