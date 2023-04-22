<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <x-app title="New article">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <x-card class="mb-4" title="New" subtitle="Create new article">
                        <form method='post' action="/articles">
                            @csrf
                            <div class="mb-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="body" class="form-label">body</label>
                                <textarea name="body" id="body" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </x-card>
                </div>
            </div>
        </div>
    </x-app>
</body>

</html>
