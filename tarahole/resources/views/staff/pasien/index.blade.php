<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/template/table.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/tarahole-icon.png') }}">
    <title>TaraHole - Index Pasien</title>
</head>
<body>
  {{-- <div id="chartContainer" style="width:100%; height:300px;"></div> --}}
  <br>
  <div style="padding: 50px">
    <a href="{{ route('pasien-create') }}"><button>Create</button></a>

    {{-- Table Start --}}
    <table class="blueTable">
      <thead>
            <tr>
                <th>Name</th>
                <th>No BPJS</th>
                <th>No Telepon</th>
                <th>Tgl Kunjungan</th>
                <th>Tgl Kembali</th>
                <th>Jenis KB</th>
                <th colspan="2">KB Terakhir</th>
                <th>Hamil</th>
                <th colspan="2">Payment</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>
        <tbody>

            {{-- Foreach Users --}}
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row['name'] }}</td>
                    <td>{{ $row['no_bpjs'] }}</td>
                    <td>{{ $row['no_telepon'] }}</td>
                    <td>{{ $row['tgl_kunjungan'] }}</td>
                    <td>{{ $row['tgl_kembali'] }}</td>
                    <td>{{ $row['jenis_kb'] }}</td>
                    <td>Jenis : {{ $row['kb_terakhir'] }}</td>
                    <td> Tgl : {{ $row['tgl_kb_terakhir'] }}</td>
                    <td>
                      @if ($row['hamil'] == 1)
                        Ya
                      @else
                        Tidak
                      @endif
                    </td>
                    <td>Metode : {{ $row['metode_payment'] }}</td>
                    <td> Rp. {{ number_format($row['payment'],0,',','.') }}</td>
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
</body>
</html>
