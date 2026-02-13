<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Form Example</title>
    </head>
<body>
    <main>
        <form action="" method="POST">
            <p>Enter email Here:</p>
            <p><input type="email" name="getEmail" id="email_ID" /></p>
            
            <p>What's your favorite MTG color combo?</p>
            <p><input type="checkbox" name="MTG color combo" id="color-white" />White</p>
            <p><input type="checkbox" name="MTG color combo" id="color-blue" />Blue</p>
            <p><input type="checkbox" name="MTG color combo" id="color-black" />Black</p>
            <p><input type="checkbox" name="MTG color combo" id="color-red" />Red</p>
            <p><input type="checkbox" name="MTG color combo" id="color-green" />Green</p>
            <p><input type="checkbox" name="MTG color combo" id="color-colorless" />Colorless</p>
        
             <p>What's your favorite MTG color?</p>
            <p><input type="radio" name="MTG color" id="color-monoWhite" />White</p>
            <p><input type="radio" name="MTG color" id="color-monoBlue" />Blue</p>
            <p><input type="radio" name="MTG color" id="color-monoBlack" />Black</p>
            <p><input type="radio" name="MTG color" id="color-monoRed" />Red</p>
            <p><input type="radio" name="MTG color" id="color-monoGreen" />Green</p>
            <p><input type="radio" name="MTG color" id="color-monoColorless" />Colorless</p>       
        
            <button typr="submit" name="submit-button" id="sumbit_ID">Submit</button>
        </form>
    </main>    
</body>
</html>