<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CERTIFICADO</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body{
            color: #001232;
        }
        p.aluno{
            position: absolute;
            font-size: 3rem;
            font-weight: 900;
            font-family: Arial, Helvetica, sans-serif;
            margin-left: auto;
            margin-right: auto;
            width: 24em;
            text-align: center;
            margin-top: 400px;
        }
        .curso{
            position: absolute;
            font-size: 2.5rem;
            font-weight: 900;
            font-family: Arial, Helvetica, sans-serif;
            margin-left: auto;
            margin-right: auto;
            width: 24em;
            text-align: center;
            margin-top: 535px;
        }
        .data_realizacao{
            position: absolute;
            margin-top: 593px;
            margin-left: 465px;
            font-size: 13px;
            /* font-weight: 900; */
        }
        .coordenador{
            position: absolute;
            margin-top: 707px;
            margin-left: 150px;
            font-size: 16px;
        }
        .data_emissao{
        position: absolute;
        margin-top: 648px;
        margin-left: 827px;
        font-size: 16px;
        }
        .palestrante{
            position: absolute;
            margin-top: 890px;
            margin-left: 430px;
            font-size: 16px;
        }
        .assunto{
            position: absolute;
            margin-top: 910px;
            margin-left: 430px;
            font-size: 16px;
        }
        .periodo_realizacao{
            position: absolute;
            margin-top: 930px;
            margin-left: 430px;
            font-size: 16px;
        }
        .tabelinha{
            width: 60%;
            position: absolute;
            margin-top: 990px;
            margin-left: 80px;  
        }
        .qrcode{
            position: absolute;
        margin-top: 1392px;
        margin-left: 170px;
        font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="main">
        <p class="aluno">{{ $certificate->name }}</p>   
        <p class="curso">{{ $certificate->course->name }}</p>
    </div>   
    <p class="data_realizacao">{{ date('d/m/Y', strtotime($certificate->course->realization_date)) }} num total de {{ $certificate->course->class_hours }} horas aulas.</p>   
    <p class="coordenador"> {{ $certificate->course->coordinator }} </p>   
    <p class="data_emissao">Porto Alegre, {{ date('d/m/Y', strtotime($certificate->created_at)) }}</p>   
    <p class="palestrante">Palestrante: {{ $certificate->course->speaker }} </p>   
    <p class="assunto">{{ $certificate->course->lecture }}</p>   
    <p class="periodo_realizacao">Periodo de realização: {{ date('d/m/Y', strtotime($certificate->course->realization_date)) }}</p>

    <table class="table tabelinha">
        <thead>
            <th>Instrutor(a)</th>
            <th>Disciplina</th>
            <th>Assuntos Abordados</th>
        </thead>
        <tbody>
            @foreach ($certificate->course->verses as $item)
                <tr>
                    <td>{{ $item->teachers }}</td>
                    <td>{{ $item->discipline }}</td>
                    <td>{!! $item->subjects !!}</td>
                </tr>               
            @endforeach
        </tbody>
    </table>
    <p class="qrcode">    
        {!! QrCode::size(150)->generate('https://faculdadesogipa.edu.br/online/'.$certificate->validation_code); !!}
        <br>
        <span style="font-size: 10px;">https://faculdadesogipa.edu.br/online/{{ $certificate->validation_code }}</span>
    </p>
    <img src="{{ asset('img/certificado-frente.jpg') }}" alt="">
    <img src="{{ asset('img/certificado-verso.jpg') }}" alt="">
</body>
</html>