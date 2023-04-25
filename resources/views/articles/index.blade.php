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
            <a href="{{ route('articles.create') }}" class="btn btn-primary">Create Article</a>
            @foreach ($articles as $article)
                <x-card class="mb-4 w-50" title="{{ $article->title }}"
                    subtitle="{{ \Carbon\Carbon::parse($article->created_at)->diffForHumans() }}">
                    <p>
                        {{ $article->body }}
                    </p>
                    <div class="mt-2 d-flex align-items-center justify-content-between gap-2">
                        <div>
                            <a href="{{ route('articles.show', $article) }}}}" class="btn btn-primary">
                                Read more
                            </a>
                            <a href="{{ route('articles.edit', $article) }}" class="btn btn-success">
                                Edit
                            </a>
                        </div>
                        <form action="{{ route('articles.delete', $article) }}" method='post'>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </x-card>
            @endforeach
        </div>
    </x-app>
</body>

</html>
