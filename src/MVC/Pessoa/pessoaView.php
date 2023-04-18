<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pessoas</title>
    <style>
        
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
            display: none;
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

        button[type="submit"], button.toggle-btn {
            
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

        button[type="submit"]:hover, button.toggle-btn:hover {
            background-color: #3E8E41;
        }

        button.toggle-btn {
            display: block;
            margin: 20px auto;
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

.dark button[type="submit"], .dark button.toggle-btn {
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

.dark button[type="submit"]:hover, .dark button.toggle-btn:hover {
    background-color: #8E44AD;
}

.dark button.toggle-btn {
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



    </style>
</head>
<body>
    <div class="header">
        <div class="search-container">
            <form class="search-container" action="index.php" method="GET">
            <input type="text" placeholder="Pesquisar" name="nome" style="width: 25%">
            <button type="submit">Pesquisar</button>
            <input type="hidden" name="action" value="search">
            </form>
        </div>
        <button id="toggle-darkmode" class="toggle-darkmode">DarkMode</button>
        
    </div>
    <div class="container">
        <h1>Pessoas</h1>
        
        <button class="toggle-btn">Adicionar</button>
        <form id="pessoaForm" action="?action=create" method="POST" >
            <input type="hidden" name="id" id="id">
            <input placeholder="Nome" type="text" name="nome" id="nome">
            <br>
            <input placeholder="CPF" type="text" name="cpf" id="cpf">
            <br>
            <button type="submit" id="submit-btn">Adicionar</button>
        </form>
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
                <a href="?action=delete&id=<?= $pessoa->getId() ?>" class="link">Excluir</a>

                </td>
            </tr>
            <?php } ?>
        </table>
    
    </div>
</body>
    <script>
        const toggleButton = document.getElementById('toggle-darkmode');
        toggleButton.addEventListener('click', () => {
            document.body.classList.toggle('dark');
            const buttonText = toggleButton.innerHTML;
            toggleButton.innerHTML = buttonText === 'DarkMode' ? 'LightMode' : 'DarkMode';
        });
    

        function toggleForm() {
            var form = document.getElementById("pessoaForm");
            var toggleBtn = document.querySelector(".toggle-btn");
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
            document.querySelector(".toggle-btn").addEventListener("click", toggleForm);
        });
       
        
        function updatePessoa(id, nome, cpf) {
            document.getElementById('id').value = id;
            document.getElementById('nome').value = nome;
            document.getElementById('cpf').value = cpf;
            document.getElementById('pessoaForm').action = '?action=update';
            document.getElementById('submit-btn').innerHTML = 'Atualizar';
            document.querySelector(".toggle-btn").innerHTML = "Fechar";
            document.querySelector(".toggle-btn").style.display = "none";
            document.getElementById("pessoaForm").style.display = "block";
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
