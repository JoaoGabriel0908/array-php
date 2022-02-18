<?php
    // Criando um array e atribuindo valores
    $nomes = array('José da Silva', 'Maria da Silva', 'André Souza');

    // Exibe um texto ou um conteúdo de uma variavel
        // echo($nomes)

    // Printa o conteúdo ou o texto mesmo sendo um array
        //  print_r($nomes);

    // Printa o conteúdo que tem dentro do array, do objeto ou de um texo,
    // mostra a posição, o Tipo de variável e a posição dos elementos
        //  var_dump($nomes);

    // Utilizando o echo para escrever o valor de um indice do array
        // echo($nomes[1]);

        $dados = array('José da Silva', 20, 1850.56);
        // var_dump($dados);
        // Declarando um array
        $nomesFuncionarios = array();
        // Atribuindo dados individuais no array
        $nomesFuncionarios[0] = 'Luis Silva';
        $nomesFuncionarios[2] = 30;
        // var_dump($nomesFuncionarios)


        $nomesClientes = array ('Francisco', 'Luis', 'Andreia', 'Mario', 'José');
        // Forma 1 de extrair dados com repetição
        $cont = 0;
        // Count = Permiti retornar a quantidade de elementos de um array
        $quantidade = count($nomesClientes);
        // echo($quantidade);

        echo('**********Exibindo dados pelo while**********<br>');
        while($cont < $quantidade){
            echo($nomesClientes[$cont].'<br>');
            $cont++;
        }

        echo('**********Exibindo dados pelo for**********<br>');
        for($cont = 0; $cont<$quantidade; $cont++){
            echo($nomesClientes[$cont].'<br>');
        }

        echo('**********Exibindo dados pelo Foreach**********<br>');
        // Permite criar uma cópia do elemento do array fazendo já a contagem 
        // de quantos elementos existem no array, e permitindo que na exibição
        // dos valores não seja necessário especificar o indice do array.
        foreach($nomesClientes as $clientes){
            echo($clientes.'<br>');
        }

        
        // Trabalhando com array (Chave-valor)
        // Quando utilizamos o método de chave valor, somente acessamos o valor
        // através da referencia da chave.
        //      chave           valor
        // Ex: "nome"    =>  "Teclado"
        // Para conseguir exibir a palavra teclado, temos que acessa-lá pela chave
        //          array       chave
        // Ex:echo($produtos["nome"])
        $produtos = array(
            "nome"              => "Teclado", 
            "descricao"         => "Teclado da cor preto e cinza.",
            "quantidade"        => 50,
            "valorUnitario"     => 80.45,
            "cor"               => "Preto"
        );
        
        echo('<pre>');
        var_dump($produtos);
        echo('</pre>');
        // echo($produtos["nome"]);

        // Trabalhando com array de indice, chave e valor

        // EXEMPLO USANDO INDICES COMO NUMERO DAS POSIÇÕES DO ARRAY
        $produtosInformatica = array(
            array(
                "nome"          => "Teclado",
                "descricao"     => "Teclado RGB",
                "cor"           => "Preta",
                "valor"         => 100.50,
                "quantidade"    => 20
            ),
            array(
                "nome"          => "Mouse",
                "descricao"     => "Mouse com 5 botões",
                "cor"           => "Preta",
                "valor"         => 150.80,
                "quantidade"    => 50
            )
        );
        echo($produtosInformatica[0]["nome"]);
        echo($produtosInformatica[0]["valor"]);

            // EXEMPLO UTILIZANDO A CHAVE COMO INDICE NO PRIMEIRO ARRAY
            $produtosInformatica = array(
                "listTeclados" => array(
                    "nome"          => "Teclado",
                    "descricao"     => "Teclado RGB",
                    "cor"           => "Preta",
                    "valor"         => 100.50,
                    "quantidade"    => 20
                ),
                "listMouses" => array(
                    "nome"          => "Mouse",
                    "descricao"     => "Mouse com 5 botões",
                    "cor"           => "Preta",
                    "valor"         => 150.80,
                    "quantidade"    => 50
                )
            );
        
            echo('<pre>');
            var_dump($produtosInformatica);
            echo('</pre>');
        
            // Para exibir os dados de um array (indice, chave e valor) temos que
            // primeiro especificar qual é indice do array principal, depois
            // colocamos a qual chave iremos extrair o valor.
            echo($produtosInformatica["listTeclados"]["nome"].'<br>');
            echo($produtosInformatica["listMouses"]["valor"]);
        
            foreach($produtosInformatica as $produtos){
                 echo('<br>'.'<br>'.$produtos["descricao"].'<br>');
        }
