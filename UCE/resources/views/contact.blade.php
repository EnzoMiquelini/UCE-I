@section('title', 'Fale Conosco')
@include('header')

<div class="w-50 container my-5 d-flex justify-content-center">
    <div class="container  my-5">
        <h3>Redes Sociais</h3>
        <div class="container d-flex justify-content-center my-5 row ">
            <div class="row">
                <a href="https://www.instagram.com/engenharia2j/" class="link-underline link-underline-opacity-0 text-black" target="_blank">Instagram: <span class="text-primary">@engenharia2j</span></a>   
            </div>
        <div class="row">
                <a href="https://www.facebook.com/engenharia2j" class="link-underline link-underline-opacity-0 text-black" target="_blank">Facebook: <span class="text-primary">@engenharia2j</span></a>
        </div>
        </div>
    </div>
</div>
<div>
    <div class="container d-flex justify-content-center my-5">
        <h3>Fale Conosco</h3>
    </div>
</div>
<form class="container w-50 my-5 pb-5" method="POST" action="/contact">
  @csrf
   <div class="container d-flex justify-content-center">
        <p>Preencha o formulário abaixo para entrar em contato conosco.</p>
    </div>
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary w-25 botao">Enviar</button>
  </div>
</form>

@include('footer')