<?php
if (isset($_SESSION['user']) && $_SESSION['user'] == 'admin') {
    $url_back = "?ct=admin&mt=index";
} else if (isset($_SESSION['user']) && $_SESSION['user'] == 'employee') {
    $url_back = "?ct=employee&mt=index";
}
?>

<div class="container mt-5">
    <div class="bg-dark text-white p-3 mb-4 rounded shadow-sm text-center">
        <h4 style="font-weight: 300;"><i class="fas fa-user"></i> Cadastro de Livros</h4>
    </div>
    <form>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" required>
        </div>
        <div class="form-group">
            <label for="ano_publicacao">Ano de publicação</label>
            <input type="text" class="form-control" id="ano_publicacao" name="ano_publicacao" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <select id="categoria" name="categoria" class="form-control" required>
                <option value="literatura">Literatura</option>
                <option value="academico">Acadêmico</option>
                <option value="biografia">Biografia</option>
                <option value="religiao">Religião</option>
                <option value="saude">Saúde</option>
                <option value="infantil">Infantil</option>
                <option value="juvenil">Juvenil</option>
                <option value="artes">Artes e Entretenimento</option>
                <option value="culinaria">Culinária</option>
                <option value="esportes">Esportes</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="<?= $url_back ?>" class="btn btn-secondary">Voltar</a>
    </form>
</div>