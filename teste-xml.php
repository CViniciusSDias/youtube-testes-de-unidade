<?php

require_once 'Pessoa.php';
require_once 'ExportadorDePessoaEmXml.php';

// Arrange
$exportador = new ExportadorDePessoaEmXml(new class extends Pessoa {
    public function __construct()
    {
    }

    public function idade(): int
    {
        return 22;
    }

    public function nome(): string
    {
        return 'Vinicius';
    }
});

// Act
$xml = $exportador->exportaEmXml();

// Assert
$conteudoEsperado = '<pessoa>
    <nome>Vinicius</nome>
    <idade>22</idade>
</pessoa>';

if ($conteudoEsperado === $xml) {
    echo 'TESTE OK' . PHP_EOL;
} else {
    echo 'TESTE FALHOU' . PHP_EOL;
}
