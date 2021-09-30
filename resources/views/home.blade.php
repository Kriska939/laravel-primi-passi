<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello {{$name}}</h1>
    <h3>Questo è il testo nei dati:</h3>
    <p>{{$text}}</p>
    <h3>Questo è l'elenco studenti:</h3>
    <ul>
        @foreach($lista_studenti as $student)
        <li>{{$student}}</li>
        @endforeach
    </ul>
</body>
</html>