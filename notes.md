# Anotações

## Sintaxe básica

O interpretador PHP análise todo trecho de código que estiver presente entre a tag de abertura <strong>\<?php</strong> e fechamento <strong>?></strong>. Todo o restante é ignorado pelo interpretador.

## Operadores

### Operadores aritméticos

- ```+``` <span style="margin-left: 20px;">Adição e Conversão</span>
- ```-``` <span style="margin-left: 20px;">Negação e Subtração</span>
- ```*``` <span style="margin-left: 20px;">Multiplicação</span>
- ```/``` <span style="margin-left: 20px;">Divisão</span>
- ```%``` <span style="margin-left: 20px;">Módulo</span>
- ```**``` <span style="margin-left: 12px;">Exponenciação</span>

### Operadores de atribuição

- ```+=``` 
- ```-=``` 
- ```*=```
- ```/=```
- ```%=```
- ```**=```

### Operadores de comparação

- ```==``` <span style="margin-left: 20px;">Igual</span>
- ```===``` <span style="margin-left: 12px;">Idêntico</span>
- ```!=``` <span style="margin-left: 20px;">Não igual</span>
- ```<>``` <span style="margin-left: 20px;">Não igual</span>
- ```!==``` <span style="margin-left: 12px;">Não idêntico</span>
- ```<``` <span style="margin-left: 27px;">Menor que</span>
- ```>``` <span style="margin-left: 27px;">Maior que</span>
- ```<=``` <span style="margin-left: 20px;">Menor ou igual</span>
- ```>=``` <span style="margin-left: 20px;">Maior ou igual</span>
- ```<=>``` <span style="margin-left: 12px;">Spaceship</span>

### Operadores lógicos

- ```and``` <span style="margin-left: 20px;">E</span>
- ```or``` <span style="margin-left: 20px;">Ou</span>
- ```xor``` <span style="margin-left: 20px;">Ou exclusivo</span>
- ```!``` <span style="margin-left: 20px;">Negação</span>
- ```&&``` <span style="margin-left: 20px;">E</span>
- ```||``` <span style="margin-left: 20px;">Ou</span>

### Operadores bitwise

- ```&``` <span style="margin-left: 20px;">And</span>
- ```|``` <span style="margin-left: 20px;">Or (inclusivo)</span>
- ```^``` <span style="margin-left: 20px;">Xor (exclusive or)</span>
- ```~``` <span style="margin-left: 20px;">Not</span>
- ```<<``` <span style="margin-left: 12px;">Shift left</span>
- ```>>``` <span style="margin-left: 12px;">Shift right</span>

### Operadores de incremento e decremento

- ```++$a``` <span style="margin-left: 20px;">Pré-incremento</span>
- ```$a++``` <span style="margin-left: 20px;">Pós-incremento</span>
- ```--$a``` <span style="margin-left: 20px;">Pré-decremento</span>
- ```$a--``` <span style="margin-left: 20px;">Pós-decremento</span>

### Operador de controle de erros

- ```@``` <span style="margin-left: 20px;">At</span>

### Operador de execução

- ``` `` ``` <span style="margin-left: 20px;">Backstick</span>

## Tipos

- ```Null```
- ```Bool```
- ```Int```
- ```Float```
- ```String```
- ```Array```
- ```Object```
- ```Callable```
- ```Resource```

## Variáveis

Variáveis em PHP são representadas pelo sinal de cifrão ```$``` seguido do nome da variável. Exemplo: ```$nome = 'João'```.

Por padrão, a linguagem PHP possui algumas variáveis pré-definidas chamadas <strong>arrays superglobais</strong> que nada mais são do que um array contendo informações sobre o servidor e outros aspectos úteis durante o desenvolvimento de aplicações web. Um exemplo destes arrays superglobais são as variáveis ```$_GET``` e ```$_POST``` utilizadas para lidar com a transmissão de dados em requisições HTTP.

Além das variáveis pré-definidas superglobais, a linguagem PHP permite que possamos elevar o escopo de uma variável ao escopo global de uma aplicação web ao utilizar a palavra reservada ```global```. Exemplo: ```global $nome```.
