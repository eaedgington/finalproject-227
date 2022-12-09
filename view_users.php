<?php
    $page_title = 'Users';
    include('includes/header.html');
    require('mysql_connect.php');

    $query = "SELECT CONCAT(last_name, ',', first_name) AS name, email, DATE_FORMAT
    (registration_date, '%M %d, %Y') AS dr FROM users ORDER BY last_name";
    $result = mysql_query( $dbc, $query );
?>

<div class="page-header">
    <h1>List of Registered Users</h1>
</div>

<table>
    <tr>
        <th>Name</th>
        <th>Email Address</th>
        <th>Registration Date</th>
    </tr>
<?php
while( $row = mysql_fetch_array($result, MYSQLI_ASSOC ) ){
    echo "
    <tr>
        <td>
            ".$row['name']."
        </td>
        <td>
            ".$row['email']."
        </td>
        <td>
            ".$row['dr']."
        </td>
    </tr>
    "
}
mysqli_free_result($result);

?>
</table>

<?php 
myqli_close($dbc);
include('includes/footer.html'); 
?>