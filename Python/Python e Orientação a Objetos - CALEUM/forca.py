print("===============================================")
print("===            Jogo da Forca                ===")
print("===============================================")
palavra_secreta = "banana"
letras_acertadas = ['_', '_', '_', '_', '_', '_']
print(letras_acertadas)
acertou = False
enforcou = False
erros = 0

while(not acertou and not enforcou):
    chute = input("Digite uma letra: ")

    if(chute in palavra_secreta):
        posicao = 0
        for letra in palavra_secreta:
            if(chute.lower() == letra.lower()):
                letras_acertadas[posicao] = letra
            posicao += 1
        print(letras_acertadas)
    else:
        erros += 1
        print('\nVocê errou!')
        print(letras_acertadas)
    acertou = '_' not in letras_acertadas
    enforcou = erros == 6

if(acertou):
    print("\nYOU WIN!!!!")
else:
    print("\nYOU Lose ;-;")
print("FIM DE JOGO")