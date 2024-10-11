<?php
require_once "Database.php";
class Usuario {
    // Atributos
    private ?int $id;
    private string $nome;
    private string $cpf;
    private string $email;
    private string $senha;
    private ?bool $status;
    private static $conn;

    // Método construtor
    public function __construct(string $nome, string $email, string $cpf, string $senha, ?int $id = null, ?bool $status = false ){
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
        $this->status = $status;
        $database = new Database();
        self::$conn = $database->conectar();
    }

    // Métodos GET
    public function getId(): ?int {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getCpf(): string {
        return $this->cpf;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getSenha(): string {
        return $this->senha;
    }

    public function getStatus(): ?bool {
        return $this->status;
    }

    // Métodos SET
    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setCpf(string $cpf): void {
        $this->cpf = $cpf;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function setSenha(string $senha): void {
        $this->senha = $senha;
    }

    public function setStatus(?bool $status): void {
        $this->status = $status;
    }

    public function inserir() :bool {
        $sql = "INSERT INTO usuario (nome, email, cpf, senha, status) VALUES (:nome, :email, :cpf, :senha, :status)";
        try {
            /* Conexão feita no POO */
            $insert = self::$conn->prepare($sql);
            $insert->bindParam('nome', $this->nome);
            $insert->bindParam('email', $this->email);
            $insert->bindParam('cpf', $this->cpf);
            $insert->bindParam('senha', $this->senha);
            $insert->bindParam('status', $this->status);
            if($insert->execute()) {
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) { /* Esse catch junto ao parametro PDOException $e sempre será feito desse modo */
            echo "Erro: ".$e->getMessage();
        }
    }
}
