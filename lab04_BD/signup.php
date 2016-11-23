<?php include("top.html"); ?>

<?php
/**
 * Created by PhpStorm.
 * User: m_laurenz
 * Date: 16/11/16
 * Time: 17.59
 *
 * la pagina che riceve i dati inviati da matches.php e che mostra chi sono le persone a lui/lei affini.
 */
?>
    <form action="signup-submit.php" method="post">
        <fieldset class="match">

            <legend>New User Signup:</legend>

            <div>
                <label class="left"><strong>Name:</strong></label>
                <input  title="name" type="text" name="name" maxlength="16">
            </div>

            <div>
                <label class="left"><strong>Gender:</strong></label>
                <div>
                    <label for="male"><input title="male" id="male" type="radio" name="gender" value="M">Male</label>
                    <label for="female"><input title="female" id="female" type="radio" name="gender" value="F" checked>Female</label>
                </div>
            </div>

            <div>
                <label class="left"><strong>Age:</strong></label>
                <input title="age" type="text" name="age" size="6" maxlength="2">
            </div>

            <div>
                <label class="left"><strong>Personality type:</strong></label>
                <input list="personalities" title="personality" type="text" name="personality" size="6" maxlength="4">(
                <a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type? </a>)
            </div>

            <div>
                <label class="left"><strong>Favorite OS:</strong></label>
                <select title="os" name="os">
                    <option value="Windows">Windows</option>
                    <option value="Mac OS X">Mac OS X</option>
                    <option value="Linux" selected>Linux</option>
                </select>
            </div>

            <div>
                <label class="left"><strong>Seeking age:</strong></label>
                <input title="min" type="text" name="min" size="6" maxlength="2" placeholder="min"> to
                <input title="max" type="text" name="max" size="6" maxlength="2" placeholder="max">
            </div>

            <input type="submit" value="Sign Up">

        </fieldset>
    </form>


<?php include("bottom.html"); ?>