<h1>Listar produto</h1>
<table class="table table-striped">
    <?php
        $sql = "SELECT * FROM produto";
        $res = $conn->query($sql) or die($conn->error);
        $qtd = $res->num_rows;

        if($qtd > 0) {
            echo "<p>Encontrei <b>{$qtd}</b> resultado(s)</p>";
            echo "<tabble class='table table-striped table-bordered'>";
              echo "<thead>";
                echo "<tr>";
                  echo "<th>ID</th>";
                  echo "<th>Nome</th>";
                  echo "<th>Preço do produto</th>";
                  echo "<th>Peso_liquido</th>";
                  echo "<th>Data de validade</th>";
                  echo "<th>lote</th>";
                  echo "<th>Vezes comprado</th>";
                  echo "<th>Valor Energetico</th>";
                  echo "<th>Carboidratos</th>";
                  echo "<th>Proteinas</th>";
                  echo "<th>Gorduras Totais</th>";
                  echo "<th>Gorduras Saturadas</th>";
                  echo "<th>Gorduras Trans</th>";
                  echo "<th>Fibra Alimentar</th>";
                  echo "<th>Sodio</th>";
                echo "</tr>";
              echo "</thead>";
            echo "<tbody>";
                $count = 1;
                while($row = $res->fetch_object()) {
                    echo "<tr>";
                    echo "<td>".$count++."</td>";
                    /* echo "<td>{$row->id_produto}</td>"; */
                    echo "<td>{$row->nome_produto}</td>";
                    echo "<td>{$row->preco}</td>";
                    echo "<td>{$row->peso_liquido}</td>";
                    echo "<td>{$row->validade}</td>";
                    echo "<td>{$row->lote}</td>";
                    echo "<td>{$row->vezes_comprado}</td>";
                    echo "<td>{$row->valor_energetico}</td>";
                    echo "<td>{$row->carboidratos}</td>";
                    echo "<td>{$row->proteinas}</td>";
                    echo "<td>{$row->gorduras_totais}</td>";
                    echo "<td>{$row->gorduras_saturadas}</td>";
                    echo "<td>{$row->gorduras_trans}</td>";
                    echo "<td>{$row->fibra_alimentar}</td>";
                    echo "<td>{$row->sodio}</td>";
                    echo "<td>";
                      echo "<button class='btn btn-primary' 
                      onclick=\"location.href='?page=produto-editar&id={$row->id_produto}'\">Editar</button>";
                      echo "<button class='btn btn-danger'
                      onclick=\"if(confirm('Deseja realmente excluir?')){location.href='?page=produto-salvar&acao=excluir&id={$row->id_produto}'}\";>Excluir</button>";
                    echo "</tr>";
                }
            echo "</tbody>";
            echo "</table>";

            } else {
                echo "<p>Não encontrou resultados</p>";
            }
        ?>
    </tbody>
</table>