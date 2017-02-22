<?php
  include('header.php');
?>


  <div id="nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="roster.php">Roster</a></li>
      <li><a class=active href="upcoming.php">Upcoming Tournaments</a></li>
      <li><a href="videos.php">Videos</a></li>
      <li><a href="practices.php">Practice Schedule</a></li>
      <li><a href="announcements.php">Announcements</a></li>
    </ul>
  </div>

  <h2>Striped Table</h2>
  <p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p>

  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Points</th>
    </tr>
    <tr>
      <td>Peter</td>
      <td>Griffin</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>Lois</td>
      <td>Griffin</td>
      <td>$150</td>
    </tr>
    <tr>
      <td>Joe</td>
      <td>Swanson</td>
      <td>$300</td>
    </tr>
    <tr>
      <td>Cleveland</td>
      <td>Brown</td>
      <td>$250</td>
    </tr>
  </table>

<?php
  include('footer.php');
?>
