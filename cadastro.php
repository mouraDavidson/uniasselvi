<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="ISO-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro Funcionário</title>
<link rel="stylesheet" type="text/css" href="css/cadastro.css" media="screen" />
<link rel="stylesheet" href="lib/bootstrap/bootstrap.min.css">
<script src="lib/bootstrap/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

</head>               
<!--img src="./img/logo blocos e madeiras.png"></img-->
<body>    
<div class="body">    
    <div class="container">    
        <div class="form">
            <form action="insert.php" method="post"> 
            <a href="home.php">Voltar a página inicial</a>                
                <div class="input-group-1">
                    <h3>DIGITE OS DADOS DO FUNCIONÁRIO</h3>
                    <br></br>
                    <div class="input-box-dados">
                        <label for="nome">NOME COMPLETO</label>
                        <input class="input" id="nome" type="text" name="nome" placeholder="Digite o nome completo" required>
                    </div>

                    <div class="input-box-dados">
                        <label for="rg">RG</label>
                        <input class="input" id="rg" type="number" name="rg"  placeholder="Digite o RG" required>
                    </div>
            
                    <div class="input-box-dados">
                        <label for="cpf">CPF</label>
                        <input class="input" id="cpf" type="text" name="cpf"  placeholder="Digite o CPF" required>
                        <script>
                        $('#cpf').mask('000.000.000-00',{reverse: true});</script>
                    </div>
                    

                    <div class="input-box-dados">
                        <label for="telefone">Telefone</label>
                        <input class="input" id="telefone" type="tel" name="telefone"  placeholder="Digite o telefone" required>
                        <script>$('#telefone').mask('(00) 00000-0000');</script>
                    </div>
                </div>
                    <div class="input-group-2">
                        <h3>DIGITE OS DADOS DE ENDEREÇO</h3>
                        <br></br>
    
                        <div class="input-box-endereco">
                            <label for="rua">RUA/AVENIDA</label>
                            <input class="input" id="rua" type="text" name="rua"  placeholder="Digite a Rua/Avenida" required>
                        </div>
                    
                        <div class="input-box-endereco">
                            <label for="bairro">BAIRRO</label>
                            <input class="input" id="bairro" type="text" name="bairro"  placeholder="Digite o Bairro" required>
                        </div>

                        <div class="input-box-endereco">
                            <label for="numero">Número</label>
                            <input class="input" id="numero" type="number" name="numero"  placeholder="Digite o número" required>
                        </div>

                        <div class="input-box-endereco">
                            <label for="complemento">COMPLEMENTO</label>
                            <input class="input" id="complemento" type="text" name="complemento"  placeholder="Digite o Complemento" required>
                        </div>

                        <div class="input-box-endereco">
                            <label for="cidade">CIDADE</label>
                            <input class="input" id="cidade" type="text" name="cidade"  placeholder="Digite a Cidade" required>
                        </div>
            
                        <div class="input-box-endereco">
                            <label for="estado">ESTADO</label>
                            <input class="input" id="estado" type="text" name="estado"  placeholder="Digite o Estado" required>
                        </div>
                    </div>    
                    
                    <div class="input-group-3">
                        <h3>DIGITE AS INFORMAÇÕES DO CARGO</h3>
                        <br></br>
            
                        <div class="input-box-cargo">
                            <label for="cargo">CARGO</label>
                            <input class="input" id="cargo" type="text" name="cargo"  placeholder="Digite o Cargo" required>
                        </div>

                        <div class="input-box-cargo">
                            <label for="descCargo">DESCRIÇÃO</label>
                            <textarea class="input" style="resize: both" name="descCargo" cols="23" rows="2" placeholder="Digite a Descrição do Cargo" required></textarea></textarea>
                        </div>

                        <div class="input-box-cargo">
                            <label for="setor">SETOR</label>
                            <input class="input" id="setor" type="text" name="setor"  placeholder="Digite o Setor" required>
                        </div>   
                          
                        <div class="input-box-cargo">
                            <label for="salario">SALÁRIO</label>
                            <input class="input" id="salario" type="text" name="salario"  placeholder="Digite o Salário" required>
                            <script>$('#salario').mask('000.000.000.000.000,00', {reverse: true});</script>
                        </div>

                        <div class="input-box-cargo">
                            <label for="cargaHoraria">CARGA HORÁRIA</label>
                            <input class="input" id="cargaHoraria" type="text" name="cargaHoraria"  placeholder="Digite a Carga Horária" required>
                        </div>

                        <brdiv class="input-box-cargo">
                            <label for="dtAdmissao">DATA DE ADMISSÃO</label>
                            <input class="input" id="dtAdmissao" type="date" name="dtAdmissao" required>
                            <br></br>
                            <input class="input" type="submit" name="Gravar" value="Salvar" onclick="salvarNoBanco();return false">    
                            <!-- Abaixo tem o script do jquery caso necessário utilizar-->
                            <!--script> $('#dtAdmissao').mask('00/00/0000');</script-->
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>            
</body>
</html>