<html>

    <head>
        <link rel="stylesheet" type="text/css" href="../style/register.css" />
    </head>

    <body>

        <form action="../form/form_register.php">
            <div>
                First name: <input type="text" name="name"> 
            </div>
            <div>
                Last name: <input type="text" name="subname">
            </div>
            <div>
                Birthdate:
                <div>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>Other day</option>
                    </select>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                    <select>
                        <option>2000</option>
                        <option>2001</option>
                        <option>2002</option>
                        <option>2003</option>
                        <option>2004</option>
                        <option>2005</option>
                        <option>More older</option>
                    </select>
                </div>
            </div> 
            sex:
            male:
            <input type="radio" name="male"> 
            female
            <input type="radio" name="female">
            <div>
                Observation:
                <textarea rows="4" cols="50"></textarea>
            </div>
            Hobbies
            <div>
                <input type="checkbox" name="subname">
                Sport
                <input type="checkbox" name="subname">
                Videogames
                <input type="checkbox" name="subname">
                Read
            </div>
            <div>
                <input type="checkbox" name="subname">
                Write
                <input type="checkbox" name="subname">
                Go Cinema
                <input type="checkbox" name="subname">
                Other
            </div>
            <div class="Right">
                <input type="submit" value="Submit">
            </div>
        </form>

    </body>

</html>
