<?php
setlocale(LC_TIME, "fr_FR", "FRENCH");
$servername = "192.168.1.24";
$username = "frigo";
$password = "fr1g0mdp";
$dbname = "frigo";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};

$sql = "SELECT * FROM FRIGO ORDER BY expiration_date DESC";
$result = $conn->query($sql);

echo('
<section class="is-centered">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                     <h2 class="title is-3"> Le Frigo : </h2>
                        <div class="table-container">
                            <table class="table is-striped">
                                <thead>
                                    <tr>
                                      <th>Food</th>
                                      <th>Purchase date</th>
                                      <th>Expiration date</th>                          
                                    </tr>
                                  </thead>
                                  <tfoot>
                                   <tr>
                                      <th>Food</th>
                                      <th>Purchase date</th>
                                      <th>Expiration date</th>                             
                                    </tr>                      
                                  </tfoot>
                                  <tbody>');

if (!empty($result->num_rows)) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                                        <td>".$row['food']."</td>
                                        <td>".strftime('%d %B %Y', strtotime($row['expiration_date']))."</td>
                                        <td>".$row['registration_date']."</td>
                                    </tr>";
    }
}





echo('
                                  </tbody>
                            </table>
                        </div>
                     </div>
                </div>
        </div>
    </section>  ');
