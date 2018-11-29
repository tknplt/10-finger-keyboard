<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
    <title>10 Parmak Klavye</title>
    <style>
        #letter-settings span{
            letter-spacing: 7px;
            font-size:22px;
            font-weight:bold;
            font-family: 'Indie Flower', cursive;
        }
        #keybord{
            margin-top:10px;
        }
        #keybord tr td{
            border:1px solid #ddd;
            text-align:center;
            margin:2px;
        }
        /*
        .space{
            padding-left:7px;
        }
        */
        .sign-letter{
            background-color:blue;
            color:white;
        }

    </style>
  </head>
  <body>
    <br/><br/>
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <h3><span id="timer" class="badge badge-info">0:00</span></h3>
            </div>
            <div class="col-md-4">
                <h3>
                    <span class="badge badge-info">
                        Doğruluk
                        <span id="trust-rate" class="badge badge-success">100%</span>
                    </span>
                </h3>
            </div>
            <div class="col-md-2 offset-md-5">
                <h3>
                    <span class="badge badge-info">
                        Vuruşlar : 
                        <span id="right-count" class="badge badge-success">0</span> /
                        <span id="error-count" class="badge badge-danger">0</span>
                    </span>
                </h3>
            </div>
        </div>
        <div class="card">
            <div class="card-body" id="letter-settings">
                <span>t</span>
                <span>h</span>
                <span>i</span>
                <span>s</span>
                &nbsp;<span> </span>
                <span>i</span>
                <span>s</span>
            </div>
            
            <input type="text" id="letter-input" autofocus="true"/>
            <!--
            <p contenteditable="true">ddd</p>
            -->
            
            <div id="keybord">
                <table class="table" id="keyboard">
                    <tr>
                        <td>Q</td>
                        <td>W</td>
                        <td>E</td>
                        <td>R</td>
                        <td>T</td>
                        <td>Y</td>
                        <td>U</td>
                        <td>I</td>
                        <td>O</td>
                        <td>P</td>
                        <td>Ğ</td>
                        <td>Ü</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>S</td>
                        <td>D</td>
                        <td>F</td>
                        <td>G</td>
                        <td>H</td>
                        <td>J</td>
                        <td>K</td>
                        <td>L</td>
                        <td>Ş</td>
                        <td>İ</td>
                        <td>,</td>
                    </tr>
                    <tr>
                        <td><</td>
                        <td>Z</td>
                        <td>X</td>
                        <td>C</td>
                        <td>V</td>
                        <td>B</td>
                        <td>N</td>
                        <td>M</td>
                        <td>Ö</td>
                        <td>Ç</td>
                        <td>.</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>