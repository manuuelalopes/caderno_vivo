<?php 
//CADASTRAR PRODUTOS
function cadastrar_produto($conexao,$nome_produto,$preco,$data_validade,$descricao,$quantidade_estoq,$imagem_url){
         $sql = "INSERT INTO produtos (nome_produto, preco, data_validade, descricao, quantidade_estoq, imagem_url) VALUES (:nome_produto, :preco, :data_validade, :descricao, :quantidade_estoq, :imagem_url)";

        try {
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":nome_produto", $nome_produto);
            $stmt->bindParam(":preco", $preco);
            $stmt->bindParam(":data_validade", $data_validade);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":quantidade_estoq", $quantidade_estoq);
            $stmt->bindParam(":imagem_url", $imagem_url);
            $stmt->execute();
            echo "Produto adicionado com sucesso!";
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
 }
 
//DELETA PRODUTO
function apagar ($conexao, $id){
        $sql = "DELETE FROM produtos WHERE id = :id";
        try{
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        echo "Produto $id removido com sucesso! ";
        } catch (PDOException $e){
            echo"Erro: " .$e->getMessage(); 
        }
        };


//CONSULTAR PRODUTO 
function consultar($conexao, $id){

$sql = "SELECT nome_produto, preco, data_validade, descricao, quantidade_estoq, imagem_url FROM produtos WHERE id = :id";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt ->bindParam(":id", $id);
        $stmt->execute();

        $produtos =$stmt->fetch (PDO::FETCH_ASSOC);
        echo"Nome do produto: {$nome_produto['nome']} <br>";
        echo"Preço: {$preco['preco']} <br>";
        echo"data_validade: {$data_validade['data_validade']} <br>";
        echo"descricao: {$descricao['descricao']} <br>";
        echo"descricao: {$quantidade_estoq['quantidade_estoq']} <br>";
        echo"descricao: {$imagem_url['imagem_url']} <br>";
        echo "<hr>";
        } catch (PDOException $e){
            echo"Erro: " .$e->getMessage(); 
        }
     }

//ATUALIZAR PRODUTO 

function atualizar($conexao, $id,$nome_produto,$preco,$data_validade,$descricao,$quantidade_estoq,$imagem_url){
         $sql = "UPDATE  produtos SET nome_produto = :nome_produto, preco = :preco, data_validade = :data_validade, descricao = :descricao, quantidade_estoq = :quantidade_estoq, imagem_url = :imagem_url WHERE id = :id";

        try {
            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":nome_produto", $nome_produto);
            $stmt->bindParam(":preco", $preco);
            $stmt->bindParam(":data_validade", $data_validade);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":quantidade_estoq", $quantidade_estoq);
            $stmt->bindParam(":imagem_url", $imagem_url);
            $stmt->execute();
            echo "Aluno inserido com sucesso!";
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
 }

// Cartela de produtos 
function cartela_produtos($conexao){
     
        $sql = "SELECT *FROM produtos";
        
        try {
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            
            $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($produtos as $produto) {
                echo "ID: {$produtos['id']} <br>";
                echo "nome_produto: {$produtos['nome_produto']} <br>";
                echo "preco: {$produtos['preco']} <br>";
                echo "data_validade: {$produtos['data_validade']} <br>";
                echo "descricao: {$produtos['descricao']} <br>";
                echo "quantidade_estoq: {$produtos['quantidade_estoq']} <br>";
                echo "iamgem_url: {$produtos['imagem_url']} <br>";
                echo "<hr>";
                }
                } catch (PDOException $e) {
                    echo "Erro: " . $e->getMessage();
                }
}






?>