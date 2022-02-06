<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="codigoJS.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../meustyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            font-size: 16px;
        }

        body {
            background-color: rgb(212, 218, 137);
        }

        .titulo {
            font-size: 2rem;
            font-family: 'Architects Daughter', cursive;
            color: rgb(0, 0, 0);
            text-align: center;
            margin-top: 0.5rem;
            text-shadow: 1rem 1rem 1rem rgba(0, 0, 0, .6);
        }

        .corpo {
            display: flex;
            width: 100%;
            height: auto;
            align-items: top;

            margin-top: 1rem;
        }

        div#sect {
            display: block;
            width: 20%;
        }

        section {
            display: flex;
            flex-wrap: wrap;
            width: 45%;
            align-items: top;
            justify-content: top;
        }

        aside {
            display: flex;
            width: 38%;
            justify-content: start;

        }

        div#selecioned {
            display: block;
            width: 50%;
            height: 50%;
            visibility: hidden;
            justify-content: center;
            align-items: center;


        }

        .maletas {
            width: 5rem;
            height: 5rem;
            text-align: center;
            font: bolder;
            font-size: 1rem;
            margin: 0.1rem;
            background-image: url("456.png");
            background-size: 5rem;
            background-repeat: no-repeat;
            text-overflow: clip;
            padding: 0;


        }

        .maletas p {
            margin-top: 3rem;
        }
        
        .maletas:hover {
            cursor: pointer;
            color: rgba(0, 0, 0, 0.8);
            -webkit-transform: scale(1.5);
            -webkit-transition: all .35s ease-in;
        }

        aside#restante {
            display: block;
            position: relative;
            float: right;
            margin-right: 1rem;
            background-color: rgb(196, 196, 104);
            box-shadow: 4px 5px 10px rgba(0, 0, 0, 0.4);
            border-radius: 10px;

        }

        #res {
            text-align: center;
        }

        ul#secon {
            list-style: none;
            border-radius: 0.4rem;
            width: 80%;
            font-weight: bolder;
            padding-left: 1rem;
        }

        ul#secon li {
            border: solid 0.001rem black;
        }

        div#resulfinal {
            display: block;
            float: left;
            color: green;
            font-weight: bolder;
            font-size: 20pt;
            text-shadow: 2px 4px 4px rgba(0, 0, 0, 0.4);
            background-color: rgba(255, 238, 0, 0.938);
            box-shadow: 3px 3px 18px rgba(0, 0, 0, 0.651);
            width: 200px;
            height: 200px;
            margin-left: -250px;
            margin-top: 300px;
            border-radius: 10px;
            text-align: center;

            visibility: hidden;


        }

        
        p#sSel {
            display: block;
            font-size: 15pt;
            margin-top: 2rem;
            padding-top: 1rem;
            margin-left: 2rem;
            font-weight: bolder;
        }

        /* p#tSel {
            font-family: 'Architects Daughter', cursive;
        }

        section {
            width: 60%;
            height: 80%;
        }

        aside#restante {
            display: block;
            position: relative;
            float: right;
            margin-top: -55%;
            width: 40%;
            margin-right: 0%;
            background-color: rgb(196, 196, 104);
            box-shadow: 4px 5px 10px rgba(0, 0, 0, 0.4);
            border-radius: 80px;

        }


        div#resulfinal {
            display: block;
            position: absolute;
            float: left;
            color: green;
            font-weight: bolder;
            font-size: 20pt;
            text-shadow: 2px 4px 4px rgba(0, 0, 0, 0.4);
            background-color: rgba(255, 238, 0, 0.938);
            box-shadow: 3px 3px 18px rgba(0, 0, 0, 0.651);
            width: 200px;
            height: 200px;
            margin-left: -250px;
            margin-top: 300px;
            border-radius: 10px;
            text-align: center;

            visibility: hidden;


        }

        div#resulfinal p {
            margin-top: 40px;
        }

        div#sect {
            display: block;
            padding-top: 50px;
            margin-left: 300px;

        }



        .maletas p {
            margin-top: 60px;
        }

        .maletas:hover {
            cursor: pointer;
            color: rgba(0, 0, 0, 0.8);
            -webkit-transform: scale(1.5);
            -webkit-transition: all .35s ease-in;
        }


        h1 {
            margin-left: 100px;
            margin-top: -20px;
            font-size: 30pt;
            font-family: 'Architects Daughter', cursive;
            color: darkgoldenrod;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        }

        .sel {
            color: black;
            display: ruby;
        }

        p#tSel {
            display: block;
            text-align: center;
            font-size: 18pt;
            font-weight: bolder;
            text-shadow: 2px 3px 5px rgba(0, 0, 0, 0.4);
        }

        p#sSel {
            display: block;
            text-align: center;
            margin-top: 50px;
            font-size: 15pt;
            font-weight: bolder;
        }



        h1#res {
            display: block;
            position: relative;
            margin-left: 100px;
            color: black;
            margin-top: 10px;
            color: rgb(117, 84, 0);
            text-shadow: 2px 2px 6px rgba(88, 69, 5, 0.8);
            font-size: 25pt;



        }



        ul {
            position: relative;
            list-style: none;
            display: block;
            float: right;
            margin-top: -10px;
            margin-right: 50px;


        }

        ul#prim {
            padding-left: -50px;
        }

        li {
            border: 0.5px solid rgb(15, 15, 2);
            padding: 10px;
            width: 100px;
            box-shadow: 4px 5px 10px rgba(32, 32, 32, 0.753);
            text-align: right;

        }

       .dinheiro {
            float: left;
        }

        footer {
            display: block;
            margin-top: 20px;
            font-size: 10pt;

        }

        @media (max-width: 800px) {
            body {
                background-color: rgb(212, 218, 137);
            }
        }

        h1 {
            display: flex;
            position: initial;
            float: inline-start;
            margin-top: -100%;
            font-size: 100%;
            font-family: 'Architects Daughter', cursive;
            color: darkgoldenrod;
            text-shadow: 1% 1% 5% rgba(0, 0, 0, 0.4);
        }

        div#selecioned {
            display: block;
            position: absolute;
            float: left;

            background-color: rgba(179, 167, 11, 0.938);
            box-shadow: 1% 1% 4%px rgba(0, 0, 0, 0.8);
            width: 15%;
            height: 15%;
            margin-left: -58%;
            margin-top: 0%;
            visibility: hidden;
            border-radius: 4%;


        }


        p#tSel {
            font-family: 'Architects Daughter', cursive;
            font-size: 150%;
        }


        div#resulfinal {
            display: block;
            position: absolute;
            float: left;
            color: green;
            font-weight: bolder;
            font-size: 90%;
            text-shadow: 1% 1% 5% rgba(0, 0, 0, 0.4);
            background-color: rgba(255, 238, 0, 0.938);
            box-shadow: 1% 1%px 10%px rgba(0, 0, 0, 0.651);
            width: 35%;
            height: 15%;
            margin-left: -40%;
            margin-top: 80%;
            border-radius: 1%;
            text-align: center;

            visibility: hidden;


        }

        div#resulfinal p {
            margin-top: 35%;
        }

        div#sect {
            display: block;
            padding-top: 40%;
            margin-left: 60%;

        }



        .maletas p {
            margin-top: 50%;
        }

        .maletas:hover {
            cursor: pointer;
            color: rgba(0, 0, 0, 0.8);
            -webkit-transform: scale(1.5);
            -webkit-transition: all .35s ease-in;
        }




        div#b5 {
            display: flex;
            align-items: baseline;
            margin: 1%;
            ;
            margin-bottom: 1%;
            ;
        }



        .sel {
            color: black;
            display: ruby;
        }

        p#tSel {
            display: block;
            text-align: center;
            font-size: 50%;
            font-weight: bolder;
            text-shadow: 1% 1% 5% rgba(0, 0, 0, 0.4);
        }

        p#sSel {
            display: block;
            text-align: center;
            margin-top: 25%;
            font-size: 10%;
            font-weight: bolder;
        }

        aside#restante {
            display: block;
            position: absolute;
            margin-top: 1%;
            margin-left: 15%;
            background-color: rgb(196, 196, 104);
            box-shadow: 2% 2% 2% rgba(0, 0, 0, 0.4);
            border-radius: 1%;
            height: 75%;
            width: 20%;
        }

        h1#res {
            display: block;
            position: relative;
            margin-left: 10%;
            color: black;
            margin-top: 4%;
            color: rgb(117, 84, 0);
            text-shadow: 2% 2% 6% rgba(88, 69, 5, 0.8);
            font-size: 50%;



        }



        ul {
            position: relative;
            list-style: none;
            display: block;
            float: right;
            margin-top: 20%;
            margin-right: 1%;
            font-size: 75%;

        }

        ul#prim {
            position: absolute;
            padding-left: 1%;
            width: 95%;
            height: 80%;
            margin-top: -10%;
        }

        ul#secon {
            position: absolute;
            padding-left: 1%;
            width: 95%;
            height: 80%;
            margin-top: 335%;
        }

        li {
            border: 1% solid rgb(15, 15, 2);
            padding: 2%;
            width: 100%;
            box-shadow: 2% 2% 5% rgba(32, 32, 32, 0.753);
            text-align: right;

        } */

        li#i1 {
            background-color: rgb(255, 255, 0)
        }

        li#i2 {
            background-color: rgb(252, 251, 0)
        }

        li#i3 {
            background-color: rgb(249, 247, 0)
        }

        li#i4 {
            background-color: rgb(245, 243, 0)
        }

        li#i5 {
            background-color: rgb(242, 239, 0)
        }

        li#i6 {
            background-color: rgb(249, 235, 0)
        }

        li#i7 {
            background-color: rgb(245, 231, 0)
        }

        li#i7 {
            background-color: rgb(242, 227, 0)
        }

        li#i8 {
            background-color: rgb(239, 223, 0)
        }

        li#i9 {
            background-color: rgb(235, 219, 0)
        }

        li#i10 {
            background-color: rgb(232, 215, 0)
        }

        li#i11 {
            background-color: rgb(229, 211, 0)
        }

        li#i12 {
            background-color: rgb(225, 207, 0)
        }

        li#i13 {
            background-color: rgb(222, 203, 0)
        }

        li#i14 {
            background-color: rgb(219, 199, 0)
        }

        li#i15 {
            background-color: rgb(215, 195, 0)
        }

        li#i16 {
            background-color: rgb(212, 191, 0)
        }

        li#i17 {
            background-color: rgb(209, 187, 0)
        }

        li#i18 {
            background-color: rgb(205, 183, 0)
        }

        li#i19 {
            background-color: rgb(202, 179, 0)
        }

        li#i20 {
            background-color: rgb(199, 175, 0)
        }

        li#i21 {
            background-color: rgb(195, 171, 0)
        }

        li#i22 {
            background-color: rgb(192, 167, 0)
        }

        li#i23 {
            background-color: rgb(189, 163, 0)
        }

        li#i24 {
            background-color: rgb(185, 159, 0)
        }

        li#i25 {
            background-color: rgb(182, 155, 0)
        }

        li#i26 {
            background-color: rgb(179, 151, 0)
        }

        li#i27 {
            background-color: rgb(175, 147, 0)
        }

        li#i28 {
            background-color: rgb(172, 143, 0)
        }

        li#i29 {
            background-color: rgb(169, 139, 0)
        }

        li#i30 {
            background-color: rgb(165, 135, 0)
        }

        /*  .dinheiro {
            float: left;
        }

        footer {
            display: contents;
            position: absolute;
            margin-top: 90%;
            font-size: 10%;

        } */
    </style>
