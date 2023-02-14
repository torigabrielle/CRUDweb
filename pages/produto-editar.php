<h1>Editar produto</h1>
<?php
    $sql = "SELECT * FROM produto WHERE id_produto = " . $_REQUEST['id'];
    $res = $conn->query($sql) or die($conn->error);
    $row = $res->fetch_object();
    
    /* nome, peso_liquido, validade, lote, vezes_comprado, valor_energetico, carboidratos, proteinas, gorduras_totais, gorduras_saturadas, gorduras_trans, fibra_alimentar, sodio */

?>
<form action="?page=produto-salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id_produto; ?>">
    <div class="mb-3">
      <label for="nome">TIVE PROBLEMAS COM O EDITAR</label>
      <input type="text" name="nome_produto" class="form-control" value="<?php echo $row->nome_produto; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Preço</label>
      <input type="text" name="preco" class="form-control" value="<?php echo $row->preco; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Peso liquido</label>
      <input type="text" name="peso_liquido" class="form-control" value="<?php echo $row->peso_liquido; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Validade</label>
      <input type="text" name="validade" class="form-control" value="<?php echo $row->validade; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Lote</label>
      <input type="text" name="lote" class="form-control" value="<?php echo $row->lote; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Vezes comprados</label>
      <input type="text" name="vezes_comprado" class="form-control" value="<?php echo $row->vezes_comprado; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Valor energético</label>
      <input type="text" name="valor_energetico" class="form-control" value="<?php echo $row->valor_energetico; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Carboidratos</label>
      <input type="text" name="carboidratos" class="form-control" value="<?php echo $row->carboidratos; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Proteínas</label>
      <input type="text" name="proteinas" class="form-control" value="<?php echo $row->proteinas; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Gorduras totais</label>
      <input type="text" name="gorduras_totais" class="form-control" value="<?php echo $row->gorduras_totais; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Gorduras saturadas</label>
      <input type="text" name="gorduras_saturadas" class="form-control" value="<?php echo $row->gorduras_saturadas; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Gorduras totais</label>
      <input type="text" name="gorduras_saturadas" class="form-control" value="<?php echo $row->gorduras_totais; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Gorduras saturadas</label>
      <input type="text" name="gorduras_saturadas" class="form-control" value="<?php echo $row->gorduras_saturadas; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Gorduras Trans</label>
      <input type="text" name="gorduras_trans" class="form-control" value="<?php echo $row->gorduras_trans; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Fibra Alimentar</label>
      <input type="text" name="fibra_alimentar" class="form-control" value="<?php echo $row->fibra_alimentar; ?>" />
    </div>
    <div class="mb-3">
      <label for="nome">Sódio</label>
      <input type="text" name="sodio" class="form-control" value="<?php echo $row->sodio; ?>" />
    </div>

    <button type="submit" value="Enviar" class="btn btn-primary">Enviar</button>
</form>