<x-app-layout>
<style>
           .leaderboard{
            font-family: Arial, sans-serif;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .leaderboard h2{
            text-align: center;
            margin-bottom: 20px;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        th, td{
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th{
            background-color: #f2f2f2;
        }

        tr:nth-child(event){
            background-color: #f9f9f9;
        }

        tr:hover{
            background-color: #f2f2f2;
        }
</style>
<main>
            <div style="margin-bottom: 50px;"></div>
                <div class="leaderboard">
                    <h2>Peringkat</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Perangkat</th>
                                <th>Pengguna</th>
                                <th>Level</th>
                                <th>Avatar</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->level}}</td>
                                <td>
                                @if(file_exists(public_path('images/'.$user->avatar)))
                                <img src="{{ asset('images/'.$user->avatar) }}" alt="" style="width: 50px; height:50px;">
                                @else
                                <img src="{{ $user->avatar }}" alt="" style="width: 50px; height:50px;">
                                @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </main>

</x-app-layout>