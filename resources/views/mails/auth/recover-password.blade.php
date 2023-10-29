<style>
    body {
        font-family: Arial, sans-serif;
        line-height: 1.5;
    }

    h2 {
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    p {
        margin-bottom: 10px;
    }

    a {
        color: #007BFF;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #fff;
    }

    .footer {
        margin-top: 20px;
        color: #777;
        font-size: 14px;
    }
</style>
<div class="container">
    <h2>Recuperação de Senha</h2>
    <p>Olá, {{$name}}</p>
    <p>Você está recebendo este e-mail porque foi feita uma solicitação de recuperação de senha para a sua conta.</p>
    <p>Para redefinir a sua senha, clique no link abaixo:</p>
    <p>
        <a href="{{route('login.recover.token', $token)}}">Alterar senha.</a>
    </p>
    <p>Se você não solicitou uma recuperação de senha, pode ignorar este e-mail.</p>
    <p class="footer">Atenciosamente,<br>Help Flow</p>
</div>
