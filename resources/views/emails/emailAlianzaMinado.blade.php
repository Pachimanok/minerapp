<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    Hola MinerApp,<br>

    {{ $lo_minado->user}} ha registraodo el siguiente minado de la alianza {{ $lo_minado->alianza}}: <br>

    ID: {{ $lo_minado->id}} <br>
    Monto Total: {{ $lo_minado->monto}} <br>
    Monto de Comision: {{ $lo_minado->comision}} <br>
    Pago: {{ $lo_minado->tipo_pago}} - {{ $lo_minado->metodo_pago}} <br>
    Fecha de pago: {{ $lo_minado->fecha_pago}}  <br>
    Fecha de entrega: {{ $lo_minado->fecha_entrega}}  <br>

    <h2>Comprador:</h2>
    Parentesco: {{ $lo_minado->parentesco}}  <br>
    Email: {{ $lo_minado->email}}  <br>

    
    Atte. La Plataforma.


</body>
</html>
