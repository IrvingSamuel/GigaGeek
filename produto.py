import random

global n_series
n_series = []

class Produto:
    def __init__(self, nome, preco, imagem):
        self.nome = nome
        self.preco = preco
        self.imagem = imagem
        self.numero_serie = 0

    def gerar_numero_serie(self, base):
        global n_series
        while True:
            num = random.choice(range(base, 100000, base))
            if(num not in n_series):
                self.numero_serie = num
                n_series.append(num)
                break