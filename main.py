from flask import Flask, render_template, request, redirect, url_for, flash
from banco import *
import json

import logging

app = Flask(__name__)
log = logging.getLogger('werkzeug')
log.setLevel(logging.ERROR)
log.disabled = True
app.secret_key = "chave_secreta"  # Defina uma chave secreta para o uso do flash

# Defina um filtro personalizado 'instanceof' para verificar a instância de objetos
@app.template_filter('instanceof')
def isinstance_filter(obj, class_name):
    return isinstance(obj, eval(class_name))

@app.route('/')
def index():
    return render_template('index.html', carrinho = carrinho.itens, produtos=produtos)

@app.route('/manage')
def manage():
    return render_template('manage.html', camisas = camisas, canecas = canecas, quadrinhos = quadrinhos, produtos=produtos)

@app.route('/cadastrar_camisa', methods=['POST'])
def cadastrar_camisa():
    global produtos
    global camisas

    nome = request.form['nome']
    if ( nome == ''):
        return json.dumps({"status":"error","message":"Nome não pode ser vazio!"})
    preco = request.form['preco']
    if ( preco == ''):
        return json.dumps({"status":"error","message":"Preco não pode ser vazio!"})
    preco = float(preco)
    if ( preco <= 0 ):
        return json.dumps({"status":"error","message":"Preco não pode menor ou igual a zero!"})
    imagem = request.form['imagem']
    if ( imagem == ''):
        return json.dumps({"status":"error","message":"Imagem não pode ser vazio!"})
    gg = request.form['gg']
    g = request.form['g']
    m = request.form['m']
    p = request.form['p']
    pp = request.form['pp']

    tamanhos = []
    if gg == 'true' : tamanhos.append('GG')
    if g == 'true' : tamanhos.append('G')
    if m == 'true' : tamanhos.append('M')
    if p == 'true' : tamanhos.append('P')
    if pp == 'true' : tamanhos.append('PP')

    new_camisa = Camisa([nome,preco,imagem,tamanhos,0])
    salvar_no_arquivo_txt(r'data/camisas.txt', new_camisa.__dict__)
    produtos.append(new_camisa)
    camisas.append(new_camisa)

    return json.dumps({"status":"success","message":"Registro realizado com sucesso!"})

@app.route('/cadastrar_caneca', methods=['POST'])
def cadastrar_caneca():
    global produtos
    global canecas

    nome = request.form['nome']
    if ( nome == ''):
        return json.dumps({"status":"error","message":"Nome não pode ser vazio!"})
    preco = request.form['preco']
    if ( preco == ''):
        return json.dumps({"status":"error","message":"Preco não pode ser vazio!"})
    preco = float(preco)
    if ( preco <= 0 ):
        return json.dumps({"status":"error","message":"Preco não pode menor ou igual a zero!"})
    imagem = request.form['imagem']
    if ( imagem == ''):
        return json.dumps({"status":"error","message":"Imagem não pode ser vazio!"})
    tamanho = request.form['tamanho']
    if ( tamanho == ''):
        return json.dumps({"status":"error","message":"Tamanho não pode ser vazio!"})
    tamanho = int(tamanho)
    if ( tamanho <= 0 ):
        return json.dumps({"status":"error","message":"Tamanho não pode menor ou igual a zero!"})

    new_caneca = Caneca([nome,preco,imagem,tamanho,0])
    salvar_no_arquivo_txt(r'data/canecas.txt', new_caneca.__dict__)
    produtos.append(new_caneca)
    canecas.append(new_caneca)

    return json.dumps({"status":"success","message":"Registro realizado com sucesso!"})

@app.route('/cadastrar_quadrinho', methods=['POST'])
def cadastrar_quadrinho():
    global produtos
    global quadrinhos

    nome = request.form['nome']
    if ( nome == ''):
        return json.dumps({"status":"error","message":"Nome não pode ser vazio!"})
    preco = request.form['preco']
    if ( preco == ''):
        return json.dumps({"status":"error","message":"Preco não pode ser vazio!"})
    preco = float(preco)
    if ( preco <= 0 ):
        return json.dumps({"status":"error","message":"Preco não pode menor ou igual a zero!"})
    imagem = request.form['imagem']
    if ( imagem == ''):
        return json.dumps({"status":"error","message":"Imagem não pode ser vazio!"})
    autor = request.form['autor']
    if ( autor == ''):
        return json.dumps({"status":"error","message":"Autor não pode ser vazio!"})
    editora = request.form['editora']
    if ( editora == ''):
        return json.dumps({"status":"error","message":"Editora não pode ser vazio!"})        

    new_quadrinho = Quadrinho([nome,preco,imagem,autor, editora,0])
    salvar_no_arquivo_txt(r'data/quadrinhos.txt', new_quadrinho.__dict__)
    produtos.append(new_quadrinho)
    quadrinhos.append(new_quadrinho)

    return json.dumps({"status":"success","message":"Registro realizado com sucesso!"})

@app.route('/remover_camisa', methods=['POST'])
def remover_camisa():
    global produtos
    global camisas

    id = request.form['id']
    id = int(id)
    found = 0
    ind = 0
    for index, produto in enumerate(produtos):
        if produto.numero_serie == id:
            found = 1
            ind = index
            break
    if found == 1:
        produtos.pop(ind)
        ind = 0
        for index, produto in enumerate(camisas):
            if produto.numero_serie == id:
                found = 1
                ind = index
                break
        camisas.pop(ind)
        atualizar_arquivo_txt(r'data/camisas.txt', camisas)
        return json.dumps({"status":"success","message":"Produto removido com sucesso!"})
    else:
        return json.dumps({"status":"error","message":"Produto não encontrado!"})

