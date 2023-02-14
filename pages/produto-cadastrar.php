<h1>Cadastrar produto</h1>
<form action="?page=produto-salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
      <label for="nome">Nome</label>
      <input type="text" name="nome_produto" class="form-control" />
    </div>
    <div class="mb-3">
      <label for="nome">Preço</label>
      <input type="text" name="preco" class="form-control" />
    </div>
    <div class="mb-3">
      <label for="peso_liquido">Peso_liquido(KG)</label>
      <input type="number" name="peso_liquido" class="form-control" />
    </div>
    <div class="mb-3">
      <label for="validade">Validade</label>
      <input type="date" name="validade" class="form-control" />
    </div>
    <div class="mb-3">
      <label for="lote">Lote</label>
      <input type="number" name="lote" class="form-control" />
    </div>
    <div class="mb-3">
      <label for="lote">Vezes Comprado</label>
      <input type="number" name="vezes_comprado" class="form-control" />
    </div>
    <div class="mb-3">
      <label for="vezes_comprado">valor energetico</label>
      <input type="number" name="valor_energetico" class="form-control" />
    </div>
    <div class="mb-3">
      <label for="vezes_comprado">carboidratos</label>
      <input type="number" name="carboidratos" class="form-control" />
    </div>
    <div class="mb-3">
      <label for="vezes_comprado">proteinas</label>
      <input type="number" name="proteinas" class="form-control" />
    </div>
    <div class="mb-3">
      <label for="vezes_comprado">gorduras_totais</label>
      <input type="number" name="gorduras_totais" class="form-control" />
    </div>
    <div class="mb-3">
      <label for="vezes_comprado">gorduras_saturadas</label>
      <input type="number" name="gorduras_saturadas" class="form-control" />
    </div>
    <div class="mb-3">
      <label for="vezes_comprado">gorduras_trans</label>
      <input type="number" name="gorduras_trans" class="form-control" />
    </div>
    <div class="mb-3">
      <label for="vezes_comprado">fibra_alimentar</label>
      <input type="number" name="fibra_alimentar" class="form-control" />
    </div>
    <div class="mb-3">
      <label for="vezes_comprado">sodio</label>
      <input type="number" name="sodio" class="form-control" />
    </div>
    <button type="submit" value="Enviar" class="btn btn-primary">Enviar</button>
</form>