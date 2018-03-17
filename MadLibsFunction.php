<html>
    <head>
        <title>The Fairy Tale</title>
    </head>
    <h1>The Fairy Tale</h1>
    <body>
       
       <hr>

       <form action="MadLibsFunction.php" method = "post">
           Type a name: <input type = "text" name = "name"><br>
           Type an adjective: <input type = "text" name = "adj1"><br> 
           Type a noun: <input type = "text" name = "noun1"><br> 
           Type a verb: <input type = "text" name = "verb1"><br> 
           Type a verb: <input type = "text" name = "verb2"><br> 
           Type a adjective: <input type = "text" name = "adj2"><br> 
           Type a past tense verb: <input type = "text" name = "noun2"><br> 
           <input type = "submit" value = "Write Story">
       </form>
       
        <?php
        $i = 1;
        
        
        
        function madlibs()
        {
             $girl_name = $_POST['name'];
             $adjective = $_POST['adj1'];
             $living_thing = $_POST['noun1'];
             $verb = $_POST['verb1'];
             $verb_2 = $_POST['verb2'];
             $adj_2 = $_POST['adj2'];
             $past_verb = $_POST['noun2'];
           
            print "Once upon a time there was a poor little girl named " . $girl_name . " who lived in the forest with a(n) \n " . $adjective. " " . $living_thing .  ". She was forced to " . $verb .  " all day while the " . $living_thing . " sat around ". $verb_2."ing.\n But then one day the little girl found a magic " . $noun1 .  "When " . $girl_name . "picked up the" . $noun1 .", she found that anything she imagined came true. Soon," . $girl_name . "was making the " .$living_thing. "\n". $verb . " while she chose to sit around and " . $verb_2 . 
            " \n After a while, the girl realized this was not a very " . $adj_2 . " thing to do and released the \n " .$living_thing . " from her spell. They became best friends and " . $past_verb . " every day, living happily ever after."; 
                
        }  
       
        echo madlibs();
        
      ?>
   
    </body>
</html>