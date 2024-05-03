from camisa import Camisa
from caneca import Caneca
from quadrinho import Quadrinho
from carrinho import Carrinho
import os

# Coletar Itens cadastrados no banco (TXT)
def ler_carrinho_txt(nome_arquivo):
    dicionario = []
    if os.path.exists(nome_arquivo):
        with open(nome_arquivo, 'r') as arquivo:
            for linha in arquivo:
                chave, valor = linha.strip().split('::')
                tipo, nserie, nome, imagem, preco, quantidade, tamanho= valor.strip().split(';') 
                dicionario.append([int(tipo), int(nserie), nome, imagem, float(preco), int(quantidade), tamanho])
    return dicionario

def ler_camisas_txt(nome_arquivo):
    dicionario = []
    if os.path.exists(nome_arquivo):
        with open(nome_arquivo, 'r') as arquivo:
            for linha in arquivo:
                chave, valor = linha.strip().split('::')
                nome, preco, imagem, tamanho, serie = valor.strip().split(';') 
                dicionario.append([nome, float(preco), imagem, tamanho.split(','), int(serie)])
    return dicionario

def ler_canecas_txt(nome_arquivo):
    dicionario = []
    if os.path.exists(nome_arquivo):
        with open(nome_arquivo, 'r') as arquivo:
            for linha in arquivo:
                chave, valor = linha.strip().split('::')
                nome, preco, imagem, tamanho, serie = valor.strip().split(';') 
                dicionario.append([nome, float(preco), imagem, tamanho, int(serie)])
    return dicionario

def ler_quadrinhos_txt(nome_arquivo):
    dicionario = []
    if os.path.exists(nome_arquivo):
        with open(nome_arquivo, 'r') as arquivo:
            for linha in arquivo:
                chave, valor = linha.strip().split('::')
                nome, preco, imagem, autor, editora, serie = valor.strip().split(';') 
                dicionario.append([nome, float(preco), imagem, autor, editora, int(serie)])
    return dicionario

# Salvar Itens cadastrados no banco (TXT)
def salvar_no_arquivo_txt(nome_arquivo, dicionario):
    linhas = 1 #variavel de guia de chave
    value = 1 #variavel de guia de valor


    with open(nome_arquivo, 'r') as arquivo:
        for linha in arquivo:
            linhas+=1 #conta a linha de impressão atual

    with open(nome_arquivo, 'a') as arquivo:

        arquivo.write(f"{linhas} :: ") #inicia a impressão da linha com o valor da chave atual

        for valor in dicionario.values(): #para cada valor em dicionario imprime de maneira formatada

            if type(valor) == list: #caso o valor seja uma lista a impressão deve ser formatada para cada item da lista

                itens = 1 #variavel de guia de itens de valor (caso seja uma lista)
                for item in valor:
                    arquivo.write(f"{item}")
                    if itens < len(valor):
                        arquivo.write(f",")
                        itens+=1
                arquivo.write(f";")
                value+=1

            else: #caso seja um valor de outro tipo a impressão vai ser formatada sem um laço de repetição
                arquivo.write(f"{valor}")
                if value < len(dicionario.values()):
                    arquivo.write(f";")
                    value+=1
                else:
                    arquivo.write(f"\n")

def atualizar_arquivo_txt(nome_arquivo, lista):
    linhas = 1
    

    with open(nome_arquivo, 'w') as arquivo:
        for dicionario in lista:
            dicionario = dicionario.__dict__
            value = 1
            arquivo.write(f"{linhas} :: ") #inicia a impressão da linha com o valor da chave atual

            for valor in dicionario.values(): #para cada valor em dicionario imprime de maneira formatada

                if type(valor) == list: #caso o valor seja uma lista a impressão deve ser formatada para cada item da lista

                    itens = 1 #variavel de guia de itens de valor (caso seja uma lista)
                    for item in valor:
                        arquivo.write(f"{item}")
                        if itens < len(valor):
                            arquivo.write(f",")
                            itens+=1
                    arquivo.write(f";")
                    value+=1

                else: #caso seja um valor de outro tipo a impressão vai ser formatada sem um laço de repetição
                    arquivo.write(f"{valor}")
                    if value < len(dicionario.values()):
                        arquivo.write(f";")
                        value+=1
                    else:
                        arquivo.write(f"\n")
            linhas += 1

def atualizar_carrinho(nome_arquivo, lista):
    linhas = 1

    with open(nome_arquivo, 'w') as arquivo:
        for produto in lista:
            
            value = 1
            arquivo.write(f"{linhas} :: ") #inicia a impressão da linha com o valor da chave atual

            for valor in produto: #para cada valor em produto imprime de maneira formatada
                arquivo.write(f"{valor}")
                if value < len(produto):
                    arquivo.write(f";")
                    value+=1
                else:
                    arquivo.write(f"\n")
            linhas += 1


global n_series

global produtos
global camisas
global canecas
global quadrinhos
global carrinho

produtos = []
camisas = []
canecas = []
quadrinhos = []
carrinho = Carrinho()

banco_camisas = r'data/camisas.txt'
banco_canecas = r'data/canecas.txt'
banco_quadrinhos = r'data/quadrinhos.txt'
banco_carrinho = r'data/carrinho.txt'


auxiliar = ler_camisas_txt(banco_camisas)
for produto in auxiliar:
    camisas.append(Camisa(produto))
    produtos.append(Camisa(produto))

# Puxar Canecas do banco
auxiliar = ler_canecas_txt(banco_canecas)
for produto in auxiliar:
    canecas.append(Caneca(produto))
    produtos.append(Caneca(produto))

# Puxar Quadrinhos do banco
auxiliar = ler_quadrinhos_txt(banco_quadrinhos)
for produto in auxiliar:
    quadrinhos.append(Quadrinho(produto))
    produtos.append(Quadrinho(produto))

auxiliar = ler_carrinho_txt(banco_carrinho)
for produto in auxiliar:
    carrinho.adicionar_item(produto[0], produto[1], produto[2], produto[3], produto[4], produto[5], produto[6])


# Puxar Camisas do banco
