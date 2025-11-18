<?php
// Configurações do banco de dados
$host    = "localhost"; // servidor do banco
$usuario = "root";      // usuário do banco
$senha   = " ";          // senha do banco
$banco   = "stoolsad";     // nome do banco de dados

// Conexão MySQLi
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verifica se a conexão funcionou
if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

// Opcional: definir charset para evitar problemas com acentos
mysqli_set_charset($conexao, "utf8");

// Substituam os valores abaixo pelas credenciais da sua própria conta do Cloudinary
$cloud_name = "dhqn0qkrn";  // exemplo: "meucloud123"
$api_key    = "617227452538693";     // exemplo: "123456789012345"
$api_secret = "0cwLzDt_xCr4hiVt5Do_rTa2TDQ";  // exemplo: "abcdeFGHijkLMNopqrstu"

?>
