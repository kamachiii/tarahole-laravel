<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/tarahole-icon.png') }}">
    <title>TaraHole - Create</title>
</head>
<body>
    <form action="{{ route('pasien-create-action') }}" method="post">
        @if($message = Session::get('message'))
            <p>
                {{ session('message') }}
            </p>
        @endif
        @csrf
        <input type="text" name="name" placeholder="name" required><br>
        <input type="number" name="no_bpjs" placeholder="no_bpjs" required><br>
        <input type="number" name="no_telepon" placeholder="no_telepon" required><br>
        <input type="text" name="tb" placeholder="tb"><input type="text" name="bb" placeholder="bb"><input type="text" name="td" placeholder="td"> <br>
        <input type="datetime-local" name="tgl_kunjungan" value="{{ now()->setTimezone('asia/jakarta') }}" required><br>
        <input type="date" name="tgl_kembali">
            <br>
        {{-- <div class="checkbox-jenis-kb">
            <label>Jenis KB</label>
                <br>
            <input type="checkbox" name="jenis_kb" value="Suntik 1 bulan">Suntik 1 bulan</input>
            <input type="checkbox" name="jenis_kb" value="Suntik 2 bulan">Suntik 2 bulan</input>
            <input type="checkbox" name="jenis_kb" value="Suntik 3 bulan">Suntik 3 bulan</input>
            <input type="checkbox" name="jenis_kb" value="Pil">Pil</input>
            <input type="checkbox" name="jenis_kb" value="IUD">IUD</input>
            <input type="checkbox" name="jenis_kb" value="Implant">Implant</input>
        </div>
        <select name="kb_terakhir">
            <option disabled selected>--Cara KB Terakhir--</option>
            <option>Suntik 1 bulan</option>
            <option>Suntik 2 bulan</option>
            <option>Suntik 3 bulan</option>
            <option>Pil</option>
            <option>IUD</option>
            <option>Implant</option>
        </select>
            <br>
        <input type="date" name="tgl_kb_terakhir">
            <br>
        <div class="radio-hamil">
            <label>Hamil/Diduga Hamil</;abel>
                <br>
            <input type="radio" name="hamil" value="1">Ya</input>
            <input type="radio" name="hamil" value="0">Tidak</input>
        </div>
        <div class="radio-payment">
            <label>Payment Method</label>
                <br>
            <input type="radio" name="metode_payment" value="JKN">JKN</input>
            <input type="radio" name="metode_payment" value="Mandiri">Mandiri</input>
        </div>
        <input type="text" name="payment" placeholder="payment" id="payment">
            <br> --}}
        <button type="submit">Submit</button>
    </form>

    {{-- JS --}}
    <script src="{{ asset('js/templates/jquery/jquery-3.7.1.min.js') }}"></script>
    <script>
        $("input:checkbox").on('click', function() {
        var $box = $(this);
        if ($box.is(":checked")) {
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
        });
    </script>
    <script type="text/javascript">
        /* Tanpa Rupiah */
        var tanpa_rupiah = document.getElementById('payment');
        tanpa_rupiah.addEventListener('keyup', function(e)
        {
            tanpa_rupiah.value = formatRupiah(this.value);
        });

         /* Fungsi */
        function formatRupiah(angka, prefix)
        {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split    = number_string.split(','),
                sisa     = split[0].length % 3,
                rupiah     = split[0].substr(0, sisa),
                ribuan     = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    </script>
</body>
</html>
