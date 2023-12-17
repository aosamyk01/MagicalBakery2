<?php
class usuarioRepositorio
{
    private $conn; // Sua conexão com o banco de dados
    
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    
    public function cadastrar(Usuario $usuario)
    {
        $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        if (!$stmt) {
            // Lidar com o erro de preparação (por exemplo, registrá-lo ou exibir uma mensagem)
            return false;
        }

        $nome = $usuario->getNome();
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();

        // Bind dos parâmetros
        $stmt->bind_param("sss", $nome, $email, $senha);

        // Executar a declaração
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } 

        // Lidar com o erro de execução (por exemplo, registrá-lo ou exibir uma mensagem)
        $stmt->close();
        return false;
    }
    
    // Outros métodos da classe
}
?>
