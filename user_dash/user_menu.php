
<nav>
    <ul>
<?php
if($_SESSION['role'] == 'landlord'){
    echo '<li><a href="'.ROOT.'register_property">Register a Property</a></li>';
} else {
    echo '<li><a href="#">Search for Rents</a></li>';
}
    echo '<li><a href="'.ROOT.'postratings">Look at ratings</a></li>';
?>
    </ul>
</nav>