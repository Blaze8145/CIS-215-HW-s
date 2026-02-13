<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Form Example</title>
    </head>
<body>
    <main>
        <form action="" method="POST">
            <div>
                <label for="email_ID">Enter email Here:</label>
                <input type="email" name="getEmail" id="email_ID" /></div>
            
            <div>What's your favorite MTG color combo?</div>
            <div><input type="checkbox" name="MTG color combo" id="color-white" value="white" /><label for="color-white">White</label></div>
            <div><input type="checkbox" name="MTG color combo" id="color-blue" value="blue"/><label for="color-blue">Blue</label></div>
            <div><input type="checkbox" name="MTG color combo" id="color-black" value="black"/><label for="color-black">Black</label></div>
            <div><input type="checkbox" name="MTG color combo" id="color-red" value="red"/><label for="color-red">Red</label></div>
            <div><input type="checkbox" name="MTG color combo" id="color-green" value="green"/><label for="color-green">Green</label></div>
            <div><input type="checkbox" name="MTG color combo" id="color-colorless" value="colorless"/><label for="color-colorless">Colorless</label></div>
        
             <div>What's your favorite MTG color?</div>
            <div><input type="radio" name="MTG color" id="color-monoWhite" value="white"/><label for="color-monoWhite">White</label></div>
            <div><input type="radio" name="MTG color" id="color-monoBlue" value="blue"/><label for="color-monoBlue">Blue</label></div>
            <div><input type="radio" name="MTG color" id="color-monoBlack" value="black"/><label for="color-monoBlack">Black</label></div>
            <div><input type="radio" name="MTG color" id="color-monoRed" value="red"/><label for="color-monoRed">Red</label></div>
            <div><input type="radio" name="MTG color" id="color-monoGreen" value="green"/><label for="color-monoGreen">Green</label></div>
            <div><input type="radio" name="MTG color" id="color-monoColorless" value="colorless"/><label for="color-monoColorless">Colorless</label></div>       

            <div>
                Select your favorite MTG basic land:
                <select name="MTG Lands" id=" basic_land_ID">
                    <option value="White">Plains</option>
                    <option value="Blue">Island</option>
                    <option value="Black">Swamp</option>
                    <option value="Red">Mountian</option>
                    <option value="Green">Forest</option>
                    <option value="Colorless">Waste</option>
            </div>

                <button typr="submit" name="submit-button" id="sumbit_ID">Submit</button>
        </form>
    </main>    
</body>
</html>