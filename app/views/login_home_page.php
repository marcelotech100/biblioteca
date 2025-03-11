<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3><i class="fas fa-user"></i> Login</h3>
                </div>
                <div class="card-body">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <a href="?ct=student&mt=create_login">Primeira vez aqui? Cadastre-se como aluno</a>
                </div>
            </div>
        </div>
    </div>
</div>