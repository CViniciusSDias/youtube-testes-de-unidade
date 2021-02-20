<?php

test('Pessoa deve informar sua idade', function () {
    // Arrange
    $pessoa = new Pessoa(
        'Vinicius',
        new DateTimeImmutable('1997-10-15')
    );

    // Act
    $idadePessoa = $pessoa->idade();

    // Assert
    expect($idadePessoa)->toBe(23);
});
