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
      <th>Tournament</th>
      <th>Location</th>
      <th>Result</th>
    </tr>
    <tr>
      <td>Crimson Cup</td>
      <td>Salt Lake City, Utah</td>
      <td>3rd Place, 4-2</td>
    </tr>
    <tr>
      <td>Top of Utah Classic</td>
      <td>Logan, Utah</td>
      <td>1st Place, 6-0</td>
    </tr>
    <tr>
      <td>Tree City Tournament</td>
      <td>Boise, Idaho</td>
      <td>1st Place, 6-0</td>
    </tr>
    <tr>
      <td>Regional Championship</td>
      <td>Kennewick, Washington</td>
      <td>March 4</td>
    </tr>
    <tr>
      <td>National Championship</td>
      <td>Kissimmee, Florida</td>
      <td>April 8</td>
    </tr>
  </table>

<?php
  include('footer.php');
?>
