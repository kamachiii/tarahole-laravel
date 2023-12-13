<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/template/table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/tarahole-icon.png') }}">
    <title>TaraHole - Index Pasien</title>
</head>
<body>
    {{-- Loading Start --}}
  <div id="loading">
    <span class="loader">
      <img src="{{ asset('img/tarahole-icon.png') }}" alt="tarahole-loader" width="250px">
    </span>
      <div class="textLoader">
          <center>
          <b>Please Wait ... </b>
          </center>
      </div>
  </div>
  {{-- Loading end --}}

  {{-- <div id="chartContainer" style="width:100%; height:300px;"></div> --}}
  <br>
  <div style="padding: 50px">
    <div class="py-2">
      <a href="{{ route('pnc-index') }}" class="btn btn-success">PNC</a>
      <a href="{{ route('pasien-create') }}" class="btn btn-primary">Create</a>
    </div>

    {{-- Table Start --}}
    <table class="blueTable">
      <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No BPJS</th>
                <th>No Telepon</th>
                <th colspan="3">Kesehatan</th>
                <th>Tgl Kunjungan</th>
                <th>Tgl Kembali</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>
        <tbody>

            {{-- Foreach Users --}}
            @foreach ($data as $key => $row)
                <tr>
                    <td style="text-align: center">{{ $key + 1 }}</td>
                    <td>{{ $row['nama'] }}</td>
                    <td>{{ $row['no_bpjs'] }}</td>
                    <td>{{ $row['no_telepon'] }}</td>
                    <td>TB : {{ $row['tb'] }} cm</td>
                    <td>BB : {{ $row['bb'] }} kg</td>
                    <td>TD : {{ $row['td'] }}</td>
                    <td>{{ $row['tgl_kunjungan'] }}</td>
                    <td>{{ $row['tgl_kembali'] }}</td>

                    {{-- <td>
                      <a href="{{ route('user-edit', ['id' => $user['id']]) }}"><button style="cursor: pointer">Edit</button></a>
                      <a href="#"><button style="cursor: pointer">Destroy</button></a>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="11">
                    <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
                </td>
            </tr>
        </tfoot>
    </table>
    {{-- Table End --}}
  </div>

  {{-- JS --}}
  <script src="{{ asset('js/templates/jquery/jquery-3.7.1.min.js') }}"></script> {{-- Jquery --}}
  <script src="{{ asset('js/templates/canvasjs-chart-3.7.30/jquery.canvasjs.min.js') }}"></script>
  {{-- <script src="{{ asset('js/admin/chart-pie-index.js') }}"></script> --}}
  <script src="{{ asset('js/loading.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
