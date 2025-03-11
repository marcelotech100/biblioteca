<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3><i class="fas fa-user-graduate"></i> Cadastro de Aluno</h3>
                </div>
                <div class="card-body">
                    <form action="register_student_action.php" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <a href="?ct=main&mt=login_home" class="btn btn-success">Voltar para o login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>