<?php
$_SESSION['user'] = 'admin'
?>

<div class="container mt-5">
    <h2>Página de Administração</h2>
    <p>Use os links abaixo para acessar as telas de cadastro.</p>
    <a href="?ct=admin&mt=employee_register" class="btn btn-secondary">Cadastro de Funcionários</a>
    <a href="?ct=book&mt=book_register" class="btn btn-secondary">Cadastro de Livros</a>
    <a href="?ct=student&mt=student_register" class="btn btn-secondary">Cadastro de Alunos</a>
    <a href="?ct=main&mt=index" class="btn btn-secondary">Voltar</a>
</div>