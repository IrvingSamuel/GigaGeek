from produto import *

class Quadrinho(Produto):
    def __init__(self, valores):
        super().__init__(valores[0], valores[1], valores[2])
        self.autor = valores[3]
        self.editora = valores[4]
        if valores[5] == 0:
            self.gerar_numero_serie(7)
        else:
            global n_series
            n_series.append(valores[5])
            self.numero_serie = valores[5]