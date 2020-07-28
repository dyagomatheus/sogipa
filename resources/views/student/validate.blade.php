<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado Válido</title>
</head>
<body>
    <p>Certificado válido.</p>
    <p>Aluno: {{ $certificate->name }}</p>
    <p>Curso: {{ $certificate->course->name }}</p>
    <p>Horas Aulas: {{ $certificate->course->class_hours }}</p>
    <p>Data Emissão: {{ date('d/m/Y H:i:s', strtotime($certificate->created_at)) }}</p>
    <p>Periodo de realização: {{ date('d/m/Y', strtotime($certificate->course->realization_date)) }}</p>
</body>
</html>