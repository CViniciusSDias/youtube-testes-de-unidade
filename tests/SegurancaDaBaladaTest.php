<?php


use PHPUnit\Framework\TestCase;

class SegurancaDaBaladaTest extends TestCase
{
    public function testUmaPessoaMaiorDeIdadeDevePoderEntrar()
    {
        // Arrange
        $pessoa = new Pessoa(
            'Vinicius',
            new DateTimeImmutable('1997-10-15')
        );
        $seguranca = new SegurancaBalada();

        // Act
        $deixouPessoaEntrar = $seguranca->deixaEntrar(
            $pessoa,
            new DateTimeImmutable('2021-02-20')
        );

        // Assert
        $this->assertTrue($deixouPessoaEntrar);
    }

    public function testPessoaDe18AnosDevePoderEntrar()
    {
        $pessoa = new Pessoa(
            '18 anos',
            new DateTimeImmutable('2000-01-01')
        );
        $seguranca = new SegurancaBalada();

        $deixaPessoaEntrar = $seguranca->deixaEntrar(
            $pessoa,
            new DateTimeImmutable('2018-01-01')
        );

        $this->assertTrue($deixaPessoaEntrar);
    }
}