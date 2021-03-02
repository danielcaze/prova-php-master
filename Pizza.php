<html>
<head>
	<title>PIZZA!</title>
<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div align="center">
        <div id="logo" align="center">
            <h1 id="nomelogo">PizzaNet</h1>
        </div>
        <br>
        <hr>
        <header class="body1">
            <div class="container" id="div">
                <h2 class="icone">PIZZANET</h2>
                <nav>
						<ul>
							<li><a href="Pizza.php">Início</a></li>
							<li><a href="sabores.php">Pizzas</a></li>
							<li><a href="comprar.php">Comprar</a></li>
							<li><a href="sacola.php">Sacola</a></li>
							<li><a href="login.php">Logar-se</a></li>
							<li><a href="sair.php">Sair</a></li>
						</ul>
					</nav>
            </div>
        </header>
        <hr>
  
        <?php
        session_start()
        ?>
        <h1 id="fonte">Pizzanet</h1>
        <?php 
        if($_SESSION['userlogin'] == true){
            @$nomeuser = $_SESSION['userlogin'];
        echo  "<h3 id=fonte> Bem vindo, ". @$nomeuser. "!<br> Bom apetite!<br></h3>";
        }
        else{
            echo "<p>Seja bem vindo a melhor pizzaria do mundo!</p>";
        }
        
        ?>
        </div>
        <div  id="loginpage">
            <div id="tabela" class="container">
                <h1 id="fonte" align="center">Pizzas!</h1>
                <table border="3" width="80%" align="center">
                    <thead>
                    <tr>
                        <th scope="col" id="fonte">Tamanho</th>
                        <th scope="col" id="fonte">Preço</th>
                        <th scope="col" id="fonte">Fatias</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>Pequena</td>
                        <td>R$25,00</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Media</td>
                        <td>R$30,00</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>Grande</td>
                        <td>R$40,00</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>Gigante</td>
                        <td>R$49,99</td>
                        <td>12</td>
                    </tr>
                </table>
            
            </div>
        </div>

</body>
</html>
