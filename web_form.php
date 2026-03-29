<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Survey: Student Survey</title>
</head>
<body>

    <header>
        <h1>Student Life Survey</h1>
        <p><a href="data.php">View Survey Data</a></p>
    </header>

    <main>
        <form action="confirmation.php" method="POST" class="survey">

            <div>
                <label for="email">Enter your email:</label>
                <input type="email" name="email" id="email" required />
            </div>

            <div>
                <label for="pw">Enter your password:</label>
                <input type="password" name="pw" id="pw" required />
            </div>

            <fieldset>
                <legend>What age are you?</legend>

                <div><input type="radio" name="age" id="age0" value="0-12" required /><label for="age0">0-12</label></div>
                <div><input type="radio" name="age" id="age1" value="13-17" required /><label for="age1">13-17</label></div>
                <div><input type="radio" name="age" id="age2" value="18-22" required /><label for="age2">18-22</label></div>
                <div><input type="radio" name="age" id="age3" value="23-27" required /><label for="age3">23-27</label></div>
                <div><input type="radio" name="age" id="age4" value="28-32" required /><label for="age4">28-32</label></div>
                <div><input type="radio" name="age" id="age5" value="33-37" required /><label for="age5">33-37</label></div>
                <div><input type="radio" name="age" id="age6" value="38-42" required /><label for="age6">38-42</label></div>
                <div><input type="radio" name="age" id="age7" value="43-47" required /><label for="age7">43-47</label></div>
                <div><input type="radio" name="age" id="age8" value="48-52" required /><label for="age8">48-52</label></div>
                <div><input type="radio" name="age" id="age9" value="53-57" required /><label for="age9">53-57</label></div>
                <div><input type="radio" name="age" id="age10" value="58-62" required /><label for="age10">58-62</label></div>
                <div><input type="radio" name="age" id="age11" value="63-67" required /><label for="age11">63-67</label></div>
                <div><input type="radio" name="age" id="age12" value="68+" required /><label for="age12">68+</label></div>
            </fieldset>

            <div>
                <label for="gender">What is your gender?</label>
                <select name="gender" id="gender" required>
                    <option value="">--Select One--</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="nb">Nonbinary</option>
                    <option value="gf">Genderfluid</option>
                    <option value="a">Agender</option>
                    <option value="o">Choose not to say/Other</option>
                </select>
            </div>

            <div>
                <label for="major">What is your major?</label>
                <input type="text" name="major" id="major" required />
            </div>

            <div>
                <label for="hours">How many credits are you taking this semester?</label>
                <input type="number" name="credit_hours" id="hours" min="0" max="30" required />
            </div>

            <div>
                <button type="submit" name="survey-submit" id="survey-submit">Submit</button>
            </div>

        </form>
    </main>

</body>
</html>
