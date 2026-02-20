<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Form Example</title>
    </head>
<body>
    <main>
        <form action="confimation.php" method="POST">
            <div>
                <label for="password-id">Enter your password</label>
                <input type="password" name="password-input" id="password-id"/>
            </div>
            <div>
                <label for="email_ID">Enter email Here:</label>
                <input type="email" name="getEmail" id="email_ID" /></div>
            <fieldset>
            <legend>What's your favorite MTG color combo?</legend>
            <div><input type="checkbox" name="MTG color combo[]" id="color-white" value="white" /><label for="color-white">White</label></div>
            <div><input type="checkbox" name="MTG color combo[]" id="color-blue" value="blue"/><label for="color-blue">Blue</label></div>
            <div><input type="checkbox" name="MTG color combo[]" id="color-black" value="black"/><label for="color-black">Black</label></div>
            <div><input type="checkbox" name="MTG color combo[]" id="color-red" value="red"/><label for="color-red">Red</label></div>
            <div><input type="checkbox" name="MTG color combo[]" id="color-green" value="green"/><label for="color-green">Green</label></div>
            <div><input type="checkbox" name="MTG color combo[]" id="color-colorless" value="colorless"/><label for="color-colorless">Colorless</label></div>
            </fieldset>
            <fieldset>
             <legend>What's your favorite MTG color?</legend>
            <div><input type="radio" name="MTG color" id="color-monoWhite" value="white"/><label for="color-monoWhite">White</label></div>
            <div><input type="radio" name="MTG color" id="color-monoBlue" value="blue"/><label for="color-monoBlue">Blue</label></div>
            <div><input type="radio" name="MTG color" id="color-monoBlack" value="black"/><label for="color-monoBlack">Black</label></div>
            <div><input type="radio" name="MTG color" id="color-monoRed" value="red"/><label for="color-monoRed">Red</label></div>
            <div><input type="radio" name="MTG color" id="color-monoGreen" value="green"/><label for="color-monoGreen">Green</label></div>
            <div><input type="radio" name="MTG color" id="color-monoColorless" value="colorless"/><label for="color-monoColorless">Colorless</label></div>       
            </fieldset>
            <div>
                Select your favorite MTG basic land:
                <select name="MTG Lands" id=" basic_land_ID">
                    <optgroup label="Basic Lands">
                    <option value="White">Plains</option>
                    <option value="Blue">Island</option>
                    <option value="Black">Swamp</option>
                    <option value="Red">Mountian</option>
                    <option value="Green">Forest</option>
                    <option value="Colorless">Waste</option>
                    </optgroup>
                    <optgroup label="Weird Basic land attribute">
                    <option value="Cave">Cave</option>
                    <option value="Artifact">Artifact</option>
                    <option value="Desert">Desert</option>
                    <option value="Snow">Snow</option>
                    <option value="Enchantment">Enchantment</option>
                    <option value="Gate">Gate</option>
                    </optgroup>
            </div>
            <div>
                <label for="long_text">Explain why you like the MTG color you chose in a sentence</label>
                <textarea id="long_text" name="long_text answer" rows="3" cols="40">I like how green can ramp</textarea>
            </div>
            <fieldset>
                <label>What is your favorite square Number 1-100</label>
                <?php
                    for($sq=1;$sq<=100;$sq++){
                        $sqed=$sq*$sq;
                        print("<div><input type='radio' name='squared' id='square_of_$sq' value ='$sq'>
                        <label for='square_of_$sq'>$sqed</label></div>");
                    }
                ?>
            </fieldset>
            <fieldset><label>Favorite First 10 prime numbers</label>
                <?php
                    $primes=array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29);
                    for($n=0;$n<count($primes);$n++){
                            print("<div>
                            <input type='radio' name='prime' id='prime_$n' value='$n'>
                            <label for='prime_$n'>$primes[$n]</label>
                            </div>");    
                    }
                ?>
            </fieldset>

                <button typr="submit" name="submit-button" id="sumbit_ID">Submit</button>
        </form>
    </main>    
</body>
</html>