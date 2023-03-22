<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.css")?>">
    <title>Produtos</title>
</head>
<body>
    <div class="container">
        <h1>Produtos</h1>
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
            </tr>
            <?php foreach ($produtos as $produto):?>
            <tr>
                <td><?= $produto['nome']?></td>
                <td><?= $produto['descricao']?></td>
                <td><?= $produto['preco']?></td>    
            </tr>
            <?php endforeach?>
        </table>
        
        <h1>Cadastro</h1>
        
        <?php
        echo form_open(action:"usuarios/novo");
        echo form_label(label_text:"Nome", id:"nome");
        echo form_input(array(
            "name"=>"nome",
            "id"=>"nome",
            "class"=>"form-control",
            "maxlength"=>"255"
        ));

        echo form_open(action:"usuarios/novo");
        echo form_label(label_text:"Email", id:"email");
        echo form_input(array(
            "name"=>"email",
            "id"=>"email",
            "class"=>"form-control",
            "maxlength"=>"255"
        ));

        echo form_open(action:"usuarios/novo");
        echo form_label(label_text:"Senha", id:"senha");
        echo form_password(array(
            "name"=>"senha",
            "id"=>"senha",
            "class"=>"form-control",
            "maxlength"=>"255"
        ));

        echo form_button(array(
            "class" => "btn btn-primary",
            "type"=>"submit",
            "content"=>"Cadastrar",
        ));

        echo form_close();
        ?>
</div>

</body>
</html>