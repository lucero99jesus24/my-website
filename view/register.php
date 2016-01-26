<html>

    <head>
        <link rel="stylesheet" type="text/css" href="../style/register.css" media="screen" />
    </head>

    <body class="comun">

        <form action="../form/form_register.php">
        <div class="head">
            <span>Formulario</span>
        </div> 
        <div class="marco">
            <div class="name">        
                <span>First name:</span> <input type="text" name="name">
            </div>
            <div>
                <span>Last name:</span> <input type="text" name="subname">
            </div>

        </div>
        <div class="marco">
            <span>Birthdate</span>
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
                    <option>10</option>
                    <option>20</option>
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
                    <option>2006</option>
                    <option>2007</option>
                    <option>2008</option>
                    <option>2009</option>
                    <option>2010</option>
                    <option>2011</option>
                    <option>2012</option>
                    <option>2013</option>
                    <option>2014</option>
                    <option>2015</option>
                    <option>2016</option>
                </select>
            </div>
        </div>
        <div class="marco">

            Man
            <input  type="radio">
            Woman
            <input  type="radio">
        </div>
        <div class="marco">
               <span class="observation">Observation</span> 
            <textarea rows="4" cols="50"></textarea>
        </div>
        <div class="marco" >

            <div class="checkbox">
                <div>
                    <input type="checkbox" name="subname">
                    <span>Football</span>
                </div>
                <div>
                    <input type="checkbox" name="subname">
                    <span>Videogames</span> 
                </div>
                <div>
                    <input type="checkbox"  name="subname">
                    <span>Climbing</span> 
                </div>
            </div>
            <div>
                <div>
                    <input type="checkbox" name="subname">
                    <span>Go Camping</span> 
                </div>
                <div>
                    <input type="checkbox" name="subname">
                    <span>Go Cinema</span> 
                </div>
                <div>
                    <input type="checkbox" name="subname">
                    <span>Others</span> 
                </div>    
            </div>
        </div>
        <div class="marco">

            <input type="submit" value="Submit">
        </div>
        </form>

    </body>

</html>
