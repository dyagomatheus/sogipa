@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if (auth()->user()->essay)
                        Prova finalizada!
                    @else
                        Prova
                    @endif
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (auth()->user()->essay && auth()->user()->essay->status == false)
                        <h5>Veja informações abaixo</h5>
                    <p style="font-size: 14px; text-align: justify;"><b><font color="#ff2e34">INSTRUÇÕES PARA MATRICULA DOS CLASSIFICADOS NO PROCESSO SELETIVO 2020/2</font></b></p>


<p style="font-size: 14px; text-align: justify;"><b><font color="#ff2e34">CLASSIFICAÇÃO E SELEÇÃO DOS CANDIDATOS</font></b><br>

<font color="#000"><b>Classificação:</b> Os candidatos são classificados segundo a pontuação obtida na prova, em ordem crescente. <br>

<b>Desclassificação:</b> São desclassificados os candidatos que se utilizarem de fraude na prova de redação ou obtiverem pontuação inferior a 20 (vinte) pontos na redação.<br>

<b>Aprovação:</b> Os classificados estão selecionados para realizarem a matrícula no 2º semestre letivo de 2020.<br>

<b>Desempate:</b> Sucessivamente, selecionam-se os candidatos de acordo com os seguintes critérios: 1) data de pagamento da inscrição e 2) maior idade.</font></p>


<p style="font-size: 14px; text-align: justify;"><b><font color="#ff2e34">PUBLICAÇÃO DOS RESULTADOS</font></b><br>

<font color="#000"><b>APROVADOS:</b><br> A lista dos aprovados classificados será divulgada após 48h da realização da prova, no site da Faculdade Sogipa de Educação Física – www.faculdadesogipa.edu.br  e na Secretaria Geral da Faculdade Sogipa de Educação Física, Av. Benjamin Constant, 80 – Bairro São João – Porto Alegre – RS.</font></p>



<p style="font-size: 14px; text-align: justify;"><b><font color="#ff2e34">MATRÍCULAS</font></b><br>

<font color="#000"><b>CLASSIFICADOS</b><br>
<b>Data:</b> A partir da divulgação do resultado<br>
<b>Horário:</b> 09h às 11h e das 14h às 19h<br>
<b>Local:</b> Secretaria Geral da Faculdade Sogipa de Educação Física, Av. Benjamin Constant, 80 – Bairro São João – Porto Alegre – RS</font></p>



<p style="font-size: 14px; text-align: justify;"><b><font color="#ff2e34">DOCUMENTOS PARA MATRÍCULA</font></b><br>
<font color="#000">A documentação necessária para efetivar a matrícula é o documento <b>ORIGINAL e a CÓPIA SIMPLES DE</b>:
<br>
a) 01 (uma) foto 3x4 <b>recente</b><br>
b) Cédula de Identidade (RG) <u>(copia e original)</u><br>
c) CPF <u>(copia e original)</u><br>
d) Certidão de Nascimento ou Casamento  <u>(copia e original)</u><br>
e) Comprovante de endereço residencial (conta de agua, luz ou telefone fixo) <u>(copia e original)</u><br>
f) Histórico Escolar <b>original</b> e Certificado de Conclusão do Ensino Médio original (ou documento equivalente).<br>
g) Título de Eleitor e comprovante de votação, se maior de 18 anos <u>(copia e original)</u><br>
h) Certificado de Reservista, se candidato do sexo masculino <u>(copia e original)</u><br>

<b>Obs.:</b> Se candidato menor de 18 anos, apresentar-se acompanhado do responsável, munido dos originais e cópias do RG e CPF e comprovante de residência do responsável.</font></p>
                    @elseif(auth()->user()->essay->time_left <= 0 && auth()->user()->essay->status == true)
                    <h5>Desculpe! Seu tempo de prova terminou e você não concluiu.</h5>
                    @else
                    <a href="{{route('initAvaliation')}}" class="btn btn-primary">Fazer Avaliação</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
