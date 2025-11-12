<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifique seu e-mail</title>
    <style>
        body {
            font-family: 'Inter', Arial, sans-serif;
            background: linear-gradient(135deg, #101820, #1f1f1f);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .notification-card {
            background: #161b22;
            border: 1px solid #2f333a;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            border-radius: 16px;
            max-width: 420px;
            width: 100%;
            text-align: center;
            padding: 40px 30px;
            animation: fadeIn 0.6s ease-out;
        }

        .notification-card img {
            width: 90px;
            margin-bottom: 25px;
            animation: float 3s ease-in-out infinite;
        }

        h1 {
            font-size: 1.6rem;
            margin-bottom: 10px;
            color: #f4d03f;
            letter-spacing: 0.5px;
        }

        p {
            color: #c5c5c5;
            line-height: 1.6;
            font-size: 1rem;
            margin-bottom: 30px;
        }

        .button {
            display: inline-block;
            background: linear-gradient(90deg, #f4d03f, #f39c12);
            color: #000;
            font-weight: 600;
            border: none;
            border-radius: 10px;
            padding: 12px 28px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .button:hover {
            transform: scale(1.05);
            background: linear-gradient(90deg, #f39c12, #f4d03f);
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }
    </style>
</head>
<body>

    <div class="notification-card">
        <img src="https://cdn-icons-png.flaticon.com/512/542/542638.png" alt="Email enviado">
        <h1>Verifique seu e-mail 📩</h1>
        <p>
            Enviamos uma mensagem de confirmação para o endereço que você cadastrou.<br>
            Abra seu e-mail, clique no link de verificação e volte aqui para continuar o processo de ativação da sua conta de colaborador.
        </p>
        <a href="/" class="button">Voltar para o início</a>
    </div>

</body>
</html>