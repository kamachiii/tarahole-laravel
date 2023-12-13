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
    <title>TaraHole - Index PNC</title>
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
        <a href="{{ route('pasien-index') }}" class="btn btn-success">Pasien</a>
        <a href="{{ route('pnc-create') }}" class="btn btn-primary">Create</a>
    </div>

    {{-- Table Start --}}
    <table class="blueTable">
      <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nama Bidan</th>
                <th>Kunjungan</th>
                <th>Tgl Kunjungan</th>
                <th>Tgl Kembali</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            {{-- Foreach Users --}}
            @foreach ($data as $key => $row)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $row['pasien']['nama'] }}</td>
                    <td>{{ $row['nama_bidan'] }}</td>
                    <td>Kunjungan ke-{{ $row['kunjungan'] }}</td>
                    <td>{{ $row['pasien']['tgl_kunjungan'] }}</td>
                    <td>{{ $row['pasien']['tgl_kembali'] }}</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $key }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
                              </svg> Info
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modal{{ $key }}" tabindex="-1" aria-labelledby="modalLabel{{ $key }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalLabel{{ $key }}">{{ $row['pasien']['nama'] }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <ul class="fs-6" style='list-style-type: disc;'>
                                        <li>GPA : {{ $row['gpa'] }}</li>
                                        <li>S : {{ $row['s'] }}</li>
                                        <li>R : {{ $row['r'] }}</li>
                                        <li>N : {{ $row['n'] }}</li>
                                        <li>Keluhan : {{ $row['keluhan'] }}</li>
                                        <li>Terapi : {{ $row['terapi'] }}</li>
                                        <li>Pembayaran :
                                            <ul style="list-style-type: disc">
                                                <li>Metode : {{ $row['method_payment'] }}</li>
                                                <li>Rp. {{ number_format($row['payment'],0,',','.') }}</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="7">
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
