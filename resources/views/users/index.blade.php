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
        @section('body')
            <x-card title="Data Users">
                <table class="table">
                    <tr>
                        <td>Nama</td>
                        <td>Umur</td>
                        <td>Jabatan</td>
                    </tr>
                    @foreach ($dataUser as $index => $user)
                        <tr>
                            <td>{{ $user['nama'] }}</td>
                            <td>{{ $user['umur'] }}</td>
                            <td>{{ $user['jabatan'] }}</td>
                        </tr>
                    @endforeach
                </table>
            </x-card>
        @endsection
    </x-app>
</body>

</html>
