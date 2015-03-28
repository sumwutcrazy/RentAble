<?php

/* Craig Veenstra
 * Sublet Feature
 * Listing all sublet applications
 */

require_once ('../model/subletDB.php');
require_once('../model/config.php');
require_once('apply.php');

$pid = 3;

    //unpacking the applications for the property
    $applications = subletDB::getApplications($pid);    

    
?>

<table>
    <?php
    foreach($applications as $application){
        echo '<th>Sublet Application</th>';
        echo '<tr><td>' . $application->getmessage().'</td></tr>'; 
        echo '<tr><td>' . $application->getemail().'</td></tr>';
    }
    ?>
</table>





