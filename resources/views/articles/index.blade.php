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
            @foreach ($articles as $article)
                <x-card class="mb-4 w-50" title="{{ $article->title }}" subtitle="{{ $article->created_at }}">
                    <p>
                        {{ $article->body }}
                    </p>
                </x-card>
            @endforeach
        </div>
    </x-app>
</body>

</html>
