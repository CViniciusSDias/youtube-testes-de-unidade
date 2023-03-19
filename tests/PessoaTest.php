<?php

test('Pessoa deve informar sua idade', function () {
    // Arrange
    $pessoa = new Pessoa(
        'Vinicius',
        new DateTimeImmutable('-23 years')
    );

    // Act
    $idadePessoa = $pessoa->idade();

    // Assert
    expect($idadePessoa)->toBe(23);
});
