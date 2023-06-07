<form method="POST" action="attendance.php">
  <table>
    <tr>
      <th>Select</th>
      <th>User Name</th>
    </tr>
    <?php
    // Populate the table with user names
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td><input type='checkbox' name='user_name[]' value='" . $row["user_name"] . "'></td>";
      echo "<td>" . $row["user_name"] . "</td>";
      echo "</tr>";
    }

    mysqli_close($conn);
    ?>
  </table>

  <label>Subject</label>
  <input type="text" name="subject" value="<?php echo $_SESSION['selectedSubject']; ?>" readonly><br>

  <input type="date" id="date" name="date" required readonly><br>

  <br>
  <label>Attendance</label>
  <input type="radio" name="attendance_status" value="Present" checked>
  <label>Absent</label>
  <input type="radio" name="attendance_status" value="Absent">

  <button type="submit">Submit</button>
</form>
