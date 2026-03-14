<style>
    body{
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

    table{
        width: 800px;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    th{
        background: #4CAF50;
        color: white;
        padding: 10px;
        text-align: left;
        border-right: 2px solid white;
    }

    td{
        padding: 8px 10px;
        border-bottom: 1px solid #ddd;
        border-right: 1px solid #ddd;
    }

    tr:nth-child(even){
        background: #f9f9f9;
    }

    tr:hover{
        background: #e6f4ea;
    }

    th:last-child,
    td:last-child{
        border-right: none;
    }
</style>
<table>
<tr>
    <th>Ism Familiya</th>
    <th>Telefon</th>
    <th>Manzil</th>
    <th>Fanlar</th>
    <th>Tajriba</th>
</tr>
<?php 
$ustozlar = [
    "Akmal Karimov",
    "Dilshod Rahmonov",
    "Sherzod Abduvaliyev",
    "Jasur Islomov",
    "Bekzod Qodirov",
    "Azizbek Tursunov",
    "Rustam Raxmatov",
    "Jamshid Yuldashev",
    "Sardor Mamatqulov",
    "Shavkat Ergashev",
    "Ulugbek Sodiqov",
    "Farrux Karimov",
    "Bobur Xolmatov",
    "Alisher Qosimov",
    "Shahzod Rasulov",
    "Zafar Xudoyberdiyev",
    "Bahrom Norboyev",
    "Odiljon Tojiboyev",
    "Davron Umarov",
    "Ilhom Ruzmetov",
    "Nodirbek Axmedov",
    "Sirojiddin Usmonov",
    "Abbosbek Mirzayev",
    "Doston Sobirov",
    "Murodjon Hamroyev",
    "Otabek Fayziyev",
    "Shoxrux Yusupov",
    "Asadbek Jalilov",
    "Mirjalol Abdullayev",
    "Kamoliddin Sharipov",
    "Umidjon Nematov",
    "Iskandar Hakimov",
    "Qobiljon Rahimov",
    "Oybek Ganiyev",
    "Samandar Yoqubov",
    "Temurbek Raximov",
    "Sunnatillo Karimjonov",
    "Abduqodir Isroilov",
    "Firdavs Salimov",
    "Ravshanbek Tohirov",
    "Sherali Qurbanov",
    "Akbarjon Saidov",
    "Sanjarbek Yuldoshev",
    "Ibrohimjon Qodiriy",
    "Shukurullo Matkarimov",
    "Abdulloh Madaminov",
    "Muhammadali Oripov",
    "Qahramon Sattorov",
    "Nurmuhammad Xolov",
    "Habibullo Sultonov"
];

$telefonlar = [
    "901234001",
    "901234002",
    "901234003",
    "901234004",
    "901234005",
    "901234006",
    "901234007",
    "901234008",
    "901234009",
    "901234010",
    "901234011",
    "901234012",
    "901234013",
    "901234014",
    "901234015",
    "901234016",
    "901234017",
    "901234018",
    "901234019",
    "901234020",
    "901234021",
    "901234022",
    "901234023",
    "901234024",
    "901234025",
    "901234026",
    "901234027",
    "901234028",
    "901234029",
    "901234030",
    "901234031",
    "901234032",
    "901234033",
    "901234034",
    "901234035",
    "901234036",
    "901234037",
    "901234038",
    "901234039",
    "901234040",
    "901234041",
    "901234042",
    "901234043",
    "901234044",
    "901234045",
    "901234046",
    "901234047",
    "901234048",
    "901234049",
    "901234050"
];
$manzillar = [
    "Toshkent, Yunusobod",
    "Toshkent, Chilonzor",
    "Toshkent, Sergeli",
    "Toshkent, Olmazor",
    "Toshkent, Shayxontohur",
    "Toshkent, Mirzo Ulugbek",
    "Toshkent, Yashnobod",
    "Toshkent, Bektemir",
    "Toshkent, Uchtepa",
    "Toshkent, Yakkasaroy",
    "Toshkent, Yunusobod-2",
    "Toshkent, Chilonzor-3",
    "Toshkent, Sergeli-4",
    "Toshkent, Olmazor-5",
    "Toshkent, Shayxontohur-6",
    "Toshkent, Mirzo Ulugbek-7",
    "Toshkent, Yashnobod-8",
    "Toshkent, Bektemir-9",
    "Toshkent, Uchtepa-10",
    "Toshkent, Yakkasaroy-11",
    "Toshkent, Yunusobod-12",
    "Toshkent, Chilonzor-13",
    "Toshkent, Sergeli-14",
    "Toshkent, Olmazor-15",
    "Toshkent, Shayxontohur-16",
    "Toshkent, Mirzo Ulugbek-17",
    "Toshkent, Yashnobod-18",
    "Toshkent, Bektemir-19",
    "Toshkent, Uchtepa-20",
    "Toshkent, Yakkasaroy-21",
    "Toshkent, Yunusobod-22",
    "Toshkent, Chilonzor-23",
    "Toshkent, Sergeli-24",
    "Toshkent, Olmazor-25",
    "Toshkent, Shayxontohur-26",
    "Toshkent, Mirzo Ulugbek-27",
    "Toshkent, Yashnobod-28",
    "Toshkent, Bektemir-29",
    "Toshkent, Uchtepa-30",
    "Toshkent, Yakkasaroy-31",
    "Toshkent, Yunusobod-32",
    "Toshkent, Chilonzor-33",
    "Toshkent, Sergeli-34",
    "Toshkent, Olmazor-35",
    "Toshkent, Shayxontohur-36",
    "Toshkent, Mirzo Ulugbek-37",
    "Toshkent, Yashnobod-38",
    "Toshkent, Bektemir-39",
    "Toshkent, Uchtepa-40",
    "Toshkent, Yakkasaroy-41",
    "Toshkent, Yunusobod-42",
    "Toshkent, Chilonzor-43",
    "Toshkent, Sergeli-44",
    "Toshkent, Olmazor-45",
    "Toshkent, Shayxontohur-46",
    "Toshkent, Mirzo Ulugbek-47",
    "Toshkent, Yashnobod-48",
    "Toshkent, Bektemir-49",
    "Toshkent, Uchtepa-50"
];
$fanlar = [
    "Matematika",
    "Fizika",
    "Ingliz tili",
    "Kimyo",
    "Biologiya",
    "Tarix",
    "Geografiya",
    "Adabiyot",
    "Rus tili",
    "Informatika",
    "Matematika",
    "Fizika",
    "Ingliz tili",
    "Kimyo",
    "Biologiya",
    "Tarix",
    "Geografiya",
    "Adabiyot",
    "Rus tili",
    "Informatika",
    "Matematika",
    "Fizika",
    "Ingliz tili",
    "Kimyo",
    "Biologiya",
    "Tarix",
    "Geografiya",
    "Adabiyot",
    "Rus tili",
    "Informatika",
    "Matematika",
    "Fizika",
    "Ingliz tili",
    "Kimyo",
    "Biologiya",
    "Tarix",
    "Geografiya",
    "Adabiyot",
    "Rus tili",
    "Informatika",
    "Matematika",
    "Fizika",
    "Ingliz tili",
    "Kimyo",
    "Biologiya",
    "Tarix",
    "Geografiya",
    "Adabiyot",
    "Rus tili",
    "Informatika"
];
$tajriba = [
    5, 8, 3, 10, 7, 6, 12, 4, 9, 11,
    5, 8, 3, 10, 7, 6, 12, 4, 9, 11,
    5, 8, 3, 10, 7, 6, 12, 4, 9, 11,
    5, 8, 3, 10, 7, 6, 12, 4, 9, 11,
    5, 8, 3, 10, 7, 6, 12, 4, 9, 11
];
foreach($ustozlar as $x => $ustoz) {
    echo "<tr>";
    echo "<td>" . $ustoz . "</td>";
    echo "<td>" . "+998" . $telefonlar[$x] . "</td>";
    echo "<td>" . $manzillar[$x] . "</td>";
    echo "<td>" . $fanlar[$x] . "</td>";
    echo "<td>" . $tajriba[$x] . " yillik</td>";
    echo "</tr>";
}
?>
</table>