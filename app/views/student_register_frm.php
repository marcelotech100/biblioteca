<?php
if (isset($_SESSION['user']) && $_SESSION['user'] == 'admin') {
    $url_back = "?ct=admin&mt=index";
} else if (isset($_SESSION['user']) && $_SESSION['user'] == 'employee') {
    $url_back = "?ct=employee&mt=index";
}
?>

<div class="container mt-5">
    <div class="bg-dark text-white p-3 mb-4 rounded shadow-sm text-center">
        <h4 style="font-weight: 300;"><i class="fas fa-user"></i> Cadastro de Alunos</h4>
    </div>
    <form>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="matricula">Matrícula</label>
            <input type="text" class="form-control" id="matricula" name="matricula" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <select id="tipo" name="tipo" class="form-control" required>
                <option value="funcionario">Aluno</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="<?= $url_back ?>" class="btn btn-secondary">Voltar</a>
    </form>
</div>