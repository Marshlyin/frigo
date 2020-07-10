<?php

$servername = "localhost";
$username = "frigo";
$password = "fr1g0mdp";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


echo('<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Mon Frigo</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
</head>

<body>
<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
   <section class="hero is-dark">
        <div class="container">
              <h1 class="title">
                Mon frigo
              </h1 >
              <p class="subtitle is-3">
                Alors, qu\'est-ce qu\'il nous reste dans le frigo ?
              </p>
        </div>
    </section>
    <br>
    <section class="is-centered">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                     <h2 class="title is-3"> À manger au plus vite : </h2>
                        <div class="table-container">
                            <table class="table is-striped">
                                <thead>
                                    <tr>
                                      <th>Nourriture</th>
                                      <th>Date d\'achat</th>
                                      <th>Date limite</th>                          
                                    </tr>
                                  </thead>
                                  <tfoot>
                                   <tr>
                                      <th>Nourriture</th>
                                      <th>Date d\'achat</th>
                                      <th>Date limite</th>                          
                                    </tr>                      
                                  </tfoot>
                                  <tbody>
                                    <tr>
                                        <td>Test</td>
                                        <td>01/01/1970</td>
                                        <td>01/01/1970</td>
                                    </tr>
                                  </tbody>
                            </table>
                        </div>
                     </div>
                </div>
        </div>
    </section>  
</body>

</html>');

?>