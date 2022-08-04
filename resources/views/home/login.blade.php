@extends("template.home")
@section("title", "OS | Login")
@section("body")
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-4">
                
                <div class="card bg-dark border-light">
                    <h3 class="card-header border-light text-center mb-4">Login</h3>
                    <div class="card-body">
                        <form class="login-form" action="" method="POST">
                            <label for="name" class="form-label">Usuário:</label>
                            <input type="name" class="form-control mb-3" id="name" aria-describedby="emailHelp" name="name" placeholder="Digite seu usuário">
                        
                            <label for="password" class="form-label">Senha:</label>
                            <input type="password" class="form-control mb-5" id="password" name="password" placeholder="Digite sua senha">

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-outline-light">Entrar</button>
                            </div>
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </div>
@endsection