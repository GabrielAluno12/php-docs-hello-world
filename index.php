<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Página Home</title>
</head>
<body style="margin:0; padding:0; background-color:#d6d6d6; font-family:Arial, sans-serif;">

  <div style="
    height:100vh;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    text-align:center;
    color:#007BFF;
    animation:pulse 2s infinite;
  ">
    <h1 style="font-size:3em; margin:0;">Hellou Frank, como você está?</h1>
    <p style="font-size:1.5em; margin:10px 0 40px 0;">Ficou bom este trabalho?</p>
    
    <div>
      <button onclick="resposta()" style="
        margin: 10px;
        padding: 15px 30px;
        font-size: 1em;
        border: none;
        border-radius: 10px;
        color: white;
        background-color: #007BFF;
        cursor: pointer;
        transition: 0.3s;
      " onmouseover="this.style.backgroundColor=\'#0056b3\'" onmouseout="this.style.backgroundColor=\'#007BFF\'">Sim</button>

      <button onclick="resposta()" style="
        margin: 10px;
        padding: 15px 30px;
        font-size: 1em;
        border: none;
        border-radius: 10px;
        color: white;
        background-color: #007BFF;
        cursor: pointer;
        transition: 0.3s;
      " onmouseover="this.style.backgroundColor=\'#0056b3\'" onmouseout="this.style.backgroundColor=\'#007BFF\'">Com certeza</button>
    </div>
  </div>

  <script>
    function resposta() {
      alert("Dá o total logo vai hehehe");
    }
  </script>

  <style>
    @keyframes pulse {
      0% { transform: scale(1); opacity: 1; }
      50% { transform: scale(1.05); opacity: 0.9; }
      100% { transform: scale(1); opacity: 1; }
    }
  </style>

</body>
</html>