<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'LabFoto') }} - Contrato - {{ $data->customer->couple_name }}</title>
    <link rel="icon" href="{{ asset('image/logo_labfoto.svg') }}" sizes="any" type="image/svg+xml">

    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <style>
        html{
            margin: 20px 20px;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            font-size: 12px;
            font-weight: bold;
        }
        th {
            background-color: #dddddd;
        }
        .footer {
            font-size: 12px;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
    </style>

    <?php
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
    ?>
</head>
<body style="font-family: Arial, Helvetica, sans-serif">
    <p style="text-align: center"><img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'/image/logo.png';?>" width="90px" heigth="90px" /></p>
    <h5 style="text-align: center"><strong>CONTRATO PARTICULAR DE PRESTAÇÃO DE SERVIÇO DE FOTOGRAFIA</strong></h5>
    <p style="font-size: 13px"><strong>TIPO DE EVENTO:
        @if ($data->event_type == 1)
            CASAMENTO
        @elseif ($data->event_type == 2)
            15 ANOS
        @else
            FORMATURA
        @endif
    </strong>
    </p>
    <p style="font-size: 13px"><strong>NOME DO CASAL: {{ $data->customer->couple_name }}</strong></p>
    <p style="font-size: 12px">Pelo presente instrumento particular, de um lado <strong>CONTRATANTE:</strong> {{ $data->customer->contract_responsible }}</p>
    <p style="font-size: 12px">CPF: {{ $data->customer->document }}</p>
    <p style="font-size: 12px">ENDEREÇO: {{ $data->customer->address . ' - ' . $data->customer->district }}</p>
    <p style="font-size: 12px">CEL 1: {{ $data->customer->phone_a }}</p>
    <p style="font-size: 12px">CEL 2: {{ $data->customer->phone_b }}</p>
    <p style="font-size: 12px">E-MAIL: {{ $data->customer->email }}</p>
    <hr>
    <p  style="font-size: 12px; text-align:justify;">E do outro lado aqui denominado CONTRATADO, FRIGOLETTO’S FOTOS Razão Social : GIZELE FRIGOLETTO COTA 140.140.327-10, sob CNPJ
        24.933.816/0001-36 Situada à Rua Maria do Carmo Castro 75, apt 101, Cep : 23093-270 – Rio de Janeiro - RJ. Têm entre si, justo e contratado a
        prestação de SERVIÇOS DE COBERTURA FOTOGRÁFICA que se regerá pelas condições seguintes.</p>
    <h6 style="text-align: center"><strong>OBJETIVO DO CONTRATO</strong></h6>
    <p style="font-size: 12px">1) O objeto deste contrato é a prestação de <strong>{{ $data->service_type }}</strong></p>
    <p style="font-size: 12px">2) Quantidade de Profissionais
        @switch($data->professionals_total)
            @case(1)
                <strong>( X ) 1</strong> (   ) 2 (   ) 3 (   ) 4
                @break
            @case(2)
                (   ) 1 <strong>( X ) 2</strong> (   ) 3 (   ) 4
                @break
            @case(3)
                (   ) 1 (   ) 2 <strong>( X ) 3</strong> (   ) 4
                @break
            @case(4)
                (   ) 1 (   ) 2 (   ) 3 <strong>( X ) 4</strong>
                @break
            @default
                (   ) 1 (   ) 2 (   ) 3 (   ) 4
        @endswitch
    </p>
    <p style="font-size: 12px">
        3)
        @switch($data->service_type)
            @case(1)
                <strong>( X ) SOMENTE CASAMENTO RELIGIOSO</strong>  (   ) RECEPÇÃO CASAMENTO   (   ) SOMENTE CIVIL
                (   ) CASAMENTO E RECEPÇÃO MESMO LOCAL    (   ) CASAMENTO E RECEPÇÃO EM LOCAIS DIFERENTES    (   ) BATIZADO IGREJA
                (   ) ANIVERSÁRIO INFANTIL    (   ) BATIZADO+RECEPÇÃO   (   ) CIVIL+RECEPÇÃO     (   ) CORPORATIVO   (   ) ANIVERSÁRIO DEBUTANTE
                (   ) OUTROS
                @break
            @case(2)
                (   ) SOMENTE CASAMENTO RELIGIOSO  <strong>( X ) RECEPÇÃO CASAMENTO</strong>   (   ) SOMENTE CIVIL
                (   ) CASAMENTO E RECEPÇÃO MESMO LOCAL    (   ) CASAMENTO E RECEPÇÃO EM LOCAIS DIFERENTES    (   ) BATIZADO IGREJA
                (   ) ANIVERSÁRIO INFANTIL    (   ) BATIZADO+RECEPÇÃO   (   ) CIVIL+RECEPÇÃO     (   ) CORPORATIVO   (   ) ANIVERSÁRIO DEBUTANTE
                (   ) OUTROS
                @break
            @case(3)
                (   ) SOMENTE CASAMENTO RELIGIOSO  (   ) RECEPÇÃO CASAMENTO   <strong>( X ) SOMENTE CIVIL</strong>
                (   ) CASAMENTO E RECEPÇÃO MESMO LOCAL    (   ) CASAMENTO E RECEPÇÃO EM LOCAIS DIFERENTES    (   ) BATIZADO IGREJA
                (   ) ANIVERSÁRIO INFANTIL    (   ) BATIZADO+RECEPÇÃO   (   ) CIVIL+RECEPÇÃO     (   ) CORPORATIVO   (   ) ANIVERSÁRIO DEBUTANTE
                (   ) OUTROS
                @break
            @case(4)
                (   ) SOMENTE CASAMENTO RELIGIOSO  (   ) RECEPÇÃO CASAMENTO   (   ) SOMENTE CIVIL
                <strong>( X ) CASAMENTO E RECEPÇÃO MESMO LOCAL</strong>    (   ) CASAMENTO E RECEPÇÃO EM LOCAIS DIFERENTES    (   ) BATIZADO IGREJA
                (   ) ANIVERSÁRIO INFANTIL    (   ) BATIZADO+RECEPÇÃO   (   ) CIVIL+RECEPÇÃO     (   ) CORPORATIVO   (   ) ANIVERSÁRIO DEBUTANTE
                (   ) OUTROS
                @break
            @case(5)
                (   ) SOMENTE CASAMENTO RELIGIOSO  (   ) RECEPÇÃO CASAMENTO   (   ) SOMENTE CIVIL
                (   ) CASAMENTO E RECEPÇÃO MESMO LOCAL    <strong>( X ) CASAMENTO E RECEPÇÃO EM LOCAIS DIFERENTES</strong>    (   ) BATIZADO IGREJA
                (   ) ANIVERSÁRIO INFANTIL    (   ) BATIZADO+RECEPÇÃO   (   ) CIVIL+RECEPÇÃO     (   ) CORPORATIVO   (   ) ANIVERSÁRIO DEBUTANTE
                (   ) OUTROS
                @break
            @case(6)
                (   ) SOMENTE CASAMENTO RELIGIOSO  (   ) RECEPÇÃO CASAMENTO   (   ) SOMENTE CIVIL
                (   ) CASAMENTO E RECEPÇÃO MESMO LOCAL    (   ) CASAMENTO E RECEPÇÃO EM LOCAIS DIFERENTES    <strong>( X ) BATIZADO IGREJA</strong>
                (   ) ANIVERSÁRIO INFANTIL    (   ) BATIZADO+RECEPÇÃO   (   ) CIVIL+RECEPÇÃO     (   ) CORPORATIVO   (   ) ANIVERSÁRIO DEBUTANTE
                (   ) OUTROS
                @break
            @case(7)
                (   ) SOMENTE CASAMENTO RELIGIOSO  (   ) RECEPÇÃO CASAMENTO   (   ) SOMENTE CIVIL
                (   ) CASAMENTO E RECEPÇÃO MESMO LOCAL    (   ) CASAMENTO E RECEPÇÃO EM LOCAIS DIFERENTES    (   ) BATIZADO IGREJA
                <strong>( X ) ANIVERSÁRIO INFANTIL    (   ) BATIZADO+RECEPÇÃO   (   ) CIVIL+RECEPÇÃO     (   ) CORPORATIVO   (   ) ANIVERSÁRIO DEBUTANTE
                (   ) OUTROS
                @break
            @case(8)
                (   ) SOMENTE CASAMENTO RELIGIOSO  (   ) RECEPÇÃO CASAMENTO   (   ) SOMENTE CIVIL
                (   ) CASAMENTO E RECEPÇÃO MESMO LOCAL    (   ) CASAMENTO E RECEPÇÃO EM LOCAIS DIFERENTES    (   ) BATIZADO IGREJA
                (   ) ANIVERSÁRIO INFANTIL    <strong>( X ) BATIZADO+RECEPÇÃO</strong>   (   ) CIVIL+RECEPÇÃO     (   ) CORPORATIVO   (   ) ANIVERSÁRIO DEBUTANTE
                (   ) OUTROS
                @break
            @case(9)
                (   ) SOMENTE CASAMENTO RELIGIOSO  (   ) RECEPÇÃO CASAMENTO   (   ) SOMENTE CIVIL
                (   ) CASAMENTO E RECEPÇÃO MESMO LOCAL    (   ) CASAMENTO E RECEPÇÃO EM LOCAIS DIFERENTES    (   ) BATIZADO IGREJA
                (   ) ANIVERSÁRIO INFANTIL    (   ) BATIZADO+RECEPÇÃO   <strong>( X ) CIVIL+RECEPÇÃO</strong>     (   ) CORPORATIVO   (   ) ANIVERSÁRIO DEBUTANTE
                (   ) OUTROS
                @break
            @case(10)
                (   ) SOMENTE CASAMENTO RELIGIOSO  (   ) RECEPÇÃO CASAMENTO   (   ) SOMENTE CIVIL
                (   ) CASAMENTO E RECEPÇÃO MESMO LOCAL    (   ) CASAMENTO E RECEPÇÃO EM LOCAIS DIFERENTES    (   ) BATIZADO IGREJA
                (   ) ANIVERSÁRIO INFANTIL    (   ) BATIZADO+RECEPÇÃO   (   ) CIVIL+RECEPÇÃO     <strong>( X ) CORPORATIVO</strong>   (   ) ANIVERSÁRIO DEBUTANTE
                (   ) OUTROS
                @break
            @case(11)
                (   ) SOMENTE CASAMENTO RELIGIOSO  (   ) RECEPÇÃO CASAMENTO   (   ) SOMENTE CIVIL
                (   ) CASAMENTO E RECEPÇÃO MESMO LOCAL    (   ) CASAMENTO E RECEPÇÃO EM LOCAIS DIFERENTES    (   ) BATIZADO IGREJA
                (   ) ANIVERSÁRIO INFANTIL    (   ) BATIZADO+RECEPÇÃO   (   ) CIVIL+RECEPÇÃO     (   ) CORPORATIVO   <strong>( X ) ANIVERSÁRIO DEBUTANTE</strong>
                (   ) OUTROS
                @break
            @case(12)
                (   ) SOMENTE CASAMENTO RELIGIOSO  (   ) RECEPÇÃO CASAMENTO   (   ) SOMENTE CIVIL
                (   ) CASAMENTO E RECEPÇÃO MESMO LOCAL    (   ) CASAMENTO E RECEPÇÃO EM LOCAIS DIFERENTES    (   ) BATIZADO IGREJA
                (   ) ANIVERSÁRIO INFANTIL    (   ) BATIZADO+RECEPÇÃO   (   ) CIVIL+RECEPÇÃO     (   ) CORPORATIVO   (   ) ANIVERSÁRIO DEBUTANTE
                <strong>( X ) OUTROS</strong>
                @break
            @default
                (   ) SOMENTE CASAMENTO RELIGIOSO  (   ) RECEPÇÃO CASAMENTO   (   ) SOMENTE CIVIL
                (   ) CASAMENTO E RECEPÇÃO MESMO LOCAL    (   ) CASAMENTO E RECEPÇÃO EM LOCAIS DIFERENTES    (   ) BATIZADO IGREJA
                (   ) ANIVERSÁRIO INFANTIL    (   ) BATIZADO+RECEPÇÃO   (   ) CIVIL+RECEPÇÃO     (   ) CORPORATIVO   (   ) ANIVERSÁRIO DEBUTANTE
                (   ) OUTROS
        @endswitch
    </p>

    @switch($data->service_type)
        @case(1)
            <p style="font-size: 13px"><strong>Cartório:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia: </p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Igreja:</strong> <span style="color: red;"> {{ $data->church }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->church_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->church_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->church_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Recepção/Buffet:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Making Of:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>
            @break
        @case(2)
            <p style="font-size: 13px"><strong>Cartório:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia: </p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Igreja:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Recepção/Buffet:</strong> <span style="color: red;"> {{ $data->buffet }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->buffet_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->buffet_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->buffet_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Making Of:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>
            @break
        @case(3)
            <p style="font-size: 13px"><strong>Cartório:</strong> <span style="color: red;"> {{ $data->registry }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->registry_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->registry_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->registry_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Igreja:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Recepção/Buffet:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Making Of:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>
            @break
        @case(4)
            <p style="font-size: 13px"><strong>Cartório:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia: </p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Igreja:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Recepção/Buffet:</strong> <span style="color: red;"> {{ $data->buffet }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->buffet_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->buffet_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->buffet_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Making Of:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>
            @break
        @case(5)
            <p style="font-size: 13px"><strong>Cartório:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia: </p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Igreja:</strong> <span style="color: red;"> {{ $data->church }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->church_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->church_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->church_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Recepção/Buffet:</strong> <span style="color: red;"> {{ $data->buffet }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->buffet_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->buffet_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->buffet_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Making Of:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>
            @break
        @case(6)
            <p style="font-size: 13px"><strong>Cartório:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia: </p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Igreja:</strong> <span style="color: red;"> {{ $data->church }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->church_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->church_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->church_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Recepção/Buffet:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Making Of:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>
            @break
        @case(7)
            <p style="font-size: 13px"><strong>Cartório:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia: </p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Igreja:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Recepção/Buffet:</strong> <span style="color: red;"> {{ $data->buffet }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->buffet_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->buffet_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->buffet_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Making Of:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>
            @break
        @case(8)
            <p style="font-size: 13px"><strong>Cartório:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia: </p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Igreja:</strong> <span style="color: red;"> {{ $data->church }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->church_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->church_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->church_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Recepção/Buffet:</strong> <span style="color: red;"> {{ $data->buffet }} </span></p>
            <p style="font-size: 12px">Endereço:<span style="color: red;"> {{ $data->buffet_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->buffet_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->buffet_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Making Of:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>
            @break
        @case(9)
            <p style="font-size: 13px"><strong>Cartório:</strong> <span style="color: red;"> {{ $data->registry }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->registry_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->registry_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->registry_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Igreja:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Recepção/Buffet:</strong> <span style="color: red;"> {{ $data->reception }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->reception_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->reception_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->reception_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Making Of:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>
            @break
        @case(10)
            <p style="font-size: 13px"><strong>Cartório:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia: </p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Igreja:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Recepção/Buffet:</strong> <span style="color: red;"> {{ $data->reception }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->reception_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->reception_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->reception_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Making Of:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>
            @break
        @case(11)
            <p style="font-size: 13px"><strong>Cartório:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia: </p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Igreja:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Recepção/Buffet:</strong> <span style="color: red;"> {{ $data->reception }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->reception_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->reception_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->reception_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Making Of:</strong> <span style="color: red;"> {{ $data->making_of }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->making_of_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->making_of_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->making_of_time)->format('H:i') }} </span> hs.</p>
            @break
        @case(12)
            <p style="font-size: 13px"><strong>Cartório:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia: </p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Igreja:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Recepção/Buffet:</strong> <span style="color: red;"> {{ $data->reception }} </span></p>
            <p style="font-size: 12px">Endereço: <span style="color: red;"> {{ $data->reception_address }} </span></p>
            <p style="font-size: 12px">que se realizará no dia: <span style="color: red;"> {{ \Carbon\Carbon::parse($data->reception_date)->format('d/m/Y') }} </span></p>
            <p style="font-size: 12px">às <span style="color: red;"> {{ \Carbon\Carbon::parse($data->reception_time)->format('H:i') }} </span> hs.</p>

            <p style="font-size: 13px"><strong>Making Of:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>
            @break
        @default
            <p style="font-size: 13px"><strong>Cartório:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia: </p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Igreja:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Recepção/Buffet:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>

            <p style="font-size: 13px"><strong>Making Of:</strong></p>
            <p style="font-size: 12px">Endereço:</p>
            <p style="font-size: 12px">que se realizará no dia:</p>
            <p style="font-size: 12px">às hs.</p>
    @endswitch

    <div class="footer"><a href="www.frigolettosfotos.com.br" target="_blank">www.frigolettosfotos.com.br</a> - Tel: (21) 97419-8189 - CNPJ: 24.933.816/0001-36</div>
    <p style="page-break-before: always"></p>

    <h6 style="text-align: center"><strong>OBRIGAÇÕES DO CONTRATANTE</strong></h6>

    <p  style="font-size: 12px; text-align:justify;">
        1º O <strong>Contratante</strong> deverá fornecer ao <strong>Contratado</strong> todas as informações necessárias à realização do serviço, devendo especificar os detalhes
        necessários à perfeita execução do mesmo, ou no cronograma enviado uma semana antes do evento, para perfeita execução do mesmo como
        nome legível , pessoas em destaque, informar antecipadamente durante o evento de ocasiões especiais, proporcionar livre acesso da equipe no
        local do  evento.</p>

    <p  style="font-size: 12px; text-align:justify;">
        2º O <strong>contratante</strong> se compromete a verificar existência de ponto de energia para os equipamentos e reservar uma mesa se houver disponibilidade
        para equipe se instalar quando necessário e deixar disponível em local adequado e visível a mesa para que a equipe deixe seus equipamentos e
        pertences, tal como seus assistentes para que o mesmo possa executar com mais rapidez e qualidade seu trabalho caso precise fazer alguma troca
        de algum item e tenha que solicitar ao seu auxiliar.</p>

    <p  style="font-size: 12px; text-align:justify;">
        3º É de responsabilidade do <strong>Contratante</strong> o pagamento dos serviços prestados ao <strong>Contratado</strong> nas datas de vencimento.</p>

    <p  style="font-size: 12px; text-align:justify;">
        4º É de responsabilidade do <strong>Contratante</strong>, danos físicos causados aos equipamentos ou algum membro da equipe por parte de seus convidados ou
        equipe de apoio (ex: segurança, cerimonial, garçom, etc) devendo ressarcir o prejuízo causado ao <strong>Contratado</strong>.</p>

    <p  style="font-size: 12px; text-align:justify;">
        5º É de responsabilidade do <strong>Contratante</strong> qualquer taxa imposta por igreja, salão, estacionamento etc, pois qualquer problema que impeça a
        realização do trabalho ou obrigue a saída da equipe por falta de pagamento, a <strong>Contratada</strong> não se responsabilizará pela não realização dos
        serviços aqui discriminados. Assim também para ensaios em locais que solicitam pagamentos de entrada, ou taxas de deslocamentos (pedágio,
        combustível, etc) devido a distância maior que 80 km dos locais escolhidos para o ensaio pelo contratante. Caso ciente de tal cláusula rubricar:</p>

    <p  style="font-size: 12px; text-align:justify;">
        6º Não havendo possibilidade de exercer nossos serviços com bom êxito, seja ele por falta de energia elétrica, imprevistos vindos de terceiros ou à
        não autorização de algum membro ( religioso, buffet , cartório etc ) a <strong>Contratada</strong> não se responsabilizará pela não realização dos serviços
        solicitados.</p>

    <p  style="font-size: 12px; text-align:justify;">
        7º Todo esforço será feito para execução dos serviços e entrega dos produtos deste contrato. Por se tratar de um evento não controlado, podendo,
        a qualquer momento ocorrer atos naturais e humanos alheios à vontade das partes, não se pode garantir a entrega de qualquer imagem específica.
        Não nos responsabilizamos por fotos perdidas por culpa de terceiros que fazem parte do evento (ex: convidado, familiar, etc) que se posicionem à
        frente, ou passando na frente dos profissionais, impossibilitando o nosso trabalho de ser concluído 100% conforme acordado.</p>

    <p  style="font-size: 12px; text-align:justify;">
        8º O Contratante não se opõe quanto ao uso das imagens pela Contratada, para uso exclusivamente comercial e promocional, sendo usado como
        material (portfólio) de divulgação, como podendo também ser usado inclusive no site www.frigolettosfotos.com.br, mídias sociais, amostras,
        exposições, concursos nacionais ou internacionais, anúncios e publicações. As mesmas fazem parte do seu acervo, não se cogitando, em hipótese
        alguma, a aplicabilidade da Lei 9.610 de 19/2/98 (Lei de Direitos Autorais).</p>

    <p  style="font-size: 12px; text-align:justify;">
        9º É de responsabilidade do  contratante a reserva de uma mesa para que equipe possa se instalar com seu equipamento e com
        assistente caso o mesmo esteja presente.</p>

    <p  style="font-size: 12px; text-align:justify;">
        10° É de responsabilidade do Contratante, fornecer alimentação e bebida a toda a equipe Contratada durante o evento, de
        preferência no mesmo horário que os noivos para que não haja perda de fotos, disponibilizando local adequado, tempo e condições
        para que os mesmos possam dar continuidade ao trabalho. Caso não haja a possibilidade do fornecimento de alimentação e
        bebida, a equipe irá se ausentar do local por 30 min para se alimentar.</p>

    <p  style="font-size: 12px; text-align:justify;">
        11° É de responsabilidade do Contratante tratar com os manobristas, tanto no local da cerimônia quanto da festa, para que os
        CONTRATADOS possam estacionar seus veículos sem qualquer custo, de forma a ganharem agilidade para acessar os locais e
        prepararem seus equipamentos. Caso os Contratados precisem utilizar outros meios para guardar rapidamente e com segurança
        seus veículos, eventuais despesas serão depois reembolsadas pelos Contratados.</p>

    <p  style="font-size: 12px; text-align:justify;">
        12° É de responsabilidade do Contratante orientar a equipe de som e iluminação para que utilizem com moderação efeitos de
        fumaça e, principalmente, raios laser, pois estes recursos podem danificar os equipamentos de fotografia e comprometer
        seriamente a qualidade de captação das imagens.</p>

    <p  style="font-size: 12px; text-align:justify;">
        13° Entende-se por exclusividade dos serviços contratados, aqueles inerentes às empresas concorrentes que prestem o mesmo
        tipo de serviço e/ou serviços similares. Entende-se que a presença de uma outra equipe poderá interferir na qualidade das imagens
        captadas, prejudicando, desta maneira, o resultado final do serviço prestado.</p>

    <p style="font-size: 12px; text-align:justify;">
        14º É de responsabilidade do  contratante a reserva de uma mesa para que equipe possa se instalar com seu equipamento e com
        assistente caso o mesmo esteja presente.</p>

    <p style="page-break-before: always"></p>

    <h6 style="text-align: center"><strong>OBRIGAÇÕES  DA CONTRATADA</strong></h6>

    <p style="font-size: 12px; text-align:justify;">
        1º Caso haja problemas técnicos ou o não comparecimento dos profissionais alheios à sua vontade, fica acordado entre as partes a devolução do
        valor integral caso já tenha pago ou parcial do valor deste contrato, até mesmo a substituição por outro tipo de serviço acordado antecipadamente
        entre as partes.</p>

    <p style="font-size: 12px; text-align:justify;">
        Se porventura a contratada se encontrar impossibilitada a comparecer ao seu evento por motivos de força maior (falecimento, acidente ou doença),
        a mesma terá o compromisso em enviar ao evento, uma equipe para que o trabalho possa ser realizado com êxito.</p>

    <p style="font-size: 12px; text-align:justify;">
        2º A <strong>Contratada</strong> permanecerá no local pelo período de <strong style="color: red">5 (cinco) horas contados</strong> à partir da 1ª hora inicial do evento estipulado em contrato,
        caso este período seja excedido e o <strong>Contratante</strong> solicitar a permanência no local , o <strong>Contratado</strong> verificará a possibilidade de permanecer após
        verificar sua agenda e assim concordando será acrescido o valor de 350,00 à hora adicional a cada integrante da equipe o valor deverá ser pago ao
        final do evento.</p>

    <p style="font-size: 12px; text-align:justify;">
        3º A <strong>Contratada</strong> permanecerá no local do ensaio no período de <strong style="color: red">2 (duas) horas contados</strong> à partir da 1ª hora inicial do ensaio, com tolerância
        de 30 minutos estipulado em contrato, caso este período seja excedido e o <strong>Contratante</strong> solicitar a permanência no local , o <strong>Contratado</strong> verificará
        a possibilidade de permanecer após verificar sua agenda e assim concordando será acrescido o valor de 100,00 à hora adicional ou perca do horário
        extrapolado no ensaio.</p>

    <p style="font-size: 12px; text-align:justify;">
        4º O ensaio externo é realizado de segunda a sexta devido a alta demanda de eventos durante o final de semana, caso seja preciso a realização
        do ensaio em um final de semana, consultar a agenda da contratada com antecedência.</p>

    <p style="font-size: 12px; text-align:justify;">
        5º Caso o contratado opte por realizar o ensaio após o evento, o prazo para a realização do mesmo é de 2 meses após o evento. Caso esse prazo
        seja ultrapassado, o ensaio poderá ser executado mediante pagamento do valor normal de um ensaio de acordo com a tabela de preços no período
        em que for realizado.</p>

    <p style="font-size: 12px; text-align:justify;">
        O prazo para a entrega das fotos do ensaio enviadas inicialmente por link online, é de 30 dias após o dia em que o mesmo foi realizado.</p>

    <p style="font-size: 12px; text-align:justify;">
        6º <strong>É dever do Contratado entregar ao Contratante:</strong></p>

    @if ($data->delivery_type == 1)
    <p style="font-size: 12px; text-align:justify;">
        ( X ) Pendrive com todas as fotos tiradas durante o evento (após feita reciclagem e edição do mesmo pois sendo uma sequência de fotos do evento,
        a Contratada com visão profissional realiza uma seleção para evitar que tenha uma quantidade de fotos maçantes e sem foco ou de momento
        inapropriados) a mesma em arquivo jpeg em alta resolução – sem marca . (Tal como <strong>brinde</strong> de arquivos em alta resolução, porém com marca
        d’água para postar em rede social etc)</p>
    @else
    <p style="font-size: 12px; text-align:justify;">
        ( ) Pendrive com todas as fotos tiradas durante o evento (após feita reciclagem e edição do mesmo pois sendo uma sequência de fotos do evento,
        a Contratada com visão profissional realiza uma seleção para evitar que tenha uma quantidade de fotos maçantes e sem foco ou de momento
        inapropriados) a mesma em arquivo jpeg em alta resolução – sem marca . (Tal como <strong>brinde</strong> de arquivos em alta resolução, porém com marca
        d’água para postar em rede social etc)</p>
    @endif

    @switch($data->album_type)
        @case(1)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Álbum tamanho x Quantidade de Lâminas: <strong>( X ) 10 (  ) 15 (  ) 20 (  ) 25 (  ) 30</strong>
            </p>
            @break
        @case(2)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Álbum tamanho x Quantidade de Lâminas: <strong>(  ) 10 ( X ) 15 (  ) 20 (  ) 25 (  ) 30</strong>
            </p>
            @break
        @case(3)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Álbum tamanho x Quantidade de Lâminas: <strong>(  ) 10 (  ) 15 ( X ) 20 (  ) 25 (  ) 30</strong>
            </p>
            @break
        @case(4)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Álbum tamanho x Quantidade de Lâminas: <strong>(  ) 10 (  ) 15 (  ) 20 ( X ) 25 (  ) 30</strong>
            </p>
            @break
        @case(5)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Álbum tamanho x Quantidade de Lâminas: <strong>(  ) 10 (  ) 15 (  ) 20 (  ) 25 ( X ) 30</strong>
            </p>
            @break
        @default
            <p style="font-size: 12px; text-align:justify;">
                (  ) Álbum tamanho x Quantidade de Lâminas: <strong>(  ) 10 (  ) 15 (  ) 20 (  ) 25 (  ) 30</strong>
            </p>
            @break
    @endswitch

    @if ($data->example_photos == 1)
        <p style="font-size: 12px; text-align:justify;">
            ( X ) Prova para escolhas das fotos para confecção do álbum, enviadas em alta resolução por email ou link.
        </p>
    @else
        <p style="font-size: 12px; text-align:justify;">
            (  ) Prova para escolhas das fotos para confecção do álbum, enviadas em alta resolução por email ou link.
        </p>
    @endif

    @switch($data->box_case)
        @case(1)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Caixa padrão (  ) Caixa Personalizada (  ) Box Luxo com mini álbum
            </p>
            @break
        @case(2)
            <p style="font-size: 12px; text-align:justify;">
                (  ) Caixa padrão ( X ) Caixa Personalizada (  ) Box Luxo com mini álbum
            </p>
            @break
        @case(3)
            <p style="font-size: 12px; text-align:justify;">
                (  ) Caixa padrão (  ) Caixa Personalizada ( X ) Box Luxo com mini álbum
            </p>
            @break
        @default
            <p style="font-size: 12px; text-align:justify;">
                (  ) Caixa padrão (  ) Caixa Personalizada (  ) Box Luxo com mini álbum
            </p>
    @endswitch

    @if ($data->delivery_type == 2)
        <p style="font-size: 12px; text-align:justify;">
            ( X ) Fotos On-line enviadas por link em alta resolução.
        </p>
    @else
        <p style="font-size: 12px; text-align:justify;">
            (  ) Fotos On-line enviadas por link em alta resolução.
        </p>
    @endif

    @if ($data->service_id == 3 || $data->service_id == 4 || $data->service_id == 5)
        <p style="font-size: 12px; text-align:justify;">
            ( X ) Ensaio Pré evento ou Pós evento
        </p>
    @else
        <p style="font-size: 12px; text-align:justify;">
            (  ) Ensaio Pré evento ou Pós evento
        </p>
    @endif

    @switch($data->album_case)
        @case(1)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Estojo álbum : Luva ( X ) Caixa Luva com foto (  ) Box com fita (  ) Caixa acrílica (  ) Fotográfica (  ) Tecido (  ) Madeira (  )
            </p>
            @break
        @case(2)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Estojo álbum : Luva (  ) Caixa Luva com foto ( X ) Box com fita (  ) Caixa acrílica (  ) Fotográfica (  ) Tecido (  ) Madeira (  )
            </p>
            @break
        @case(3)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Estojo álbum : Luva (  ) Caixa Luva com foto (  ) Box com fita ( X ) Caixa acrílica (  ) Fotográfica (  ) Tecido (  ) Madeira (  )
            </p>
            @break
        @case(4)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Estojo álbum : Luva (  ) Caixa Luva com foto (  ) Box com fita (  ) Caixa acrílica ( X ) Fotográfica (  ) Tecido (  ) Madeira (  )
            </p>
            @break
        @case(5)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Estojo álbum : Luva (  ) Caixa Luva com foto (  ) Box com fita (  ) Caixa acrílica (  ) Fotográfica ( X ) Tecido (  ) Madeira (  )
            </p>
            @break
        @case(6)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Estojo álbum : Luva (  ) Caixa Luva com foto (  ) Box com fita (  ) Caixa acrílica (  ) Fotográfica (  ) Tecido ( X ) Madeira (  )
            </p>
            @break
        @case(7)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Estojo álbum : Luva (  ) Caixa Luva com foto (  ) Box com fita (  ) Caixa acrílica (  ) Fotográfica (  ) Tecido (  ) Madeira ( X )
            </p>
            @break
        @default
            <p style="font-size: 12px; text-align:justify;">
                (  ) Estojo álbum : Luva (  ) Caixa Luva com foto (  ) Box com fita (  ) Caixa acrílica (  ) Fotográfica (  ) Tecido (  ) Madeira (  )
            </p>
    @endswitch

    @switch($data->man_day)
        @case(1)
            <p style="font-size: 12px; text-align:justify;">
                ( X ) Dia da noiva/noivo/debutante (2h de fotos) (  ) Noiva/debutante (  ) Noivo
            </p>
            @break
        @case(2)
            <p style="font-size: 12px; text-align:justify;">
                (  ) Dia da noiva/noivo/debutante (2h de fotos) ( X ) Noiva/debutante (  ) Noivo
            </p>
            @break
        @case(3)
            <p style="font-size: 12px; text-align:justify;">
                (  ) Dia da noiva/noivo/debutante (2h de fotos) (  ) Noiva/debutante ( X ) Noivo
            </p>
            @break
        @default
            <p style="font-size: 12px; text-align:justify;">
                (  ) Dia da noiva/noivo/debutante (2h de fotos) (  ) Noiva/debutante (  ) Noivo
            </p>
    @endswitch

    @if ($data->man_day == 2)
        <p style="font-size: 12px; text-align:justify;">
            ( X ) Drone/fotografias aéreas.
        </p>
    @else
        <p style="font-size: 12px; text-align:justify;">
            (  ) Drone/fotografias aéreas.
        </p>
    @endif

    @if ($data->external_team == 1)
        <p style="font-size: 12px; text-align:justify;">
            ( X ) Equipe Frigoletto’s Fotos
        </p>
    @else
        <p style="font-size: 12px; text-align:justify;">
            (  ) Equipe Frigoletto’s Fotos
        </p>
    @endif

    <p style="page-break-before: always"></p>

    <h6 style="text-align: center"><strong>PREÇO E CONDIÇÕES DE PAGAMENTO</strong></h6>

    <table>
        <tr>
            <th>Valor Real do Evento</th>
            <th>Valor com Desconto</th>
            <th>{{ 'R$ ' . number_format($data->package->amount,2,",",".") }}</th>
        </tr>
        <tr>
            <td>Brinde 1</td>
            <td>Valor ( X ) Grátis</td>
            <td></td>
        </tr>
        <tr>
            <td>Brinde 2</td>
            <td>Valor (   ) Grátis</td>
            <td></td>
        </tr>
        <tr>
            <td>Brinde 3</td>
            <td>Valor (   ) Grátis</td>
            <td></td>
        </tr>
    </table>

    <br>

    <p style="font-size: 12px; text-align:justify;">
        1º O presente serviço será remunerado pela quantia de <strong style="color: red">{{ 'R$ ' . number_format($data->package->amount,2,",",".") }}</strong> (<strong style="color: red">{{ $data->package->amount_full }}</strong>) referente aos serviços
        efetivamente prestados, devendo ser pago em, ( X ) PIX nº 97419-8189, (  ) Cartão com possíveis taxas de parcelamento - ( ) BOLETO BANCÁRIO
        com taxa de 4,50 do boleto tarifa bancária - (  ) O DEPÓSITO BANCÁRIO no <strong>banco ITAÚ, AGÊNCIA 4077, CONTA 20811-6</strong> FAVORECIDO:
        <strong>Gizele Frigoletto Cota CPF: 140.140.327-10</strong> – somente será aceito mediante autorização do contratante após assinar esta cláusula
        autorizando: Obs:
    </p>

    <p style="font-size: 12px; text-align:justify;">
        2º Caso o Contratante tenha recebido algum desconto ou brinde e o pagamento se atrase antes do evento ocorrer, os brindes e
        desconto serão suspensos e o valor do contrato vigorará pelo valor normal sem descontos e os brindes não terão mais validades,
        porém se o evento tiver ocorrido o Contratante fica ciente que pagará a diferença do valor original do evento sem desconto e os
        brindes serão cobrados, somados os valores e divididos sobre as parcelas restantes do contrato.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        3º Pagamentos após data de vencimento com exceção de finais de semana e feriado serão acrescidos 6% de multa e 1 % de juros ao mês sobre o
        valor, conforme artigo. 406 do código  civil e artigo 161.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        4º O valor total do contrato precisa ser quitado até 15 dias antes do evento para a conclusão do serviço.
    </p>

    <h6 style="text-align: center"><strong>RESCISÃO IMOTIVADA</strong></h6>

    <p style="font-size: 12px; text-align:justify;">
        1º Caso o <strong>Contratante</strong> requisite a rescisão imotivada do presente contrato ( até 180 dias antes do evento ), deverá pagar multa de 20% do
        valor do contrato.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        2º Caso o <strong>Contratante</strong> requisite a rescisão imotivada do presente contrato (até 90 dias antes do evento), deverá pagar multa de 30% do valor
        do contrato.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        3º Caso o <strong>Contratante</strong> requisite a rescisão imotivada do presente contrato ( até 60 dias antes do evento ), deverá pagar multa de 50% do valor
        do contrato.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        4º Caso o <strong>Contratante</strong> requisite a rescisão imotivada do presente contrato (até 30 dias antes do evento), o mesmo perderá o valor total do
        contrato se já estiver pago não será restituído e caso ainda tenha parcelas a vencer será emitido um boleto com valor restante é enviado ao
        <strong>contratante, por motivo de restituição de perdas de reserva de data</strong>.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        5° Caso a contratante solicite mudança de data do evento, a mesma deverá consultar a contratada se há disponibilidade em agenda. A contratante
        deverá pagar ressarcimento de até 20% do valor do contrato, pois a contratada trabalha com reservas gerando prejuízo para a mesma.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        6º Em caso de falecimento da contratante que impedindo o evento de ocorrer, extingue-se o contrato.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        7° Em caso de falecimento da contratada que impedindo o evento de ocorrer, extingue-se o contrato.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        8° Fica de total responsabilidade da contratada a entrega do trabalho realizado o não cumprimento será penalizado com ressarcimento de 130%
        do valor do contrato.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        9º No caso de rescisão contratual por desistência do contratante, admite-se a retenção de percentual dos valores pagos.
    </p>

    <p style="page-break-before: always"></p>

    <h6 style="text-align: center"><strong>CONDIÇÕES GERAIS</strong></h6>

    <p style="font-size: 12px; text-align:justify;">
        1º Caso haja alguma falha do equipamento alheio a nossa vontade e só perceptível após a execução do serviço que acarrete perda total ou parcial
        do serviço prestado fica a <strong>Contratada</strong> obrigada a devolver a quantia contratada proporcional a perda ocorrida até o limite do valor contratado ou
        poderá compensar o contratado de outra maneira na concordância das partes.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        2º A <strong>Contratada</strong> tem por direito aos arquivos originais das fotos e mesmo depois da entrega o trabalho prestado, não tem obrigação de
        mantê-los em acervo podendo deletar num prazo mínimo de <strong>90 dias</strong> se achar necessário.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        2.1 A <strong>Contratada</strong> não fará envio de arquivos sem edição ou fará nenhum tipo de manipulação no serviço prestado.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        3º O <strong>Contratante</strong> fica ciente que os arquivos de foto dos mesmo podem ser utilizados como material de divulgação do trabalho da equipe,
        sendo assim não se opõe ao uso das imagens dos negativos ou arquivos digitais não se cogitando em nenhuma hipótese a aplicabilidade da lei
        9.610 de 18/02/1998 ( lei dos Direitos Autorais), como também podendo ser usados inclusive em concursos internos e externos e qualquer tipo de
        rede social , mostruários, propagandas e marketings, respeitando-se a integridade e a moralidade do contratante.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        4º Inclui-se também a não oposição quando o uso das imagens realizadas por fotógrafos assistentes que por ventura estejam presentes ao
        evento.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        5º Para resgate de imagens já entregues ou 2ª via de mídia com imagens será cobrado o valor de <strong>30% do valor total do contrato</strong>, caso ainda
        esteja em acervo.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        6º Todos os pagamentos vencidos em finais de semana ou feriado poderão ser efetuados no próximo dia útil seguinte sem nenhuma cobrança de
        juros e multa.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        7º Se porventura houver alguma parcela que tenha mais de 20 dias de vencimento a contratada tem por direito a execução deste contrato a tomar
        medidas legais, tais como inclusão do nome no <strong>(SPC/SERASA)</strong> e a execução do mesmo judicialmente.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        8º Fica compactuada entre as partes a total inexistência de vínculo trabalhista, excluindo as obrigações previdenciárias e os encargos sociais, não
        havendo entre <strong>Contratado</strong> e <strong>Contratante</strong> qualquer tipo de relação de subordinação.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        9º É proibido a postagem de fotos com alterações feita pelo <strong>Contratante</strong> após a entrega do material com a logotipo da empresa, tais alterações
        e postagem deve ser excluída a logomarca.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        10º Caso algum pagamento esteja em atraso antes do evento o serviço não será prestado ficando a <strong>Contratante</strong> ciente que deverá efetuar os
        pagamentos em atraso com suas devidas regras para execução do serviços e caso o serviço já tenha sido prestado os produtos escolhidos só serão
        entregues após a regularização de todos os valores em aberto, até mesmo as fotos para escolha do álbum.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        11º A <strong>Contratada</strong> só será responsável apenas por problemas voltados para fotografia, qualquer outro tipo de problema não é de responsabilidade
        da <strong>Contratada</strong>.
    </p>

    <p style="page-break-before: always"></p>

    <h6 style="text-align: center"><strong>ENTREGA DO MATERIAL</strong></h6>

    <p style="font-size: 12px; text-align:justify;">
        1º O Contratante terá direito a 2 opções de RETIRADA (  ) Pessoalmente ou (  ) Via sedex/motoboy <strong>(custos do contratante)</strong>.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        2º Ambas as opções acima terão prazo:
    </p>

    <p style="font-size: 12px; text-align:justify;">
        - <strong>50 dias úteis</strong> para entrega em alta resolução para escolha de fotos para o álbum podendo se reduzir para menos ou mais, conforme aviso
        prévio antecipado enviado via e-mail e/ou sistema de escolha de fotos. Não serão adicionadas fotos de terceiros ou de aparelhos eletrônicos
        (celulares , tablets etc) no álbum. Havendo urgência da entrega antecipada ao prazo proposto acima, o contratante deverá arcar com o custo
        extra de R$500,00 (quinhentos reais) para recebimento das fotos em 48hs
    </p>

    <p style="font-size: 12px; text-align:justify;">
        - <strong>90 dias </strong> para entrega do produto final podendo se reduzir para menos ou mais, conforme aviso prévio antecipado. (os 90 dias começam a
        contar a partir do momento que o <strong>Contratante</strong> enviar por e-mail a numeração das fotos ou se o evento contratado for apenas em pendrive
        serão contados a partir do dia seguinte ao evento porém será de 50 dias úteis ( caso não tenha nenhum pagamento pendente. Podendo se
        estender para mais de acordo com número de parcelas pendentes após evento.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        - O Contratante poderá optar pelo contratado realizar a seleção das fotos após 10 dias úteis da entrega das fotos editadas para proceder com a
        montagem da prévia para o álbum fazendo assim com que o serviço seja adiantado . Caso opte por esse tipo de serviço sem custo adicional,
        assine:
    </p>

    <p style="font-size: 12px; text-align:justify;">
        - <strong>40 dias úteis</strong> para confecção do álbum podendo se reduzir para menos ou mais, conforme aviso prévio antecipado.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        - O <strong>Contratante</strong> terá apenas DUAS oportunidades de alteração do layout do álbum dentro de um prazo de 30 dias, em caso de uma terceira
        alteração será cobrado o valor de diagramação ao contratante, valor esse atualmente acordado em 150,00 com nosso fornecedor.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        - Tempo de entrega total do produto final com álbum: <strong>90 dias após escolher todos os itens</strong>.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        3º O <strong>Contratante</strong> está ciente que quando houver álbum o mesmo só irá para confecção após a sua aprovação, sendo assim após o álbum
        confeccionado não terá o direito de desistência ou devolução do mesmo.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        4º Caso o material ultrapasse o prazo de <strong>90 dias</strong> por motivo de demora do <strong>Contratante</strong> na escolha de foto, atrasando assim a entrega do
        material final, fica o <strong>Contratante</strong> ciente que após a entrega dos dados necessários o mesmo irá para a fila de edições e que o material não
        será passado na frente dos demais clientes, sugerimos que entregue os dados necessários dentro do prazo de <strong>10 dias</strong> contados após o
        recebimento da solicitação feita pela empresa e fica o mesmo ciente que poderá sofrer alteração nos valores conforme tabela de fornecedores,
        atualizada a cada 4 meses.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        5º A <strong>Contratada</strong> tem por direito deletar os arquivos num prazo de 90 dias após a entrega do mesmo a contratante , não se tendo obrigação de
        mantê- los em arquivo morto. Sugere-se que o contratante realize backups de segurança do serviço realizado.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        6º A <strong>Contratada</strong> tem por direito deletar os arquivos após 150 dias de inadimplência do contratante independentemente se o mesmo já efetuou
        algum pagamento pois a contratada não tem nenhum tipo de obrigação de manter os arquivos guardados por tempo indeterminado sem data
        prévia acordada entre as parte para quitação da dívida, e as cláusulas por inadimplência serão aplicadas normalmente.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        7º A <strong>Contratada</strong> não tem por obrigação postar ou enviar prévias de fotos do evento. A decisão é única e exclusiva da mesma sobre o tempo ou de
        optar por não  fazer postagem.
    </p>

    <p style="font-size: 12px; text-align:justify;">
        E por estarem assim justos e contratados assinam o presente contrato de duas vias iguais teor e forma para um só efeito concordando com todas
        as cláusulas existentes neste contrato, ciente que o não cumprimento poderá ser penalizado dentro das formas da lei.; O presente contrato rege-se
        pela Lei 8.078 de 11/09/1990 (código de Defesa do Consumidor) aplicando–se subsidiariamente o artigo 412 do Código Civil Brasileiro (Lei nº
        10.406, de 10/01/202/02), inclusive quanto às eventuais perdas e danos de forma geral <strong>(por gentileza assinar todas as vias)</strong>.
    </p>

    <br>

    <p style="font-size: 13px; text-align: center;"><strong><?php echo 'Rio de Janeiro, ' . strftime('%d de %B de %Y', strtotime('today'));?></strong></p>

    <br>
    <br>

    <table>
        <tr>
            <th style="width: 50%; border: 0; text-align: center; background-color: #fff;">
                <!--<img src="<?php
                    /*if(!empty($data->url_signature))
                    {
                        echo $_SERVER["DOCUMENT_ROOT"].'/image/signatures/'.$data->url_signature;
                    } else {
                        echo $_SERVER["DOCUMENT_ROOT"].'/image/assinatura_branco.png';
                    }*/
                ?>" width="250px" heigth="120px" />-->
                @if ($signed == 1)
                    <span class="text-center" style="font-family: Great Vibes; font-size:25px;">
                        {{ $data->customer->contract_responsible }}
                    </span>
                @endif
                <br>
                <hr width="60%">
            </th>
            <th style="width: 50%; border: 0; text-align: center; background-color: #fff;">
                <!--<img src="<?php //echo $_SERVER["DOCUMENT_ROOT"].'/image/assinatura_frigoletto.png' ?>" width="250px" heigth="120px" />
                <br>
                -->
                <span class="text-center" style="font-family: Great Vibes; font-size:25px;">
                    Gizele Frigoletto Cota
                </span>
                <hr width="60%">
            </th>
        </tr>
        <tr>
            <td style="font-size: 12px; text-align: center; border: 0">{{ $data->customer->contract_responsible }}</td>
            <td style="font-size: 12px; text-align: center; border: 0">Frigoletto's Fotos</td>
        </tr>
        <tr>
            <td style="font-size: 12px; text-align: center; border: 0">CPF: {{ $data->customer->document }}</td>
            <td style="font-size: 12px; text-align: center; border: 0">CNPJ: 24.933.816/0001-36</td>
        </tr>
    </table>

</body>
</html>