</head>

<body>
    <?php include_once("../nav.php"); ?>
    <?php
   $banco = mysqli_connect("localhost", "u699385035_adminadmin", "MeuContador123", "u699385035_meucontador");
   if (!$banco) {
      die("Erro " . mysqli_connect_error());
   }
   $q = "UPDATE contador SET total = total + 1 where id = 'maleta'";
   $executar = $banco->query($q);

   ?>
    <div class="titulo">
        JOGO DA MALETINHA
    </div>
    <div class="corpo">
        <div id="sect">
            <div id="selecioned">
                <p class="sel" id="tSel">Maleta escolhida</p><br>
                <p class="sel" id="sSel"></p>
            </div>
            <div id="resulfinal">
                <p id="resulfinaldiv">
                    Você <br>
                    Ganhou <br>

                </p>
            </div>
        </div>
        <section id="blocosmaletas">
            <div class='maletas' id="1" onclick="jogar(1)">
                <p id="p1">1</p>
            </div>
            <div class='maletas' id="2" onclick="jogar(2)">
                <p id="p2">2</p>
            </div>
            <div class='maletas' id="3" onclick="jogar(3)">
                <p id="p3">3</p>
            </div>
            <div class='maletas' id="4" onclick="jogar(4)">
                <p id="p4">4</p>
            </div>
            <div class='maletas' id="5" onclick="jogar(5)">
                <p id="p5">5</p>
            </div>
            <div class='maletas' id="6" onclick="jogar(6)">
                <p id="p6">6</p>
            </div>
            <div class='maletas' id="7" onclick="jogar(7)">
                <p id="p7">7</p>
            </div>
            <div class='maletas' id="8" onclick="jogar(8)">
                <p id="p8">8</p>
            </div>
            <div class='maletas' id="9" onclick="jogar(9)">
                <p id="p9">9</p>
            </div>
            <div class='maletas' id="10" onclick="jogar(10)">
                <p id="p10">10</p>
            </div>
            <div class='maletas' id="11" onclick="jogar(11)">
                <p id="p11">11</p>
            </div>
            <div class='maletas' id="12" onclick="jogar(12)">
                <p id="p12">12</p>
            </div>
            <div class='maletas' id="13" onclick="jogar(13)">
                <p id="p13">13</p>
            </div>
            <div class='maletas' id="14" onclick="jogar(14)">
                <p id="p14">14</p>
            </div>
            <div class='maletas' id="15" onclick="jogar(15)">
                <p id="p15">15</p>
            </div>
            <div class='maletas' id="16" onclick="jogar(16)">
                <p id="p16">16</p>
            </div>
            <div class='maletas' id="17" onclick="jogar(17)">
                <p id="p17">17</p>
            </div>
            <div class='maletas' id="18" onclick="jogar(18)">
                <p id="p18">18</p>
            </div>
            <div class='maletas' id="19" onclick="jogar(19)">
                <p id="p19">19</p>
            </div>
            <div class='maletas' id="20" onclick="jogar(20)">
                <p id="p20">20</p>
            </div>
            <div class='maletas' id="21" onclick="jogar(21)">
                <p id="p21">21</p>
            </div>
            <div class='maletas' id="22" onclick="jogar(22)">
                <p id="p22">22</p>
            </div>
            <div class='maletas' id="23" onclick="jogar(23)">
                <p id="p23">23</p>
            </div>
            <div class='maletas' id="24" onclick="jogar(24)">
                <p id="p24">24</p>
            </div>
            <div class='maletas' id="25" onclick="jogar(25)">
                <p id="p25">25</p>
            </div>
            <div class='maletas' id="26" onclick="jogar(26)">
                <p id="p26">26</p>
            </div>
            <div class='maletas' id="27" onclick="jogar(27)">
                <p id="p27">27</p>
            </div>
            <div class='maletas' id="28" onclick="jogar(28)">
                <p id="p28">28</p>
            </div>
            <div class='maletas' id="29" onclick="jogar(29)">
                <p id="p29">29</p>
            </div>
            <div class='maletas' id="30" onclick="jogar(30)">
                <p id="p30">30</p>
            </div>
        </section>
        <aside id="restante">
            <h1 id="res">Valores Restante</h1>
            <ul id="secon">
                <li id="i1">1</li>
                <li id="i2">2</li>
                <li id="i3">3</li>
                <li id="i4">4</li>
                <li id="i5">5</li>
                <li id="i6">6</li>
                <li id="i7">7</li>
                <li id="i8">8</li>
                <li id="i9">9</li>
                <li id="i10">10</li>
                <li id="i11">11</li>
                <li id="i12">12</li>
                <li id="i13">13</li>
                <li id="i14">14</li>
                <li id="i15">15</li>
                <li id="i16">16</li>
                <li id="i17">17</li>
                <li id="i18">18</li>
                <li id="i19">19</li>
                <li id="i20">20</li>
                <li id="i21">21</li>
                <li id="i22">22</li>
                <li id="i23">23</li>
                <li id="i24">24</li>
                <li id="i25">25</li>
                <li id="i26">26</li>
                <li id="i27">27</li>
                <li id="i28">28</li>
                <li id="i29">29</li>
                <li id="i30">30</li>
            </ul>
            <script>
                var valorez = { 1: "0,25", 2: "0,50", 3: "1", 4: "5", 5: "10", 6: "25", 7: "50", 8: "75", 9: "100", 10: "200", 11: "300", 12: "400", 13: "500", 14: "750", 15: "1.000", 16: "2.000", 17: "5.000", 18: "10.000", 19: "15.000", 20: "20.000", 21: "25.000", 22: "50.000", 23: "75.000", 24: "100.000", 25: "200.000", 26: "300.000", 27: "400.000", 28: "500.000", 29: "750.000", 30: "1.000.000" }
                for (var b = 1; b <= 30; b++) {
                    document.getElementById('i' + b).innerHTML = `<span class="dinheiro">R$</span> ${valorez[b]}`
                }
            </script>
        </aside>
    </div>









    <!--<footer>
        Copyright © 2020 | Douglas Barreto <br>
        <a href="https://www.facebook.com/doouglasbarreto/" target="_blank">Facebook</a> | <a href="https://linkedin.com/in/douglas-barreto-1189b2189" target="_blank">Linkedin</a>
    </footer>-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>