<?php #Si Ning Wong 
      #120741345
?>

<!DOCTYPE html> <?php #Telling the browser that it is a html document. ?>
<html>          <?php #open html file specifying html elements and content. ?>

<head>          <?php #content placed in browser tab. ?>
    <title>Jennie Kims Fan Webpage</title>    <?php #title in browser tab. ?>
</head>         <?php #closes the content placed in browswer tab. ?>

<body>          <?php #open body tag where content is to be placed in the web page. ?>
<header>        <?php #open header tage and defines a header element. ?>
<style>         <?php #open style tag where css code is placed. ?>

h3{font-family: 'Times New Roman';text-align: center;}          <?php #makes size 3 header with font type times new roman and all the text in this header is centered in the webpage. ?>
hr{background-color: black; height: 5px;}                       <?php #makes the horizontal line have background color of black and the height of the line is 5 px high.?>

</style>    <?php #it closes the style tag meaning the end of ccs codes. ?>


<h1>JENNIE KIM</h1>     <?php #The text is written in size 1 header and closes the size 1 header. ?>
</header>           <?php #it closes the header. ?>

<style> <?php #open style tag where css code is placed. ?>
    hr.intro{background-color: palevioletred; height: 10px; }        <?php #creates a class called intro and any horizontal line with class intro will have background color of palevioletred and the height of the line is 10 pixels. Overall gives a thick pink line. ?>
    img.jennie {height:500px; width: 500px; display: block; margin-left: auto; margin-right: auto;} <?php #creates a class called jennie which makes any image with this class have height and width of 500px. the image is in a display block auto margins left and right that makes the image centered on the webpage. ?>
    h1{font-family: 'Times New Roman'; background-color: blanchedalmond; text-align: center; font-size: 70px}  <?php #makes size 1 header with font type times new roman amd size 70 pixels, background color behind the text is blanchedalmond and all the text in this header is centered in the webpage.?>
    p.intro {background-color: rgb(58, 53, 53); color:white; text-align: center; margin-left:300px; margin-right: 300px;}   <?php #creates a paragraph class called intro in which any paragraph with class intro assigned to them will have a dark gray background color and white text. The text is displayed in the center of the webpage with magin space of 300px both left and right.?>
    p{font-family: sans-serif; font-size: 20px;} <?php #Makes all the paragraph text in sans serif and is 20 pixels in size?>
    ol{background-color: paleturquoise; margin-left:35px; margin-right: 1000px; font-family: sans-serif; font-size: 20px}  <?php #makes the ordered lists have palturquoise background color with margin space 35px from the left and 1000px on the right. The text is in sans serif and is 20 pixels large. ?>
    ul {background-color: lightpink; margin-left:35px; margin-right: 1200px; font-family: sans-serif; font-size: 20px}    <?php #makes the unordered lists have background color of lightpink with the space between the left webpage border and the unordered list is 35 pixels apart and the 1200 pixels apart from the right. The text is in sans serif and is 20 pixels large.?>
</style>    <?php #it closes the style tag meaning the end of ccs codes. ?>

<?php #INTRO ?>
<main> <?php #It creates a main page in the webpage. ?>
<p class="intro">This project is based on a kpop star named Jennie Kim. Jennie is a popular South Korean celebrity from the girlgroup Blackpink. Kpop is the derivative for Korean pop. <?php #it opens a paragraph. It assigns paragraph to class intro following css code to stylise the paragraph and it's content. ?>
    This webpage will talk about this celebrity in more detail including her personal life and her achievements.
    Its mostly about the major points of her life and the roadmap to her rise in fame with a bit of interesting facts about her.
    The webpage is divided into three sections all accounting Jennie.
</p><?php #It closes the paragraph. ?>
<hr class = "intro"><?php #makes a horizontal line on the webpage and assigns the line to class intro to follow css code which stylise the line.?>


<?php #1st SECTION?>
<h3> Interesting facts about Jennie Kim</h3>  <?php #The text being displayed in the webpage is of size 3 header.?>
<section>           <?php #it creates a section in the webpage. ?>
    <p>       <?php #it creates a paragraph, it will show the paragraphs content inside the webpage.?>
    She is widely recognised around the globe and garnered millions of fans since her debut.
    Jennie is a fashion model icon for the luxury fashion brand Chanel.
Any fan would know that Jennie is obsessed Chanel.
She often post pictures of her wearing 
Chanel clothing on her instagrampage with 63 million. followers.
She even appears in Chanel Fall/Winter 2021 collection.

Jennie is considered the "IT" girl of her group.
Her personality is often portrayed as a charismatic 
confident girl on stage. 
She gives the impression of a baddie whenever 
she performs 
and to me she really stands
out from the group.
Apart from that fiery image that she gives to the audience,
behind the curtains she is a really shy and sweet girl, which is the complete
opposite of her onstage presence.  
</p>       <?php ##It closes the paragraph. ?>

    <p>     <?php #it creates a paragraph, it will show the paragraphs content inside the webpage.?>
    Click on the image for more details about her --->
</p>    <?php ##It closes the paragraph. ?>

    <a href="https://www.lofficielusa.com/fashion/who-is-jennie-kim-k-pop-blackpink-chanel" target = "_blank" > <?php #creates a website link and when clicked onto it, from the target attribute, it will bring the user to the links source in a new tab ?>
    <img class= "jennie" src = "https://vz.cnwimg.com/wp-content/uploads/2019/06/Jennie-Kim.jpg"> <?php #assigns the image to class named jennie and follows css code. It displays the image on the webpage in the center and the link is embbeded inside the image. It is clickable to go to the link source.?>
    </a>       <?php #It closes the link tag. ?>
