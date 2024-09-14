@php
$experiences = [
    [
        "timeline" => "Aug 2024 - Sep 2024",
        "title" => "Full Stack Developer",
        "company" => "Industrial Games 32"
    ],
    [
        "timeline" => "Mar 2024 - Aug 2024",
        "title" => "Full Stack Developer",
        "company" => "MANIAC XIII"
    ],
    [
        "timeline" => "Oct 2023 - Feb 2024",
        "title" => "Full Stack Developer",
        "company" => "ILPC 2024"
    ],
    [
        "timeline" => "Jun 2023 - Aug 2023",
        "title" => "Backend Developer",
        "company" => "MANIAC XII"
    ],
];
@endphp

<!doctype html>
<html lang="en" data-theme="nord">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Nathan Garzya Santoso | Landing Page' }}</title>
    <link rel="icon" href="{{ asset('assets') }}/logo/logo.png" type="image/png">

    {{--  GSAP  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    @vite(['resources/css/app.css', 'resources/js/typed.js'])
    <style>
        * {
            scroll-behavior: smooth;
        }

        *::-webkit-scrollbar {
            width: 0.5rem;
        }

        *::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: oklch(var(--b3));
            width: 1px;
        }

        *::-webkit-scrollbar-thumb {
            background-color: oklch(var(--p));
            outline: 1px solid slategrey;
            border-radius: 0.8rem;
        }

        .skill {
            cursor: pointer;
            transition: all 0.35s ease-in-out;
        }

        .skills:has(.skill:hover) > .skill:not(:hover) {
            opacity: 0.7;
        }

        .typed-cursor {
            margin-left: 0.25rem;
            font-size: 1.5rem;
        }

        footer {
            position: relative;
            z-index: 1;
        }

        #stars {
            width: 1px;
            height: 1px;
            background: transparent;
            animation: animStar 50s linear infinite;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
            box-shadow: 779px 1331px oklch(var(--nc)), 324px 42px oklch(var(--bc)), 303px 586px oklch(var(--bc)),
            1312px 276px oklch(var(--bc)), 451px 625px oklch(var(--bc)), 521px 1931px oklch(var(--bc)), 1087px 1871px oklch(var(--bc)),
            36px 1546px oklch(var(--bc)), 132px 934px oklch(var(--bc)), 1698px 901px oklch(var(--bc)), 1418px 664px oklch(var(--bc)),
            1448px 1157px oklch(var(--bc)), 1084px 232px oklch(var(--bc)), 347px 1776px oklch(var(--bc)), 1722px 243px oklch(var(--bc)),
            1629px 835px oklch(var(--bc)), 479px 969px oklch(var(--bc)), 1231px 960px oklch(var(--bc)), 586px 384px oklch(var(--bc)),
            164px 527px oklch(var(--bc)), 8px 646px oklch(var(--bc)), 1150px 1126px oklch(var(--bc)), 665px 1357px oklch(var(--bc)),
            1556px 1982px oklch(var(--bc)), 1260px 1961px oklch(var(--bc)), 1675px 1741px oklch(var(--bc)),
            1843px 1514px oklch(var(--bc)), 718px 1628px oklch(var(--bc)), 242px 1343px oklch(var(--bc)), 1497px 1880px oklch(var(--bc)),
            1364px 230px oklch(var(--bc)), 1739px 1302px oklch(var(--bc)), 636px 959px oklch(var(--bc)), 304px 686px oklch(var(--bc)),
            614px 751px oklch(var(--bc)), 1935px 816px oklch(var(--bc)), 1428px 60px oklch(var(--bc)), 355px 335px oklch(var(--bc)),
            1594px 158px oklch(var(--bc)), 90px 60px oklch(var(--bc)), 1553px 162px oklch(var(--bc)), 1239px 1825px oklch(var(--bc)),
            1945px 587px oklch(var(--bc)), 749px 1785px oklch(var(--bc)), 1987px 1172px oklch(var(--bc)), 1301px 1237px oklch(var(--bc)),
            1039px 342px oklch(var(--bc)), 1585px 1481px oklch(var(--bc)), 995px 1048px oklch(var(--bc)), 524px 932px oklch(var(--bc)),
            214px 413px oklch(var(--bc)), 1701px 1300px oklch(var(--bc)), 1037px 1613px oklch(var(--bc)), 1871px 996px oklch(var(--bc)),
            1360px 1635px oklch(var(--bc)), 1110px 1313px oklch(var(--bc)), 412px 1783px oklch(var(--bc)), 1949px 177px oklch(var(--bc)),
            903px 1854px oklch(var(--bc)), 700px 1936px oklch(var(--bc)), 378px 125px oklch(var(--bc)), 308px 834px oklch(var(--bc)),
            1118px 962px oklch(var(--bc)), 1350px 1929px oklch(var(--bc)), 781px 1811px oklch(var(--bc)), 561px 137px oklch(var(--bc)),
            757px 1148px oklch(var(--bc)), 1670px 1979px oklch(var(--bc)), 343px 739px oklch(var(--bc)), 945px 795px oklch(var(--bc)),
            576px 1903px oklch(var(--bc)), 1078px 1436px oklch(var(--bc)), 1583px 450px oklch(var(--bc)), 1366px 474px oklch(var(--bc)),
            297px 1873px oklch(var(--bc)), 192px 162px oklch(var(--bc)), 1624px 1633px oklch(var(--bc)), 59px 453px oklch(var(--bc)),
            82px 1872px oklch(var(--bc)), 1933px 498px oklch(var(--bc)), 1966px 1974px oklch(var(--bc)), 1975px 1688px oklch(var(--bc)),
            779px 314px oklch(var(--bc)), 1858px 1543px oklch(var(--bc)), 73px 1507px oklch(var(--bc)), 1693px 975px oklch(var(--bc)),
            1683px 108px oklch(var(--bc)), 1768px 1654px oklch(var(--bc)), 654px 14px oklch(var(--bc)), 494px 171px oklch(var(--bc)),
            1689px 1895px oklch(var(--bc)), 1660px 263px oklch(var(--bc)), 1031px 903px oklch(var(--bc)), 1203px 1393px oklch(var(--bc)),
            1333px 1421px oklch(var(--bc)), 1113px 41px oklch(var(--bc)), 1206px 1645px oklch(var(--bc)), 1325px 1635px oklch(var(--bc)),
            142px 388px oklch(var(--bc)), 572px 215px oklch(var(--bc)), 1535px 296px oklch(var(--bc)), 1419px 407px oklch(var(--bc)),
            1379px 1003px oklch(var(--bc)), 329px 469px oklch(var(--bc)), 1791px 1652px oklch(var(--bc)), 935px 1802px oklch(var(--bc)),
            1330px 1820px oklch(var(--bc)), 421px 1933px oklch(var(--bc)), 828px 365px oklch(var(--bc)), 275px 316px oklch(var(--bc)),
            707px 960px oklch(var(--bc)), 1605px 1554px oklch(var(--bc)), 625px 58px oklch(var(--bc)), 717px 1697px oklch(var(--bc)),
            1669px 246px oklch(var(--bc)), 1925px 322px oklch(var(--bc)), 1154px 1803px oklch(var(--bc)), 1929px 295px oklch(var(--bc)),
            1248px 240px oklch(var(--bc)), 1045px 1755px oklch(var(--bc)), 166px 942px oklch(var(--bc)), 1888px 1773px oklch(var(--bc)),
            678px 1963px oklch(var(--bc)), 1370px 569px oklch(var(--bc)), 1974px 1400px oklch(var(--bc)), 1786px 460px oklch(var(--bc)),
            51px 307px oklch(var(--bc)), 784px 1400px oklch(var(--bc)), 730px 1258px oklch(var(--bc)), 1712px 393px oklch(var(--bc)),
            416px 170px oklch(var(--bc)), 1797px 1932px oklch(var(--bc)), 572px 219px oklch(var(--bc)), 1557px 1856px oklch(var(--bc)),
            218px 8px oklch(var(--bc)), 348px 1334px oklch(var(--bc)), 469px 413px oklch(var(--bc)), 385px 1738px oklch(var(--bc)),
            1357px 1818px oklch(var(--bc)), 240px 942px oklch(var(--bc)), 248px 1847px oklch(var(--bc)), 1535px 806px oklch(var(--bc)),
            236px 1514px oklch(var(--bc)), 1429px 1556px oklch(var(--bc)), 73px 1633px oklch(var(--bc)), 1398px 1121px oklch(var(--bc)),
            671px 1301px oklch(var(--bc)), 1404px 1663px oklch(var(--bc)), 740px 1018px oklch(var(--bc)), 1600px 377px oklch(var(--bc)),
            785px 514px oklch(var(--bc)), 112px 1084px oklch(var(--bc)), 1915px 1887px oklch(var(--bc)), 1463px 1848px oklch(var(--bc)),
            687px 1115px oklch(var(--bc)), 1268px 1768px oklch(var(--bc)), 1729px 1425px oklch(var(--bc)),
            1284px 1022px oklch(var(--bc)), 801px 974px oklch(var(--bc)), 1975px 1317px oklch(var(--bc)), 1354px 834px oklch(var(--bc)),
            1446px 1484px oklch(var(--bc)), 1283px 1786px oklch(var(--bc)), 11px 523px oklch(var(--bc)), 1842px 236px oklch(var(--bc)),
            1355px 654px oklch(var(--bc)), 429px 7px oklch(var(--bc)), 1033px 1128px oklch(var(--bc)), 157px 297px oklch(var(--bc)),
            545px 635px oklch(var(--bc)), 52px 1080px oklch(var(--bc)), 827px 1520px oklch(var(--bc)), 1121px 490px oklch(var(--bc)),
            9px 309px oklch(var(--bc)), 1744px 1586px oklch(var(--bc)), 1014px 417px oklch(var(--bc)), 1534px 524px oklch(var(--bc)),
            958px 552px oklch(var(--bc)), 1403px 1496px oklch(var(--bc)), 387px 703px oklch(var(--bc)), 1522px 548px oklch(var(--bc)),
            1355px 282px oklch(var(--bc)), 1532px 601px oklch(var(--bc)), 1838px 790px oklch(var(--bc)), 290px 259px oklch(var(--bc)),
            295px 598px oklch(var(--bc)), 1601px 539px oklch(var(--bc)), 1561px 1272px oklch(var(--bc)), 34px 1922px oklch(var(--bc)),
            1024px 543px oklch(var(--bc)), 467px 369px oklch(var(--bc)), 722px 333px oklch(var(--bc)), 1976px 1255px oklch(var(--bc)),
            766px 983px oklch(var(--bc)), 1582px 1285px oklch(var(--bc)), 12px 512px oklch(var(--bc)), 617px 1410px oklch(var(--bc)),
            682px 577px oklch(var(--bc)), 1334px 1438px oklch(var(--bc)), 439px 327px oklch(var(--bc)), 1617px 1661px oklch(var(--bc)),
            673px 129px oklch(var(--bc)), 794px 941px oklch(var(--bc)), 1386px 1902px oklch(var(--bc)), 37px 1353px oklch(var(--bc)),
            1467px 1353px oklch(var(--bc)), 416px 18px oklch(var(--bc)), 187px 344px oklch(var(--bc)), 200px 1898px oklch(var(--bc)),
            1491px 1619px oklch(var(--bc)), 811px 347px oklch(var(--bc)), 924px 1827px oklch(var(--bc)), 945px 217px oklch(var(--bc)),
            1735px 1228px oklch(var(--bc)), 379px 1890px oklch(var(--bc)), 79px 761px oklch(var(--bc)), 825px 1837px oklch(var(--bc)),
            1980px 1558px oklch(var(--bc)), 1308px 1573px oklch(var(--bc)), 1488px 1726px oklch(var(--bc)),
            382px 1208px oklch(var(--bc)), 522px 595px oklch(var(--bc)), 1277px 1898px oklch(var(--bc)), 354px 552px oklch(var(--bc)),
            161px 1784px oklch(var(--bc)), 614px 251px oklch(var(--bc)), 526px 1576px oklch(var(--bc)), 17px 212px oklch(var(--bc)),
            179px 996px oklch(var(--bc)), 467px 1208px oklch(var(--bc)), 1944px 1838px oklch(var(--bc)), 1140px 1093px oklch(var(--bc)),
            858px 1007px oklch(var(--bc)), 200px 1064px oklch(var(--bc)), 423px 1964px oklch(var(--bc)), 1945px 439px oklch(var(--bc)),
            1377px 689px oklch(var(--bc)), 1120px 1437px oklch(var(--bc)), 1876px 668px oklch(var(--bc)), 907px 1324px oklch(var(--bc)),
            343px 1976px oklch(var(--bc)), 1816px 1501px oklch(var(--bc)), 1849px 177px oklch(var(--bc)), 647px 91px oklch(var(--bc)),
            1984px 1012px oklch(var(--bc)), 1336px 1300px oklch(var(--bc)), 128px 648px oklch(var(--bc)), 305px 1060px oklch(var(--bc)),
            1324px 826px oklch(var(--bc)), 1263px 1314px oklch(var(--bc)), 1801px 629px oklch(var(--bc)), 1614px 1555px oklch(var(--bc)),
            1634px 90px oklch(var(--bc)), 1603px 452px oklch(var(--bc)), 891px 1984px oklch(var(--bc)), 1556px 1906px oklch(var(--bc)),
            121px 68px oklch(var(--bc)), 1676px 1714px oklch(var(--bc)), 516px 936px oklch(var(--bc)), 1947px 1492px oklch(var(--bc)),
            1455px 1519px oklch(var(--bc)), 45px 602px oklch(var(--bc)), 205px 1039px oklch(var(--bc)), 793px 172px oklch(var(--bc)),
            1562px 1739px oklch(var(--bc)), 1056px 110px oklch(var(--bc)), 1512px 379px oklch(var(--bc)), 1795px 1621px oklch(var(--bc)),
            1848px 607px oklch(var(--bc)), 262px 1719px oklch(var(--bc)), 477px 991px oklch(var(--bc)), 483px 883px oklch(var(--bc)),
            1239px 1197px oklch(var(--bc)), 1496px 647px oklch(var(--bc)), 1649px 25px oklch(var(--bc)), 1491px 1946px oklch(var(--bc)),
            119px 996px oklch(var(--bc)), 179px 1472px oklch(var(--bc)), 1341px 808px oklch(var(--bc)), 1565px 1700px oklch(var(--bc)),
            407px 1544px oklch(var(--bc)), 1754px 357px oklch(var(--bc)), 1288px 981px oklch(var(--bc)), 902px 1997px oklch(var(--bc)),
            1755px 1668px oklch(var(--bc)), 186px 877px oklch(var(--bc)), 1202px 1882px oklch(var(--bc)), 461px 1213px oklch(var(--bc)),
            1400px 748px oklch(var(--bc)), 1969px 1899px oklch(var(--bc)), 809px 522px oklch(var(--bc)), 514px 1219px oklch(var(--bc)),
            374px 275px oklch(var(--bc)), 938px 1973px oklch(var(--bc)), 357px 552px oklch(var(--bc)), 144px 1722px oklch(var(--bc)),
            1572px 912px oklch(var(--bc)), 402px 1858px oklch(var(--bc)), 1544px 1195px oklch(var(--bc)), 667px 1257px oklch(var(--bc)),
            727px 1496px oklch(var(--bc)), 993px 232px oklch(var(--bc)), 1772px 313px oklch(var(--bc)), 1040px 1590px oklch(var(--bc)),
            1204px 1973px oklch(var(--bc)), 1268px 79px oklch(var(--bc)), 1555px 1048px oklch(var(--bc)), 986px 1707px oklch(var(--bc)),
            978px 1710px oklch(var(--bc)), 713px 360px oklch(var(--bc)), 407px 863px oklch(var(--bc)), 461px 736px oklch(var(--bc)),
            284px 1608px oklch(var(--bc)), 103px 430px oklch(var(--bc)), 1283px 1319px oklch(var(--bc)), 977px 1186px oklch(var(--bc)),
            1966px 1516px oklch(var(--bc)), 1287px 1129px oklch(var(--bc)), 70px 1098px oklch(var(--bc)), 1189px 889px oklch(var(--bc)),
            1126px 1734px oklch(var(--bc)), 309px 1292px oklch(var(--bc)), 879px 764px oklch(var(--bc)), 65px 473px oklch(var(--bc)),
            1003px 1959px oklch(var(--bc)), 658px 791px oklch(var(--bc)), 402px 1576px oklch(var(--bc)), 35px 622px oklch(var(--bc)),
            529px 1589px oklch(var(--bc)), 164px 666px oklch(var(--bc)), 1876px 1290px oklch(var(--bc)), 1541px 526px oklch(var(--bc)),
            270px 1297px oklch(var(--bc)), 440px 865px oklch(var(--bc)), 1500px 802px oklch(var(--bc)), 182px 1754px oklch(var(--bc)),
            1264px 892px oklch(var(--bc)), 272px 1249px oklch(var(--bc)), 1289px 1535px oklch(var(--bc)), 190px 1646px oklch(var(--bc)),
            955px 242px oklch(var(--bc)), 1456px 1597px oklch(var(--bc)), 1727px 1983px oklch(var(--bc)), 635px 801px oklch(var(--bc)),
            226px 455px oklch(var(--bc)), 1396px 1710px oklch(var(--bc)), 849px 1863px oklch(var(--bc)), 237px 1264px oklch(var(--bc)),
            839px 140px oklch(var(--bc)), 1122px 735px oklch(var(--bc)), 1280px 15px oklch(var(--bc)), 1318px 242px oklch(var(--bc)),
            1819px 1148px oklch(var(--bc)), 333px 1392px oklch(var(--bc)), 1949px 553px oklch(var(--bc)), 1878px 1332px oklch(var(--bc)),
            467px 548px oklch(var(--bc)), 1812px 1082px oklch(var(--bc)), 1067px 193px oklch(var(--bc)), 243px 156px oklch(var(--bc)),
            483px 1616px oklch(var(--bc)), 1714px 933px oklch(var(--bc)), 759px 1800px oklch(var(--bc)), 1822px 995px oklch(var(--bc)),
            1877px 572px oklch(var(--bc)), 581px 1084px oklch(var(--bc)), 107px 732px oklch(var(--bc)), 642px 1837px oklch(var(--bc)),
            166px 1493px oklch(var(--bc)), 1555px 198px oklch(var(--bc)), 819px 307px oklch(var(--bc)), 947px 345px oklch(var(--bc)),
            827px 224px oklch(var(--bc)), 927px 1394px oklch(var(--bc)), 540px 467px oklch(var(--bc)), 1093px 405px oklch(var(--bc)),
            1140px 927px oklch(var(--bc)), 130px 529px oklch(var(--bc)), 33px 1980px oklch(var(--bc)), 1147px 1663px oklch(var(--bc)),
            1616px 1436px oklch(var(--bc)), 528px 710px oklch(var(--bc)), 798px 1100px oklch(var(--bc)), 505px 1480px oklch(var(--bc)),
            899px 641px oklch(var(--bc)), 1909px 1949px oklch(var(--bc)), 1311px 964px oklch(var(--bc)), 979px 1301px oklch(var(--bc)),
            1393px 969px oklch(var(--bc)), 1793px 1886px oklch(var(--bc)), 292px 357px oklch(var(--bc)), 1196px 1718px oklch(var(--bc)),
            1290px 1994px oklch(var(--bc)), 537px 1973px oklch(var(--bc)), 1181px 1674px oklch(var(--bc)),
            1740px 1566px oklch(var(--bc)), 1307px 265px oklch(var(--bc)), 922px 522px oklch(var(--bc)), 1892px 472px oklch(var(--bc)),
            384px 1746px oklch(var(--bc)), 392px 1098px oklch(var(--bc)), 647px 548px oklch(var(--bc)), 390px 1498px oklch(var(--bc)),
            1246px 138px oklch(var(--bc)), 730px 876px oklch(var(--bc)), 192px 1472px oklch(var(--bc)), 1790px 1789px oklch(var(--bc)),
            928px 311px oklch(var(--bc)), 1253px 1647px oklch(var(--bc)), 747px 1921px oklch(var(--bc)), 1561px 1025px oklch(var(--bc)),
            1533px 1292px oklch(var(--bc)), 1985px 195px oklch(var(--bc)), 728px 729px oklch(var(--bc)), 1712px 1936px oklch(var(--bc)),
            512px 1717px oklch(var(--bc)), 1528px 483px oklch(var(--bc)), 313px 1642px oklch(var(--bc)), 281px 1849px oklch(var(--bc)),
            1212px 799px oklch(var(--bc)), 435px 1191px oklch(var(--bc)), 1422px 611px oklch(var(--bc)), 1718px 1964px oklch(var(--bc)),
            411px 944px oklch(var(--bc)), 210px 636px oklch(var(--bc)), 1502px 1295px oklch(var(--bc)), 1434px 349px oklch(var(--bc)),
            769px 60px oklch(var(--bc)), 747px 1053px oklch(var(--bc)), 789px 504px oklch(var(--bc)), 1436px 1264px oklch(var(--bc)),
            1893px 1225px oklch(var(--bc)), 1394px 1788px oklch(var(--bc)), 1108px 1317px oklch(var(--bc)),
            1673px 1395px oklch(var(--bc)), 854px 1010px oklch(var(--bc)), 1705px 80px oklch(var(--bc)), 1858px 148px oklch(var(--bc)),
            1729px 344px oklch(var(--bc)), 1388px 664px oklch(var(--bc)), 895px 406px oklch(var(--bc)), 1479px 157px oklch(var(--bc)),
            1441px 1157px oklch(var(--bc)), 552px 1900px oklch(var(--bc)), 516px 364px oklch(var(--bc)), 1647px 189px oklch(var(--bc)),
            1427px 1071px oklch(var(--bc)), 785px 729px oklch(var(--bc)), 1080px 1710px oklch(var(--bc)), 504px 204px oklch(var(--bc)),
            1177px 1622px oklch(var(--bc)), 657px 34px oklch(var(--bc)), 1296px 1099px oklch(var(--bc)), 248px 180px oklch(var(--bc)),
            1212px 1568px oklch(var(--bc)), 667px 1562px oklch(var(--bc)), 695px 841px oklch(var(--bc)), 1608px 1247px oklch(var(--bc)),
            751px 882px oklch(var(--bc)), 87px 167px oklch(var(--bc)), 607px 1368px oklch(var(--bc)), 1363px 1203px oklch(var(--bc)),
            1836px 317px oklch(var(--bc)), 1668px 1703px oklch(var(--bc)), 830px 1154px oklch(var(--bc)), 1721px 1398px oklch(var(--bc)),
            1601px 1280px oklch(var(--bc)), 976px 874px oklch(var(--bc)), 1743px 254px oklch(var(--bc)), 1020px 1815px oklch(var(--bc)),
            1670px 1766px oklch(var(--bc)), 1890px 735px oklch(var(--bc)), 1379px 136px oklch(var(--bc)), 1864px 695px oklch(var(--bc)),
            206px 965px oklch(var(--bc)), 1404px 1932px oklch(var(--bc)), 1923px 1360px oklch(var(--bc)), 247px 682px oklch(var(--bc)),
            519px 1708px oklch(var(--bc)), 645px 750px oklch(var(--bc)), 1164px 1204px oklch(var(--bc)), 834px 323px oklch(var(--bc)),
            172px 1350px oklch(var(--bc)), 213px 972px oklch(var(--bc)), 1837px 190px oklch(var(--bc)), 285px 1806px oklch(var(--bc)),
            1047px 1299px oklch(var(--bc)), 1548px 825px oklch(var(--bc)), 1730px 324px oklch(var(--bc)), 1346px 1909px oklch(var(--bc)),
            772px 270px oklch(var(--bc)), 345px 1190px oklch(var(--bc)), 478px 1433px oklch(var(--bc)), 1479px 25px oklch(var(--bc)),
            1994px 1830px oklch(var(--bc)), 1744px 732px oklch(var(--bc)), 20px 1635px oklch(var(--bc)), 690px 1795px oklch(var(--bc)),
            1594px 569px oklch(var(--bc)), 579px 245px oklch(var(--bc)), 1398px 733px oklch(var(--bc)), 408px 1352px oklch(var(--bc)),
            1774px 120px oklch(var(--bc)), 1152px 1370px oklch(var(--bc)), 1698px 1810px oklch(var(--bc)), 710px 1450px oklch(var(--bc)),
            665px 286px oklch(var(--bc)), 493px 1720px oklch(var(--bc)), 786px 5px oklch(var(--bc)), 637px 1140px oklch(var(--bc)),
            764px 324px oklch(var(--bc)), 927px 310px oklch(var(--bc)), 938px 1424px oklch(var(--bc)), 1884px 744px oklch(var(--bc)),
            913px 462px oklch(var(--bc)), 1831px 1936px oklch(var(--bc)), 1527px 249px oklch(var(--bc)), 36px 1381px oklch(var(--bc)),
            1597px 581px oklch(var(--bc)), 1530px 355px oklch(var(--bc)), 949px 459px oklch(var(--bc)), 799px 828px oklch(var(--bc)),
            242px 1471px oklch(var(--bc)), 654px 797px oklch(var(--bc)), 796px 594px oklch(var(--bc)), 1365px 678px oklch(var(--bc)),
            752px 23px oklch(var(--bc)), 1630px 541px oklch(var(--bc)), 982px 72px oklch(var(--bc)), 1733px 1831px oklch(var(--bc)),
            21px 412px oklch(var(--bc)), 775px 998px oklch(var(--bc)), 335px 1945px oklch(var(--bc)), 264px 583px oklch(var(--bc)),
            158px 1311px oklch(var(--bc)), 528px 164px oklch(var(--bc)), 1978px 574px oklch(var(--bc)), 717px 1203px oklch(var(--bc)),
            734px 1591px oklch(var(--bc)), 1555px 820px oklch(var(--bc)), 16px 1943px oklch(var(--bc)), 1625px 1177px oklch(var(--bc)),
            1236px 690px oklch(var(--bc)), 1585px 1590px oklch(var(--bc)), 1737px 1728px oklch(var(--bc)), 721px 698px oklch(var(--bc)),
            1804px 1186px oklch(var(--bc)), 166px 980px oklch(var(--bc)), 1850px 230px oklch(var(--bc)), 330px 1712px oklch(var(--bc)),
            95px 797px oklch(var(--bc)), 1948px 1078px oklch(var(--bc)), 469px 939px oklch(var(--bc)), 1269px 1899px oklch(var(--bc)),
            955px 1220px oklch(var(--bc)), 1137px 1075px oklch(var(--bc)), 312px 1293px oklch(var(--bc)), 986px 1762px oklch(var(--bc)),
            1103px 1238px oklch(var(--bc)), 428px 1993px oklch(var(--bc)), 355px 570px oklch(var(--bc)), 977px 1836px oklch(var(--bc)),
            1395px 1092px oklch(var(--bc)), 276px 913px oklch(var(--bc)), 1743px 656px oklch(var(--bc)), 773px 502px oklch(var(--bc)),
            1686px 1322px oklch(var(--bc)), 1516px 1945px oklch(var(--bc)), 1334px 501px oklch(var(--bc)), 266px 156px oklch(var(--bc)),
            455px 655px oklch(var(--bc)), 798px 72px oklch(var(--bc)), 1059px 1259px oklch(var(--bc)), 1402px 1687px oklch(var(--bc)),
            236px 1329px oklch(var(--bc)), 1455px 786px oklch(var(--bc)), 146px 1228px oklch(var(--bc)), 1851px 823px oklch(var(--bc)),
            1062px 100px oklch(var(--bc)), 1220px 953px oklch(var(--bc)), 20px 1826px oklch(var(--bc)), 36px 1063px oklch(var(--bc)),
            1525px 338px oklch(var(--bc)), 790px 1521px oklch(var(--bc)), 741px 1099px oklch(var(--bc)), 288px 1489px oklch(var(--bc)),
            700px 1060px oklch(var(--bc)), 390px 1071px oklch(var(--bc)), 411px 1036px oklch(var(--bc)), 1853px 1072px oklch(var(--bc)),
            1446px 1085px oklch(var(--bc)), 1164px 874px oklch(var(--bc)), 924px 925px oklch(var(--bc)), 291px 271px oklch(var(--bc)),
            1257px 1964px oklch(var(--bc)), 1580px 1352px oklch(var(--bc)), 1507px 1216px oklch(var(--bc)), 211px 956px oklch(var(--bc)),
            985px 1195px oklch(var(--bc)), 975px 1640px oklch(var(--bc)), 518px 101px oklch(var(--bc)), 663px 1395px oklch(var(--bc)),
            914px 532px oklch(var(--bc)), 145px 1320px oklch(var(--bc)), 69px 1397px oklch(var(--bc)), 982px 523px oklch(var(--bc)),
            257px 725px oklch(var(--bc)), 1599px 831px oklch(var(--bc)), 1636px 1513px oklch(var(--bc)), 1250px 1158px oklch(var(--bc)),
            1132px 604px oklch(var(--bc)), 183px 102px oklch(var(--bc)), 1057px 318px oklch(var(--bc)), 1247px 1835px oklch(var(--bc)),
            1983px 1110px oklch(var(--bc)), 1077px 1455px oklch(var(--bc)), 921px 1770px oklch(var(--bc)), 806px 1350px oklch(var(--bc)),
            1938px 1992px oklch(var(--bc)), 855px 1260px oklch(var(--bc)), 902px 1345px oklch(var(--bc)), 658px 1908px oklch(var(--bc)),
            1845px 679px oklch(var(--bc)), 712px 1482px oklch(var(--bc)), 595px 950px oklch(var(--bc)), 1784px 1992px oklch(var(--bc)),
            1847px 1785px oklch(var(--bc)), 691px 1004px oklch(var(--bc)), 175px 1179px oklch(var(--bc)), 1666px 1911px oklch(var(--bc)),
            41px 61px oklch(var(--bc)), 971px 1080px oklch(var(--bc)), 1830px 1450px oklch(var(--bc)), 1351px 1518px oklch(var(--bc)),
            1257px 99px oklch(var(--bc)), 1395px 1498px oklch(var(--bc)), 1117px 252px oklch(var(--bc)), 1779px 597px oklch(var(--bc)),
            1346px 729px oklch(var(--bc)), 1108px 1144px oklch(var(--bc)), 402px 691px oklch(var(--bc)), 72px 496px oklch(var(--bc)),
            1673px 1604px oklch(var(--bc)), 1497px 974px oklch(var(--bc)), 1865px 1664px oklch(var(--bc)), 88px 806px oklch(var(--bc)),
            918px 77px oklch(var(--bc)), 244px 1118px oklch(var(--bc)), 256px 1820px oklch(var(--bc)), 1851px 1840px oklch(var(--bc)),
            605px 1851px oklch(var(--bc)), 634px 383px oklch(var(--bc)), 865px 37px oklch(var(--bc)), 943px 1024px oklch(var(--bc)),
            1951px 177px oklch(var(--bc)), 1097px 523px oklch(var(--bc)), 985px 1700px oklch(var(--bc)), 1243px 122px oklch(var(--bc)),
            768px 1070px oklch(var(--bc)), 468px 194px oklch(var(--bc)), 320px 1867px oklch(var(--bc)), 1850px 185px oklch(var(--bc)),
            380px 1616px oklch(var(--bc)), 468px 1294px oklch(var(--bc)), 1122px 1743px oklch(var(--bc)), 884px 299px oklch(var(--bc)),
            1300px 1917px oklch(var(--bc)), 1860px 396px oklch(var(--bc)), 1270px 990px oklch(var(--bc)), 529px 733px oklch(var(--bc)),
            1975px 1347px oklch(var(--bc)), 1885px 685px oklch(var(--bc)), 226px 506px oklch(var(--bc)), 651px 878px oklch(var(--bc)),
            1323px 680px oklch(var(--bc)), 1284px 680px oklch(var(--bc)), 238px 1967px oklch(var(--bc)), 911px 174px oklch(var(--bc)),
            1111px 521px oklch(var(--bc)), 1150px 85px oklch(var(--bc)), 794px 502px oklch(var(--bc)), 484px 1856px oklch(var(--bc)),
            1809px 368px oklch(var(--bc)), 112px 953px oklch(var(--bc)), 590px 1009px oklch(var(--bc)), 1655px 311px oklch(var(--bc)),
            100px 1026px oklch(var(--bc)), 1803px 352px oklch(var(--bc)), 865px 306px oklch(var(--bc)), 1077px 1019px oklch(var(--bc)),
            1335px 872px oklch(var(--bc)), 1647px 1298px oklch(var(--bc)), 1233px 1387px oklch(var(--bc)), 698px 1036px oklch(var(--bc)),
            659px 1860px oklch(var(--bc)), 388px 1412px oklch(var(--bc)), 1212px 458px oklch(var(--bc)), 755px 1468px oklch(var(--bc)),
            696px 1654px oklch(var(--bc)), 1144px 60px oklch(var(--bc));
        }

        #stars:after {
            content: '';
            position: absolute;
            top: 2000px;
            width: 1px;
            height: 1px;
            background: transparent;
            box-shadow: 779px 1331px oklch(var(--bc)), 324px 42px oklch(var(--bc)), 303px 586px oklch(var(--bc)),
            1312px 276px oklch(var(--bc)), 451px 625px oklch(var(--bc)), 521px 1931px oklch(var(--bc)), 1087px 1871px oklch(var(--bc)),
            36px 1546px oklch(var(--bc)), 132px 934px oklch(var(--bc)), 1698px 901px oklch(var(--bc)), 1418px 664px oklch(var(--bc)),
            1448px 1157px oklch(var(--bc)), 1084px 232px oklch(var(--bc)), 347px 1776px oklch(var(--bc)), 1722px 243px oklch(var(--bc)),
            1629px 835px oklch(var(--bc)), 479px 969px oklch(var(--bc)), 1231px 960px oklch(var(--bc)), 586px 384px oklch(var(--bc)),
            164px 527px oklch(var(--bc)), 8px 646px oklch(var(--bc)), 1150px 1126px oklch(var(--bc)), 665px 1357px oklch(var(--bc)),
            1556px 1982px oklch(var(--bc)), 1260px 1961px oklch(var(--bc)), 1675px 1741px oklch(var(--bc)),
            1843px 1514px oklch(var(--bc)), 718px 1628px oklch(var(--bc)), 242px 1343px oklch(var(--bc)), 1497px 1880px oklch(var(--bc)),
            1364px 230px oklch(var(--bc)), 1739px 1302px oklch(var(--bc)), 636px 959px oklch(var(--bc)), 304px 686px oklch(var(--bc)),
            614px 751px oklch(var(--bc)), 1935px 816px oklch(var(--bc)), 1428px 60px oklch(var(--bc)), 355px 335px oklch(var(--bc)),
            1594px 158px oklch(var(--bc)), 90px 60px oklch(var(--bc)), 1553px 162px oklch(var(--bc)), 1239px 1825px oklch(var(--bc)),
            1945px 587px oklch(var(--bc)), 749px 1785px oklch(var(--bc)), 1987px 1172px oklch(var(--bc)), 1301px 1237px oklch(var(--bc)),
            1039px 342px oklch(var(--bc)), 1585px 1481px oklch(var(--bc)), 995px 1048px oklch(var(--bc)), 524px 932px oklch(var(--bc)),
            214px 413px oklch(var(--bc)), 1701px 1300px oklch(var(--bc)), 1037px 1613px oklch(var(--bc)), 1871px 996px oklch(var(--bc)),
            1360px 1635px oklch(var(--bc)), 1110px 1313px oklch(var(--bc)), 412px 1783px oklch(var(--bc)), 1949px 177px oklch(var(--bc)),
            903px 1854px oklch(var(--bc)), 700px 1936px oklch(var(--bc)), 378px 125px oklch(var(--bc)), 308px 834px oklch(var(--bc)),
            1118px 962px oklch(var(--bc)), 1350px 1929px oklch(var(--bc)), 781px 1811px oklch(var(--bc)), 561px 137px oklch(var(--bc)),
            757px 1148px oklch(var(--bc)), 1670px 1979px oklch(var(--bc)), 343px 739px oklch(var(--bc)), 945px 795px oklch(var(--bc)),
            576px 1903px oklch(var(--bc)), 1078px 1436px oklch(var(--bc)), 1583px 450px oklch(var(--bc)), 1366px 474px oklch(var(--bc)),
            297px 1873px oklch(var(--bc)), 192px 162px oklch(var(--bc)), 1624px 1633px oklch(var(--bc)), 59px 453px oklch(var(--bc)),
            82px 1872px oklch(var(--bc)), 1933px 498px oklch(var(--bc)), 1966px 1974px oklch(var(--bc)), 1975px 1688px oklch(var(--bc)),
            779px 314px oklch(var(--bc)), 1858px 1543px oklch(var(--bc)), 73px 1507px oklch(var(--bc)), 1693px 975px oklch(var(--bc)),
            1683px 108px oklch(var(--bc)), 1768px 1654px oklch(var(--bc)), 654px 14px oklch(var(--bc)), 494px 171px oklch(var(--bc)),
            1689px 1895px oklch(var(--bc)), 1660px 263px oklch(var(--bc)), 1031px 903px oklch(var(--bc)), 1203px 1393px oklch(var(--bc)),
            1333px 1421px oklch(var(--bc)), 1113px 41px oklch(var(--bc)), 1206px 1645px oklch(var(--bc)), 1325px 1635px oklch(var(--bc)),
            142px 388px oklch(var(--bc)), 572px 215px oklch(var(--bc)), 1535px 296px oklch(var(--bc)), 1419px 407px oklch(var(--bc)),
            1379px 1003px oklch(var(--bc)), 329px 469px oklch(var(--bc)), 1791px 1652px oklch(var(--bc)), 935px 1802px oklch(var(--bc)),
            1330px 1820px oklch(var(--bc)), 421px 1933px oklch(var(--bc)), 828px 365px oklch(var(--bc)), 275px 316px oklch(var(--bc)),
            707px 960px oklch(var(--bc)), 1605px 1554px oklch(var(--bc)), 625px 58px oklch(var(--bc)), 717px 1697px oklch(var(--bc)),
            1669px 246px oklch(var(--bc)), 1925px 322px oklch(var(--bc)), 1154px 1803px oklch(var(--bc)), 1929px 295px oklch(var(--bc)),
            1248px 240px oklch(var(--bc)), 1045px 1755px oklch(var(--bc)), 166px 942px oklch(var(--bc)), 1888px 1773px oklch(var(--bc)),
            678px 1963px oklch(var(--bc)), 1370px 569px oklch(var(--bc)), 1974px 1400px oklch(var(--bc)), 1786px 460px oklch(var(--bc)),
            51px 307px oklch(var(--bc)), 784px 1400px oklch(var(--bc)), 730px 1258px oklch(var(--bc)), 1712px 393px oklch(var(--bc)),
            416px 170px oklch(var(--bc)), 1797px 1932px oklch(var(--bc)), 572px 219px oklch(var(--bc)), 1557px 1856px oklch(var(--bc)),
            218px 8px oklch(var(--bc)), 348px 1334px oklch(var(--bc)), 469px 413px oklch(var(--bc)), 385px 1738px oklch(var(--bc)),
            1357px 1818px oklch(var(--bc)), 240px 942px oklch(var(--bc)), 248px 1847px oklch(var(--bc)), 1535px 806px oklch(var(--bc)),
            236px 1514px oklch(var(--bc)), 1429px 1556px oklch(var(--bc)), 73px 1633px oklch(var(--bc)), 1398px 1121px oklch(var(--bc)),
            671px 1301px oklch(var(--bc)), 1404px 1663px oklch(var(--bc)), 740px 1018px oklch(var(--bc)), 1600px 377px oklch(var(--bc)),
            785px 514px oklch(var(--bc)), 112px 1084px oklch(var(--bc)), 1915px 1887px oklch(var(--bc)), 1463px 1848px oklch(var(--bc)),
            687px 1115px oklch(var(--bc)), 1268px 1768px oklch(var(--bc)), 1729px 1425px oklch(var(--bc)),
            1284px 1022px oklch(var(--bc)), 801px 974px oklch(var(--bc)), 1975px 1317px oklch(var(--bc)), 1354px 834px oklch(var(--bc)),
            1446px 1484px oklch(var(--bc)), 1283px 1786px oklch(var(--bc)), 11px 523px oklch(var(--bc)), 1842px 236px oklch(var(--bc)),
            1355px 654px oklch(var(--bc)), 429px 7px oklch(var(--bc)), 1033px 1128px oklch(var(--bc)), 157px 297px oklch(var(--bc)),
            545px 635px oklch(var(--bc)), 52px 1080px oklch(var(--bc)), 827px 1520px oklch(var(--bc)), 1121px 490px oklch(var(--bc)),
            9px 309px oklch(var(--bc)), 1744px 1586px oklch(var(--bc)), 1014px 417px oklch(var(--bc)), 1534px 524px oklch(var(--bc)),
            958px 552px oklch(var(--bc)), 1403px 1496px oklch(var(--bc)), 387px 703px oklch(var(--bc)), 1522px 548px oklch(var(--bc)),
            1355px 282px oklch(var(--bc)), 1532px 601px oklch(var(--bc)), 1838px 790px oklch(var(--bc)), 290px 259px oklch(var(--bc)),
            295px 598px oklch(var(--bc)), 1601px 539px oklch(var(--bc)), 1561px 1272px oklch(var(--bc)), 34px 1922px oklch(var(--bc)),
            1024px 543px oklch(var(--bc)), 467px 369px oklch(var(--bc)), 722px 333px oklch(var(--bc)), 1976px 1255px oklch(var(--bc)),
            766px 983px oklch(var(--bc)), 1582px 1285px oklch(var(--bc)), 12px 512px oklch(var(--bc)), 617px 1410px oklch(var(--bc)),
            682px 577px oklch(var(--bc)), 1334px 1438px oklch(var(--bc)), 439px 327px oklch(var(--bc)), 1617px 1661px oklch(var(--bc)),
            673px 129px oklch(var(--bc)), 794px 941px oklch(var(--bc)), 1386px 1902px oklch(var(--bc)), 37px 1353px oklch(var(--bc)),
            1467px 1353px oklch(var(--bc)), 416px 18px oklch(var(--bc)), 187px 344px oklch(var(--bc)), 200px 1898px oklch(var(--bc)),
            1491px 1619px oklch(var(--bc)), 811px 347px oklch(var(--bc)), 924px 1827px oklch(var(--bc)), 945px 217px oklch(var(--bc)),
            1735px 1228px oklch(var(--bc)), 379px 1890px oklch(var(--bc)), 79px 761px oklch(var(--bc)), 825px 1837px oklch(var(--bc)),
            1980px 1558px oklch(var(--bc)), 1308px 1573px oklch(var(--bc)), 1488px 1726px oklch(var(--bc)),
            382px 1208px oklch(var(--bc)), 522px 595px oklch(var(--bc)), 1277px 1898px oklch(var(--bc)), 354px 552px oklch(var(--bc)),
            161px 1784px oklch(var(--bc)), 614px 251px oklch(var(--bc)), 526px 1576px oklch(var(--bc)), 17px 212px oklch(var(--bc)),
            179px 996px oklch(var(--bc)), 467px 1208px oklch(var(--bc)), 1944px 1838px oklch(var(--bc)), 1140px 1093px oklch(var(--bc)),
            858px 1007px oklch(var(--bc)), 200px 1064px oklch(var(--bc)), 423px 1964px oklch(var(--bc)), 1945px 439px oklch(var(--bc)),
            1377px 689px oklch(var(--bc)), 1120px 1437px oklch(var(--bc)), 1876px 668px oklch(var(--bc)), 907px 1324px oklch(var(--bc)),
            343px 1976px oklch(var(--bc)), 1816px 1501px oklch(var(--bc)), 1849px 177px oklch(var(--bc)), 647px 91px oklch(var(--bc)),
            1984px 1012px oklch(var(--bc)), 1336px 1300px oklch(var(--bc)), 128px 648px oklch(var(--bc)), 305px 1060px oklch(var(--bc)),
            1324px 826px oklch(var(--bc)), 1263px 1314px oklch(var(--bc)), 1801px 629px oklch(var(--bc)), 1614px 1555px oklch(var(--bc)),
            1634px 90px oklch(var(--bc)), 1603px 452px oklch(var(--bc)), 891px 1984px oklch(var(--bc)), 1556px 1906px oklch(var(--bc)),
            121px 68px oklch(var(--bc)), 1676px 1714px oklch(var(--bc)), 516px 936px oklch(var(--bc)), 1947px 1492px oklch(var(--bc)),
            1455px 1519px oklch(var(--bc)), 45px 602px oklch(var(--bc)), 205px 1039px oklch(var(--bc)), 793px 172px oklch(var(--bc)),
            1562px 1739px oklch(var(--bc)), 1056px 110px oklch(var(--bc)), 1512px 379px oklch(var(--bc)), 1795px 1621px oklch(var(--bc)),
            1848px 607px oklch(var(--bc)), 262px 1719px oklch(var(--bc)), 477px 991px oklch(var(--bc)), 483px 883px oklch(var(--bc)),
            1239px 1197px oklch(var(--bc)), 1496px 647px oklch(var(--bc)), 1649px 25px oklch(var(--bc)), 1491px 1946px oklch(var(--bc)),
            119px 996px oklch(var(--bc)), 179px 1472px oklch(var(--bc)), 1341px 808px oklch(var(--bc)), 1565px 1700px oklch(var(--bc)),
            407px 1544px oklch(var(--bc)), 1754px 357px oklch(var(--bc)), 1288px 981px oklch(var(--bc)), 902px 1997px oklch(var(--bc)),
            1755px 1668px oklch(var(--bc)), 186px 877px oklch(var(--bc)), 1202px 1882px oklch(var(--bc)), 461px 1213px oklch(var(--bc)),
            1400px 748px oklch(var(--bc)), 1969px 1899px oklch(var(--bc)), 809px 522px oklch(var(--bc)), 514px 1219px oklch(var(--bc)),
            374px 275px oklch(var(--bc)), 938px 1973px oklch(var(--bc)), 357px 552px oklch(var(--bc)), 144px 1722px oklch(var(--bc)),
            1572px 912px oklch(var(--bc)), 402px 1858px oklch(var(--bc)), 1544px 1195px oklch(var(--bc)), 667px 1257px oklch(var(--bc)),
            727px 1496px oklch(var(--bc)), 993px 232px oklch(var(--bc)), 1772px 313px oklch(var(--bc)), 1040px 1590px oklch(var(--bc)),
            1204px 1973px oklch(var(--bc)), 1268px 79px oklch(var(--bc)), 1555px 1048px oklch(var(--bc)), 986px 1707px oklch(var(--bc)),
            978px 1710px oklch(var(--bc)), 713px 360px oklch(var(--bc)), 407px 863px oklch(var(--bc)), 461px 736px oklch(var(--bc)),
            284px 1608px oklch(var(--bc)), 103px 430px oklch(var(--bc)), 1283px 1319px oklch(var(--bc)), 977px 1186px oklch(var(--bc)),
            1966px 1516px oklch(var(--bc)), 1287px 1129px oklch(var(--bc)), 70px 1098px oklch(var(--bc)), 1189px 889px oklch(var(--bc)),
            1126px 1734px oklch(var(--bc)), 309px 1292px oklch(var(--bc)), 879px 764px oklch(var(--bc)), 65px 473px oklch(var(--bc)),
            1003px 1959px oklch(var(--bc)), 658px 791px oklch(var(--bc)), 402px 1576px oklch(var(--bc)), 35px 622px oklch(var(--bc)),
            529px 1589px oklch(var(--bc)), 164px 666px oklch(var(--bc)), 1876px 1290px oklch(var(--bc)), 1541px 526px oklch(var(--bc)),
            270px 1297px oklch(var(--bc)), 440px 865px oklch(var(--bc)), 1500px 802px oklch(var(--bc)), 182px 1754px oklch(var(--bc)),
            1264px 892px oklch(var(--bc)), 272px 1249px oklch(var(--bc)), 1289px 1535px oklch(var(--bc)), 190px 1646px oklch(var(--bc)),
            955px 242px oklch(var(--bc)), 1456px 1597px oklch(var(--bc)), 1727px 1983px oklch(var(--bc)), 635px 801px oklch(var(--bc)),
            226px 455px oklch(var(--bc)), 1396px 1710px oklch(var(--bc)), 849px 1863px oklch(var(--bc)), 237px 1264px oklch(var(--bc)),
            839px 140px oklch(var(--bc)), 1122px 735px oklch(var(--bc)), 1280px 15px oklch(var(--bc)), 1318px 242px oklch(var(--bc)),
            1819px 1148px oklch(var(--bc)), 333px 1392px oklch(var(--bc)), 1949px 553px oklch(var(--bc)), 1878px 1332px oklch(var(--bc)),
            467px 548px oklch(var(--bc)), 1812px 1082px oklch(var(--bc)), 1067px 193px oklch(var(--bc)), 243px 156px oklch(var(--bc)),
            483px 1616px oklch(var(--bc)), 1714px 933px oklch(var(--bc)), 759px 1800px oklch(var(--bc)), 1822px 995px oklch(var(--bc)),
            1877px 572px oklch(var(--bc)), 581px 1084px oklch(var(--bc)), 107px 732px oklch(var(--bc)), 642px 1837px oklch(var(--bc)),
            166px 1493px oklch(var(--bc)), 1555px 198px oklch(var(--bc)), 819px 307px oklch(var(--bc)), 947px 345px oklch(var(--bc)),
            827px 224px oklch(var(--bc)), 927px 1394px oklch(var(--bc)), 540px 467px oklch(var(--bc)), 1093px 405px oklch(var(--bc)),
            1140px 927px oklch(var(--bc)), 130px 529px oklch(var(--bc)), 33px 1980px oklch(var(--bc)), 1147px 1663px oklch(var(--bc)),
            1616px 1436px oklch(var(--bc)), 528px 710px oklch(var(--bc)), 798px 1100px oklch(var(--bc)), 505px 1480px oklch(var(--bc)),
            899px 641px oklch(var(--bc)), 1909px 1949px oklch(var(--bc)), 1311px 964px oklch(var(--bc)), 979px 1301px oklch(var(--bc)),
            1393px 969px oklch(var(--bc)), 1793px 1886px oklch(var(--bc)), 292px 357px oklch(var(--bc)), 1196px 1718px oklch(var(--bc)),
            1290px 1994px oklch(var(--bc)), 537px 1973px oklch(var(--bc)), 1181px 1674px oklch(var(--bc)),
            1740px 1566px oklch(var(--bc)), 1307px 265px oklch(var(--bc)), 922px 522px oklch(var(--bc)), 1892px 472px oklch(var(--bc)),
            384px 1746px oklch(var(--bc)), 392px 1098px oklch(var(--bc)), 647px 548px oklch(var(--bc)), 390px 1498px oklch(var(--bc)),
            1246px 138px oklch(var(--bc)), 730px 876px oklch(var(--bc)), 192px 1472px oklch(var(--bc)), 1790px 1789px oklch(var(--bc)),
            928px 311px oklch(var(--bc)), 1253px 1647px oklch(var(--bc)), 747px 1921px oklch(var(--bc)), 1561px 1025px oklch(var(--bc)),
            1533px 1292px oklch(var(--bc)), 1985px 195px oklch(var(--bc)), 728px 729px oklch(var(--bc)), 1712px 1936px oklch(var(--bc)),
            512px 1717px oklch(var(--bc)), 1528px 483px oklch(var(--bc)), 313px 1642px oklch(var(--bc)), 281px 1849px oklch(var(--bc)),
            1212px 799px oklch(var(--bc)), 435px 1191px oklch(var(--bc)), 1422px 611px oklch(var(--bc)), 1718px 1964px oklch(var(--bc)),
            411px 944px oklch(var(--bc)), 210px 636px oklch(var(--bc)), 1502px 1295px oklch(var(--bc)), 1434px 349px oklch(var(--bc)),
            769px 60px oklch(var(--bc)), 747px 1053px oklch(var(--bc)), 789px 504px oklch(var(--bc)), 1436px 1264px oklch(var(--bc)),
            1893px 1225px oklch(var(--bc)), 1394px 1788px oklch(var(--bc)), 1108px 1317px oklch(var(--bc)),
            1673px 1395px oklch(var(--bc)), 854px 1010px oklch(var(--bc)), 1705px 80px oklch(var(--bc)), 1858px 148px oklch(var(--bc)),
            1729px 344px oklch(var(--bc)), 1388px 664px oklch(var(--bc)), 895px 406px oklch(var(--bc)), 1479px 157px oklch(var(--bc)),
            1441px 1157px oklch(var(--bc)), 552px 1900px oklch(var(--bc)), 516px 364px oklch(var(--bc)), 1647px 189px oklch(var(--bc)),
            1427px 1071px oklch(var(--bc)), 785px 729px oklch(var(--bc)), 1080px 1710px oklch(var(--bc)), 504px 204px oklch(var(--bc)),
            1177px 1622px oklch(var(--bc)), 657px 34px oklch(var(--bc)), 1296px 1099px oklch(var(--bc)), 248px 180px oklch(var(--bc)),
            1212px 1568px oklch(var(--bc)), 667px 1562px oklch(var(--bc)), 695px 841px oklch(var(--bc)), 1608px 1247px oklch(var(--bc)),
            751px 882px oklch(var(--bc)), 87px 167px oklch(var(--bc)), 607px 1368px oklch(var(--bc)), 1363px 1203px oklch(var(--bc)),
            1836px 317px oklch(var(--bc)), 1668px 1703px oklch(var(--bc)), 830px 1154px oklch(var(--bc)), 1721px 1398px oklch(var(--bc)),
            1601px 1280px oklch(var(--bc)), 976px 874px oklch(var(--bc)), 1743px 254px oklch(var(--bc)), 1020px 1815px oklch(var(--bc)),
            1670px 1766px oklch(var(--bc)), 1890px 735px oklch(var(--bc)), 1379px 136px oklch(var(--bc)), 1864px 695px oklch(var(--bc)),
            206px 965px oklch(var(--bc)), 1404px 1932px oklch(var(--bc)), 1923px 1360px oklch(var(--bc)), 247px 682px oklch(var(--bc)),
            519px 1708px oklch(var(--bc)), 645px 750px oklch(var(--bc)), 1164px 1204px oklch(var(--bc)), 834px 323px oklch(var(--bc)),
            172px 1350px oklch(var(--bc)), 213px 972px oklch(var(--bc)), 1837px 190px oklch(var(--bc)), 285px 1806px oklch(var(--bc)),
            1047px 1299px oklch(var(--bc)), 1548px 825px oklch(var(--bc)), 1730px 324px oklch(var(--bc)), 1346px 1909px oklch(var(--bc)),
            772px 270px oklch(var(--bc)), 345px 1190px oklch(var(--bc)), 478px 1433px oklch(var(--bc)), 1479px 25px oklch(var(--bc)),
            1994px 1830px oklch(var(--bc)), 1744px 732px oklch(var(--bc)), 20px 1635px oklch(var(--bc)), 690px 1795px oklch(var(--bc)),
            1594px 569px oklch(var(--bc)), 579px 245px oklch(var(--bc)), 1398px 733px oklch(var(--bc)), 408px 1352px oklch(var(--bc)),
            1774px 120px oklch(var(--bc)), 1152px 1370px oklch(var(--bc)), 1698px 1810px oklch(var(--bc)), 710px 1450px oklch(var(--bc)),
            665px 286px oklch(var(--bc)), 493px 1720px oklch(var(--bc)), 786px 5px oklch(var(--bc)), 637px 1140px oklch(var(--bc)),
            764px 324px oklch(var(--bc)), 927px 310px oklch(var(--bc)), 938px 1424px oklch(var(--bc)), 1884px 744px oklch(var(--bc)),
            913px 462px oklch(var(--bc)), 1831px 1936px oklch(var(--bc)), 1527px 249px oklch(var(--bc)), 36px 1381px oklch(var(--bc)),
            1597px 581px oklch(var(--bc)), 1530px 355px oklch(var(--bc)), 949px 459px oklch(var(--bc)), 799px 828px oklch(var(--bc)),
            242px 1471px oklch(var(--bc)), 654px 797px oklch(var(--bc)), 796px 594px oklch(var(--bc)), 1365px 678px oklch(var(--bc)),
            752px 23px oklch(var(--bc)), 1630px 541px oklch(var(--bc)), 982px 72px oklch(var(--bc)), 1733px 1831px oklch(var(--bc)),
            21px 412px oklch(var(--bc)), 775px 998px oklch(var(--bc)), 335px 1945px oklch(var(--bc)), 264px 583px oklch(var(--bc)),
            158px 1311px oklch(var(--bc)), 528px 164px oklch(var(--bc)), 1978px 574px oklch(var(--bc)), 717px 1203px oklch(var(--bc)),
            734px 1591px oklch(var(--bc)), 1555px 820px oklch(var(--bc)), 16px 1943px oklch(var(--bc)), 1625px 1177px oklch(var(--bc)),
            1236px 690px oklch(var(--bc)), 1585px 1590px oklch(var(--bc)), 1737px 1728px oklch(var(--bc)), 721px 698px oklch(var(--bc)),
            1804px 1186px oklch(var(--bc)), 166px 980px oklch(var(--bc)), 1850px 230px oklch(var(--bc)), 330px 1712px oklch(var(--bc)),
            95px 797px oklch(var(--bc)), 1948px 1078px oklch(var(--bc)), 469px 939px oklch(var(--bc)), 1269px 1899px oklch(var(--bc)),
            955px 1220px oklch(var(--bc)), 1137px 1075px oklch(var(--bc)), 312px 1293px oklch(var(--bc)), 986px 1762px oklch(var(--bc)),
            1103px 1238px oklch(var(--bc)), 428px 1993px oklch(var(--bc)), 355px 570px oklch(var(--bc)), 977px 1836px oklch(var(--bc)),
            1395px 1092px oklch(var(--bc)), 276px 913px oklch(var(--bc)), 1743px 656px oklch(var(--bc)), 773px 502px oklch(var(--bc)),
            1686px 1322px oklch(var(--bc)), 1516px 1945px oklch(var(--bc)), 1334px 501px oklch(var(--bc)), 266px 156px oklch(var(--bc)),
            455px 655px oklch(var(--bc)), 798px 72px oklch(var(--bc)), 1059px 1259px oklch(var(--bc)), 1402px 1687px oklch(var(--bc)),
            236px 1329px oklch(var(--bc)), 1455px 786px oklch(var(--bc)), 146px 1228px oklch(var(--bc)), 1851px 823px oklch(var(--bc)),
            1062px 100px oklch(var(--bc)), 1220px 953px oklch(var(--bc)), 20px 1826px oklch(var(--bc)), 36px 1063px oklch(var(--bc)),
            1525px 338px oklch(var(--bc)), 790px 1521px oklch(var(--bc)), 741px 1099px oklch(var(--bc)), 288px 1489px oklch(var(--bc)),
            700px 1060px oklch(var(--bc)), 390px 1071px oklch(var(--bc)), 411px 1036px oklch(var(--bc)), 1853px 1072px oklch(var(--bc)),
            1446px 1085px oklch(var(--bc)), 1164px 874px oklch(var(--bc)), 924px 925px oklch(var(--bc)), 291px 271px oklch(var(--bc)),
            1257px 1964px oklch(var(--bc)), 1580px 1352px oklch(var(--bc)), 1507px 1216px oklch(var(--bc)), 211px 956px oklch(var(--bc)),
            985px 1195px oklch(var(--bc)), 975px 1640px oklch(var(--bc)), 518px 101px oklch(var(--bc)), 663px 1395px oklch(var(--bc)),
            914px 532px oklch(var(--bc)), 145px 1320px oklch(var(--bc)), 69px 1397px oklch(var(--bc)), 982px 523px oklch(var(--bc)),
            257px 725px oklch(var(--bc)), 1599px 831px oklch(var(--bc)), 1636px 1513px oklch(var(--bc)), 1250px 1158px oklch(var(--bc)),
            1132px 604px oklch(var(--bc)), 183px 102px oklch(var(--bc)), 1057px 318px oklch(var(--bc)), 1247px 1835px oklch(var(--bc)),
            1983px 1110px oklch(var(--bc)), 1077px 1455px oklch(var(--bc)), 921px 1770px oklch(var(--bc)), 806px 1350px oklch(var(--bc)),
            1938px 1992px oklch(var(--bc)), 855px 1260px oklch(var(--bc)), 902px 1345px oklch(var(--bc)), 658px 1908px oklch(var(--bc)),
            1845px 679px oklch(var(--bc)), 712px 1482px oklch(var(--bc)), 595px 950px oklch(var(--bc)), 1784px 1992px oklch(var(--bc)),
            1847px 1785px oklch(var(--bc)), 691px 1004px oklch(var(--bc)), 175px 1179px oklch(var(--bc)), 1666px 1911px oklch(var(--bc)),
            41px 61px oklch(var(--bc)), 971px 1080px oklch(var(--bc)), 1830px 1450px oklch(var(--bc)), 1351px 1518px oklch(var(--bc)),
            1257px 99px oklch(var(--bc)), 1395px 1498px oklch(var(--bc)), 1117px 252px oklch(var(--bc)), 1779px 597px oklch(var(--bc)),
            1346px 729px oklch(var(--bc)), 1108px 1144px oklch(var(--bc)), 402px 691px oklch(var(--bc)), 72px 496px oklch(var(--bc)),
            1673px 1604px oklch(var(--bc)), 1497px 974px oklch(var(--bc)), 1865px 1664px oklch(var(--bc)), 88px 806px oklch(var(--bc)),
            918px 77px oklch(var(--bc)), 244px 1118px oklch(var(--bc)), 256px 1820px oklch(var(--bc)), 1851px 1840px oklch(var(--bc)),
            605px 1851px oklch(var(--bc)), 634px 383px oklch(var(--bc)), 865px 37px oklch(var(--bc)), 943px 1024px oklch(var(--bc)),
            1951px 177px oklch(var(--bc)), 1097px 523px oklch(var(--bc)), 985px 1700px oklch(var(--bc)), 1243px 122px oklch(var(--bc)),
            768px 1070px oklch(var(--bc)), 468px 194px oklch(var(--bc)), 320px 1867px oklch(var(--bc)), 1850px 185px oklch(var(--bc)),
            380px 1616px oklch(var(--bc)), 468px 1294px oklch(var(--bc)), 1122px 1743px oklch(var(--bc)), 884px 299px oklch(var(--bc)),
            1300px 1917px oklch(var(--bc)), 1860px 396px oklch(var(--bc)), 1270px 990px oklch(var(--bc)), 529px 733px oklch(var(--bc)),
            1975px 1347px oklch(var(--bc)), 1885px 685px oklch(var(--bc)), 226px 506px oklch(var(--bc)), 651px 878px oklch(var(--bc)),
            1323px 680px oklch(var(--bc)), 1284px 680px oklch(var(--bc)), 238px 1967px oklch(var(--bc)), 911px 174px oklch(var(--bc)),
            1111px 521px oklch(var(--bc)), 1150px 85px oklch(var(--bc)), 794px 502px oklch(var(--bc)), 484px 1856px oklch(var(--bc)),
            1809px 368px oklch(var(--bc)), 112px 953px oklch(var(--bc)), 590px 1009px oklch(var(--bc)), 1655px 311px oklch(var(--bc)),
            100px 1026px oklch(var(--bc)), 1803px 352px oklch(var(--bc)), 865px 306px oklch(var(--bc)), 1077px 1019px oklch(var(--bc)),
            1335px 872px oklch(var(--bc)), 1647px 1298px oklch(var(--bc)), 1233px 1387px oklch(var(--bc)), 698px 1036px oklch(var(--bc)),
            659px 1860px oklch(var(--bc)), 388px 1412px oklch(var(--bc)), 1212px 458px oklch(var(--bc)), 755px 1468px oklch(var(--bc)),
            696px 1654px oklch(var(--bc)), 1144px 60px oklch(var(--bc));
        }

        #stars2 {
            width: 2px;
            height: 2px;
            background: transparent;
            animation: animStar 100s linear infinite;
            box-shadow: 1448px 320px oklch(var(--bc)), 1775px 1663px oklch(var(--bc)), 332px 1364px oklch(var(--bc)),
            878px 340px oklch(var(--bc)), 569px 1832px oklch(var(--bc)), 1422px 1684px oklch(var(--bc)), 1946px 1907px oklch(var(--bc)),
            121px 979px oklch(var(--bc)), 1044px 1069px oklch(var(--bc)), 463px 381px oklch(var(--bc)), 423px 112px oklch(var(--bc)),
            523px 1179px oklch(var(--bc)), 779px 654px oklch(var(--bc)), 1398px 694px oklch(var(--bc)), 1085px 1464px oklch(var(--bc)),
            1599px 1869px oklch(var(--bc)), 801px 1882px oklch(var(--bc)), 779px 1231px oklch(var(--bc)), 552px 932px oklch(var(--bc)),
            1057px 1196px oklch(var(--bc)), 282px 1280px oklch(var(--bc)), 496px 1986px oklch(var(--bc)), 1833px 1120px oklch(var(--bc)),
            1802px 1293px oklch(var(--bc)), 6px 1696px oklch(var(--bc)), 412px 1902px oklch(var(--bc)), 605px 438px oklch(var(--bc)),
            24px 1212px oklch(var(--bc)), 234px 1320px oklch(var(--bc)), 544px 344px oklch(var(--bc)), 1107px 170px oklch(var(--bc)),
            1603px 196px oklch(var(--bc)), 905px 648px oklch(var(--bc)), 68px 1458px oklch(var(--bc)), 649px 1969px oklch(var(--bc)),
            744px 675px oklch(var(--bc)), 1127px 478px oklch(var(--bc)), 714px 1814px oklch(var(--bc)), 1486px 526px oklch(var(--bc)),
            270px 1636px oklch(var(--bc)), 1931px 149px oklch(var(--bc)), 1807px 378px oklch(var(--bc)), 8px 390px oklch(var(--bc)),
            1415px 699px oklch(var(--bc)), 1473px 1211px oklch(var(--bc)), 1590px 141px oklch(var(--bc)), 270px 1705px oklch(var(--bc)),
            69px 1423px oklch(var(--bc)), 1108px 1053px oklch(var(--bc)), 1946px 128px oklch(var(--bc)), 371px 371px oklch(var(--bc)),
            1490px 220px oklch(var(--bc)), 357px 1885px oklch(var(--bc)), 363px 363px oklch(var(--bc)), 1896px 1256px oklch(var(--bc)),
            1979px 1050px oklch(var(--bc)), 947px 1342px oklch(var(--bc)), 1754px 242px oklch(var(--bc)), 514px 974px oklch(var(--bc)),
            65px 1477px oklch(var(--bc)), 1840px 547px oklch(var(--bc)), 950px 695px oklch(var(--bc)), 459px 1150px oklch(var(--bc)),
            1124px 1502px oklch(var(--bc)), 481px 940px oklch(var(--bc)), 680px 839px oklch(var(--bc)), 797px 1169px oklch(var(--bc)),
            1977px 1491px oklch(var(--bc)), 734px 1724px oklch(var(--bc)), 210px 298px oklch(var(--bc)), 816px 628px oklch(var(--bc)),
            686px 770px oklch(var(--bc)), 1721px 267px oklch(var(--bc)), 1663px 511px oklch(var(--bc)), 1481px 1141px oklch(var(--bc)),
            582px 248px oklch(var(--bc)), 1308px 953px oklch(var(--bc)), 628px 657px oklch(var(--bc)), 897px 1535px oklch(var(--bc)),
            270px 931px oklch(var(--bc)), 791px 467px oklch(var(--bc)), 1336px 1732px oklch(var(--bc)), 1013px 1653px oklch(var(--bc)),
            1911px 956px oklch(var(--bc)), 587px 816px oklch(var(--bc)), 83px 456px oklch(var(--bc)), 930px 1478px oklch(var(--bc)),
            1587px 1694px oklch(var(--bc)), 614px 1200px oklch(var(--bc)), 302px 1782px oklch(var(--bc)), 1711px 1432px oklch(var(--bc)),
            443px 904px oklch(var(--bc)), 1666px 714px oklch(var(--bc)), 1588px 1167px oklch(var(--bc)), 273px 1075px oklch(var(--bc)),
            1679px 461px oklch(var(--bc)), 721px 664px oklch(var(--bc)), 1202px 10px oklch(var(--bc)), 166px 1126px oklch(var(--bc)),
            331px 1628px oklch(var(--bc)), 430px 1565px oklch(var(--bc)), 1585px 509px oklch(var(--bc)), 640px 38px oklch(var(--bc)),
            822px 837px oklch(var(--bc)), 1760px 1664px oklch(var(--bc)), 1122px 1458px oklch(var(--bc)), 398px 131px oklch(var(--bc)),
            689px 285px oklch(var(--bc)), 460px 652px oklch(var(--bc)), 1627px 365px oklch(var(--bc)), 348px 1648px oklch(var(--bc)),
            819px 1946px oklch(var(--bc)), 981px 1917px oklch(var(--bc)), 323px 76px oklch(var(--bc)), 979px 684px oklch(var(--bc)),
            887px 536px oklch(var(--bc)), 1348px 1596px oklch(var(--bc)), 1055px 666px oklch(var(--bc)), 1402px 1797px oklch(var(--bc)),
            1300px 1055px oklch(var(--bc)), 937px 238px oklch(var(--bc)), 1474px 1815px oklch(var(--bc)), 1144px 1710px oklch(var(--bc)),
            1629px 1087px oklch(var(--bc)), 911px 919px oklch(var(--bc)), 771px 819px oklch(var(--bc)), 403px 720px oklch(var(--bc)),
            163px 736px oklch(var(--bc)), 1062px 238px oklch(var(--bc)), 1774px 818px oklch(var(--bc)), 1874px 1178px oklch(var(--bc)),
            1177px 699px oklch(var(--bc)), 1244px 1244px oklch(var(--bc)), 1371px 58px oklch(var(--bc)), 564px 1515px oklch(var(--bc)),
            1824px 487px oklch(var(--bc)), 929px 702px oklch(var(--bc)), 394px 1348px oklch(var(--bc)), 1161px 641px oklch(var(--bc)),
            219px 1841px oklch(var(--bc)), 358px 941px oklch(var(--bc)), 140px 1759px oklch(var(--bc)), 1019px 1345px oklch(var(--bc)),
            274px 436px oklch(var(--bc)), 1433px 1605px oklch(var(--bc)), 1798px 1426px oklch(var(--bc)), 294px 1848px oklch(var(--bc)),
            1681px 1877px oklch(var(--bc)), 1344px 1824px oklch(var(--bc)), 1439px 1632px oklch(var(--bc)),
            161px 1012px oklch(var(--bc)), 1308px 588px oklch(var(--bc)), 1789px 582px oklch(var(--bc)), 721px 1910px oklch(var(--bc)),
            318px 218px oklch(var(--bc)), 607px 319px oklch(var(--bc)), 495px 535px oklch(var(--bc)), 1552px 1575px oklch(var(--bc)),
            1562px 67px oklch(var(--bc)), 403px 926px oklch(var(--bc)), 1096px 1800px oklch(var(--bc)), 1814px 1709px oklch(var(--bc)),
            1882px 1831px oklch(var(--bc)), 533px 46px oklch(var(--bc)), 823px 969px oklch(var(--bc)), 530px 165px oklch(var(--bc)),
            1030px 352px oklch(var(--bc)), 1681px 313px oklch(var(--bc)), 338px 115px oklch(var(--bc)), 1607px 211px oklch(var(--bc)),
            1718px 1184px oklch(var(--bc)), 1589px 659px oklch(var(--bc)), 278px 355px oklch(var(--bc)), 464px 1464px oklch(var(--bc)),
            1165px 277px oklch(var(--bc)), 950px 694px oklch(var(--bc)), 1746px 293px oklch(var(--bc)), 793px 911px oklch(var(--bc)),
            528px 773px oklch(var(--bc)), 1883px 1694px oklch(var(--bc)), 748px 182px oklch(var(--bc)), 1924px 1531px oklch(var(--bc)),
            100px 636px oklch(var(--bc)), 1473px 1445px oklch(var(--bc)), 1264px 1244px oklch(var(--bc)), 850px 1377px oklch(var(--bc)),
            987px 1976px oklch(var(--bc)), 933px 1761px oklch(var(--bc)), 922px 1270px oklch(var(--bc)), 500px 396px oklch(var(--bc)),
            1324px 8px oklch(var(--bc)), 1967px 1814px oklch(var(--bc)), 1072px 1401px oklch(var(--bc)), 961px 37px oklch(var(--bc)),
            156px 81px oklch(var(--bc)), 1915px 502px oklch(var(--bc)), 1076px 1846px oklch(var(--bc)), 152px 1669px oklch(var(--bc)),
            986px 1529px oklch(var(--bc)), 1667px 1137px oklch(var(--bc));
        }

        #stars2:after {
            content: '';
            position: absolute;
            top: 2000px;
            width: 2px;
            height: 2px;
            background: transparent;
            box-shadow: 1448px 320px oklch(var(--bc)), 1775px 1663px oklch(var(--bc)), 332px 1364px oklch(var(--bc)),
            878px 340px oklch(var(--bc)), 569px 1832px oklch(var(--bc)), 1422px 1684px oklch(var(--bc)), 1946px 1907px oklch(var(--bc)),
            121px 979px oklch(var(--bc)), 1044px 1069px oklch(var(--bc)), 463px 381px oklch(var(--bc)), 423px 112px oklch(var(--bc)),
            523px 1179px oklch(var(--bc)), 779px 654px oklch(var(--bc)), 1398px 694px oklch(var(--bc)), 1085px 1464px oklch(var(--bc)),
            1599px 1869px oklch(var(--bc)), 801px 1882px oklch(var(--bc)), 779px 1231px oklch(var(--bc)), 552px 932px oklch(var(--bc)),
            1057px 1196px oklch(var(--bc)), 282px 1280px oklch(var(--bc)), 496px 1986px oklch(var(--bc)), 1833px 1120px oklch(var(--bc)),
            1802px 1293px oklch(var(--bc)), 6px 1696px oklch(var(--bc)), 412px 1902px oklch(var(--bc)), 605px 438px oklch(var(--bc)),
            24px 1212px oklch(var(--bc)), 234px 1320px oklch(var(--bc)), 544px 344px oklch(var(--bc)), 1107px 170px oklch(var(--bc)),
            1603px 196px oklch(var(--bc)), 905px 648px oklch(var(--bc)), 68px 1458px oklch(var(--bc)), 649px 1969px oklch(var(--bc)),
            744px 675px oklch(var(--bc)), 1127px 478px oklch(var(--bc)), 714px 1814px oklch(var(--bc)), 1486px 526px oklch(var(--bc)),
            270px 1636px oklch(var(--bc)), 1931px 149px oklch(var(--bc)), 1807px 378px oklch(var(--bc)), 8px 390px oklch(var(--bc)),
            1415px 699px oklch(var(--bc)), 1473px 1211px oklch(var(--bc)), 1590px 141px oklch(var(--bc)), 270px 1705px oklch(var(--bc)),
            69px 1423px oklch(var(--bc)), 1108px 1053px oklch(var(--bc)), 1946px 128px oklch(var(--bc)), 371px 371px oklch(var(--bc)),
            1490px 220px oklch(var(--bc)), 357px 1885px oklch(var(--bc)), 363px 363px oklch(var(--bc)), 1896px 1256px oklch(var(--bc)),
            1979px 1050px oklch(var(--bc)), 947px 1342px oklch(var(--bc)), 1754px 242px oklch(var(--bc)), 514px 974px oklch(var(--bc)),
            65px 1477px oklch(var(--bc)), 1840px 547px oklch(var(--bc)), 950px 695px oklch(var(--bc)), 459px 1150px oklch(var(--bc)),
            1124px 1502px oklch(var(--bc)), 481px 940px oklch(var(--bc)), 680px 839px oklch(var(--bc)), 797px 1169px oklch(var(--bc)),
            1977px 1491px oklch(var(--bc)), 734px 1724px oklch(var(--bc)), 210px 298px oklch(var(--bc)), 816px 628px oklch(var(--bc)),
            686px 770px oklch(var(--bc)), 1721px 267px oklch(var(--bc)), 1663px 511px oklch(var(--bc)), 1481px 1141px oklch(var(--bc)),
            582px 248px oklch(var(--bc)), 1308px 953px oklch(var(--bc)), 628px 657px oklch(var(--bc)), 897px 1535px oklch(var(--bc)),
            270px 931px oklch(var(--bc)), 791px 467px oklch(var(--bc)), 1336px 1732px oklch(var(--bc)), 1013px 1653px oklch(var(--bc)),
            1911px 956px oklch(var(--bc)), 587px 816px oklch(var(--bc)), 83px 456px oklch(var(--bc)), 930px 1478px oklch(var(--bc)),
            1587px 1694px oklch(var(--bc)), 614px 1200px oklch(var(--bc)), 302px 1782px oklch(var(--bc)), 1711px 1432px oklch(var(--bc)),
            443px 904px oklch(var(--bc)), 1666px 714px oklch(var(--bc)), 1588px 1167px oklch(var(--bc)), 273px 1075px oklch(var(--bc)),
            1679px 461px oklch(var(--bc)), 721px 664px oklch(var(--bc)), 1202px 10px oklch(var(--bc)), 166px 1126px oklch(var(--bc)),
            331px 1628px oklch(var(--bc)), 430px 1565px oklch(var(--bc)), 1585px 509px oklch(var(--bc)), 640px 38px oklch(var(--bc)),
            822px 837px oklch(var(--bc)), 1760px 1664px oklch(var(--bc)), 1122px 1458px oklch(var(--bc)), 398px 131px oklch(var(--bc)),
            689px 285px oklch(var(--bc)), 460px 652px oklch(var(--bc)), 1627px 365px oklch(var(--bc)), 348px 1648px oklch(var(--bc)),
            819px 1946px oklch(var(--bc)), 981px 1917px oklch(var(--bc)), 323px 76px oklch(var(--bc)), 979px 684px oklch(var(--bc)),
            887px 536px oklch(var(--bc)), 1348px 1596px oklch(var(--bc)), 1055px 666px oklch(var(--bc)), 1402px 1797px oklch(var(--bc)),
            1300px 1055px oklch(var(--bc)), 937px 238px oklch(var(--bc)), 1474px 1815px oklch(var(--bc)), 1144px 1710px oklch(var(--bc)),
            1629px 1087px oklch(var(--bc)), 911px 919px oklch(var(--bc)), 771px 819px oklch(var(--bc)), 403px 720px oklch(var(--bc)),
            163px 736px oklch(var(--bc)), 1062px 238px oklch(var(--bc)), 1774px 818px oklch(var(--bc)), 1874px 1178px oklch(var(--bc)),
            1177px 699px oklch(var(--bc)), 1244px 1244px oklch(var(--bc)), 1371px 58px oklch(var(--bc)), 564px 1515px oklch(var(--bc)),
            1824px 487px oklch(var(--bc)), 929px 702px oklch(var(--bc)), 394px 1348px oklch(var(--bc)), 1161px 641px oklch(var(--bc)),
            219px 1841px oklch(var(--bc)), 358px 941px oklch(var(--bc)), 140px 1759px oklch(var(--bc)), 1019px 1345px oklch(var(--bc)),
            274px 436px oklch(var(--bc)), 1433px 1605px oklch(var(--bc)), 1798px 1426px oklch(var(--bc)), 294px 1848px oklch(var(--bc)),
            1681px 1877px oklch(var(--bc)), 1344px 1824px oklch(var(--bc)), 1439px 1632px oklch(var(--bc)),
            161px 1012px oklch(var(--bc)), 1308px 588px oklch(var(--bc)), 1789px 582px oklch(var(--bc)), 721px 1910px oklch(var(--bc)),
            318px 218px oklch(var(--bc)), 607px 319px oklch(var(--bc)), 495px 535px oklch(var(--bc)), 1552px 1575px oklch(var(--bc)),
            1562px 67px oklch(var(--bc)), 403px 926px oklch(var(--bc)), 1096px 1800px oklch(var(--bc)), 1814px 1709px oklch(var(--bc)),
            1882px 1831px oklch(var(--bc)), 533px 46px oklch(var(--bc)), 823px 969px oklch(var(--bc)), 530px 165px oklch(var(--bc)),
            1030px 352px oklch(var(--bc)), 1681px 313px oklch(var(--bc)), 338px 115px oklch(var(--bc)), 1607px 211px oklch(var(--bc)),
            1718px 1184px oklch(var(--bc)), 1589px 659px oklch(var(--bc)), 278px 355px oklch(var(--bc)), 464px 1464px oklch(var(--bc)),
            1165px 277px oklch(var(--bc)), 950px 694px oklch(var(--bc)), 1746px 293px oklch(var(--bc)), 793px 911px oklch(var(--bc)),
            528px 773px oklch(var(--bc)), 1883px 1694px oklch(var(--bc)), 748px 182px oklch(var(--bc)), 1924px 1531px oklch(var(--bc)),
            100px 636px oklch(var(--bc)), 1473px 1445px oklch(var(--bc)), 1264px 1244px oklch(var(--bc)), 850px 1377px oklch(var(--bc)),
            987px 1976px oklch(var(--bc)), 933px 1761px oklch(var(--bc)), 922px 1270px oklch(var(--bc)), 500px 396px oklch(var(--bc)),
            1324px 8px oklch(var(--bc)), 1967px 1814px oklch(var(--bc)), 1072px 1401px oklch(var(--bc)), 961px 37px oklch(var(--bc)),
            156px 81px oklch(var(--bc)), 1915px 502px oklch(var(--bc)), 1076px 1846px oklch(var(--bc)), 152px 1669px oklch(var(--bc)),
            986px 1529px oklch(var(--bc)), 1667px 1137px oklch(var(--bc));
        }

        #stars3 {
            width: 3px;
            height: 3px;
            background: transparent;
            animation: animStar 150s linear infinite;
            box-shadow: 387px 1878px oklch(var(--bc)), 760px 1564px oklch(var(--bc)), 1487px 999px oklch(var(--bc)),
            948px 1828px oklch(var(--bc)), 1977px 1001px oklch(var(--bc)), 1284px 1963px oklch(var(--bc)), 656px 284px oklch(var(--bc)),
            1268px 1635px oklch(var(--bc)), 1820px 598px oklch(var(--bc)), 642px 1900px oklch(var(--bc)), 296px 57px oklch(var(--bc)),
            921px 1620px oklch(var(--bc)), 476px 1858px oklch(var(--bc)), 658px 613px oklch(var(--bc)), 1171px 1363px oklch(var(--bc)),
            1419px 283px oklch(var(--bc)), 1037px 731px oklch(var(--bc)), 503px 663px oklch(var(--bc)), 1562px 463px oklch(var(--bc)),
            383px 1197px oklch(var(--bc)), 1171px 1233px oklch(var(--bc)), 876px 1768px oklch(var(--bc)), 856px 1615px oklch(var(--bc)),
            1375px 1924px oklch(var(--bc)), 1725px 918px oklch(var(--bc)), 952px 119px oklch(var(--bc)), 768px 1212px oklch(var(--bc)),
            992px 1462px oklch(var(--bc)), 1929px 717px oklch(var(--bc)), 1947px 755px oklch(var(--bc)), 1818px 1123px oklch(var(--bc)),
            1896px 1672px oklch(var(--bc)), 460px 198px oklch(var(--bc)), 256px 271px oklch(var(--bc)), 752px 544px oklch(var(--bc)),
            1222px 1859px oklch(var(--bc)), 1851px 443px oklch(var(--bc)), 313px 1858px oklch(var(--bc)), 709px 446px oklch(var(--bc)),
            1546px 697px oklch(var(--bc)), 674px 1155px oklch(var(--bc)), 1112px 130px oklch(var(--bc)), 355px 1790px oklch(var(--bc)),
            1496px 974px oklch(var(--bc)), 1696px 480px oklch(var(--bc)), 1316px 1265px oklch(var(--bc)), 1645px 1063px oklch(var(--bc)),
            1182px 237px oklch(var(--bc)), 427px 1582px oklch(var(--bc)), 859px 253px oklch(var(--bc)), 458px 939px oklch(var(--bc)),
            1517px 1644px oklch(var(--bc)), 1943px 60px oklch(var(--bc)), 212px 1650px oklch(var(--bc)), 966px 1786px oklch(var(--bc)),
            473px 712px oklch(var(--bc)), 130px 76px oklch(var(--bc)), 1417px 1186px oklch(var(--bc)), 909px 1580px oklch(var(--bc)),
            1913px 762px oklch(var(--bc)), 204px 1143px oklch(var(--bc)), 1998px 1057px oklch(var(--bc)), 1468px 1301px oklch(var(--bc)),
            144px 1676px oklch(var(--bc)), 21px 1601px oklch(var(--bc)), 382px 1362px oklch(var(--bc)), 912px 753px oklch(var(--bc)),
            1488px 1405px oklch(var(--bc)), 802px 156px oklch(var(--bc)), 174px 550px oklch(var(--bc)), 338px 1366px oklch(var(--bc)),
            1197px 774px oklch(var(--bc)), 602px 486px oklch(var(--bc)), 682px 1877px oklch(var(--bc)), 348px 1503px oklch(var(--bc)),
            407px 1139px oklch(var(--bc)), 950px 1400px oklch(var(--bc)), 922px 1139px oklch(var(--bc)), 1697px 293px oklch(var(--bc)),
            1238px 1281px oklch(var(--bc)), 1038px 1197px oklch(var(--bc)), 376px 1889px oklch(var(--bc)),
            1255px 1680px oklch(var(--bc)), 1008px 1316px oklch(var(--bc)), 1538px 1447px oklch(var(--bc)),
            1186px 874px oklch(var(--bc)), 1967px 640px oklch(var(--bc)), 1341px 19px oklch(var(--bc)), 29px 1732px oklch(var(--bc)),
            16px 1650px oklch(var(--bc)), 1021px 1075px oklch(var(--bc)), 723px 424px oklch(var(--bc)), 1175px 41px oklch(var(--bc)),
            494px 1957px oklch(var(--bc)), 1296px 431px oklch(var(--bc)), 175px 1507px oklch(var(--bc)), 831px 121px oklch(var(--bc)),
            498px 1947px oklch(var(--bc)), 617px 880px oklch(var(--bc)), 240px 403px oklch(var(--bc));
        }

        #stars3:after {
            content: '';
            position: absolute;
            top: 2000px;
            width: 3px;
            height: 3px;
            background: transparent;
            box-shadow: 387px 1878px oklch(var(--bc)), 760px 1564px oklch(var(--bc)), 1487px 999px oklch(var(--bc)),
            948px 1828px oklch(var(--bc)), 1977px 1001px oklch(var(--bc)), 1284px 1963px oklch(var(--bc)), 656px 284px oklch(var(--bc)),
            1268px 1635px oklch(var(--bc)), 1820px 598px oklch(var(--bc)), 642px 1900px oklch(var(--bc)), 296px 57px oklch(var(--bc)),
            921px 1620px oklch(var(--bc)), 476px 1858px oklch(var(--bc)), 658px 613px oklch(var(--bc)), 1171px 1363px oklch(var(--bc)),
            1419px 283px oklch(var(--bc)), 1037px 731px oklch(var(--bc)), 503px 663px oklch(var(--bc)), 1562px 463px oklch(var(--bc)),
            383px 1197px oklch(var(--bc)), 1171px 1233px oklch(var(--bc)), 876px 1768px oklch(var(--bc)), 856px 1615px oklch(var(--bc)),
            1375px 1924px oklch(var(--bc)), 1725px 918px oklch(var(--bc)), 952px 119px oklch(var(--bc)), 768px 1212px oklch(var(--bc)),
            992px 1462px oklch(var(--bc)), 1929px 717px oklch(var(--bc)), 1947px 755px oklch(var(--bc)), 1818px 1123px oklch(var(--bc)),
            1896px 1672px oklch(var(--bc)), 460px 198px oklch(var(--bc)), 256px 271px oklch(var(--bc)), 752px 544px oklch(var(--bc)),
            1222px 1859px oklch(var(--bc)), 1851px 443px oklch(var(--bc)), 313px 1858px oklch(var(--bc)), 709px 446px oklch(var(--bc)),
            1546px 697px oklch(var(--bc)), 674px 1155px oklch(var(--bc)), 1112px 130px oklch(var(--bc)), 355px 1790px oklch(var(--bc)),
            1496px 974px oklch(var(--bc)), 1696px 480px oklch(var(--bc)), 1316px 1265px oklch(var(--bc)), 1645px 1063px oklch(var(--bc)),
            1182px 237px oklch(var(--bc)), 427px 1582px oklch(var(--bc)), 859px 253px oklch(var(--bc)), 458px 939px oklch(var(--bc)),
            1517px 1644px oklch(var(--bc)), 1943px 60px oklch(var(--bc)), 212px 1650px oklch(var(--bc)), 966px 1786px oklch(var(--bc)),
            473px 712px oklch(var(--bc)), 130px 76px oklch(var(--bc)), 1417px 1186px oklch(var(--bc)), 909px 1580px oklch(var(--bc)),
            1913px 762px oklch(var(--bc)), 204px 1143px oklch(var(--bc)), 1998px 1057px oklch(var(--bc)), 1468px 1301px oklch(var(--bc)),
            144px 1676px oklch(var(--bc)), 21px 1601px oklch(var(--bc)), 382px 1362px oklch(var(--bc)), 912px 753px oklch(var(--bc)),
            1488px 1405px oklch(var(--bc)), 802px 156px oklch(var(--bc)), 174px 550px oklch(var(--bc)), 338px 1366px oklch(var(--bc)),
            1197px 774px oklch(var(--bc)), 602px 486px oklch(var(--bc)), 682px 1877px oklch(var(--bc)), 348px 1503px oklch(var(--bc)),
            407px 1139px oklch(var(--bc)), 950px 1400px oklch(var(--bc)), 922px 1139px oklch(var(--bc)), 1697px 293px oklch(var(--bc)),
            1238px 1281px oklch(var(--bc)), 1038px 1197px oklch(var(--bc)), 376px 1889px oklch(var(--bc)),
            1255px 1680px oklch(var(--bc)), 1008px 1316px oklch(var(--bc)), 1538px 1447px oklch(var(--bc)),
            1186px 874px oklch(var(--bc)), 1967px 640px oklch(var(--bc)), 1341px 19px oklch(var(--bc)), 29px 1732px oklch(var(--bc)),
            16px 1650px oklch(var(--bc)), 1021px 1075px oklch(var(--bc)), 723px 424px oklch(var(--bc)), 1175px 41px oklch(var(--bc)),
            494px 1957px oklch(var(--bc)), 1296px 431px oklch(var(--bc)), 175px 1507px oklch(var(--bc)), 831px 121px oklch(var(--bc)),
            498px 1947px oklch(var(--bc)), 617px 880px oklch(var(--bc)), 240px 403px oklch(var(--bc));
        }


        @keyframes animStar {
            from {
                transform: translateY(0px);
            }
            to {
                transform: translateY(-2000px);
            }
        }


        @media (max-width: 1024px) {
            #themeControllers {
                width: 50%;
                justify-content: flex-end;
            }
        }

        @media (min-width: 1024px) {
            #themeController {
                flex-shrink: 0;
            }
        }
    </style>
