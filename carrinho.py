class Carrinho:
    def __init__(self):
        self.itens = []

    def adicionar_item(self, tipo, serial, nome, imagem, preco, quantidade, tamanho):
        self.itens.append([tipo, serial, nome, imagem, preco, quantidade, tamanho])

        for x in range(len(self.itens)):
            for y in range(x,(len(self.itens))):
                if self.itens[x][4] > self.itens[y][4]:
                    self.itens[x], self.itens[y] = self.itens[y], self.itens[x]
        
        return self.itens

    def finalizar_compra(self):
        # 4 camisas  = 1 caneca de graça
        # 5 quadrinhos = menor quadrinho de graça

        camisas = 0
        canecas = 0
        quadrinhos = 0

        promo1 = 0
        promo2 = 0

        itens = self.itens


        nota_fiscal = []
        #gerar nota fical

        for item in itens:
            for quantidade in range(item[5]):
                nota_fiscal.append([int(item[0]), item[1], item[2], item[3], item[4], item[5], item[6]])
        
        #contabilidade de itens
        for item in nota_fiscal:
            if int(item[0]) == 1:
                camisas +=1
            elif int(item[0]) == 2:
                canecas +=1
            else:
                quadrinhos+=1

        
        while camisas >= 4:
            promo1 +=1
            camisas -= 4
        
        while quadrinhos >= 5:
            promo2 +=1
            quadrinhos -=5
        
        while promo1 > 0 and canecas > 0:
            for item in nota_fiscal:
                if item[0] == 2 and item[4] != 0:
                    item[4] = 0
                    promo1 -= 1
                    break
        
        while promo2 > 0:
            for item in nota_fiscal:
                if item[0] == 3 and item[4] != 0:
                    item[4] = 0
                    promo2 -= 1
                    break

        subtotal = 0
        for item in nota_fiscal:
            subtotal += item[4]


        return nota_fiscal, subtotal
            