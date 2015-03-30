<?php
//add session

require_once('FAQPage.php');



require_once('model/FAQClass.php');
$displayAll=getFAQ::showResults();
$FAQ_id="";

if(isset($_POST['delete'])){
    
    $FAQ_id=$_POST['FAQ_id'];
    
}

if(isset($_POST['update'])){
    
    $FAQ_id=$_POST['FAQ_id'];
    $Question=$_POST['Question'];
    $Answer=$_POST['Answer'];
}

?>

<html>
    <head>
        <title>Admin- FAQ</title>
    </head>
    <body>
        
      <a href="insertFAQ.php">Insert New Question and Answer</a>
      <table>  
        <?php foreach ($displayAll as $dis ):  ?>
      
      <tr>
        
        <td>
            <p><?php $dis['id'];?></p>
        <p>Question:</p>
        <p><?php echo $dis['Question']; ?></p></td>

        <td>
        <p>Answer: </p>
       <p> <?php echo $dis['Answer']; ?></p></td>
    
            <td><form action="updateFAQ.php" method="post" id="UpFAQ">
            
                <input type="hidden" name="Question" value="<?php echo $dis['Question']; ?>"/>    
                <input type="hidden" name="Answer" value="<?php echo $dis['Answer']; ?>"/>
            
                <input type="hidden" name="FAQ_id" value="<?php echo $dis['id']; ?>"/>
                <input type="submit" name="update" value="Update"/>
            </form></td> 
            
            <td><form action="<?php $deleteFAQ=getFAQ::deleteFAQ($FAQ_id); ?>" method="post" id="DelFAQ">
            
                <input type="hidden" name="FAQ_id" value="<?php echo $dis['id']; ?>"/>
                <input type="submit" name="delete" value="Delete"/>
            </form></td>
      </tr>
      <?php endforeach; ?>
      </table>  
        
    </body>
</html>