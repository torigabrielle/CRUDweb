<?php

    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome_produto'];
            $preco = $_POST['preco'];
            $peso = $_POST['peso_liquido'];
            $validade = $_POST['validade'];
            $lote = $_POST['lote'];
            $vezes_c = $_POST['vezes_comprado'];
            $val_e = $_POST['valor_energetico'];
            $carbo = $_POST['carboidratos'];
            $proteinas = $_POST['proteinas'];
            $gord_totais = $_POST['gorduras_totais'];
            $gord_saturadas = $_POST['gorduras_saturadas'];
            $gord_trans = $_POST['gorduras_trans'];
            $fibra_alimentar = $_POST['fibra_alimentar'];
            $sodio = $_POST['sodio'];
            
            

            $sql = "INSERT INTO produto (nome_produto, preco, peso_liquido, validade, lote, vezes_comprado, valor_energetico, carboidratos, proteinas, gorduras_totais, gorduras_saturadas, gorduras_trans, fibra_alimentar, sodio) 
            VALUES ('$nome', '$preco', '$peso', '$validade', '$lote', '$vezes_c', '$val_e', '$carbo', '$proteinas', '$gord_totais', '$gord_saturadas', '$gord_trans', '$fibra_alimentar', '$sodio')";
            $res =  $conn->query($sql) or die($conn->error);            // executando a query | res = resultado
            if ($res) {
                echo "<script>alert('/ produto cadastrada com sucesso!');</script>";
                echo "<script>location.href = '?page=produto-listar';</script>";
            } else {
                echo "<script>alert('/ Erro ao cadastrar produto!');</script>";
                echo "<script>location.href = '?page=produto-cadastrar';</script>";
            }

            break;
        
        case 'editar':
            $nome = $_POST['nome_produto'];
            $preco = $_POST['preco'];
            $peso = $_POST['peso_liquido'];
            $validade = $_POST['validade'];
            $lote = $_POST['lote'];
            $vezes_c = $_POST['vezes_comprado'];
            $val_e = $_POST['valor_energetico'];
            $carbo = $_POST['carboidratos'];
            $proteinas = $_POST['proteinas'];
            $gord_totais = $_POST['gorduras_totais'];
            $gord_saturadas = $_POST['gorduras_saturadas'];
            $gord_trans = $_POST['gorduras_trans'];
            $fibra_alimentar = $_POST['fibra_alimentar'];
            $sodio = $_POST['sodio'];

            $sql = "UPDATE produto SET (nome_produto, preco, peso_liquido, validade, lote, vezes_comprado, valor_energetico, carboidratos, proteinas, gorduras_totais, gorduras_saturadas, gorduras_trans, fibra_alimentar, sodio) 
            VALUES ('$nome', '$preco', '$peso', '$validade', '$lote', '$vezes_c', '$val_e', '$carbo', '$proteinas', '$gord_totais', '$gord_saturadas', '$gord_trans', '$fibra_alimentar', '$sodio')";
           /*  $sql = "UPDATE produto SET nome_produto = '{$_POST['nome_produto']}', valores_nutricionais = '{$_POST['valores_nutricionais']}'
            WHERE id_produto = " . $_REQUEST['id']; */

            $res =  $conn->query($sql) or die($conn->error);            // executando a query | res = resultado
            if ($res) {
                echo "<script>alert('//Registro de produto editado com sucesso!');</script>";
                echo "<script>location.href = '?page=produto-listar';</script>";
            } else {
                echo "<script>alert('//Erro ao editar Registro de produto!');</script>";
                echo "<script>location.href = '?page=produto-editar&id=" . $_REQUEST['id'] . "';</script>";
            }
            
            break;
        
        case 'excluir':
            $sql = "DELETE FROM produto WHERE id_produto = " . $_REQUEST['id'];
            $res =  $conn->query($sql) or die($conn->error);            // executando a query | res = resultado
            if ($res) {
                echo "<script>alert('//Registro de produto excluído com sucesso!');</script>";
                echo "<script>location.href = '?page=produto-listar';</script>";
            } else {
                echo "<script>alert('//Erro ao excluir Registro de produto!');</script>";
                echo "<script>location.href = '?page=produto-listar';</script>";
            }

            break;
        
        default:
            echo "entrou em default dentro de produto Salvar";
            break;
    }


?>