<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/template/table.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/tarahole-icon.png') }}">
    <title>TaraHole - Index User</title>
</head>
<body>
  <div id="chartContainer" style="width:100%; height:300px;"></div>
  <br>
  <div style="padding: 50px">
    <a href="{{ route('user-create') }}"><button>Create</button></a>
    <table class="blueTable">
      <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>
                      @if ($user['role_user'] == 0)
                        Staff
                      @else
                        SuperAdmin
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('user-edit', ['id' => $user['id']]) }}"><button style="cursor: pointer">Edit</button></a>
                      <a href="#"><button style="cursor: pointer">Destroy</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>

  {{-- JS CDN --}}
  <script src="{{ asset('js/templates/jquery/jquery-3.7.1.min.js') }}"></script> {{-- Jquery --}}
  <script src="{{ asset('js/templates/canvasjs-chart-3.7.30/jquery.canvasjs.min.js') }}"></script>
  <script src="{{ asset('js/admin/chart-pie-index.js') }}"></script>
</body>
</html>
