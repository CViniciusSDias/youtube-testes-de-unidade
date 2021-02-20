<?php

class Pessoa
{
    private string $nome;
    private DateTimeImmutable $dataNascimento;

    public function __construct(string $nome, DateTimeImmutable $dataNascimento)
    {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function idade(\DateTimeInterface $data = null): int
    {
        if (is_null($data)) {
            $data = new DateTimeImmutable();
        }
        $diferenca = $this->dataNascimento->diff($data);

        return $diferenca->y;
    }
}
