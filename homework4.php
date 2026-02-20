<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>MTG Player Test</title>
    </head>
<body>
    <main>
        //Holds the quiz in he form.
        <form action="confirmation.php" method="POST">
            <fieldset><legend>What's your favorite way to win in MTG?</legend>
            <div><input type="radio" name="MTG Win" id="agro-wincon" value="agro"/><label for="agro-wincon">Win as quick as you can</label></div>
            <div><input type="radio" name="MTG Win" id="stax-wincon" value="stax"/><label for="stax-wincon">Protect your board and limit your opponents</label></div>
            <div><input type="radio" name="MTG Win" id="combo-wincon" value="combo"/><label for="combo-wincon">Set up a insane chain of events</label></div>
            <div><input type="radio" name="MTG Win" id="midrange-wincon" value="midrange"/><label for="midrange-wincon">Adapt to whatever your opponent(s) do</label></div>
            <div><input type="radio" name="MTG Win" id="politic-wincon" value="politic"/><label for="politic-wincon">Make deals with the opponents</label></div>
            </fieldset>

            <fieldset><legend>What do you look for in a hand?</legend>
            <div><input type="radio" name="MTG Hand" id="stax-hand" value="stax"/><label for="stax-hand">Cards to remove/limit threats</label></div>
            <div><input type="radio" name="MTG Hand" id="agro-hand" value="agro"/><label for="agro-hand">Low cost cards</label></div>
            <div><input type="radio" name="MTG Hand" id="midrange-hand" value="midrange"/><label for="midrange-hand">Good Creatures and ramp</label></div>
            <div><input type="radio" name="MTG Hand" id="politic-hand" value="politic"/><label for="politic-hand">Something cool or helps everyone</label></div>
            <div><input type="radio" name="MTG Hand" id="combo-hand" value="combo"/><label for="combo-hand">Pieces of a combo</label></div>
        </fieldset>

            <fieldset><legend>What do you do when an opponent play a threat card?</legend>
            <div><input type="radio" name="MTG Threat" id="politic-react" value="politic"/><label for="politic-react">Talk about how your bennifiting them</label></div>
            <div><input type="radio" name="MTG Threat" id="midrange-react" value="midrange"/><label for="midrange-react">Trade efectivly</label></div>
            <div><input type="radio" name="MTG Threat" id="stax-react" value="stax"/><label for="stax-react">Counter/remove it</label></div>
            <div><input type="radio" name="MTG Threat" id="combo-react" value="combo"/><label for="combo-react">Nothing</label></div>
            <div><input type="radio" name="MTG Threat" id="agro-react" value="agro"/><label for="agro-react">Swing out at them</label></div>
        </fieldset>

            <fieldset><legend>When building a deck you usally put in?</legend>
            <div><input type="radio" name="MTG Deck" id="combo-deck" value="combo"/><label for="combo-deck">Cards that work well together</label></div>
            <div><input type="radio" name="MTG Deck" id="politic-deck" value="politic"/><label for="politic-deck">Group hug/interating cards</label></div>
            <div><input type="radio" name="MTG Deck" id="agro-deck" value="agro"/><label for="agro-deck">Cheap fast cards</label></div>
            <div><input type="radio" name="MTG Deck" id="stax-deck" value="stax"/><label for="stax-deck">Removal/Protection</label></div>
            <div><input type="radio" name="MTG Deck" id="midrange-deck" value="midrange"/><label for="midrange-deck">Versatile cards</label></div>
        </fieldset>

            <fieldset><legend>What is your favorite kind of MTG games</legend>
            <div><input type="radio" name="MTG Games" id="midrange-games" value="midrange"/><label for="midrange-games">Balanced games</label></div>
            <div><input type="radio" name="MTG Games" id="agro-games" value="agro"/><label for="agro-games">Ended Quickly</label></div>
            <div><input type="radio" name="MTG Games" id="politic-games" value="politic"/><label for="politic-games">Memorable Games</label></div>
            <div><input type="radio" name="MTG Games" id="combo-react" value="combo"/><label for="combo-games">Unexpected Games</label></div>
            <div><input type="radio" name="MTG Games" id="stax-games" value="stax"/><label for="stax-games">Long and stategic Games</label></div>
        </fieldset>

            <fieldset><legend>How do you react to drawing the perfect card?</legend>
            <div><input type="radio" name="MTG Topdeck" id="agro-top" value="agro"/><label for="agro-top">Well lets end it</label></div>
            <div><input type="radio" name="MTG Topdeck" id="combo-top" value="combo"/><label for="combo-top">The final piece in the palm of my hand</label></div>
            <div><input type="radio" name="MTG Topdeck" id="politic-top" value="politic"/><label for="politic-top">This card will help us</label></div>
            <div><input type="radio" name="MTG Topdeck" id="midrange-top" value="midrange"/><label for="midrange-top">This helps</label></div>
            <div><input type="radio" name="MTG Topdeck" id="stax-top" value="stax"/><label for="stax-top">Oh thats a card</label></div>
        </fieldset>

            <fieldset><legend>At a Commander table, you are mostly likely to</legend>
            <div><input type="radio" name="MTG Table" id="midrange-table" value="midrange"/><label for="midrange-table">Survive everything</label></div>
            <div><input type="radio" name="MTG Table" id="stax-table" value="stax"/><label for="stax-table">Control the table</label></div>
            <div><input type="radio" name="MTG Table" id="politic-table" value="politic"/><label for="politic-table">Alliance with somone(s)</label></div>
            <div><input type="radio" name="MTG Table" id="combo-table" value="combo"/><label for="combo-table">Make a Surprise win</label></div>
            <div><input type="radio" name="MTG Table" id="agro-table" value="agro"/><label for="agro-table">Build early pressure</label></div>
        </fieldset>

            <fieldset><legend>What card is your favorite out of these</legend>
            <div><input type="radio" name="MTG Card" id="stax-card" value="stax"/><label for="stax-card">Counterspell</label></div>
            <div><input type="radio" name="MTG Card" id="politic-card" value="politic"/><label for="politic-card">Howline Mine</label></div>
            <div><input type="radio" name="MTG Card" id="agro-card" value="agro"/><label for="agro-card">Lightning Bolt</label></div>
            <div><input type="radio" name="MTG Card" id="midrange-card" value="midrange"/><label for="midrange-card">Tarmogoyf</label></div>
            <div><input type="radio" name="MTG Card" id="combo-card" value="combo"/><label for="combo-card">Demonic Tutor</label></div>
        </fieldset>
            <button type="submit" name="submit-button" id="sumbit_ID">Submit</button>
        </form>
    </main>    
</body>
</html>