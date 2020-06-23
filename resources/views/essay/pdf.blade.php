<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FOLHA DE REDAÇÃO</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <center style="font-family:Calibri; font-size: 10px">
        <img src="img/fasb.png" alt=""><br>
        <strong>FACULDADE DO SERTÃO BAIANO - FASB</strong> <br>
        Credenciada pela Portaria Ministerial nº 1.387 de 14/11/2008 Publicado no DOU de 17/11/2008<br>
        Transferência de Mantença nº 47 de 26/01/2018, DOU de 29/01/2018<br>
        Mantida pela Faculdades Integradas de Foz do Iguaçu - FAMERCO<br>
        <br><br>
        <strong style="font-family: Arial !important; font-size: 14px">PROCESSO SELETIVO 2020/2</strong><br>
        <strong style="font-family: Arial !important; font-size: 14px">TEXTO SELECIONADO: {{$essay->text}}</strong>

        <br>
        <br>
        <strong style="font-family: Arial !important; font-size: 14px">Nome: {{$essay->user->name}} - Data: {{date("d/m/Y", strtotime($essay->created_at))}}</strong>
        <br><br>
    </center>

    <div class="justify-content-md-center text-justify">
        {!! $essay->essay !!}
    </div>
</body>
</html>