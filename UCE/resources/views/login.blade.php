@include('header')
@section('title', 'Login')
<form class="container w-50 my-5 py-5" method="POST" action="/login">
  @csrf
  <div class="mb-3 d-flex justify-content-center">
    <h3>Login</h3>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary w-25 botao">Entrar</button>
  </div>
</form>
