<?php

beforeEach(function () {
    $this->seguranca = new SegurancaBalada();
});

test('Pessoa maior de idade deve poder entrar', function () {
    // Arrange
    $pessoa = new Pessoa(
        'Vinicius',
        new DateTimeImmutable('1997-10-15')
    );

    // Act
    $deixouPessoaEntrar = $this->seguranca->deixaEntrar(
        $pessoa,
        new DateTimeImmutable('2021-02-20')
    );

    // Assert
    expect($deixouPessoaEntrar)->toBeTrue();
});

test('Pessoa com exatamente 18 anos deve poder entrar', function () {
    $pessoa = new Pessoa(
        '18 anos',
        new DateTimeImmutable('2000-01-01')
    );

    $deixaPessoaEntrar = $this->seguranca->deixaEntrar(
        $pessoa,
        new DateTimeImmutable('2018-01-01')
    );

    expect($deixaPessoaEntrar)->toBeTrue();
});

test('Pessoa menor de idade não deve poder entrar', function () {
    // Arrange
    $pessoa = new Pessoa(
        'Menor de idade',
        new DateTimeImmutable('17 years ago')
    );

    // Act
    $deixouPessoaEntrar = $this->seguranca->deixaEntrar(
        $pessoa,
        new DateTimeImmutable()
    );

    // Assert
    expect($deixouPessoaEntrar)->toBeFalse();
});
