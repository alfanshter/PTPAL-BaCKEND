<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">

        <tbody style=" background-color: black;border-color:black; border:1px; border-style:solid">
            <tr class="row0">
                <td class="column0 style71 null style71" rowspan="3"></td>
                <td class="column1 style59 s style59" rowspan="3">AKTIFITAS</td>
                <td class="column2 style72 s">BERAT </td>
                <td class="column3 style61 s style61" colspan="2">TARGET </td>
                <td class="column5 style61 s style61" colspan="2">PROGRESS</td>
                <td class="column7 style2 s">SISA </td>
                <td class="column8 style62 n style63" colspan="{{$rangetanggal}}">{{$bulan}}</td>
                <td class="column39 style64 s style69"  rowspan="3">KETERANGAN</td>
            </tr>
            <tr class="row1">
                <td class="column2 style73 null"></td>
                <td class="column3 style60 s style60" rowspan="2">START</td>
                <td class="column4 style74 s style74" rowspan="2">FINISH</td>
                <td class="column5 style59 s style59" rowspan="2">M-LALU</td>
                <td class="column6 style59 s style59" rowspan="2">M-SKR</td>
                <td class="column7 style70 s style70" rowspan="2">(kg)</td>
            </tr>
            <tr class="row2">
                <td class="column2 style3 s">(ton)</td>
                @for($i =1; $i <= $rangetanggal; $i++) <td class="column8 style3 n">{{$i}}</td>
                    @endfor

                    <td class="column39 style53 null"></td>
                    <td class="column40 style55 null"></td>
                    <td class="column41 style55 null"></td>
                    <td class="column42 style55 null"></td>
                    <td class="column43 style54 null"></td>
            </tr>
            <tr class="row3">
                <td class="column0 style7 s">FRIGATE (W00304)</td>
                <td class="column1 style7 null"></td>
                <td class="column2 style7 null"></td>
                <td class="column3 style8 null"></td>
                <td class="column4 style7 null"></td>
                <td class="column5 style7 null"></td>
                <td class="column6 style7 null"></td>
                <td class="column7 style7 null"></td>
                <td class="column8 style9 null"></td>
                <td class="column9 style9 null"></td>
                <td class="column10 style10 null"></td>
                <td class="column11 style11 null"></td>
                <td class="column12 style12 null"></td>
                <td class="column13 style7 null"></td>
                <td class="column14 style7 null"></td>
                <td class="column15 style7 null"></td>
                <td class="column16 style7 null"></td>
                <td class="column17 style7 null"></td>
                <td class="column18 style7 null"></td>
                <td class="column19 style13 null"></td>
                <td class="column20 style7 null"></td>
                <td class="column21 style7 null"></td>
                <td class="column22 style7 null"></td>
                <td class="column23 style7 null"></td>
                <td class="column24 style7 null"></td>
                <td class="column25 style7 null"></td>
                <td class="column26 style13 null"></td>
                <td class="column27 style7 null"></td>
                <td class="column28 style7 null"></td>
                <td class="column29 style13 null"></td>
                <td class="column30 style7 null"></td>
                <td class="column31 style7 null"></td>
                <td class="column32 style7 null"></td>
                <td class="column33 style13 null"></td>
                <td class="column34 style7 null"></td>
                <td class="column35 style7 null"></td>
                <td class="column36 style7 null"></td>
                <td class="column37 style7 null"></td>
                <td class="column38 style8 null"></td>
                <td class="column39 style53 null"></td>
                <td class="column40 style55 null"></td>
                <td class="column41 style55 null"></td>
                <td class="column42 style55 null"></td>
                <td class="column43 style54 null"></td>
            </tr>
            <tr class="row4">
                <td class="column0 style75 s">NO</td>
                <td class="column1 style7 null"></td>
                <td class="column2 style7 null"></td>
                <td class="column3 style7 null"></td>
                <td class="column4 style7 null"></td>
                <td class="column5 style7 null"></td>
                <td class="column6 style7 null"></td>
                <td class="column7 style7 null"></td>
                <td class="column8 style14 null"></td>
                <td class="column9 style14 null"></td>
                <td class="column10 style15 null"></td>
                <td class="column11 style14 null"></td>
                <td class="column12 style16 null"></td>
                <td class="column13 style7 null"></td>
                <td class="column14 style7 null"></td>
                <td class="column15 style7 null"></td>
                <td class="column16 style7 null"></td>
                <td class="column17 style7 null"></td>
                <td class="column18 style7 null"></td>
                <td class="column19 style13 null"></td>
                <td class="column20 style7 null"></td>
                <td class="column21 style7 null"></td>
                <td class="column22 style7 null"></td>
                <td class="column23 style7 null"></td>
                <td class="column24 style7 null"></td>
                <td class="column25 style7 null"></td>
                <td class="column26 style13 null"></td>
                <td class="column27 style7 null"></td>
                <td class="column28 style7 null"></td>
                <td class="column29 style13 null"></td>
                <td class="column30 style7 null"></td>
                <td class="column31 style7 null"></td>
                <td class="column32 style7 null"></td>
                <td class="column33 style13 null"></td>
                <td class="column34 style7 null"></td>
                <td class="column35 style7 null"></td>
                <td class="column36 style7 null"></td>
                <td class="column37 style7 null"></td>
                <td class="column38 style8 null"></td>
                <td class="column39 style53 null"></td>
                <td class="column40 style55 null"></td>
                <td class="column41 style55 null"></td>
                <td class="column42 style55 null"></td>
                <td class="column43 style54 null"></td>
            </tr>
            <tr class="row5">
                <td class="column0 style7 null"></td>
                <td class="column1 style7 s">Cargo Part (Zona 1)</td>
                <!-- jangan dihapus -->
                <td class="column2 style7 null"></td>
                <td class="column3 style7 null"></td>
                <td class="column4 style7 null"></td>
                <td class="column5 style7 null"></td>
                <td class="column6 style7 null"></td>
                <td class="column7 style7 null"></td>
                <!-- jangan dihapus -->

                <td class="column8 style9 null"></td>
                <td class="column9 style9 null"></td>
                <td class="column10 style17 null"></td>
                <td class="column11 style9 null"></td>
                <td class="column12 style18 null"></td>
                <td class="column13 style7 null"></td>
                <td class="column14 style7 null"></td>
                <td class="column15 style7 null"></td>
                <td class="column16 style7 null"></td>
                <td class="column17 style7 null"></td>
                <td class="column18 style7 null"></td>
                <td class="column19 style13 null"></td>
                <td class="column20 style7 null"></td>
                <td class="column21 style7 null"></td>
                <td class="column22 style7 null"></td>
                <td class="column23 style7 null"></td>
                <td class="column24 style7 null"></td>
                <td class="column25 style7 null"></td>
                <td class="column26 style13 null"></td>
                <td class="column27 style7 null"></td>
                <td class="column28 style7 null"></td>
                <td class="column29 style13 null"></td>
                <td class="column30 style7 null"></td>
                <td class="column31 style7 null"></td>
                <td class="column32 style7 null"></td>
                <td class="column33 style13 null"></td>
                <td class="column34 style7 null"></td>
                <td class="column35 style7 null"></td>
                <td class="column36 style7 null"></td>
                <td class="column37 style7 null"></td>
                <td class="column38 style8 null"></td>
                <td class="column39 style53 null"></td>
                <td class="column40 style55 null"></td>
                <td class="column41 style55 null"></td>
                <td class="column42 style55 null"></td>
                <td class="column43 style54 null"></td>
            </tr>
            <!-- mulai pengulangan plat -->
            @foreach($data as $item)
            <tr  style="background-color: black;border-color:black; border:1px; border-style:solid">
                <td class="column0 style75 n">{{$loop->iteration}}</td>
                <td class="column1 style7 s">{{$item->aktivitas}}</td>
                <td class="column2 style1 n">{{$item->berat}}</td>
                <td class="column5 style19 n">{{$item->t_start}}</td>
                <td class="column6 style19 n">{{$item->t_finish}}</td>
                <td class="column3 style76 n">{{$item->m_lalu}}</td>
                <td class="column4 style75 s">{{$item->m_skr}}</td>
                <td class="column7 style20 n">{{$item->sisa}}</td>
                <!-- //tanggalan -->
                @foreach($item->check as $itemcheck)

                @if($itemcheck == "Hitam")
                <td style="background-color: black;border-color:black; border:1px; border-style:solid" ></td>
                @elseif($itemcheck == "Hijau")
                <td style="background-color: white;border-color:black;border:1px; border-style:solid" ></td>
                @else
                <td style="background-color: white;border-color:black;border:1px; border-style:solid" ></td>
                @endif

                @endforeach

                <!-- akhir tanggal -->
                @if($item->keterangan == null)
                <td class="column39 style56 s style58" ></td>
                @else
                <td class="column39 style56 s style58" >{{$item->keterangan}}</td>
                @endif

            </tr>
            @endforeach
            <!-- akhir perulangan -->
            <tr class="row18">
                <td class="column0">&nbsp;</td>
                <td class="column1">&nbsp;</td>
                <td class="column2">&nbsp;</td>
                <td class="column3">&nbsp;</td>
                <td class="column4">&nbsp;</td>
                <td class="column5">&nbsp;</td>
                <td class="column6">&nbsp;</td>
                <td class="column7">&nbsp;</td>
                <td class="column8">&nbsp;</td>
                <td class="column9">&nbsp;</td>
                <td class="column10">&nbsp;</td>
                <td class="column11">&nbsp;</td>
                <td class="column12">&nbsp;</td>
                <td class="column13">&nbsp;</td>
                <td class="column14">&nbsp;</td>
                <td class="column15">&nbsp;</td>
                <td class="column16">&nbsp;</td>
                <td class="column17">&nbsp;</td>
                <td class="column18">&nbsp;</td>
                <td class="column19">&nbsp;</td>
                <td class="column20">&nbsp;</td>
                <td class="column21">&nbsp;</td>
                <td class="column22">&nbsp;</td>
                <td class="column23">&nbsp;</td>
                <td class="column24">&nbsp;</td>
                <td class="column25">&nbsp;</td>
                <td class="column26">&nbsp;</td>
                <td class="column27">&nbsp;</td>
                <td class="column28">&nbsp;</td>
                <td class="column29">&nbsp;</td>
                <td class="column30">&nbsp;</td>
                <td class="column31">&nbsp;</td>
                <td class="column32">&nbsp;</td>
                <td class="column33">&nbsp;</td>
                <td class="column34">&nbsp;</td>
                <td class="column35">&nbsp;</td>
                <td class="column36">&nbsp;</td>
                <td class="column37">&nbsp;</td>
                <td class="column38">&nbsp;</td>
                <td class="column39">&nbsp;</td>
                <td class="column40">&nbsp;</td>
                <td class="column41">&nbsp;</td>
                <td class="column42">&nbsp;</td>
                <td class="column43">&nbsp;</td>
            </tr>
        </tbody>
    </table>
</body>

</html>