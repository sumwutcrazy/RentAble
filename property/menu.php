
<nav>
    <ul>
<?php
//Menu of options on property page
//Changes depending on whether visitor is landlord, tenant, or unregistered

if($_SESSION['role'] == "landlord"){
    ?>
        <li><a href="<?php echo ROOT; ?>property/manage_property.php?propid=<?php echo $propid;?>">Manage Property</a></li>
        <li><a href="<?php echo ROOT; ?>TenantApplication/?propid=<?php echo $propid; ?>">View Applications</a></li>

<?php
} else if($_SESSION['role'] == "tenant"){
    if(!in_array($propid, $_SESSION['props'])){
    ?>
        <li>Apply to this Property</li>
        

<?php
    } else {
        ?>
        <li></li>
        
        <?php
    }
} else {
    ?>
    


    </ul>
</nav>
<?php    
}
