<?php
/* Conexão com BD MySQL (usuário 'root', senha 'root' e banco 'uniasselvi')*/
$link =mysqli_connect("localhost","root","","uniasselvi");



// Valida a conexão com o banco de dados
if($link===false){
    die("ERRO: Não foi possível conectar ao BD.".mysqli_connect_error());
}

// variáveis criadas para obter valores dos parâmetros do formulário, deixando de lado o cpf e carga horária para testes
//$id = mysqli_real_escape_string($link,$_REQUEST['id']);
$nome = mysqli_real_escape_string($link,$_REQUEST['nome']);
$rg = mysqli_real_escape_string($link,$_REQUEST['rg']);
$cpf = mysqli_real_escape_string($link,$_REQUEST['cpf']);
$telefone = mysqli_real_escape_string($link,$_REQUEST['telefone']);
$rua = mysqli_real_escape_string($link,$_REQUEST['rua']);
$bairro = mysqli_real_escape_string($link,$_REQUEST['bairro']);
$numero = mysqli_real_escape_string($link,$_REQUEST['numero']);
$complemento = mysqli_real_escape_string($link,$_REQUEST['complemento']);
$cidade = mysqli_real_escape_string($link,$_REQUEST['cidade']);
$estado = mysqli_real_escape_string($link,$_REQUEST['estado']);
$cargo = mysqli_real_escape_string($link,$_REQUEST['cargo']);
$descCargo = mysqli_real_escape_string($link,$_REQUEST['descCargo']);
$setor = mysqli_real_escape_string($link,$_REQUEST['setor']);
$salario = mysqli_real_escape_string($link,$_REQUEST['salario']);
$cargaHoraria = mysqli_real_escape_string($link,$_REQUEST['cargaHoraria']);
$dtAdmissao = mysqli_real_escape_string($link,$_REQUEST['dtAdmissao']);

/*$codigo = 1;
 Pegando o máximo código (sem utilização de sequence do banco)
$sql = "SELECT MAX(CODIGO) AS CODIGO FROM FUNCIONARIO";
if($result = mysqli_query($link,$sql)){
    if(mysqli_num_rows($result)>0){
        if($row=mysqli_fetch_array($result)){
            if(intval($row['CODIGO'])>0){
                $codigo = intval($row['CODIGO'])+1;
            }
        }
    }
}*/

// Realiza inserção do novo registro na tabela do banco de dados código de inserção original
/*$sql = "INSERT INTO FUNCIONARIO(CODIGO,NOME,CARGO,DESCRICAOCARGO,SETOR,SALARIO) 
VALUES('$codigo','$nome','$cargo','$descCargo','$setor','$salario')";
if(mysqli_query($link,$sql)){
    echo "Gravação efetuada com sucesso!"; //aqui poderia ser incluído um código para redirect
}else{
    echo "Erro(Não foi possível inserir registro na tabela) $sql.".mysqli_error($link);
}*/
 

//Código do cadastro total do insert:
//Realiza inserção do novo registro na tabela do banco de dados 
$sql = "INSERT INTO FUNCIONARIO(NOME,RG,CPF,TELEFONE,RUA,BAIRRO,NUMERO,COMPLEMENTO,
CIDADE,ESTADO,CARGO,DESCRICAOCARGO,SETOR,SALARIO,CARGAHORARIA,DATAADMISSAO) 
VALUES('$nome','$rg','$cpf','$telefone','$rua','$bairro','$numero','$complemento',
'$cidade','$estado','$cargo','$descCargo','$setor','$salario','$cargaHoraria','$dtAdmissao')";
if(mysqli_query($link,$sql)){
    echo "
        <script>
            alert('Gravação efetuada com sucesso!');
            window.location.href='cadastro.php';
        </script>";
}else{
    echo 
        "<script>
            alert('Erro não foi possível inserir registro na tabela!');
            window.location.href='cadastro.php';
        </script>";
    " $sql.".mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>php
