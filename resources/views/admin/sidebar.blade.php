<table style="width: 93%; line-height: 1.9em" cellpadding="20" align="center">
    <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
        <td colspan="3">
            <strong style="font-size: 18px; font-family: Arial; ">
                E. Penyelesaian yang Diinginkan
            </strong>
        </td>
    </tr>
    <tr>
        <td >
            &nbsp
        </td>
        <td colspan="2"><p style="font-size: 18px; font-family: Arial; padding-left: 30px">
                {{$pengaduan->penyelesaian}}</p>
            <p style="font-size: 18px; font-family: Arial; padding-left: 30px"><br>
            </p></td>
    </tr>
    <tr style="text-align: justify; padding: 0 0 0 40px; word-spacing: 5px">
        <td colspan="3">
            <strong style="font-size: 18px; font-family: Arial; ">
                F. Pernah Menyampaikan Pengaduan
            </strong>
        </td>
    </tr>

    <tr>
        <td >
            &nbsp
        </td>
        <td align="center" colspan="2">
            <br>
            <table width="100%" border="1" align="center" style="padding-left:3em">
                <tbody>
                <tr>
                    <th align="center" scope="col"><p style="padding:10px">Nama Instansi</p></th>
                    <th align="center" scope="col"><p style="padding:10px">Tanggal/Bulan/Tahun</p></th>
                </tr>
                @php
                    $dt = explode(",", $pengaduan->namainstansi);
                    $ds = explode(",", $pengaduan->tgl);
$no = 0;                                                              @endphp
                @foreach($dt as $dtt)

                    <tr>
                        <td><p style="padding:10px">{{$dtt}}</p></td>
                        <td><p style="padding:10px">{{$ds[$no]}}</p></td>
                    </tr>
                    @php
                        $no++
                    @endphp
                @endforeach
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="3">
            <table width="200%">
                <tr>
                    <td align="center"></td>
                    <td align="center">...........,.................</td>
                </tr>
                <tr>

                    <td align="center"><p style="font-size: 18px; font-family: Arial;"> Penerima Pengaduan <br><br><br><br>__________________</p></td>
                    <td align="center"><p style="font-size: 18px; font-family: Arial;"> Pengadu<br><br><br><br>__________________</p></td>
                </tr>
            </table>
            <br><br><br><br><br>
        </td>
    </tr>
</table>
