<?php
  include('header.php');
?>


  <div id="nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="roster.php">Roster</a></li>
      <li><a href="upcoming.php">Upcoming Tournaments</a></li>
      <li><a href="videos.php">Videos</a></li>
      <li><a class=active href="practices.php">Practices</a></li>
      <li><a href="announcements.php">Announcements</a></li>
    </ul>
  </div>

  <h2>Striped Table</h2>
  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p>

  <table>
    <tr>
      <th>Day</th>
      <th>Time</th>
      <th>Location</th>
    </tr>
    <tr>
      <td>Sunday</td>
      <td>12:00 - 2:00</td>
      <td>Turf Intramural Field</td>
    </tr>
    <tr>
      <td>Monday</td>
      <td>No Practice</td>
      <td>No Practice</td>
    </tr>
    <tr>
      <td>Tuesday</td>
      <td>4:30 - 6:30</td>
      <td>Turf Intramural Field</td>
    </tr>
    <tr>
      <td>Wednesdayp</td>
      <td>No Practice</td>
      <td>No Practice</td>
    </tr>
    <tr>
      <td>Thursday</td>
      <td>4:30 - 6:30</td>
      <td>Turf Intramural Field</td>
    </tr>

    <tr>
      <td>Friday</td>
      <td>No Practice</td>
      <td>No Practice</td>
    </tr>

    <tr>
      <td>Saturday</td>
      <td>No Practice</td>
      <td>No Practice</td>
    </tr>
  </table>

<?php
  include('footer.php');
?>
