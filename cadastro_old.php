<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="ISO-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Funcionário</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="lib/bootstrap/bootstrap.min.css">
    <script src="lib/bootstrap/bootstrap.min.js"></script>
</head>
<header>
<div class="header">                
<img src="./img/logo blocos e madeiras.png"></img>
</header>
<body>
    <div class="body">
    <!-- Aqui se inicia o cabeçalho e o formulário -->
     <div class="form">
        <form action="insert.php" method="post"> 
            <table>
                <tr>
                    <td colspan="2">DADOS PESSOAIS</td>
                </tr>
                <tr>
                <td>NOME COMPLETO</td>
                <td><input type="text" name="nome"></td>
                </tr> 
              
                <tr>
                    <td>RG</td>
                    <td><input type="text" name="rg"></td>
                </tr> 
                <tr>
                    <td>CPF</td>
                    <td><input type="text" name="cpf"></td>
                </tr> 
            </table>
            <br>
            <table>
            <tr>
                    <td colspan="2">ENDEREÇO</td>
            </tr>
                    <td>RUA/AVENIDA</td>
                    <td><input type="text" name="rua"></td>
            </tr>
            <tr>
                    <td>BAIRRO</td>
                    <td><input type="text" name="bairro"></td>
            </tr>  
            <tr>
                    <td>NÚMERO</td>
                    <td><input type="text" name="numero"></td>
            </tr>  
            <tr>
                    <td>COMPLEMENTO</td>
                    <td><input type="text" name="complemento"></td>
            </tr> 
            <tr>
                    <td>CIDADE</td>
                    <td><input type="text" name="cidade"></td>
            </tr>   
            <tr>
                    <td>ESTADO</td>
                    <td><input type="text" name="estado"></td>
            </tr> 
            </table>    
            <br> 
            <table>    
            <tr>
                    <td colspan="2">INFORMAÇÕES DO CARGO</td>
            </tr> 
                    <td>CARGO</td>
                    <td><input type="text" name="cargo"></td>
            </tr>
            <tr>
                    <td>DESCRIÇÃO</td>
                    <td><textarea style="resize: both" autofocus="autofocus" name="descCargo" cols="23" rows="2"></textarea></td>
            </tr>   
            <tr>
                    <td>SETOR</td>
                    <td><input type="text" name="setor"></td>
            </tr>
            <tr>
                    <td>SALÁRIO</td>
                    <td><input type="text" name="salario"></td>
            </tr>
            <tr>
                    <td>CARGA HORÁRIA</td>
                    <td><input type="text" name="cargaHoraria"></td>
            </tr>
            </table>
            <br></br>
            <input type="submit" name="Gravar">
        </form>
        </div>
        </div>
        <a href="index.php">Voltar a página inicial</a>

</body>
</html>