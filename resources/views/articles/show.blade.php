<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <x-app>
        <div class="container">
            <x-card title="{{ $articles->title }}" class="w-50"
                subtitle="{{ \Carbon\Carbon::parse($articles->created_at)->diffForHumans() }}">
                <p>
                    {{ $articles->body }}
                </p>
            </x-card>
        </div>
    </x-app>
</body>

</html>
