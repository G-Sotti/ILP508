<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Índice de Massa Corpórea (IMC)</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Cálculo IMC</h2>
            <div class="conteudo-painel">
                <p>IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o peso ideal de cada pessoa.</p>
                <p>O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado. Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.</p>
                <p>Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os índices da tabela. Importante: siga os exemplos e use pontos como separadores.</p>
                
            </div>
        </div>

        <div class="painel">
            <h2>Veja a interpretação do IMC</h2>
            <div class="conteudo-painel">
                <form action="{{url('/indice')}}" method="get">
                <label for="altura">Altura em cm (ex.: 170)</label>
                <input type="int" class="campoTexto"  name="altura" required/>

                <label for="peso">Peso em kg (ex.: 69,2)</label>
                <input type="float" class="campoTexto" name="peso" required/>

                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col">IMC</th>
                        <th scope="col">CLASSIFICAÇÃO</th>
                        <th scope="col">OBESIDADE (GRAU)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>MENOR QUE 18,5</td>
                        <td>MAGREZA</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>ENTRE 18,5 E 24,9</td>
                        <td>NORMAL</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>ENTRE 25,0 E 29,9</td>
                        <td>SOBREPESO</td>
                        <td>I</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>ENTRE 30,0 E 39,9</td>
                        <td>OBESIDADE</td>
                        <td>II</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>MAIOR QUE 40,0</td>
                        <td>OBESIDADE GRAVE</td>
                        <td>III</td>
                    </tr>
                    </tbody>
                </table>
                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </div>

    </main>
</body>
</html>