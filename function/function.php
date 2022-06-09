<?php

function NumarayiFormatla($TelefonNumarasi)
{
    $TelefonNumarasi = preg_replace('/[^0-9]/', '', $TelefonNumarasi);
    //TelefonNumarasi değişkenini tüm karakterlerden arındırıyoruz.
    if (strlen($TelefonNumarasi) > 10) {
        //TelefonNumarasi değişkeni 10 haneden büyükse
        $UlkeKodu = substr($TelefonNumarasi, 0, strlen($TelefonNumarasi) - 10);
        $AlanKodu = substr($TelefonNumarasi, -10, 3);
        $SonrakiUcHane = substr($TelefonNumarasi, -7, 3);
        $SonDortHane = substr($TelefonNumarasi, -4, 4);
        //www.mucahittopal.com
        $TelefonNumarasi = '+9' . $UlkeKodu . ' (' . $AlanKodu . ') ' . $SonrakiUcHane . ' ' . $SonDortHane;
        // Oluşan Sonuç = + 90 (555) 444-3322
    } else if (strlen($TelefonNumarasi) == 10) {
        //TelefonNumarasi değişkeni 10 haneye eşitse
        $AlanKodu = substr($TelefonNumarasi, 0, 3);
        $SonrakiUcHane = substr($TelefonNumarasi, 3, 3);
        $SonDortHane = substr($TelefonNumarasi, 6, 4);
        $TelefonNumarasi = '(' . $AlanKodu . ') ' . $SonrakiUcHane . '-' . $SonDortHane;
        // Oluşan Sonuç = (555) 444-3322
    } else if (strlen($TelefonNumarasi) == 7) {
        //TelefonNumarasi değişkeni 7 haneye eşitse
        $SonrakiUcHane = substr($TelefonNumarasi, 0, 3);
        $SonDortHane = substr($TelefonNumarasi, 3, 4);
        $TelefonNumarasi = $SonrakiUcHane . '-' . $SonDortHane;
        // Oluşan Sonuç = 444-3322
    }
    return $TelefonNumarasi;
}



 ?>