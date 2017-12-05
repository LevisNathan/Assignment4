<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link  href="css/styles.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/assignment.js"></script>
        
        <title>
            Airplane Ticket
        </title>
    </head>  
        <body>
            <header>
                <h1> Airplane ticket  </h1>
                <h4>Javascript Version</h4>
            </header>
            <div class="fArea">            
            <p><span class="error">* required field.</span></p>
            <form id="frm1" class="form-horizontal" method="post" action="<>" >  
            <div class="form-group">
                <div class="col-xs-2">
                  Name: <input type="text" class="form-control" name="name" value="">
                  <span class="error">*</span>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-xs-2">
                    E-mail: <input type="text" class="form-control" name="email" value="">
                    <span class="error">*</span>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-xs-2">
                    Travel Location: <input type="text" class="form-control" name="Travel Location" value="">
                    <span class="error">*</span>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-xs-1">
                    <select class="form-control" name="day[]" multiple> // Initializing Name With An Array
                    <option value="Mon">Mon</option>
                    <option value="Tues">Tues</option>
                    <option value="Wednes">Wednes</option>
                    <option value="Thurs">Thurs</option>
                    <option value="Fri">Fri</option>
                    </select>
                    <span class="error">*</span>
                </div>
            </div>
            <br/>
            <div class="form-group">
                <div class="col-xs-2">
                    Time: <input class="form-control" type="time" name="comment" rows="1" cols="10" value="">
                    <span class="error">*</span>
                </div>
            </div>
            <br/>
            Gender:
            <input type="radio" name="gender"  value="female">Female
            <input type="radio" name="gender"  value="male">Male
            <span class="error">*</span>
            <br/>
            <input type="button" class="btn btn-primary" onclick="myFunction()" value="submit">  
            </form>
            <script type="text/javascript" src="">
                function myFunction() {
                   var x = document.getElementById("frm1").button;
                   
                }
            </script>
            <div id="results"></div>
            </div>
        </body>
    <footer>
        
    </footer>
</html>