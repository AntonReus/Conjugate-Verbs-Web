<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To conjugate some verbs!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="alfa">
        <div id="delta">
            <div id="teta">
                <h2>Present Continous</h2>
                <h3>Correct the verb in the next sentence</h3>

                <label for="lblSentence">lblSentence</label> <br><br>
                <label for="lblVerb">lblVerb</label> &nbsp;&nbsp;&nbsp;
                <input type="text" id="txtConju">
                <br><br>
                <input type="submit" value="Check" id="btnCheck">
            </div>
        </div>
        <div id="beta">
            <br><br><br>
            <img src="images/correct.png" style="width: 50%;">
            <br>
            <label id="cont" for="lblCorrect">0</label>
            <br><br>
            <img src="images/wrong.png" style="width: 50%;">
            <br>
            <label id="cont" for="lblWrong">0</label>
            <br><br>
            <p id="cont">Attemps</p>
            <label id="cont" for="lblTotal">0</label>
            <br><br><br><br>
        </div>        
    </div>    
</body>
</html>