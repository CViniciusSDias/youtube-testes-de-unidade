<?php

test('Ao exportar Pessoa, o formato deve estar correto', function () {
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
});
