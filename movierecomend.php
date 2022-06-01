<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--link rel="stylesheet" href="style.css" type="text/css"-->
   
  <script>

  </script>
  <style>
     body{
    background-image: url("movieimg.JPG");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}

.refform {
    text-align: center;
    background-color: #fd79a8;
    padding: 0.2rem;
    margin-bottom: 0.1 rem;
}
.centred{
    border:0.1rem solid black;
    
  
    text-align: center;
    margin-top:2rem;
    margin-left:4rem;
    margin-right:4rem;
    margin-bottom: 2rem;

}


.age,.genre,.price,.submit{
    margin: 2.5 rem;

  border: none;
 
  padding: 1.5rem 3.2rem;
  text-align: center;
  font-size: 1.6rem;
}


  </style>
    
</head>
<body>
    <form  action = "action.php" method="POST">
        <div class="refform">
            <h1>MOVIE RECOMENDATION </h1>
</div>

      <div class="centred"> 
                <div class="age">
            <label for="age" style="font: size 20px;">Age </label>
            <input type="number" name="age" id="age" min=3  required >
            </div>  
        
        <br>


        <div class="genre">
            Select Movie Genre:
        <select name="genre" id="genre" required>
                <option value="">None<option>
               <option value="Action">Action </option>
               <option value="Animation">Animation</option>
               <option value="Comedy">Comedy</option>
               <option value="Crime">Crime</option>
               <option value="Horror">Horror</option>
               <option value="Romantic">Romantic</option>
               <option value="Documentry">Documentry</option>
               <option value="Science Fiction">Science Fiction</option>
               <option value="Gangster">Gangster</option>
               <option value="Dark Comedy">Dark Comedy</option>
               <option value="Biographical">Biographical</option>
               <option value="Sports">Sports</option>
               <option value="Thriller">Thriller</option>
               <option value="Western">Western</option>
               <option value="Adventure">Adventure</option>
               <option value="Romantic Comedy">Romantic Comedy</option>
               <option value="Fantasy">Fantasy</option>
               <option value="Historical">Historical</option>
               <option value="Disaster">Disaster</option>
               <option value="War">War</option>
               <option value="Culture">Culture</option>
               <option value="Science">Science</option>
               <option value="Buddy">Buddy</option>
               
            </select>   
         </div>
        <br>

        <div class="price">
            <label for="price">Pricing:</label>
            <input type="number" id="price" name="price" min=399 required   >
        </div>

        <div class="submit">
            <button type="reset">Reset</button>&nbsp;&nbsp;&nbsp;
            <button type="submit" value="submit" name="Submit">Submit</button>

        </div>
        
    </div>

  
    </form>






</body>

</html>
