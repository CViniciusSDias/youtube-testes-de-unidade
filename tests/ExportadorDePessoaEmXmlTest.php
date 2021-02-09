<?php

use PHPUnit\Framework\TestCase;

class ExportadorDePessoaEmXmlTest extends TestCase
{
    public function testExportarPessoaEmXmlDeveFuncionar()
    {
        // Arrange
        $pessoa = $this->createStub(Pessoa::class);
        $pessoa->method('idade')->willReturn(22);
        $pessoa->method('nome')->willReturn('Vinicius');
        $exportador = new ExportadorDePessoaEmXml($pessoa);

        // Act
        $xml = $exportador->exportaEmXml();

        // Assert
        $conteudoEsperado = '<pessoa>
    <nome>Vinicius</nome>
    <idade>22</idade>
</pessoa>';

        $this->assertSame($conteudoEsperado, $xml);
    }
}
