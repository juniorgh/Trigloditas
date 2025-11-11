<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ajustes / Conta / Tipo de Conta</title>
<style>
  body {
    font-family: "Poppins", sans-serif;
    background: #f5f5f5;
    margin: 0;
    padding: 20px;
  }

  .container {
    max-width: 400px;
    margin: 0 auto;
    background: white;
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  }

  h2 {
    text-align: center;
    color: #222;
    margin-bottom: 10px;
  }

  p.subtitle {
    text-align: center;
    font-size: 14px;
    color: #666;
    margin-bottom: 30px;
  }

  .card {
    background: linear-gradient(135deg, #e0e0e0, #f8f8f8);
    border-radius: 16px;
    padding: 20px;
    text-align: center;
  }

  .card img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-bottom: 15px;
    object-fit: cover;
    border: 3px solid #ccc;
  }

  .card h3 {
    margin: 0;
    color: #333;
  }

  .card small {
    color: #777;
    font-size: 13px;
  }

  .btn {
    display: inline-block;
    background: linear-gradient(90deg, #222, #b8860b);
    color: white;
    padding: 12px 25px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 600;
    margin-top: 15px;
    transition: 0.3s;
  }

  .btn:hover {
    transform: scale(1.05);
  }

  .wizard {
    margin-top: 25px;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 15px;
    display: none;
  }

  .wizard.active {
    display: block;
  }

  label {
    display: block;
    margin-bottom: 5px;
    font-weight: 500;
    color: #333;
  }

  input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    margin-bottom: 15px;
    font-size: 14px;
  }

  .btn-secondary {
    background: #222;
    color: #fff;
    border: none;
    border-radius: 30px;
    padding: 10px 20px;
    font-size: 14px;
    cursor: pointer;
  }

  .highlight-pro {
    margin-top: 30px;
    background: linear-gradient(135deg, #000, #b8860b);
    color: white;
    border-radius: 18px;
    padding: 20px;
  }

  .highlight-pro h4 {
    margin-top: 0;
  }

</style>
</head>
<body>

  <div class="container">
    <h2>Tipo de Conta</h2>
    <p class="subtitle">Escolha ou atualize o tipo da sua conta</p>

    <div class="card" id="cliente-card">
      <img src="https://via.placeholder.com/80" alt="Usuário">
      <h3>Conta atual: <strong>Cliente</strong></h3>
      <small>Você está utilizando o modo cliente.</small><br>
      <a href="#" class="btn" onclick="mostrarWizard()">Tornar-se Profissional</a>
    </div>

    <form method="POST" action="{{ route('admin.ajuste.tipo-conta.store') }}" class="wizard" id="wizard">
    	@csrf
      <h3>Cadastro Profissional</h3>

      <label>Foto de perfil</label>
      <input type="file" name="foto_profissional">
      <label>CPF</label>
      <input type="text" placeholder="000.000.000-00" name="cpf">
      <label>Data de Nascimento</label>
      <input type="date" name="data_nascimento">

      <input type="hidden" name="user_id" id="user_id" value="{{ $user_id }}">
      <button class="btn-secondary" onclick="ativarModoPro()">Concluir</button>
    </form>

    <div class="highlight-pro" id="pro-section" style="display:none;">
      <h4>💼 Configurações do Profissional</h4>
      <p>Área de atuação, endereço e disponibilidade agora podem ser editadas.</p>
    </div>
  </div>

<script>
  function mostrarWizard() {
    document.getElementById("wizard").classList.add("active");
    window.scrollTo(0, document.body.scrollHeight);
  }

  function ativarModoPro() {
    document.getElementById("cliente-card").style.display = "none";
    document.getElementById("wizard").style.display = "none";
    document.getElementById("pro-section").style.display = "block";
  }
</script>

</body>
</html>