</section><hr>      <?php #it closes the section in the webpage. It has a horizontal line after.?>


<?php #2nd SECTION?>
<section>           <?php #it creates a section in the webpage. ?>
<h3>Her life stages</h3>    <?php #The text being displayed in the webpage is of size 3 header.?>
    <p>             <?php #it creates a paragraph, it will show the paragraphs content inside the webpage.?>
    Jennie Kim was born in 1996.
She is currently
of age 26 as of 2022. She is an only child.
Her profession is a singer, rapper and dancer 
for her group called Blackpink.
She is signed under the company YG. 

Beaneath is a 
list of her life stages in detail:
    </p>          <?php ##It closes the paragraph. ?>
    
    <ol type = "I">             <?php #Creates an ordered list in roman numbers?>
        <li>Born in Cheongdam-Dong, Seoul, South Korea, 1996.</li><br>                    <?php #specifies a list element and a line break in between?>
        <li>Went to Auckland, New Zealand for elementary school where she learnt fluent english. </li> <br>    <?php #specifies a list element and a line break in between?>
        <li>Moved back to South Korea for Cheongdam Middle School, 2010. </li><br>     <?php #specifies a list element and a line break in between?>
        <li>She auditioned for YG Entertainment at the age of 14. </li><br>            <?php #specifies a list element and a line break in between?>
        <li>Trained under the guidance of YG for 6 years. </li> <br>                  <?php #specifies a list element and a line break in between?>
        <li>During her traineeship, she was massively featured in G-dragon's MV, 2013. </li> <br>   <?php #specifies a list element and a line break in between?>
        <li>She formed the group Blackpink with three other members and debuted in the year 2016 at the age of 20. </li>   <br>    <?php #specifies a list element and a line break in between?>

    </ol>        <?php #It closes the ordered list.?>
</section><hr>   <?php #it closes the section in the webpage. It has a horizontal line after.?>


<?php #3rd SECTION ?>
<section>       <?php #it creates a section in the webpage. ?>
<h3>List of popular music videos and with her group Blackpink</h3>      <?php #The text being displayed in the webpage is of size 3 header.?>
<p>             <?php #it creates a paragraph, it will show the paragraphs content inside the webpage.?>
    Ever since her debut in Blackpink, they have many successes with their music. Almost every music they put
    out on Youtube are hitting the million and some billion views. She herself as an artist made her solo debut back in 2018.
     The songs name was Solo and so was the name of the album. <br> <?php #Breaks the next sentence into a new line ?>
     Here are some of the list of songs from her group:
</p>          <?php ##It closes the paragraph. ?>
   
    <ul>        <?php #it creates an unordered list ?>

        <li>Solo (by Jennie) </li> <?php #specifies a list element?>
        <li>Whistle</li>   <?php #specifies a list element?>
        <li>Boombayah</li> <?php #specifies a list element?>
        <li>Lovesick Girls </li> <?php #specifies a list element?>
        <li>Forever Young </li> <?php #specifies a list element?>
        <li>Kill This Love </li>  <?php #specifies a list element?>
        <li>DDU-DU DDU-DU</li>  <?php #specifies a list element?>

    </ul>   <?php #it closes the unoreder list ?>
    <p> Click on the image for her solo music video ---> <?php #it creates a paragraph, it will show the paragraphs content inside the webpage.?>
</p>  <?php ##It closes the paragraph. ?>


    <a href = "https://youtu.be/b73BI9eUkjM" target = "_blank"> <?php #creates a video link and when clicked into it, the target attribute makes the link open in a new tab.?>
        <img class="jennie" src = "https://i1.sndcdn.com/artworks-OydNs3xYieCy62HO-dOkCxA-t500x500.jpg" <?php #assigns the image to class jennie which stylise the image following the css code. The image is displayed on the webpage and the video link is embedded inside the image. The image is clickable to go to the link source. ?>
        ></a> <?php #it closes the link tag ?>
</section> <hr> <?php #it closes the section in the webpage. It has a horizontal line after.?>

</main> <?php #Specifies the end of the main page in the webpage. It closes the main tag ?>

<footer>  <?php #It creates a footer section in the webpage. ?>
<?php #FORM ?>
<form action = "jennie.php" method = "post"><?php #creates a form for user input. The action attribute is where all the data inputed is to be sent into the file jennie.php, through http post transaction from the attribute method. ?>
        Write Something: <input type = "text" name="text"><?php #it sends out a small input box with a message text beside it. The user types into the box with text only. The name attribute gives this field a name. ?>
        <input type = "submit"><?php #It creates a submit button where all the data sent into the file jennie.php. ?>
    </form><?php #it closes the form. ?>
<?php if (isset($_POST["text"])): ?> <?php #the code states here if the user types into the small input box called text, the code below will activate. It covers up the error message shown in the webpage when first launched.?>
<?php $text_user = $_POST["text"]; ?> <?php #assigns the attribute $text_user to the data being inputed by the user in the small input box called text. ?>
<?php echo "<font color=green size =50px>$text_user</font>";?>  <?php #It prints the text the user had typed  and submitted from the form earlier. The text is displayed in the webpage's footer with green font color and the size is 50px.?>
<?php endif; ?>                     <?php # it ends the if statement code.?>
</footer>  <?php #Specifies the end of the footer in the webpage. It closes the footer tag ?>

</body> <?php #closes the body tag where all content is kept inside ?>
</html> <?php #ends the html file document ?>