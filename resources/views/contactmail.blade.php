<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Grazie per averci contattato sig/sig.ra {{$contact['name']}}
    </h1>
    <h3>Questo è il messaggio che ci hai inviato:</h3>
    <p>{{$contact['message']}}</p>
    <h3>Volevo ringraziare il mittente:</h3>
    <p>{{$contact['email']}}</p>

</body>
</html>