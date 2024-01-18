
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
 <div class ="signUp">
<div id ="preloader"></div>
    <div class ="image">
        <img src ="image/log_in.jpg" alt="picture ">
    </div>
    
    <div class="content">
        <h1>Sign Up To Get Last Updates</h1>
        <form  action = "signUp.php" method="post" > <!--نربط قاعدة البيانات هنا-->
           
            <label for = "name">Name </label>
            <input id = "name" name = "name" type ="text" placeholder="your name " required>
            <br><br>

            <label for = "email">Email </label>
            <input id = "email" name = "email" type ="email" placeholder="example@gamil.com" required>
            <br><br>
           
            <label for = "date">Birth Date </label>
            <input type ="date" name ="date" id ="date" pacleholder="mm/dd/yyyy" required>
            <br><br><br>
         
            <label for ="interests" >Choose what do you like: </label>
            <br><br> 
            <input type ="checkbox" name ="interests" id ="Traditional_food" value ="Traditional_food">
            <label class="chbb" for ="Traditional_food" >Traditional Food</label>
            <br><br> 
            <input type ="checkbox" name ="interests" id ="italian_food"  value="italian_food" >
            <label class="chbb" for ="italian_food" >Italian Food</label>
            <br><br> 
            <input type ="checkbox" name ="interests" id ="American_food"  value="American_food" >
            <label class="chbb" for ="American_food" >American Food </label>
            <br><br> 
            <input type ="checkbox" name ="interests" id ="Fast_food"  value="Fast_food" >
            <label class="chbb" for ="Fast_food" >Fast Food </label> 
            <br><br> 

            <input type ="submit" value ="Sign up" name ="submit" class="btn" >
        </form>

    </div>

 </div>   
<script src = "JavaScript/event.js"></script>
<!--   لزيادة وقت التحميل  لان ألصفحة راح تستغرق وقت أطول بوجود الفديو -->
<iframe id ="vd" src="https://www.youtube.com/embed/Yf5d_Zx3AaI"></iframe>
 <!--  -->

</body>
</html>