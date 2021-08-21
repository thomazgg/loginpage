<!DOCTYPE html>
<html lang="en">
    
    <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="sortcut icon" href="assets/discordlogo.png" />

    <title>Discord | Página de login</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
		integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" 
		crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    
    <div class="container sign-up-mode">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Entrar</h2>
            <div class="input-field">
              <i class="fa fa-user" aria-hidden="true"></i>
              <input type="text" placeholder="Usuário">
            </div>
            <div class="input-field">
              <i class="fa fa-lock" aria-hidden="true"></i>
              <input type="password" placeholder="Senha">
            </div>
            <input type="submit" value="Login" class="btn solid">
            <a href="http://localhost/FIB2021/Websites/Discord/">voltar</a>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-google" aria-hidden="true"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Criar conta</h2>
            <div class="input-field">
              <i class="fa fa-user" aria-hidden="true"></i>
              <input type="text" placeholder="Usuário">
            </div>
            <div class="input-field">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <input type="email" placeholder="Email">
            </div>
            <div class="input-field">
              <i class="fa fa-lock" aria-hidden="true"></i>
              <input type="password" placeholder="Senha">
            </div>
            <input type="submit" class="btn" value="Criar Conta"></a>
            <a href="http://localhost/FIB2021/Websites/Discord/">voltar</a>
            <p class="social-text">Ou Crie uma conta com outra rede social</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-google" aria-hidden="true"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Novo aqui ?</h3>
            <p> Registre-se com nome de usuário, e-mail e senha ou junte-se com uma rede social </p>
            <button class="btn transparent" id="sign-up-btn">
                Criar conta
            </button>
          </div>
          <img src="img/img3.svg" class="image" alt="">
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Um de nós?</h3>
            <p> Faça login com usuário e senha ou entre em uma rede social </p>
            <button class="btn transparent" id="sign-in-btn">Entrar</button>
          </div>
          <img src="img/img4.svg" class="image" alt="">
        </div>
      </div>
    </div>

    <script src="app.js"></script>

</body></html>