<?php
require_once ('../../model/config.php');
include ('../../view/header.php');
require_once '../../Model/MapModel/db_connectt.php';
require_once '../../Model/MapModel/propertiesClass.php';




if (isset($_POST['action'])){
        $marker_id = $_POST['marker_id'];
        PropertiesClass::deleteMarker($marker_id);
        }
?>
<html>
    <head>
        <title>Add new property</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    </head>
    <body>
         <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Street</th>
             <th>Postal</th>
              <th>City</th>
              <th>Province</th>
               <th>Latitude</th>
               <th>Longitude</th>
                <th>Type</th>
          </tr>
        </thead>
        <tbody>

        <?php        
$result = PropertiesClass::getMarkers();
foreach ($result as $row)
    {
      echo '<tr><td>' . $id = $row->id;  
      echo "</td>";
      echo '<td>' . $name = $row->name;
      echo "</td>";
      echo '<td>' . $street = $row->street;
      echo "</td>";
      echo '<td>' . $postal = $row->postal_code;
      echo "</td>";
      echo '<td>' . $city = $row->city;
      echo "</td>";
      echo '<td>' . $province = $row->province;
      echo "</td>";
      echo '<td>' . $lat = $row->latitude;
      echo "</td>";
      echo '<td>' . $lng = $row->longitude;
      echo "</td>";
      echo '<td>' . $type = $row->type;
      echo "</td>";
      if(($_SESSION['role'] == 'landlord' && in_array($row->id, $_SESSION['props'])) || isset($_SESSION['admin'])){

      //Update
      echo "<td><form action='".ROOT."property?manage_propid=".$row->id."' method='post' id='update_marker'>";
      echo "<input type='hidden' name='marker_id' value='".$row->id."' />";
      echo "<button name='edit' class='btn btn-info'>Edit</button></form></td>";
      //Delete
      echo "<td><form action='".ROOT."property?update_propid=".$row->id."' method='post' id='delete_marker'>";
      echo "<input type='hidden' name='action' value='delete_marker' />";
      echo "<input type='hidden' name='marker_id' value='".$row->id."' />";
      echo "<button name='delete' class='btn btn-danger'>Delete</button></form></td></tr>";
    
      }
    }   
    echo "</tbody></table>";
    echo "<a href='addMarker.php' class='btn btn-primary'>Insert new property</a><br /><br />";
    echo "<a href='map.php'>Back to Map Search</a>";
?>       
</body>
</html>
<?php include ('../../view/footer.php'); ?>