</head>
<body>
    {{--  Navbar  --}}
    <navbar class="navbar bg-base-100/30 backdrop-blur-md sticky top-0 z-50">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="#about" class="rounded">About</a></li>
                    <li><a href="#project" class="rounded">Project</a></li>
                    <li><a href="#experience" class="rounded">Experience</a></li>
                    <li><a href="#contact" class="rounded">Contact</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl" href="/">
                <img src="{{ asset('assets') }}/logo/logo.png" alt="" class="w-7 rounded">
                nathgrz
            </a>
        </div>
        {{--    Theme Controller    --}}
        <div class="flex" id="themeControllers">
            <label class="flex cursor-pointer gap-2">
                <svg class="hidden lg:block" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4"/></svg>
                <input type="checkbox" value="sunset" class="toggle theme-controller" id="themeController"/>
                <svg class="hidden lg:block" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
            </label>
        </div>
        <div class="navbar-end hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="#about" class="rounded">About</a></li>
                <li><a href="#project" class="rounded">Project</a></li>
                <li><a href="#experience" class="rounded">Experience</a></li>
                <li><a href="#contact" class="rounded">Contact</a></li>
            </ul>
        </div>
    </navbar>

    <section class="wrapper">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </section>

    {{--  CONTENT  --}}
    <main class="p-10 mt-7 flex flex-col items-center justify-center gap-8">
        {{--    Introduction    --}}
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex flex-col items-start gap-2 select-none">
                <h1 class="text-5xl font-medium">Nathan Garzya<br/>Santoso</h1>
                <h2 class="text-2xl text-secondary font-light min-h-14" id="typing"></h2>
            </div>
            <p class="pt-8 lg:pt-0">
                <span class="text-2xl inline-block mb-2">Hi,</span> <br />
                "I'm Nathan Garzya Santoso. A computer science student who has interest on web development and machine learning with a passion for crafting engaging user experiences. Welcome to my portfolio."
            </p>
        </div>

        {{--    About    --}}
        <div class="bg-base-200 p-3 select-none w-full section">
            <div class="flex justify-center"><h2 class="text-4xl text-primary" id="about">About</h2></div>
            <div class="avatar flex flex-col justify-center items-center">
                <div class="w-4/5 lg:w-2/5 rounded">
                    <img src="{{ asset('assets') }}/foto/nathan 2.png" draggable="false"/>
                </div>
                <p class="w-full lg:w-3/5 pt-6 text-justify">I am a Web Developer specialized in Full Stack Programming with one year experience in Web Development, which gives me an understanding of website structure and optimization requirements. I'm <span class="font-medium text-accent">passionate about crafting websites and developing robust web applications</span>. Equipped with problem-solving prowess and a knack for critical thinking, I am poised to make meaningful contributions to the ever-evolving tech landscape.</p>
            </div>
        </div>

        {{--    SKILLS    --}}
        <div class="p-3 section">
            <div class="flex justify-center"><h2 class="text-4xl text-primary" id="skill">Skill</h2></div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 pt-6 skills">
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">HTML5</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">CSS3</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Javascript</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Typescript</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Bootstrap</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Tailwind</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">DaisyUI</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">PHP</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Python</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Numpy</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Pandas</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Matplotlib</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Scikit Learn</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">OpenCV</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">C#</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">C++</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Kotlin</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Laravel</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Git</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">NodeJS</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">ExpressJS</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">AdonisJS</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">SQL</div>
                <div class="skill bg-info text-info-content py-2 px-6 rounded flex text-center justify-center items-center h-fit">Figma</div>
            </div>
        </div>

        {{--    Projects    --}}
        <div class="bg-base-200 p-3 select-none w-full section">
            <div class="flex justify-center"><h2 class="text-4xl text-primary" id="project">Project</h2></div>
            <p class="pt-6 flex justify-center">Currently, you can see all my projects on Github &nbsp; <a href="https://github.com/canonflow" target="_blank"><strong>@canonflow</strong></a></p>
        </div>

        {{--    Experiences    --}}
        <div class="p-3 select-none w-full section">
            <div class="flex justify-center"><h2 class="text-4xl text-primary" id="experience">Experience</h2></div>
            <ul class="timeline timeline-vertical">
                @foreach($experiences as $cnt => $experience)
                    <li class="h-44">
                        @if($cnt != 0) <hr class="bg-accent" /> @endif
                        <div class="timeline-start text-md lg:text-lg mr-4">{{ $experience['timeline'] }}</div>
                        <div class="timeline-middle badge badge-outline badge-accent badge-md py-4 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z" />
                            </svg>
                        </div>
                        <div class="timeline-end timeline-box text-md lg:text-lg rounded-md ml-4">
                            <span class="text-secondary">{{ $experience['title'] }}</span>
                            <br />
                            <span class="inline-block mt-3 md:mt-2 font-light">{{ $experience['company'] }}</span>
                        </div>
                        @if($cnt < count($experiences) - 1) <hr class="bg-accent" /> @endif
                    </li>
                @endforeach
            </ul>
        </div>

        {{--    Contact    --}}
        <div class="bg-base-200 p-3 select-none w-full section">
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-4xl text-primary" id="contact">Contact</h2>
                <p class="pt-3 text-lg">Feel free to contact me for any inquiries you may have!</p>
            </div>
            {{--      Links      --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 pt-6">
                {{--  Github  --}}
                <a
                    href="https://github.com/canonflow"
                    target="_blank"
                    class="flex justify-center items-center gap-2 rounded bg-neutral text-neutral-content p-2 pointer"
                >
                    <span class="[&>svg]:h-5 [&>svg]:w-5">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          viewBox="0 0 496 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                        <path
                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                      </svg>
                    </span>
                    Github
                </a>

                {{--  Linkedin  --}}
                <a
                    href="https://www.linkedin.com/in/nathan-garzya-santoso-3209bb212/"
                    target="_blank"
                    class="flex justify-center items-center gap-2 rounded bg-neutral text-neutral-content p-2 pointer"
                >
                    <span class="[&>svg]:h-5 [&>svg]:w-5 [&>svg]:fill-[#0077b5]">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                        <path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"></path>
                      </svg>
                    </span>
                    LinkedIn
                </a>

                {{--  Email  --}}
                <a
                    href="mailto:dev.nathangarzyasantoso@gmail.com"
                    target="_blank"
                    class="flex justify-center items-center gap-2 rounded bg-neutral text-neutral-content p-2 pointer"
                >
                    <span class="[&>svg]:h-5 [&>svg]:w-5 [&>svg]:fill-[#ea4335]">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                        <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                      </svg>
                    </span>
                    Email
                </a>

                {{--  Instagram  --}}
                <a
                    href="https://www.instagram.com/nathgrz._"
                    target="_blank"
                    class="flex justify-center items-center gap-2 rounded bg-neutral text-neutral-content p-2 pointer"
                >
                    <span class="[&>svg]:h-5 [&>svg]:w-5 [&>svg]:fill-[#c13584]">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          viewBox="0 0 448 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                        <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                      </svg>
                    </span>
                    Instagram
                </a>
            </div>
        </div>
    </main>

    <div class="divider"></div>

    <footer>
        <div class="flex flex-col items-center md:flex-row md:justify-between py-6 px-8 bg-warning text-warning-content">
            <p class="text-center">&copy; 2024 Nathan Garzya Santoso. All Rights Reserved.</p>
            <p class="mt-2 md:mt-0">dev.nathangarzyasantoso@gmail.com</p>
        </div>
    </footer>

    <script>
        const themeController = document.getElementById('themeController');
        window.onload = function () {
            themeController.checked = JSON.parse(localStorage.getItem('isDark'));
        }

        themeController.addEventListener('change', (e) => {
            localStorage.setItem('isDark', e.target.checked);
        })
    </script>

    {{--  Typed  --}}
    <script type="module">
        var typed = new Typed('#typing', {
            strings: ["Computer Science Student", "Full Stack Developer", "Machine Learning"],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true,
            // backDelay: 2800,
            backDelay: 1500,
            showCursor: false,
        });
    </script>

    {{--  GSAP  --}}
    <script>
        const datas = gsap.utils.toArray('.section');
        datas.forEach(data => {
            const anim = gsap.fromTo(
                data,
                {
                    autoAlpha: 0,
                    y: 100,
                },
                {
                    duration: 0.75,
                    autoAlpha: 1,
                    y: 0,
                    x: 0,
                }
            );
            ScrollTrigger.create({
                trigger: data,
                animation: anim,
            });
        });
    </script>
</body>
</html>