@app.route('/remover_caneca', methods=['POST'])
def remover_caneca():
    global produtos
    global canecas

    id = request.form['id']
    id = int(id)
    found = 0
    ind = 0
    for index, produto in enumerate(produtos):
        if produto.numero_serie == id:
            found = 1
            ind = index
            break
    if found == 1:
        produtos.pop(ind)
        ind = 0
        for index, produto in enumerate(canecas):
            if produto.numero_serie == id:
                found = 1
                ind = index
                break
        canecas.pop(ind)
        atualizar_arquivo_txt(r'data/canecas.txt', canecas)
        return json.dumps({"status":"success","message":"Produto removido com sucesso!"})
    else:
        return json.dumps({"status":"error","message":"Produto não encontrado!"})

@app.route('/remover_quadrinho', methods=['POST'])
def remover_quadrinho():
    global produtos
    global quadrinhos

    id = request.form['id']
    id = int(id)
    found = 0
    ind = 0
    for index, produto in enumerate(produtos):
        if produto.numero_serie == id:
            found = 1
            ind = index
            break
    if found == 1:
        produtos.pop(ind)
        ind = 0
        for index, produto in enumerate(quadrinhos):
            if produto.numero_serie == id:
                found = 1
                ind = index
                break
        quadrinhos.pop(ind)
        atualizar_arquivo_txt(r'data/quadrinhos.txt', quadrinhos)
        return json.dumps({"status":"success","message":"Produto removido com sucesso!"})
    else:
        return json.dumps({"status":"error","message":"Produto não encontrado!"})

@app.route('/adicionar_carrinho', methods=['POST'])
def adicionar_carrinho():
    global produtos
    global carrinho
    id = request.form['id']
    tipo = request.form['tipo']
    quantidade = request.form['quantidade']
    if(quantidade == ''):
        return json.dumps({"status":"error","message":"Quantidade não pode ser vazio"})
    quantidade = int(quantidade)
    if(quantidade <= 0):
        return json.dumps({"status":"error","message":"Quantidade não pode ser menor ou igual a 0"})
    tamanho = request.form['tamanho']
    id = int(id)
    tipo = int(tipo)
    found = 0
    ind = 0
    for index, produto in enumerate(produtos):
        if produto.numero_serie == id:
            found = 1
            ind = index
            break
    if found == 1:
        carrinho.adicionar_item(tipo, id, produtos[ind].nome, produtos[ind].imagem, produtos[ind].preco, quantidade, tamanho)
        atualizar_carrinho(r'data/carrinho.txt', carrinho.itens)
        return json.dumps({"status":"success","message":"Produto adicionado no carrinho!"})
    else:
        return json.dumps({"status":"error","message":"Produto não encontrado!"})


@app.route('/remover_carrinho', methods=['POST'])
def remover_carrinho():
    global carrinho

    id = request.form['id']
    id = int(id)
    found = 0
    ind = 0
    for index, produto in enumerate(carrinho.itens):
        if produto[1] == id:
            found = 1
            ind = index
            break
    if found == 1:
        carrinho.itens.pop(ind)
        atualizar_carrinho(r'data/carrinho.txt', carrinho.itens)
        return json.dumps({"status":"success","message":"Produto removido com sucesso!"})
    else:
        return json.dumps({"status":"error","message":"Produto não encontrado!"})

@app.route('/listar', methods=['POST'])
def listar():
    global carrinho
    lista = request.form['lista']
    if lista == 'carrinho':
        response = ''
        for produto in carrinho.itens:
            response += f'<tr>'
            response += f'<td><i>#'+ '%d' % produto[1]+f'</i></td>'
            response += f'<td><div><img width="50" src="'+ produto[3] +f'" style="margin-right: 20px;" alt=""><strong>'+ produto[2] +f'</strong></div></td>'
            if produto[0] == 1:
                response += f'<td>' + produto[6] + f'</td>'
            else:
                response += f'<td> -- </td>'
            response += f'<td>' + '%0.2f' % produto[4] + f'</td>'
            response += f'<td>' + '%d' % produto[5] + f'</td>'
            response += f'<td>'
            response += f'<div><button class="btn btn-danger" onclick="remover_carrinho(' + '%d' % produto[1] + f')">Remover</button></div>'
            response += f'</td>'
            response += f'</tr>'
         
        return response

@app.route('/gerar_nota', methods=['POST'])
def gerar_nota():
    global carrinho
    nota_fiscal, subtotal = carrinho.finalizar_compra()
    response = ''
    for produto in nota_fiscal:
        response += f'<tr>'
        response += f'<td><i>#'+ '%d' % produto[1]+f'</i></td>'
        response += f'<td><div><img width="50" src="'+ produto[3] +f'" style="margin-right: 20px;" alt=""><strong>'+ produto[2] +f'</strong></div></td>'
        if produto[0] == 1:
            response += f'<td>' + produto[6] + f'</td>'
        else:
            response += f'<td> -- </td>'
        if produto[4] == 0:
            response += f'<td>R$ ' + '%0.2f' % produto[4] + f' <span class="text-success"><b>Promoção</b></span></td>'
        else:
            response += f'<td>R$ ' + '%0.2f' % produto[4] + f'</td>'
        response += f'</tr>'
    response += f'<tr>'
    response += f'<td><b>Subtotal</b></td>'
    response += f'<td></td>'
    response += f'<td></td>'
    response += f'<td>R$ '+ '%0.2f' % subtotal +f'</td>'
    response += f'</tr>'
        
    return response


if __name__ == "__main__":
    app.run(host="0.0.0.0")
