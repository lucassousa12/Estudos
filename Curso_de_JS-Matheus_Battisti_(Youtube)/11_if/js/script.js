/*
    Estrutura do IF

    if (Condição) {Bloco de Código}

    o IF considera o 0 como false e 1 como true.
*/

var idade = 22;
var idadeMinima = 18;

console.log("Antes do IF");

//Se for a idade for maior ou igual que idadeMinima, então Executa.
if(idade >= idadeMinima) {
    console.log("Pode tirar a CNH");
}

//Se a idade for menor que idadeMinima, então Executa.
if (idade < idadeMinima) {
    console.log("Precisa completar 18 anos para tirar a CNH");
}

console.log("Depois do IF");