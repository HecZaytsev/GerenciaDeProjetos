<!DOCTYPE html>
<html>
<head>
    <title>Tela de Cadastro</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Cinza claro */
        }
        .registration-box {
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
            <div class="registration-box">
                <h2 class="text-center mb-4">Cadastro</h2>

                <form method="post" action="/cadastrar">
                    <div class="mb-3 input-group">
                        <span class="input-group-text">Usuário:</span>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>

                    <!-- Adicione campos adicionais para o cadastro -->
                    <div class="mb-3 input-group">
                        <span class="input-group-text">Senha:</span>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3 input-group">
                        <span class="input-group-text">Nome Completo:</span>
                        <input type="text" id="nome_completo" name="nome_completo" class="form-control" required>
                    </div>
                    <div class="mb-3 input-group">
                        <span class="input-group-text">Data de Nascimento:</span>
                        <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required>
                    </div>
                    <div class="mb-3 input-group">
                        <span class="input-group-text">E-mail:</span>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3 input-group">
                        <span class="input-group-text">Telefone:</span>
                        <input type="tel" id="telefone" name="telefone" class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                    
                    <div class="text-center mt-3">
                        <p>Já possui uma conta? <a href="<?= base_url('/') ?>">Faça login aqui</a></p>
                    </div>  

                </form>
            </div>
        </div>
    </div>
</div>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
