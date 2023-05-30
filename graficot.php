<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/iconmm.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style/dados.css">
    <title>EEEP Manoel Mano | Relatório Sociecômico</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Quantidade de Alunos, cada curso -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Cursos', 'Quantidade de Alunos', 'Porcentagem'],
            <?php
              include "conexao.php";

              // Verifica erros na conexão com o banco de dados
              if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
              }

              // Consulta o total de alunos em cada curso
              $sql = "SELECT curso, COUNT(*) AS total_alunos, CONCAT(ROUND((COUNT(*) / (SELECT COUNT(*) FROM form3)) * 100, 2), '%') AS porcentagem_alunos FROM form3 WHERE curso IN ('comércio', 'administração', 'informática', 'enfermagem') GROUP BY curso";
              $result = mysqli_query($mysqli, $sql);

              // Verifica erros na consulta
              if(!$result) {
                die("Erro ao executar a consulta: " . $mysqli->error);
              }

              // Monta o array de dados do gráfico
              while($dados = mysqli_fetch_array($result)) {
                echo "['" . $dados['curso'] . "', " . $dados['total_alunos'] . ", '" . $dados['porcentagem_alunos'] . "'],";
              }

              $mysqli->close();
            ?>
        ]);
        var options = {
          
            title: 'Total por Curso',
            subtitle: 'Porcentagem de cada curso na escola',
          colors: ['#00853B', '#D47402'] 
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material01'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <!-- Porcetagem de mães empregadas, cada aluno -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Mães Empregadas', 'Quantidade de Mães', 'Porcentagem'],
            <?php
              include "conexao.php";

              // Verifica erros na conexão com o banco de dados
              if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
              }

              // Consulta o total de alunos em cada curso
              $sql = "SELECT empregadoMae, COUNT(*) AS quantidade, CONCAT(FORMAT(COUNT(*) * 100 / SUM(COUNT(*)) OVER(), 2), '%') AS porcentagem FROM form3 GROUP BY empregadoMae; ";
              $result = mysqli_query($mysqli, $sql);

              // Verifica erros na consulta
              if(!$result) {
                die("Erro ao executar a consulta: " . $mysqli->error);
              }

              // Monta o array de dados do gráfico
              while($dados = mysqli_fetch_array($result)) {
                echo "['" . $dados['empregadoMae'] . "', " . $dados['quantidade'] . ", '" . $dados['porcentagem'] . "'],";
              }

              $mysqli->close();
            ?>
        ]);
         var options = {
         
            title: 'Quantidade de Mães Empregadas',
            subtitle: 'Porcentagem de cada Mãe do aluno',
            colors: ['#00853B', '#D47402'] 
                  };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material02'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

        <!-- Porcetagem de pais empregadas, cada aluno -->
        <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Pais Empregadas', 'Quantidade de Pais', 'Porcentagem'],
            <?php
              include "conexao.php";

              // Verifica erros na conexão com o banco de dados
              if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
              }

              // Consulta o total de alunos em cada curso
              $sql = "SELECT empregado, COUNT(*) AS quantidade, CONCAT(FORMAT(COUNT(*) * 100 / SUM(COUNT(*)) OVER(), 2), '%') AS porcentagem FROM form3 GROUP BY empregado; ";
              $result = mysqli_query($mysqli, $sql);

              // Verifica erros na consulta
              if(!$result) {
                die("Erro ao executar a consulta: " . $mysqli->error);
              }

              // Monta o array de dados do gráfico
              while($dados = mysqli_fetch_array($result)) {
                echo "['" . $dados['empregado'] . "', " . $dados['quantidade'] . ", '" . $dados['porcentagem'] . "'],";
              }

              $mysqli->close();
            ?>
        ]);
       var options = {
         
            title: 'Quantidade de Pais Empregadas',
            subtitle: 'Porcentagem de cada pai do aluno',
            colors: ['#00853B', '#D47402'] 
                  };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material03'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <!-- Porcetagem da escolaridade dos pais, cada aluno -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Escolaridade', 'Quantidade de Pais' ,'Porcentagem'],
            <?php
              include "conexao.php";

              // Verifica erros na conexão com o banco de dados
              if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
              }

              // Consulta o total de alunos em cada curso
              $sql = "SELECT escolaridadePai, COUNT(*) AS quantidade, CONCAT(FORMAT(COUNT(*) * 100 / SUM(COUNT(*)) OVER(), 2), '%') AS porcentagem FROM form3 GROUP BY escolaridadePai; ";
              $result = mysqli_query($mysqli, $sql);

              // Verifica erros na consulta
              if(!$result) {
                die("Erro ao executar a consulta: " . $mysqli->error);
              }

              // Monta o array de dados do gráfico
              while($dados = mysqli_fetch_array($result)) {
                echo "['" . $dados['escolaridadePai'] . "', " . $dados['quantidade'] . ", '" . $dados['porcentagem'] . "'],";
              }

              $mysqli->close();
            ?>
        ]);
        var options = {
          
          title: 'Quantidade por Escolaridade',
          subtitle: 'Escolaridade de cada mãe, em toda a escola',
          colors: ['#00853B', '#D47402'] 
      };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material04'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <!-- Porcetagem da escolaridade da mãe, cada aluno -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Escolaridade', 'Quantidade de escolaridade' ,'Porcentagem'],
            <?php
              include "conexao.php";

              // Verifica erros na conexão com o banco de dados
              if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
              }

              // Consulta o total de alunos em cada curso
              $sql = "SELECT escolaridademae, COUNT(*) AS quantidade, CONCAT(FORMAT(COUNT(*) * 100 / SUM(COUNT(*)) OVER(), 2), '%') AS porcentagem FROM form3 GROUP BY escolaridademae; ";
              $result = mysqli_query($mysqli, $sql);

              // Verifica erros na consulta
              if(!$result) {
                die("Erro ao executar a consulta: " . $mysqli->error);
              }

              // Monta o array de dados do gráfico
              while($dados = mysqli_fetch_array($result)) {
                echo "['" . $dados['escolaridademae'] . "', " . $dados['quantidade'] . ", '" . $dados['porcentagem'] . "'],";
              }

              $mysqli->close();
            ?>
        ]);
        var options = {
          
          title: 'Quantidade por Escolaridade',
          subtitle: 'Escolaridade de cada mãe, em toda a escola',
          colors: ['#00853B', '#D47402'] 
      };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material05'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <!-- Pessoas que residem com o aluno -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Reside com o Aluno', 'Quantidade de pessoas' ,'Porcentagem'],
            <?php
              include "conexao.php";

              // Verifica erros na conexão com o banco de dados
              if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
              }

              // Consulta o total de alunos em cada curso
              $sql = "SELECT alunoMora, COUNT(*) AS quantidade, CONCAT(FORMAT(COUNT(*) * 100 / SUM(COUNT(*)) OVER(), 2), '%') AS porcentagem FROM form3 GROUP BY alunoMora; ";
              $result = mysqli_query($mysqli, $sql);

              // Verifica erros na consulta
              if(!$result) {
                die("Erro ao executar a consulta: " . $mysqli->error);
              }

              // Monta o array de dados do gráfico
              while($dados = mysqli_fetch_array($result)) {
                echo "['" . $dados['alunoMora'] . "', " . $dados['quantidade'] . ", '" . $dados['porcentagem'] . "'],";
              }

              $mysqli->close();
            ?>
        ]);
        var options = {
          
            title: 'Quantidade por cada aluno',
            subtitle: 'Quantidade de pessoas que residem com o aluno',
            colors: ['#00853B', '#D47402'] 
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material06'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <!-- Tipo de moradia -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Reside com o Aluno', 'Quantidade de pessoas' ,'Porcentagem'],
            <?php
              include "conexao.php";

              // Verifica erros na conexão com o banco de dados
              if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
              }

              // Consulta o total de alunos em cada curso
              $sql = "SELECT moradia, COUNT(*) AS quantidade, CONCAT(FORMAT(COUNT(*) * 100 / SUM(COUNT(*)) OVER(), 2), '%') AS porcentagem FROM form3 GROUP BY moradia; ";
              $result = mysqli_query($mysqli, $sql);

              // Verifica erros na consulta
              if(!$result) {
                die("Erro ao executar a consulta: " . $mysqli->error);
              }

              // Monta o array de dados do gráfico
              while($dados = mysqli_fetch_array($result)) {
                echo "['" . $dados['moradia'] . "', " . $dados['quantidade'] . ", '" . $dados['porcentagem'] . "'],";
              }

              $mysqli->close();
            ?>
        ]);
            var options = {
         
            title: 'Quantidade por cada casa',
            subtitle: 'Quantidade de pessoas que residem com o aluno',
            colors: ['#00853B', '#D47402'] 
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material07'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

        <!-- Renda mensal -->
        <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Rensa Mensal', 'Quantidade de famílias' ,'Porcentagem'],
            <?php
              include "conexao.php";

              // Verifica erros na conexão com o banco de dados
              if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
              }

              // Consulta o total de alunos em cada curso
              $sql = "SELECT rendaMensalFamiliar, COUNT(*) AS quantidade, CONCAT(FORMAT(COUNT(*) * 100 / SUM(COUNT(*)) OVER(), 2), '%') AS porcentagem FROM form3 GROUP BY rendaMensalFamiliar; ";
              $result = mysqli_query($mysqli, $sql);

              // Verifica erros na consulta
              if(!$result) {
                die("Erro ao executar a consulta: " . $mysqli->error);
              }

              // Monta o array de dados do gráfico
              while($dados = mysqli_fetch_array($result)) {
                echo "['" . $dados['rendaMensalFamiliar'] . "', " . $dados['quantidade'] . ", '" . $dados['porcentagem'] . "'],";
              }

              $mysqli->close();
            ?>
        ]);
         var options = {
      
            title: 'Renda mensal por cada casa',
            subtitle: 'Renda mensal de cada família do aluno',
            colors: ['#00853B', '#D47402'] 
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material08'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

      <!-- Aonde o aluno concluiu o ensino fundamental -->
      <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Tipos de Escola', 'Quantidade de Alunos' ,'Porcentagem'],
            <?php
              include "conexao.php";

              // Verifica erros na conexão com o banco de dados
              if($mysqli->connect_errno) {
                die("Erro ao conectar com o banco de dados: " . $mysqli->connect_error);
              }

              // Consulta o total de alunos em cada curso
              $sql = "SELECT alunoEnsinoFundamental, COUNT(*) AS quantidade, CONCAT(FORMAT(COUNT(*) * 100 / SUM(COUNT(*)) OVER(), 2), '%') AS porcentagem FROM form3 GROUP BY alunoEnsinoFundamental; ";
              $result = mysqli_query($mysqli, $sql);

              // Verifica erros na consulta
              if(!$result) {
                die("Erro ao executar a consulta: " . $mysqli->error);
              }

              // Monta o array de dados do gráfico
              while($dados = mysqli_fetch_array($result)) {
                echo "['" . $dados['alunoEnsinoFundamental'] . "', " . $dados['quantidade'] . ", '" . $dados['porcentagem'] . "'],";
              }

              $mysqli->close();
            ?>
        ]);
       var options = {
          
            title: 'Quantidade por cada aluno',
            subtitle: 'Termino do ensino fundamental',
            colors: ['#00853B', '#D47402'] 
        };
        var chart = new google.charts.Bar(document.getElementById('columnchart_material09'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
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
                            <li><a class="dropdown-item" href="#">Relatório de Saúde</a></li>
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
            <h1 id="cnt">Visão geral dos alunos do 1ª Ano 2023  </h1>
            <br>
            <br>
            <br>
            <br>
            <div class="charts">
              <div id="columnchart_material01" style="height: 500px;"></div>
            </div>
    </section>
    <section class="bcgb">
            <span id="t"></span>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Mães Empregadas  </h1>
            <br>
            <br>
            <br>
            <br>
            <div class="charts">
              <div id="columnchart_material02" style="height: 500px;"></div>
            </div>
    </section>
    <section class="bcgb">
            <span id="t"></span>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Pais Empregados</h1>
            <br>
            <br>
            <br>
            <br>
            <div class="charts">
              <div id="columnchart_material03" style="height: 500px;"></div>
            </div>
    </section>
    <section class="bcgb">
            <span id="t"></span>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Escolaridade do Pai</h1>
            <br>
            <br>
            <br>
            <br>
            <div class="charts">
              <div id="columnchart_material04" style="height: 500px;"></div>
            </div>
    </section>
    <section class="bcgb">
            <span id="t"></span>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Escolaridade da Mãe</h1>
            <br>
            <br>
            <br>
            <br>
            <div class="charts">
              <div id="columnchart_material05" style="height: 500px;"></div>
            </div>
    </section>
    <section class="bcgb">
            <span id="t"></span>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Pessoas que Residem com o Aluno</h1>
            <br>
            <br>
            <br>
            <br>
            <div class="charts">
              <div id="columnchart_material06" style="height: 500px;"></div>
            </div>
    </section>
    <section class="bcgb">
            <span id="t"></span>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Tipo de Moradia</h1>
            <br>
            <br>
            <br>
            <br>
            <div class="charts">
              <div id="columnchart_material07" style="height: 500px;"></div>
            </div>
    </section>
    <section class="bcgb">
            <span id="t"></span>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Renda Mensal</h1>
            <br>
            <br>
            <br>
            <br>
            <div class="charts">
              <div id="columnchart_material08" style="height: 500px;"></div>
            </div>
    </section>
    <section class="bcgb">
            <span id="t"></span>
            <br>
            <p id="cnt2"></p>
            <h1 id="cnt">Aonde o Aluno Concluiu o Ensino Fundamental</h1>
            <br>
            <br>
            <br>
            <br>
            <div class="charts">
              <div id="columnchart_material09" style="height: 500px;"></div>
            </div>
    </section>
    <br><br><br><br>
                <div class="row mb-1">
                    <div class="col-sm-8"></div>
                    <div class="d-grid gap-2 col-4 mx-auto" download="relatorio.pdf">
                        <a href="gerar_pdf.php">
                          <button type="submit" class="btn btn-outline-success" name="relatorio">Baixar Relatórios</button>
                        </a>
                    </div>
                </div>
                <br>
    </div>
  </body>
</html>
