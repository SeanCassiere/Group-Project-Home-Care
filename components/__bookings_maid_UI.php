<div id="findAMaid" class="bodySection">
  <div class="jumbotron" style="min-height: 400px;">    
    <h2>Your Bookings</h2>
    <br>
    <table class="table table-striped table-bordered table-hover">
      <caption>Current Bookings</caption>
      <thead class="thead-orange">
        <tr>
          <th scope="col">Booking #</th>
          <th scope="col">Client</th>
          <th scope="col">Area</th>
          <th scope="col">Contact</th>
          <th scope="col">Date</th>
          <th scope="col">Earnings</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $maidId=$_SESSION["maid_Id"];
        //echo $maidId;
        require_once('__connect_db.php');

        if (!$con) {
          die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT b.*, u.*, m.* FROM booking b";
        $sql .= " INNER JOIN users u ON b.userId=u.userId";
        $sql .= " INNER JOIN maid m ON b.maidId=m.maidID";
        $sql .= " WHERE b.maidId='".$maidId."';";
        $result = mysqli_query($con, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          $rowNum = 1;
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
              echo "<th scope='row'>".$row['bookingRefNo']."</th>";
              echo "<td>".$row['userName']."</td>";
              echo "<td>".$row['maidAddress']."</td>";
              echo "<td>+(94) ".$row['userPhone']."</td>";
              echo "<td>".$row['bookingDate']."</td>";
              echo "<td>Rs. ".(int)$row['maidServiceDailyRate']."</td>";
            echo "</tr>";
          }
        } else {
            echo "<tr>";
            echo "<th scope='row' colspan='6'>No Booking have been made for you.</th>";
            echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>