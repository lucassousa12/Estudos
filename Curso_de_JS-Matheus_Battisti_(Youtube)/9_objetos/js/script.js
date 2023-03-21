//Cria um Objeto
var obj = {
    nome: "Lucas",
    idade: 22,
    profissão: "Motoboy",
    estaTrabalhando: false,
};

console.log(obj);
console.log(typeof obj);

//Para acessar uma propriedade do objeto.
console.log(obj.nome);
console.log(obj.idade);
console.log(obj.profissão);

//Concatenar uma propriedade do objeto.
console.log("Minha idade é " + obj.idade);


//Atribuir uma propriedade.
obj.nome = "Vivian";

console.log(obj.nome);

//Criar propriedades do objeto.
obj.graduado = true;

console.log(obj);
