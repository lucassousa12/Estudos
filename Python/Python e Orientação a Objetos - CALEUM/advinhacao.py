print("===============================================")
print("===            Jogo da Advinhação           ===")
print("===============================================")
tentativas = 0
rodada = 1
score = 1000 
nivel = int(input("Escolha um nível de jogo: \n1 - Molezinha \n2 - Suave \n3 - TryHardMotherFucker \n"))
print("==========================================================================================\n")

if(nivel == 1): 
    tentativas = 20
elif(nivel == 2): 
    tentativas = 10
elif(nivel == 3): 
    tentativas = 5

for rodada in range(1, tentativas + 1):
    numero_secreto = 42
    print("Tentativa {} de {}.".format(rodada, tentativas))
    chute = int(input("Digite um número: "))
   
    acertou = chute == numero_secreto
    errou = chute != numero_secreto
    maior = chute > numero_secreto
    menor = chute < numero_secreto
    
    if(acertou):
        print("\nVOCÊ ACERTOU! \nO número secreto é: {}".format(chute))
        break
    elif(maior):
        print("\nVOCÊ ERROU! \nO número {} é MAIOR do que o número secreto.".format(chute))
    elif(menor):
        print("\nVOCÊ ERROU! \nO número {} é MENOR do que o número secreto.".format(chute))
    rodada = rodada + 1
    score = score - abs(chute - numero_secreto)
    if(score <= 0):
        score = 0
        break
    print("Sua pontuação é: {}".format(score))
    print("====================================")

print("FIM DE JOGO")
print("Sua pontuação final é: {}".format(score))

