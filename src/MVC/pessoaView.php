<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pessoas</title>
    <style>
        html, 
        body {
            height: 100%;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #F5F5F5;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
            background-color: #FFFFFF;
            box-shadow: 0px 0px 10px #CCCCCC;
            table-layout: fixed;
        }

        th, td {
            text-align: left;
            padding: 10px;
        }

        th {
            background-color: #F2F2F2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #FAFAFA;
        }

        form  {
            width: 100%;
            background-color: #FFFFFF;
            box-shadow: 0px 0px 10px #CCCCCC;
            border-radius: 5px;
            margin-bottom: 20px; 
            padding-top: 20px; 
            padding-bottom: 20px;
        }
        

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        
            

        button[type="submit"], button.toggle-pessoaForm {
            
            display: block;
            margin: 0 auto;
            background-color: #4CAF50;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button[type="submit"]:hover, button.toggle-pessoaForm:hover {
            background-color: #3E8E41;
        }

        button.toggle-pessoaForm {
            display: block;
            margin: 20px auto;
        }

        .contatos-table-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
        }
        .contatos-table-container p {
            text-align: center;
            margin: auto;
            margin-bottom: 20px;
        }

        .overlay {
            position: fixed;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background: rgba(51,51,51,0.7);
            z-index: 10;
        }

        .toggle-contatoForm {
            background-color: #3d3d3d;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 30px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.2);
        }
        .toggle-contatoForm-wrapper {
            margin-left: auto;
        }
        

        form input[type="text"] {
            border: 2px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
            width: 80%;
            display: block;
            margin: 0 auto;
        }

        form input[type="text"]:focus {
            border-color: #4CAF50;
            outline: none;
        }

        form label {
            display: inline-block;
            width: 50%;
            text-align: left;
            margin-left: 10%;
        }

        

        body.dark {
            font-family: Arial, sans-serif;
            background-color: #252525;
            color: #FFFFFF;
            padding: 20px;
        }

        h1.dark  {
            text-align: center;
            margin: 20px 0;
            color: #FFFFFF;
        }

        .dark table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
            background-color: #2B2B2B;
            box-shadow: 0px 0px 10px #000000;
        }

        .dark th, .dark td {
            text-align: left;
            padding: 10px;
            color: #FFFFFF;
        }

        .dark th {
            background-color: #3A3A3A;
            font-weight: bold;
        }

        .dark tr:nth-child(even) {
            background-color: #353535;
        }

        .dark form {
        background-color: #2B2B2B;
        box-shadow: 0px 0px 10px #000000;
        color: #FFFFFF;
        }


        .dark input[type="text"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            background-color: #3D3D3D;
            color: #FFFFFF;
        }

        .dark button[type="submit"], .dark button.toggle-pessoaForm {
            display: block;
            margin: 0 auto;
            background-color: #9B59B6;
            color: #FFFFFF;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dark button[type="submit"]:hover, .dark button.toggle-pessoaForm:hover {
            background-color: #8E44AD;
        }

        .dark button.toggle-pessoaForm {
            display: block;
            margin: 20px auto;
        }

        .dark form input[type="text"] {
            border: 2px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
            width: 80%;
            display: block;
            margin: 0 auto;
            background-color: #3D3D3D;
            color: #FFFFFF;
        }

        .dark form input[type="text"]:focus {
            border-color: #9B59B6;
            outline: none;
        }

        .dark form label {
            display: inline-block;
            width: 50%;
            text-align: left;
            margin-left: 10%;
            color: #FFFFFF;
        }



        .dark .toggle-darkmode {
        background-color: transparent;
        color: #fff;
        border: 2px solid #fff;
        }

        .dark .toggle-darkmode:hover {
        background-color: #800080;
        border-color: #800080;
        color: #fff;
        }

        .link {
        display: inline-block;
        padding: 8px 16px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        border: 2px solid #007bff;
        color: #007bff;
        border-radius: 5px;
        transition: all 0.3s ease;
        }

        .link:hover {
        background-color: #007bff;
        color: #fff;
        }

        .dark .link {
        color: #fff;
        }

        .dark .link:hover {
        color: #d9d9d9;
        text-decoration: none;
        }

        .container {
            margin: 0 auto;
            max-width: 70%;
            display: flex;
            flex-direction: column;
            margin-top: 12%;
        }

        .container > * {
        flex: 1;
        }

        .header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-bottom: 20px;
            
        }

        .search-container {
            
            display: flex;
            align-items: center;
            flex-basis: 50%;
            justify-content: flex-end;
        }

        .search-container form {
            margin-bottom: 0;
            margin-right: 10%;
        }

        .search-container input[type="text"] {

            width: 25%;
            padding: 6px;
            margin-right: 6px;
            border: none !important;
            border-radius: 3px;
            padding: 10px !important;
            margin: 0 auto;
        }

        .search-container button[type="submit"] {
            background-color: #808080;
            color: white;
            padding: 6px;
            border: none;
            border-radius: 3px;
        }
        .search-container button[type="submit"]:hover {
            background-color: #FFB6C1;
        }


        .toggle-darkmode {
            background-color: transparent;
            color: #000;
            border: 2px solid #000;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .toggle-darkmode:hover {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }
        

        .blur {
            filter: blur(5px);
        }


    </style>
</head>
<body>
    <div id="blur">
        <div class="header">
            <div class="search-container">
                <form class="search-container" action="index.php" method="GET">
                <input type="text" placeholder="Pesquisar" name="nome" style="width: 25%">
                <button id="search-btn" type="submit">Pesquisar</button>
                <input type="hidden" name="action" value="search">
                </form>
            </div>
            <button id="toggle-darkmode" class="toggle-darkmode">DarkMode</button>
            
        </div>
        <div class="container">
            <h1>Pessoas</h1>

            <button class="toggle-pessoaForm">Adicionar</button>
            <form id="pessoaForm" action="?action=createPessoa" method="POST" style="display: none;">
                <input type="hidden" name="idPessoa" id="idPessoa">
                <input placeholder="Nome" type="text" name="nome" id="nome">
                <br>
                <input placeholder="CPF" type="text" name="cpf" id="cpf">
                <br>
                <button type="submit" id="submit-btn">Adicionar</button>
            </form>
            <?php if (empty($pessoas)) {
                    if($action == 'search'){?>
                        <p style="text-align: center;">Nenhuma pessoa com nome de <?=$_GET['nome']?> encontrada, clique em adicionar.</p>
                <?php } else {  ?>
                            <p style="text-align: center;">Nenhuma pessoa adicionada, clique em adicionar.</p>
                    <?php } ?>
            <?php } else { ?>
                <table >
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Ações</th>
                    </tr>
                    <?php foreach ($pessoas as $pessoa){ ?>
                    <tr>
                        <td><?= $pessoa->getId()?></td>
                        <td><?= $pessoa->getNome() ?></td>
                        <td><?= $pessoa->getCpf() ?></td>
                        <td>
                        <a href="#" onclick="updatePessoa(<?= $pessoa->getId() ?>, '<?= $pessoa->getNome() ?>', '<?= $pessoa->getCpf() ?>')" class="link">Editar</a>
                        <a href="?action=deletePessoa&id=<?= $pessoa->getId() ?>" class="link">Excluir</a>
                        <a href="?action=listContatos&idPessoa=<?= $pessoa->getId()?>" class="link">Ver contatos</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            <?php } ?>

            
        </div>
    </div>
    <div class="contatos-table-container overlay" style="display: none;">
        <div class="contatoForm-wrapper" style="width: 60%">
            <form id="contatoForm" action="?action=createContato" method="POST">
                <input type="hidden" name="idContato" id="idContato">
                <input type="hidden" name="pessoaID" id="pessoaID" value="<?= isset($_GET['idPessoa']) ? $_GET['idPessoa'] : ''; ?>">
                <input placeholder="Tipo" type="text" name="tipo" id="tipo">
                <br>
                <input placeholder="Descrição" type="text" name="descricao" id="descricao">
                <br>
                <button type="submit" id="submit-btn-contato">Adicionar</button>
            </form>
            <!-- <div class="toggle-contatoForm-wrapper">
                <button class="toggle-contatoForm">Adicionar</button>
            </div> -->
            <?php if (empty($contatos)) { ?>
                <p style="text-align: center;">Nenhum contato, clique em adicionar.</p>
            <?php } else { ?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>Descrição</th>
                        
                        <th>Ação</th>
                    </tr>
                    <?php foreach ($contatos as $contato) { ?>
                        <tr>
                            <td><?= $contato->getId() ?></td>
                            <td><?= $contato->getTipo() ?></td>
                            <td><?= $contato->getDescricao() ?></td>
                            <td>
                                <a href="#" onclick="updateContato(<?= $contato->getId() ?>, '<?= $contato->getTipo() ?>', '<?= $contato->getDescricao() ?>')" class="link">Editar</a>
                                <a href="?action=deleteContato&id=<?= $contato->getId() ?>" class="link">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>
        </div>
    </div>
</body>
<script>
    const toggleButton = document.getElementById('toggle-darkmode');
    const isDarkMode = localStorage.getItem('darkMode') === 'true';

    if (isDarkMode) {
        document.body.classList.add('dark');
        toggleButton.innerHTML = 'LightMode';
        } else {
        toggleButton.innerHTML = 'DarkMode';
        }

    toggleButton.addEventListener('click', () => {
        const isCurrentlyDarkMode = document.body.classList.contains('dark');
        if (isCurrentlyDarkMode) {
            localStorage.setItem('darkMode', 'false');
            document.body.classList.remove('dark');
            toggleButton.innerHTML = 'DarkMode';
        } else {
            localStorage.setItem('darkMode', 'true');
            document.body.classList.add('dark');
            toggleButton.innerHTML = 'LightMode';
        }
    });

    function toggleForm(formId,toggleId) {
        var form = document.getElementById(formId);
        var toggleBtn = document.querySelector(toggleId);
        var formDisplayStyle = window.getComputedStyle(form).getPropertyValue("display");
        if (formDisplayStyle === "none") {
            form.style.display = "block";
            toggleBtn.innerHTML = "Fechar";
        } else {
            form.style.display = "none";
            toggleBtn.innerHTML = "Adicionar";
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector(".toggle-pessoaForm").addEventListener("click", function(){
            toggleForm('pessoaForm', '.toggle-pessoaForm');
        });
    });
    
    
    function updatePessoa(id, nome, cpf) {
        document.getElementById('idPessoa').value = id;
        document.getElementById('nome').value = nome;
        document.getElementById('cpf').value = cpf;
        document.getElementById('pessoaForm').action = '?action=updatePessoa';
        document.getElementById('submit-btn').innerHTML = 'Atualizar';
        document.querySelector(".toggle-pessoaForm").innerHTML = "Fechar";
        document.querySelector(".toggle-pessoaForm").style.display = "none";
        document.getElementById("pessoaForm").style.display = "block";
    }

    function updateContato(id, tipo, descricao) {
        document.getElementById('idContato').value = id;
        document.getElementById('tipo').value = tipo;
        document.getElementById('descricao').value = descricao;
        document.getElementById('contatoForm').action = '?action=updateContato';
        document.getElementById('submit-btn-contato').innerHTML = 'Atualizar';
        document.querySelector(".toggle-contatoForm").innerHTML = "Fechar";
        document.querySelector(".toggle-contatoForm").style.display = "none";
        document.getElementById("contatoForm").style.display = "block";
    }
</script>
<script>
    const searchBtn = document.getElementById('search-btn');
    const searchInput = document.getElementById('search-input');

    searchBtn.addEventListener('click', function() {
        const searchValue = searchInput.value;
        window.location.href = `index.php?action=search&nome=${searchValue}`;
    });
</script>

<script>
    // Show the contatos table container if the URL contains 'action=listContatos'
    if (window.location.href.indexOf('action=listContatos') !== -1) {
        document.querySelector('.contatos-table-container').style.display = 'flex';
        
        var element = document.getElementById("blur");
        element.classList.toggle("blur");
        const contatoFormWrapper = document.querySelector('.contatoForm-wrapper');

        document.addEventListener('click', function(event) {
            if (!contatoFormWrapper.contains(event.target)) {
                window.location.href = 'index.php';
            }
        });
    }

    

    // document.addEventListener('DOMContentLoaded', function() {
    //     const modal = document.querySelector('.contatos-table-container');
    //     const modalContent = document.querySelector('.modal-content');

        

    //     function windowOnClick(event) {
    //         if (event.target !== modal && !modal.contains(event.target)) {
    //             window.location.href = 'index.php';
    //         }
    //     }

    //     modal.addEventListener('click', windowOnClick);
    // });
    
</script>
