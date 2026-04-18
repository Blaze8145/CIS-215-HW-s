<!DOCTYPE html>
    <html>
    <head>
        <title>Survey: Survey Name</title>  <!-- TODO: Change "Survey Name" to the topic of your survey -->
        <link rel="stylesheet" href="styles.css">
        <script src="HW7.js"></script>
    </head>
    <body>


    <!-- TODO: Fix all bugs/poor practice in the form -->
    <form action="confimation.php" method="POST" class="survey">
        <div>
            <label for="email-id">Enter your email: </label>
            <input type="email" name="email-name" id="email-id" required>
            <span class="Error" class="blank"></span>
        </div>

        <div>
            <label for="pw-id">Enter your password: </label>
            <input type="password" name="pw-name" id="pw-id" required>
            <span class="Error"></span>
        </div>

        <fieldset>
        <div>
            <legend>What age are you? </legend>
            <div><input type="radio" name="age" id="range1" value="0-12" required><label for="range1">0-12 </label></div>
            <div><input type="radio" name="age" id="range2" value="13-17" required><label for="range2">13-17 </label></div>
            <div><input type="radio" name="age" id="range3" value="18-22" required><label for="range3">18-22 </label></div>
            <div><input type="radio" name="age" id="range4" value="23-27" required><label for="range4">23-27 </label></div>
            <div><input type="radio" name="age" id="range5" value="28-32" required><label for="range5">28-32 </label></div>
            <div><input type="radio" name="age" id="range6" value="33-37" required><label for="range6">33-37 </label></div>
            <div><input type="radio" name="age" id="range7" value="38-42" required><label for="range7">38-42 </label></div>
            <div><input type="radio" name="age" id="range8" value="43-47" required><label for="range8">43-47 </label></div>
            <div><input type="radio" name="age" id="range9" value="48-52" required><label for="range9">48-52 </label></div>
            <div><input type="radio" name="age" id="range10" value="53-57" required><label for="range10">53-57 </label></div>
            <div><input type="radio" name="age" id="range11" value="58-62" required><label for="range11">58-62 </label></div>
            <div><input type="radio" name="age" id="range12" value="63-67" required><label for="range12">63-67 </label></div>
            <div><input type="radio" name="age" id="range13" value="68+" required><label for="range13">68+ </label></div>
            
            <!-- User Input Other Age -->
            <div><input type="radio" name="age" id="other" value="other" required><label for="other">Other</label></div>
            <div id="otherBox" style="display: none;"><input type="text" id="otherInput" name="other_Input"><label for="otherInput">Specify</label></div>
        </div>
        </fieldset>

        <div>
            Select Your Gender:
            <select name="gender" id="gender" required>
                <optgroup label="Gender">
                <option value="m">Male</option>
                <option value="f">Female</option>
                <option value="nb">Nonbinary</option>
                <option value="gf">Genderfluid</option>
                <option value="a">Agender</option>
                <option value="o">Choose not to say/Other</option>
                </optgroup>
            </select>
        </div>
    <!-- TODO: Add your own survey questions -->
    
        <div>
            <label for="Baymax">On a scale of 1-10, How do you rate your mood?</label>
            <input type="number" name="healthcare" id="Baymax" min="1" max="10" required>
            <span class="Error"></span>
        </div>

        <div>
            <label for= "season">What is your favorite season?</label>
                <input type="text" name="seasons" id="season" minlength="4" maxlength="6" required>
                <span class="Error"></span>
            </div>
        <button type="button" id="counter">Click Counter</button>
        <button type="submit" name="submit-button" id="sumbit_ID">Submit</button>
    </form>
        <a href='dataview.php'>View Survey Data</a>

    <!-- TODO: All the backend PHP/SQL stuff! (you may need a separate file for this!) -->

    </body>
</html>