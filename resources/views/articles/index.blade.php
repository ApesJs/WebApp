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
            <a href="/articles/create" class="btn btn-primary">Create Article</a>
            @foreach ($articles as $article)
                <x-card class="mb-4 w-50" title="{{ $article->title }}" subtitle="{{ \Carbon\Carbon::parse($article->created_at)->diffForHumans() }}">
                    <p>
                        {{ $article->body }}
                    </p>
                    <a href="/articles/{{ $article->id }}" class="button">Show more</a>
                </x-card>
            @endforeach
        </div>
    </x-app>
</body>

</html>
