<?php
    // menghitung detik berjalan sejak 1 jan 1970
    echo date("l", time()-60*60*24);

    // echo time();


    // membuat sendiri detik (mktime)
    echo date ("l",mktime(0,0,0,11,6,2000));
    // jam, menit, detik, bulan, tanggal, tahun

    // string to time
    echo date("l", strtotime("6 nov 2000"));
?>