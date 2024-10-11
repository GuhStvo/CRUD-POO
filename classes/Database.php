<?php
class Database {
    // Atributos
    private string $host = "localhost";
    private string $banco = "lojatechteste";
    private string $user = "root";
    private string $senha = "";
    private $conn;

    public function conectar() {
        $this->conn = null;
        /* Condição a ser executada */
        try {
            $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->banco, $this->user, $this->senha);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $e) { /* Caso houver erro */
            echo "Erro na conexao: ".$e->getMessage();
        }
        return $this->conn;
    }
}