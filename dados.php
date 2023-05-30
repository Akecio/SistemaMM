<?php
include('./protect.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/iconmm.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style/dados.css">
    <title>EEEP Manoel Mano | Dados socioeconômicos</title>
</head>
<body>
    <header>
        <div class="main-menu">
            <div class="bar"></div>
            <div class="col-0">
                <a href="https://www.ceara.gov.br/"><img src="img/logo-governo.svg" alt="Logo do Governo do Ceará"></a>
                <a href="https://www.instagram.com/eeepmanoelmano/"><img src="img/logo-mm.svg" alt="Logo da EEEP Manoel Mano"></a>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            Relatórios
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./grafico.php">Relatório Socioeconômico</a></li>
                            <li><a class="dropdown-item" href="./graficosaude.php">Relatório de Saúde</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <section class="bcgb">
            <span id="t"></span>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Ficha de matrícula</h1>
            <br>
            <br>
            <br>
            <br>
            <form action="processa.php" method="POST">
            <div class="row mb-1">
                <div class="col-sm-6">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Nome" name="nome" id="nome" oninput="handleInput(event)" required>
                </div>
                <div class="col-sm-3">
                    <label for="dataNascimento">Data de Nascimento:</label>
                    <div class="input-group" required>
                        <input type="date" name="DataN" class="form-control form-control form-control-sm" id="dataNascimento" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <label for="cpfal">Nº do CPF:</label>
                    <input type="text" name="cpfal" placeholder="000.000.000-00" class="form-control form-control-sm" id="cpfal" maxlength="14" oninput="mascaraCA('Cpfal')" required>
                </div>
            </div>
            <div class="row mb-1"></div>
            <div class="row mb-1"></div>
                <div class="row mb-1">
                <div class="col-sm-6">
                    <label for="">Curso:</label>
                    <select class="form-select" aria-label="Default select example" name="curso" id="curso">
                        <option selected></option>
                        <option value="ENFERMAGEM">ENFERMAGEM</option>
                        <option value="INFORMÁTICA">INFORMÁTICA</option>
                        <option value="COMÉRCIO">COMÉRCIO</option>
                        <option value="ADMINISTRAÇÃO">ADMINISTRAÇÃO</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <p></p>
                </div>
            </div>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Dados Adicionais</h1>
            <br>
            <br>
            <br>
            <br>
            <div class="row mb-1">
                <div class="col-sm-3">
                    <label for="">Sexo:</label>
                    <select class="form-select" aria-label="Default select example" name="sexo" id="sexo">
                        <option selected></option>
                        <option value="MASCULINO">MASCULINO</option>
                        <option value="FEMININO">FEMININO</option>
                        <option value="OUTROS">OUTROS</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="">Raça:</label>
                    <select class="form-select" aria-label="Default select example" name="raca" id="raca">
                        <option selected></option>
                        <option value="BRANCO">BRANCO</option>
                        <option value="NEGRO">NEGRO</option>
                        <option value="PARDO">PARDO</option>
                        <option value="OUTRAS">OUTRAS...</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    Nacionalidade: <input type="text" name="nac" placeholder="Nacionalidade" class="form-control form-control-sm" id="nac" oninput="handleInput(event)" required>
                </div>
                <div class="col-sm-3">
                    Naturalidade: <input type="text" name="nat" placeholder="Naturalidade" class="form-control form-control-sm" id="nat" oninput="handleInput(event)"required>
                </div>
            </div>
            <div class="row mb-1"></div>
            <div class="row mb-1">
                <div class="col-sm-3">
                    Localização: <input type="text" name="loc" placeholder="Localização" class="form-control form-control-sm" id="loc" oninput="handleInput(event)" required>
                </div>
                <div class="col-sm-3">
                    Telefone Residencial: <input type="text" name="cel" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="cel" maxlength="11" oninput="mascaraa('cel')" required>
                </div>
                <div class="col-sm-3">
                    Celular 1: <input type="text" name="telpai" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-3">
                    E-Mail: <input type="text" name="emailmae" placeholder="example@.com" class="form-control form-control-sm" id="emailmae" required>
                </div>
            </div>
            <div class="row mb-1"></div>
            <div class="row mb-1"></div>
            <div class="row mb-1"></div>
            <div class="row mb-1">
                <div class="col-sm-6">
                    Nome do Pai: <input type="text" class="form-control form-control-sm" placeholder="Nome do Pai" name="nomepai" id="nomepai" oninput="handleInput(event)" required>
                </div>
                <div class="col-sm-2">
                    Nº do CPF: <input type="text" name="cpfpai" placeholder="000.000.000-00" class="form-control form-control-sm" id="cpfpai" maxlength="11" oninput="mascaraCP('CpfPai')" required>
                </div>
                <div class="col-sm-2">
                    Telefone de contato: <input type="text" name="telefonePai" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-2">
                    Profissão: <input type="text" name="pf" placeholder="Profissão" class="form-control form-control-sm" id="pf" oninput="handleInput(event)" required>
                </div>
            </div>
            <div class="row mb-1"></div>
            <div class="row mb-1">
                <div class="col-sm-6">
                    Nome da Mãe: <input type="text" class="form-control form-control-sm" placeholder="Nome da Mãe" name="nomemae" id="nomemae" oninput="handleInput(event)" required>
                </div>
                <div class="col-sm-2">
                    Nº do CPF: <input type="text" name="cpfMae" placeholder="000.000.000-00" class="form-control form-control-sm" id="cpfpai" maxlength="11" oninput="mascaraCP('CpfPai')" required>
                </div>
                <div class="col-sm-2">
                    Telefone de contato: <input type="text" name="telefoneMae" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telpai" maxlength="11" oninput="mascaraa('TelPai')" required>
                </div>
                <div class="col-sm-2">
                    Profissão: <input type="text" name="pf2" placeholder="Profissão" class="form-control form-control-sm" id="pf2" oninput="handleInput(event)" required>
                </div>
            </div>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Dados Complementares</h1>
            <br>
            <br>
            <br>
            <br>
            <div class="row mb-1">
                <div class="col-sm-3">
                    <label for="">Transporte escolar: Utiliza/Não tiliza</label>
                    <select class="form-select" aria-label="Default select example" name="transpEscolar" id="teun">
                        <option selected></option>
                        <option value="SIM">SIM</option>
                        <option value="NÃO">NÃO</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    Responsável pelo transporte: <input type="text" name="dt" placeholder="Motorista" class="form-control form-control-sm" id="dt" oninput="handleInput(event)" >
                </div>
                <div class="col-sm-3">
                    <label for="">Bolsa família:</label>
                    <select class="form-select" aria-label="Default select example" name="bolsaFamilia">
                        <option selected></option>
                        <option value="SIM">SIM</option>
                        <option value="NÃO">NÃO</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    N° do NIS: <input type="text" name="nis" placeholder="00000000000000" class="form-control form-control-sm" id="nis" maxlength="14" >
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-sm-6">
                    <label for=""> Tipo de deficiência/TGD ou altas habilidades de superdotação:</label>
                    <select class="form-select" aria-label="Default select example" name="deficiencia" id="dsd"> 
                        <option selected></option>
                        <option value="SIM">SIM</option>
                        <option value="NÃO">NÃO</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    Recursos necessários para participação em avliações externas: <input type="text" name="rec" placeholder="" class="form-control form-control-sm" id="rec" oninput="handleInput(event)" >
                </div>
            </div>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Detalhamento da matrícula</h1>
            <br>
            <br><br><br><br>
            <div class="row mb-1">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ano Letivo</th>
      <th scope="col">Série/Turma</th>
      <th scope="col">Data de Matrícula</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><input type="year" name="anolet1" class="form-control form-control-sm" id="anolet1" maxlength="4"></td>
                <td><input type="text" name="turma1" class="form-control form-control-sm" id="turma1" maxlength="1"></td>
                <td><input type="date" name="datamt1" class="form-control form-control-sm" id="datamt1"></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><input type="year" name="anolet2" class="form-control form-control-sm" id="anolet2" maxlength="4"></td>
                <td><input type="text" name="turma2" class="form-control form-control-sm" id="turma2" maxlength="1"></td>
                <td><input type="date" name="datamt2" class="form-control form-control-sm" id="datamt2"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><input type="year" name="anolet3" class="form-control form-control-sm" id="anolet3" maxlength="4"></td>
                <td><input type="text" name="turma3" class="form-control form-control-sm" id="turma3" maxlength="1"></td>
                <td><input type="date" name="datamt3" class="form-control form-control-sm" id="datamt3"></td>
    </tr>
  </tbody>
</table>
            </div>
            <br><br><br>
            <p id="cnt2"></p>
            <h1 id="cnt">Progressão parcial</h1>
            <br><br><br><br>
            <div class="row mb-1">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ano Letivo</th>
      <th scope="col">Escola</th>
      <th scope="col">Série</th>
      <th scope="col">Disciplina</th>
      <th scope="col">Resultado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><input type="year" name="anoletivo1" class="form-control form-control-sm" id="anoletivo1" maxlength="4"></td>
                <td><input type="text" name="esc1" class="form-control form-control-sm" id="esc1" oninput="handleInput(event)"></td>
                <td><input type="text" name="serie1" class="form-control form-control-sm" id="serie1" maxlength="1"></td>
                <td><input type="text" name="disci1" class="form-control form-control-sm" id="disci1" oninput="handleInput(event)"></td>
                <td><input type="text" name="res1" class="form-control form-control-sm" id="res1" maxlength="3"></td>

    </tr>
    <tr>
      <th scope="row">2</th>
      <td><input type="year" name="anoletivo2" class="form-control form-control-sm" id="anoletivo2" maxlength="4"></td>
                <td><input type="text" name="esc2" class="form-control form-control-sm" id="esc2" oninput="handleInput(event)"></td>
                <td><input type="text" name="serie2" class="form-control form-control-sm" id="serie2" maxlength="1"></td>
                <td><input type="text" name="disci2" class="form-control form-control-sm" id="disci2" oninput="handleInput(event)"></td>
                <td><input type="text" name="res2" class="form-control form-control-sm" id="res2" maxlength="3"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><input type="year" name="anoletivo3" class="form-control form-control-sm" id="anoletivo3" maxlength="4"></td>
                <td><input type="text" name="esc3" class="form-control form-control-sm" id="esc3" oninput="handleInput(event)"></td>
                <td><input type="text" name="serie3" class="form-control form-control-sm" id="serie3" maxlength="1"></td>
                <td><input type="text" name="disci3" class="form-control form-control-sm" id="disci3" oninput="handleInput(event)"></td>
                <td><input type="text" name="res3" class="form-control form-control-sm" id="res3" maxlength="3"></td>
    </tr>
    <th scope="row">4</th>
    <td><input type="year" name="anoletivo4" class="form-control form-control-sm" id="anoletivo4" maxlength="4"></td>
                <td><input type="text" name="esc4" class="form-control form-control-sm" id="esc4" oninput="handleInput(event)"></td>
                <td><input type="text" name="serie4" class="form-control form-control-sm" id="serie4" maxlength="1"></td>
                <td><input type="text" name="disci4" class="form-control form-control-sm" id="disci4" oninput="handleInput(event)"></td>
                <td><input type="text" name="res4" class="form-control form-control-sm" id="res4" maxlength="3"></td>
    </tr>

  </tbody>
</table>
            </div>
            <br><br><br>
            <p id="cnt2"></p>
            <h1 id="cnt">Questionário socioeconômico do aluno</h1>
            <br>
            <br>
            <br>
            <br>
            <div class="traco2">
                <p id="traco"></p>
                <h4 id="txt">Dados referentes aos pais ou responsáveis</h4>
            </div>
            <div class="row mb-1">
                <div class="col-sm-3">
                    Idade do Pai: <input type="text" class="form-control form-control-sm" placeholder="Idade do Pai" name="ipai" id="ipai" required>
                </div>
                <div class="col-sm-3">
                    Profissão: <input type="text" class="form-control form-control-sm" placeholder="Profissão do Pai" name="ppai" id="ppai" oninput="handleInput(event)" required>
                </div>
                <div class="col-sm-3">
                    <label for="">Escolaridade</label>
                    <select class="form-select" aria-label="Default select example" name="escolPai" id="escol">
                        <option selected></option>
                        <option value="NENHUMA">NENHUMA</option>
                        <option value="ENSINO FUNDAMENTAL COMPLETO">ENSINO FUNDAMENTAL COMPLETO</option>
                        <option value="ENSINO FUNDAMENTAL INCOMPLETO">ENSINO FUNDAMENTAL INCOMPLETO</option>
                        <option value="ENSINO MÉDIO COMPLETO">ENSINO MÉDIO COMPLETO</option>
                        <option value="ENSINO MÉDIO INCOMPLETO">ENSINO MÉDIO INCOMPLETO</option>
                        <option value="SUPERIOR COMPLETO">SUPERIOR COMPLETO</option>
                        <option value="SUPERIOR INCOMPLETO">SUPERIOR INCOMPLETO</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="">Está empregado:</label>
                    <select class="form-select" aria-label="Default select example" name="empPai" id="emp">
                        <option selected></option>
                        <option value="SIM">SIM</option>
                        <option value="NÃO">NÃO</option>
                    </select>
                </div>
            </div>
            <div class="row mb-1">
                <div class="col-sm-3">
                    Idade da mãe: <input type="text" class="form-control form-control-sm" placeholder="Idade da mãe" name="imae" id="imae" required>
                </div>
                <div class="col-sm-3">
                    Profissão: <input type="text" class="form-control form-control-sm" placeholder="Profissão da mãe" name="pmae" id="pmae" oninput="handleInput(event)" required>
                </div>
                <div class="col-sm-3">
                <label for="">Escolaridade</label>
                    <select class="form-select" aria-label="Default select example" name="escol2" id="escol2">
                        <option selected></option>
                        <option value="NENHUMA">NENHUMA</option>
                        <option value="ENSINO FUNDAMENTAL COMPLETO">ENSINO FUNDAMENTAL COMPLETO</option>
                        <option value="ENSINO FUNDAMENTAL INCOMPLETO">ENSINO FUNDAMENTAL INCOMPLETO</option>
                        <option value="ENSINO MÉDIO COMPLETO">ENSINO MÉDIO COMPLETO</option>
                        <option value="ENSINO MÉDIO INCOMPLETO">ENSINO MÉDIO INCOMPLETO</option>
                        <option value="SUPERIOR COMPLETO">SUPERIOR COMPLETO</option>
                        <option value="SUPERIOR INCOMPLETO">SUPERIOR INCOMPLETO</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="">Está empregada:</label>
                    <select class="form-select" aria-label="Default select example" name="empMae" id="emmp2">
                        <option selected></option>
                        <option value="SIM">SIM</option>
                        <option value="NÃO">NÃO</option>
                    </select>
                </div>
            </div>
            <div class="traco3">
                <p id="traco1"></p>
                <h5 id="txt2">Caso o aluno tenha outro responsável</h5>
            </div>
            <div class="row mb-1">
                <div class="col-sm-3">
                    Idade: <input type="text" class="form-control form-control-sm" placeholder="Idade" name="ir" id="ir" >
                </div>
                <div class="col-sm-3">
                    Profissão: <input type="text" class="form-control form-control-sm" placeholder="Profissão" name="pr" id="pr" oninput="handleInput(event)" >
                </div>
                <div class="col-sm-3">
                    Escolaridade:
                <select class="form-select" aria-label="Default select example" name="escol3" id="escol3">
                        <option selected></option>
                        <option value="NENHUMA">NENHUMA</option>
                        <option value="ENSINO FUNDAMENTAL COMPLETO">ENSINO FUNDAMENTAL COMPLETO</option>
                        <option value="ENSINO FUNDAMENTAL INCOMPLETO">ENSINO FUNDAMENTAL INCOMPLETO</option>
                        <option value="ENSINO MÉDIO COMPLETO">ENSINO MÉDIO COMPLETO</option>
                        <option value="ENSINO MÉDIO INCOMPLETO">ENSINO MÉDIO INCOMPLETO</option>
                        <option value="SUPERIOR COMPLETO">SUPERIOR COMPLETO</option>
                        <option value="SUPERIOR INCOMPLETO">SUPERIOR INCOMPLETO</option>
                    </select>
                </div>
                <div class="col-sm-3">
                    <label for="">Está empregado(a):</label>
                    <select class="form-select" aria-label="Default select example" name="emp3" id="emp3">
                        <option selected></option>
                        <option value="SIM">SIM</option>
                        <option value="NÃO">NÃO</option>
                    </select>
                </div>
                <br>
                <br>
                <br>
                <div class="traco2">
                    <p id="traco"></p>
                    <h4 id="txt">Dados referente a família
                    </h4>
                </div>
                <div class="row mb-1">
                    <div class="col-sm-3">
                        <label for="">Moradia</label>
                        <select class="form-select" aria-label="Default select example" name="mor" id="mor">
                            <option selected></option>
                            <option value="PRÓPRIA">PRÓPRIA</option>
                            <option value="ALUGADA">ALUGADA</option>
                            <option value="OUTRA">OUTRA</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        Quantidade de irmãos: <input type="text" class="form-control form-control-sm" placeholder="" name="qi" id="qi" required>
                    </div>
                    <div class="col-sm-6">
                        Quantidade de pessoas que residem na moradia(incluindo o aluno): <input type="text" class="form-control form-control-sm" placeholder="" name="qp" id="qp" required>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-sm-3">
                        <label for="">Renda mensal da família</label>
                        <select class="form-select" aria-label="Default select example" name="rms" id="rms">
                            <option selected></option>
                            <option value="MENOS DE 1 SALÁRIO MÍNIMO">MENOS DE 1 SALÁRIO MÍNIMO</option>
                            <option value="DE 1 A 2 SALÁRIOS MÍNIMOS">DE 1 A 2 SALÁRIOS MÍNIMOS</option>
                            <option value="DE 3 A 4 SALÁRIOS MÍNIMOS">DE 3 A 4 SALÁRIOS MÍNIMOS</option>
                            <option value="DE 4 A 5 SALÁRIOS MÍNIMOS">DE 4 A 5 SALÁRIOS MÍNIMOS</option>
                            <option value="MAIOR QUE 5 SALÁRIOS MÍNIMOS">MAIOR QUE 5 SALÁRIOS MÍNIMOS</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label for="">Com quem o aluno mora</label>
                        <select class="form-select" aria-label="Default select example" name="am" id="am">
                            <option selected></option>
                            <option value="PAI">PAI</option>
                            <option value="MÃE">MÃE</option>
                            <option value="AMBOS">AMBOS</option>
                            <option value="OUTROS">OUTROS</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="">O aluno tem computador com acesso a internet?</label>
                        <select class="form-select" aria-label="Default select example" name="tc" id="tc">
                            <option selected></option>
                            <option value="SIM">SIM</option>
                        <option value="NÃO">NÃO</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row mb-1">
                    <div class="col-sm-4">
                        <label for="">A família recebe algum benefício do governo?</label>
                        <select class="form-select" aria-label="Default select example" name="bg" id="bg">
                            <option selected></option>
                            <option value="SIM">SIM</option>
                        <option value="NÃO">NÃO</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="">Com qual transporte o aluno chega a escola?</label>
                        <select class="form-select" aria-label="Default select example" name="te" id="te">
                            <option selected></option>
                            <option value="A PÉ">A PÉ</option>
                            <option value="BICICLETA">BICICLETA</option>
                            <option value="TRANSPORTE COLETIVO">TRANSPORTE COLETIVO</option>
                            <option value="TRANSPORTE PRÓPRIO">TRANSPORTE PRÓPRIO</option>
                            <option value="TRANSPORTE ESCOLAR">TRANSPORTE ESCOLAR</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="">Onde o aluno concluiu o ensino fundamental?</label>
                        <select class="form-select" aria-label="Default select example" name="cef" id="cef">
                            <option selected></option>
                            <option value="ESCOLA PÚBLICA">ESCOLA PÚBLICA</option>
                            <option value="ESCOLAR PARTICULAR">ESCOLAR PARTICULAR</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row mb-1">
                    <div class="col-sm-5">
                        <label for="">Por qual razão optou pela EEEP?</label>
                        <select class="form-select" aria-label="Default select example" name="pqeep" id="pqeep">
                            <option selected></option>
                            <option value="É PERTO DA ESCOLA">É PERTO DA ESCOLA</option>
                            <option value="PELA JORNADA INTEGRAL">PELA JORNADA INTEGRAL</option>
                            <option value="PELO CURSO TÉCNICO">PELO CURSO TÉCNICO</option>
                            <option value="PELA QUALIDADE DE ENSINO">PELA QUALIDADE DE ENSINO</option>
                            <option value="PARA SE PREPARAR PARA VESTIBULARES">PARA SE PREPARAR PARA VESTIBULARES</option>
                            <option value="PARA SE PREPARAR PARA JORNADA DE TRABALHO">PARA SE PREPARAR PARA JORNADA DE TRABALHO</option>
                        </select>
                    </div>
                    <div class="col-sm-7">
                        <label for="">O que você sabe sobre o curso profissional que o aluno cursará na escola?</label>
                        <select class="form-select" aria-label="Default select example" name="ssc" id="ssc">
                            <option selected></option>
                            <option value="NADA SEI">NADA SEI</option>
                            <option value="POUCO SEI">POUCO SEI</option>
                            <option value="TENHO NOÇÕES BÁSICAS">TENHO NOÇÕES BÁSICAS</option>
                            <option value="CONHEÇO O CURSO">CONHEÇO O CURSO</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row mb-1">
                    <div class="col-sm-5">
                        <label for="">Justifique a escolha do curso profissional que o aluno cursará</label>
                        <select class="form-select" aria-label="Default select example" name="pqc" id="pqc">
                            <option selected></option>
                            <option value="AFINIDADE DO ALUNO COM O CURSO">AFINIDADE DO ALUNO COM O CURSO</option>
                            <option value="SUGESTÃO DA FAMÍLIA">SUGESTÃO DA FAMÍLIA</option>
                            <option value="POR SER UM CURSO CONCEITUADO NO MERCADO DE TRABALHO">POR SER UM CURSO CONCEITUADO NO MERCADO DE TRABALHO</option>
                            <option value="NÃO TINHA OUTRA OPÇÃO">NÃO TINHA OUTRA OPÇÃO</option>
                        </select>
                    </div>
                    <div class="col-sm-7">
                        <label for="">Onde você obteve informações sobre o curso profissional que o aluno cursará?</label>
                        <select class="form-select" aria-label="Default select example" name="oic" id="oic">
                            <option selected></option>
                            <option value="RÁDIO, TV, LIVROS, INTERNET">RÁDIO, TV, LIVROS, INTERNET ...</option>
                            <option value="PROFISSIONAIS QUE ATUAM NA ÁREA">PROFISSIONAIS QUE ATUAM NA ÁREA</option>
                            <option value="NA PRÓPRIA ESCOLA">NA PRÓPRIA ESCOLA</option>
                            <option value="NÃO TIVE INFORMAÇÕES">NÃO TIVE INFORMAÇÕES</option>
                        </select>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="traco2">
                    <p id="traco"></p>
                    <h4 id="txt">Dados referente conclusão do formulário
                    </h4>
                </div>
                <div class="row mb-1">
                    <div class="col-sm-6">
                        Nome do responsável do aluno: <input type="text" name="rpa" placeholder="Responsável do aluno" class="form-control form-control-sm" id="rpa" oninput="handleInput(event)" required>
                    </div>
                    <div class="col-sm-6">
                        Nome do responsável pela matrícula: <input type="text" name="rpm" placeholder="Responsável pela matrícula" class="form-control form-control-sm" id="rpm" oninput="handleInput(event)" required>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col-sm-6">
                        Nome do secretário(a): <input type="text" name="ns" placeholder="Nome do secretário(a)" class="form-control form-control-sm" id="ns" oninput="handleInput(event)" required>
                    </div>
                    <div class="col-sm-3">
                        Data: <input type="date" name="data" class="form-control form-control-sm" id="data" required>
                    </div>
                </div>
                <br><br><br><br>
              <div class="row"><p id="cnt2"></p>
            <h1 id="cnt">Ficha de Saúde</h1></div>
            <br><br><br><br>
                <table class="table table-bordered">
                    <tbody>                        
                        <tr>
                            <th scope="row">1</th>
                            <td style="width:500px"> <label> É dependente em plano de saúde?</label> </td>
                            <td style="width: 150px;"> </i> <select class="form-select" name="dependentePSN" id="dependentePSI">
                            <option>Selecione</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NAO">NAO</option>
                                </select> </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td> <label> Tem algum problema de saúde crônico?</label> </td>
                            <td> <select class="form-select" name="problemaSCN" id="problemaSCI">
                            <option>Selecione</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NAO">NAO</option>
                                </select> </td>
                            <td> </td>
                            <td> </td>

                        </tr>

                        <tr>
                            <th scope="row">3</th>

                            <td>
                                <label> Tem alergia(s)?</label>
                            </td>
                            <td>

                
                                <select class="form-select" name="alergiasN" id="alergiasI" onchange="verifica(this.value)">
                                <option>Selecione</option>
                                <option value="SIM">SIM</option>
                                    <option value="NAO">NAO</option> 
                                   
                                </select>
                            </td>
                            <td style="text-align: center;">
                                <label> Se sim, qual(is)?</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Digite aqui" id="alergiasInpI" class="form-control form-control-sm" name="alergiasInpN" oninput="handleInput(event)" >
                            </td>

                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td> <label> Possui alguma restrição alimentar?</label> </td>

                            <td> <select class="form-select" name="restricaoAlN" id="restricaoAlI"  onchange="verifica1(this.value)">
                            <option>Selecione</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NAO">NAO</option>
                                </select> </td>
                            <td style="text-align: center;">
                                <label> Se sim, qual(is)?</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Digite aqui" id="restAlInpI" class="form-control form-control-sm" name="restAlInpN" oninput="handleInput(event)" >
                            </td>
                        </tr>


                        <tr>
                            <th scope="row">5</th>
                            <td>
                                <label> Já recebeu diagnóstico médico de deficiência?</label>
                            </td>
                            <td>
                                <select class="form-select" name="deficienciaN" id="deficienciaI">
                                <option>Selecione</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NAO">NAO</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>


                        <tr>
                            <th scope="row">6</th>
                            <td>
                                <label> Apresenta alguma dificuldade motora, auditiva, visual, na fala ou emocional?</label>
                            </td>
                            <td style="height: 15px;">
                                <select class="form-select" name="dificuldadeN" id="dificuldadeI">
                                <option>Selecione</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NAO">NAO</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">7</th>
                            <td>
                                <label> Está em tratamento médico? </label>
                            </td>
                            <td>
                                <select class="form-select" name="tratamentoMN" id="tratamentoMI" onchange="verifica2(this.value)">
                                <option>Selecione</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NAO">NAO</option>
                                </select>
                            </td>
                            <td style="text-align: center;">
                                <label> Se sim, qual? E para que doença?</label>
                            </td>
                            <td>
                                <input type="text" id="tratamentoMInI" placeholder="Digite aqui" class="form-control form-control-sm" name="tratamentoMInN" oninput="handleInput(event)" >
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">8</th>
                            <td> <label> Está em uso de alguma medicação? </label> </td>
                            <td>
                                <select class="form-select" name="medicacaoN" id="medicacaoI" onchange="verifica3(this.value)">
                                <option>Selecione</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NAO">NAO</option>
                                </select>
                            </td>
                            <td style="text-align: center;">
                                <label> Qual? Quando encerrará o uso?</label>
                            </td>
                            <td>
                                <input type="text" id="medicacaoInpI" placeholder="Digite aqui" class="form-control form-control-sm" name="medicacaoInpN" oninput="handleInput(event)" >
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">9</th>
                            <td>
                                <label> As vacinas do calendário de vacinação do Ministério da Saúde estão em dia?</label>
                            </td>
                            <td>
                                <select class="form-select" name="vacinaN" id="vacinaI">
                                <option>Selecione</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NAO">NAO</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">10</th>
                            <td>
                                <label> É acompanhado por psicólogo, terapeuta ocupacional ou fonoaudiólogo?</label>
                            </td>
                            <td>
                                <select class="form-select" name="acompanhadoN" id="acompanhadoI">
                                <option>Selecione</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NAO">NAO</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">11</th>
                            <td>
                                <label> Em caso de emergência para quem ligar e em qual número?</label>
                            </td>
                            <td>
                                <select class="form-select" name="emergencia" id="emergencia">
                                <option>Selecione</option>
                                    <option value="PAI">PAI</option>
                                    <option value="MAE">MÃE</option>
                                </select>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <br>
                        <tr>
                            <th scope="row">12</th>
                            <td>
                                <label> Existe alguma outra informação a respeito da saúde do aluno que o responsável queira fazer constar desta ficha?</label>
                            </td>
                            <td>
                                <select class="form-select" name="informacaoN" id="informacaoI" onchange="verifica4(this.value)">
                                <option>Selecione</option>
                                    <option value="SIM">SIM</option>
                                    <option value="NAO">NAO</option>
                                </select>
                            </td>
                            <td style="text-align: center;">
                                <label> Se sim, qual(is)? </label>
                            </td>
                            <td>
                                <input type="text" placeholder="Digite aqui" id="informacaoInpI" name="informacaoInpN" class="form-control form-control-sm" oninput="handleInput(event)" >
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br><br><br><br>
                <div class="row mb-1">
                    <div class="col-sm-8"></div>
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <button type="submit" class="btn btn-outline-success" name="cadastrar">Enviar</button>
                    </div>
                </div>
                <br>
                </form>
        </section>
        <!--  <button type="button" class="btn btn-outline-success" id="btn-topo" title="Voltar ao topo"><i class="fas fa-arrow-up"></i>
    <a href='#t'>voltar</a></button> -->
    </div>
    <br><br>
    <footer>
        <img src="img/logo-mm.svg" alt="Logo da EEEP Manoel Mano" id="rp2">
        <img src="img/./ondas-governo-rodape.png" id="rodape">
    </footer>
    <script src="js/mask.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>