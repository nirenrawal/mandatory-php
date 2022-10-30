<?php


function generateDOB()
{
    $timestamp = mt_rand(1, time());
    return date("d-m-Y", $timestamp);
}


function generateCPR($dob, $gender)
{
    $format = date_format(date_create($dob), 'dmy');
    $isNumberValid = true;
    $cpr = '';
    while ($isNumberValid) {
        $randomNum = rand(1000, 9999);
        if ($gender == "female") {
            // get even number
            if ($randomNum % 2 === 0) {
                $cpr = $format . "-" . $randomNum;
                $isNumberValid = false;
            }
        } else {
            //get odd number
            if ($randomNum % 2 !== 0) {
                $cpr = $format . "-" . $randomNum;
                $isNumberValid = false;
            }
        }
    }
    return $cpr;
}


function floorNumber()
{
    $nr = rand(0, 99);
    if ($nr === 0) {
        return 'st';
    } else {
        return $nr;
    }
}



function randomDoorSideText()
{
    $input = array(
        'tv',
        'mf',
        'th',
        'a',
        'b',
        'c',
        'd'
    );

    $side = $input[rand(0, sizeof($input) - 1)];

    if ((strcmp($side, 'tv') !== 0)  && (strcmp($side, 'mf' !== 0)) && (strcmp($side, 'th' !== 0))) {
        $randnummer = rand(1, 10);
        $side = $side . "-" . $randnummer;
    }
    return $side;
}


function getRandomCityPost()
{
    $address = json_decode(file_get_contents('./data/postal-codes.json'), true);
    $key = array_rand($address);
    $postal_code = $address[$key]['postal_code'];
    $town_name = $address[$key]['town_name'];
    return $postal_code . ', ' . $town_name;
}


function getRandomStreetName()
{
    $street = ['Adelgade', 'Admiralgade', 'Amaliegade', 'Antonigade', 'Asylgade', 'Badstuestræde', 'Bernstorffsgade', 'Boldhusgade', 'Borgergade', 'Bredgade', 'Bremerholm', 'Brolæggerstræde', 'Christian IXs Gade', 'Christians Brygge', 'Dronningens Tværgade', 'Dyrkøb', 'Farimagsgade', 'Fasanvej', 'Fiolstræde', 'Fredericiagade', 'Frederiksborggade', 'Frederiksgade', 'Frederiksholms Kanal', 'Gammel Mønt', 'Gammel Strand', 'Gernersgade', 'Gothersgade', 'Grønnegade', 'Grønningen', 'Gyldenløvesgade', 'H. C. Andersens Boulevard', 'Havnegade', 'Holmens Kanal', 'Hyskenstræde', 'Kattesundet', 'Klareboderne', 'Klerkegade', 'Klosterstræde', 'Knabrostræde', 'Købmagergade', 'Kristen Bernikows Gade', 'Kristianiagade', 'Kronprinsensgade', 'Kronprinsessegade', 'Krystalgade', 'Kvæsthusgade', 'Laksegade', 'Landemærket', 'Landgreven', 'Larsbjørnsstræde', 'Larslejsstræde', 'Lavendelstræde', 'Lille Kongensgade', 'Magstræde', 'Mikkel Bryggers Gade', 'Møntergade', 'Naboløs', 'Nansensgade', 'Niels Hemmingsens Gade', 'Niels Juels Gade', 'Nørre Voldgade', 'Nørregade', 'Ny Adelgade', 'Ny Kongensgade', 'Ny Østergade', 'Ny Vestergade', 'Nyhavn', 'Olfert Fischers Gade', 'Øster Voldgade', 'Palægade', 'Peder Hvitfeldts Stræde', 'Pilestræde', 'Pistolstræde', 'Rosenborggade', 'Rosengården', 'Sankt Annæ Passage', 'Sankt Pauls Gade', 'Sankt Peders Stræde', 'Silkegade', 'Skindergade', 'Slotsholmsgade', 'Sølvgade', 'Stockholmsgade', 'Stokhusgade', 'Store Kannikestræde', 'Store Kongensgade', 'Store Strandstræde', 'Stormgade', 'Strædet', 'Studiestræde', 'Suhmsgade', 'Sværtegade', 'Tårnborgvej', 'Tietgensgade', 'Toldbodgade', 'Tornebuskegade', 'Valkendorfsgade', 'Vandkunsten', 'Ved Stranden', 'Vester Voldgade', 'Søgade', 'Vestergade', 'Vingårdstræde', 'Vodroffsvej', 'Vognmagergade'];

    $streetName = $street[rand(0, sizeof($street) - 1)];
    return $streetName;
    // $alpha = 'abcdefghijklmnopqrstuvwxyzæøå';
    // return substr(str_shuffle($alpha), 0, rand(5, 12));
}



function getRandomHouseNr()
{
    $alpha = 'ABCDEFGH';
    $rand_num = rand(0, 1);
    $rand_char = '';
    if ($rand_num > 0) {
        $rand_char = substr(str_shuffle($alpha), 0, 1);
    }

    return rand(1, 999) . "" . $rand_char;
}



function generatePhoneNumber($length1 = 7, $length2 = 6, $length3 = 5)
{
    $phone1 = ['2'];
    $tlf1 = $phone1[array_rand($phone1)];

    $phone2 = [
        '30', '31', '40', '41', '42', '50', '51', '52', '53',
        '60', '61', '71', '81', '91', '92', '93',
    ];
    $tlf2 = $phone2[array_rand($phone2)];

    $phone3 = ['342', '344', '349', '356', '357', '359', '362', '365', '366', '389', '398', '431', '441', '462', '466', '468', '472', '474', '476', '478', '485', '486', '488', '489', '493', '496', '498', '499', '542', '543', '545', '551', '552', '556', '571', '574', '577', '579', '584', '586', '587', '589', '597', '598', '627', '629', '641', '649', '658', '662', '665', '667', '692', '694', '697', '771', '772', '782', '783', '785', '786', '788', '789', '826', '827', '829'];
    $tlf3 = $phone3[array_rand($phone3)];

    $characters1 = '0123456789';
    $charactersLength1 = strlen($characters1);
    $randomNum1 = '';
    for ($i = 0; $i < $length1; $i++) {
        $randomNum1 .= $characters1[rand(0, $charactersLength1 - 1)];
    }

    $characters2 = '0123456789';
    $charactersLength2 = strlen($characters2);
    $randomNum2 = '';
    for ($i = 0; $i < $length2; $i++) {
        $randomNum2 .= $characters2[rand(0, $charactersLength2 - 1)];
    }

    $characters3 = '0123456789';
    $charactersLength3 = strlen($characters3);
    $randomNum3 = '';
    for ($i = 0; $i < $length3; $i++) {
        $randomNum3 .= $characters3[rand(0, $charactersLength3 - 1)];
    }

    $a = $tlf1 . '' . $randomNum1;
    $b = $tlf2 . '' . $randomNum2;
    $c = $tlf3 . '' . $randomNum3;

    $allNum = [$a, $b, $c];
    $finalNum = $allNum[array_rand($allNum)];
    return $finalNum;
}
