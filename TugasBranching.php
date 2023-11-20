<?php
$nilai = 70;
if ($nilai >= 81 && $nilai <= 100) {
    echo "Nilai anda A dan berbobot 4";
}
elseif ($nilai >= 78 && $nilai <= 80,99) {
    echo "Nilai anda A- dan Berbobot 3,7";
}
elseif ($nilai >= 75 && $nilai <= 77,99) {
    echo "Nilai anda B+ dan Berbobot 3,3";
}
elseif ($nilai >= 70 && $nilai <= 74,99) {
    echo "Nilai anda B dan Berbobot 3";
}
elseif ($nilai >= 65 && $nilai <= 69,99) {
    echo "Nilai anda B- dan Berbobot 2,7";
}
elseif ($nilai >= 60 && $nilai <= 64,99) {
    echo "Nilai anda C+ dan Berbobot 2,3";
}
elseif ($nilai >= 55 && $nilai <= 59,99) {
    echo "Nilai anda C dan Berbobot 2";
}
elseif ($nilai >= 40 && $nilai <= 54,99) {
    echo "Nilai anda D dan Berbobot 1";
}
elseif ($nilai >= 0 && $nilai <= 39,99) {
    echo "Nilai anda E dan Berbobot 0";
}
