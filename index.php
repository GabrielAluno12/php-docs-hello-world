<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Página Home</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      overflow-y: hidden;
      overflow-x: hidden;
      max-width: 100%;
      font-family: Arial, sans-serif;
      background-color: #d6d6d6;
    }

    .container {
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #007BFF;
      animation: pulse 2s infinite;
    }

    h1 {
      font-size: 3em;
      margin: 0;
    }

    p {
      font-size: 1.5em;
      margin: 10px 0 40px 0;
    }

    .button-group button {
      margin: 10px;
      padding: 15px 30px;
      font-size: 1em;
      border: none;
      border-radius: 10px;
      color: white;
      background-color: #007BFF;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .button-group button:hover {
      background-color: #0056b3;
    }

    @keyframes pulse {
      0% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.05); opacity: 0.9; }
      100% { transform: scale(1); opacity: 1; }
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Hellou Frank, como você está?</h1>
    <p>Ficou bom este trabalho?</p>
    
    <div class="button-group">
      <button onclick="resposta()">Sim</button>
      <button onclick="resposta()">Com certeza</button>
    </div>
  </div>

  <script>
    function resposta() {
      alert("Dá o total logo vai hehehe");
    }
  </script>

</body>
</html>
