<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Event Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container1">
    <header>
      <h1>Welcome to Your Event Dashboard</h1>
    </header>
    <section class="stats">
      <h2>Your Statistics</h2>
      <div class="stats-grid">
        <div class="stat-item">
          <i class="fas fa-tasks"></i>
          <h3>Total Events Completed</h3>
          <p id="total-events">0</p>
        </div>
        <div class="stat-item">
          <i class="fas fa-calendar-check"></i>
          <h3>Total Running Events</h3>
          <p id="total-running-events">0</p>
        </div>
        <div class="stat-item">
          <i class="fas fa-users"></i>
          <h3>Number of Participants</h3>
          <p id="total-participants">0</p>
        </div>
        <div class="stat-item">
          <i class="fas fa-star"></i>
          <h3>Stars</h3>
          <p id="stars">0</p>
        </div>
      </div>
    </section>
    <section class="event-filter">
      <h2>Event Filter</h2>
      <div id="filter-options">
        <select id="filter-select">
          <option value="all" selected>All Events</option>
          <option value="event1">Event 1</option>
          <option value="event2">Event 2</option>
          <option value="event3">Event 3</option>
          <!-- Add more options as needed -->
        </select>
        <button onclick="applyFilter()"><i class="fas fa-filter"></i> Filter</button>
      </div>
    </section>
    <section class="event-list">
      <h2>Your Events</h2>
      <div id="event-table">
        <table>
          <thead>
            <tr>
              <th>Title <i class="fas fa-sort-up"></i></th>
              <th>Start Time <i class="fas fa-sort-up"></i></th>
              <th>End Time <i class="fas fa-sort-up"></i></th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <!-- Table rows will be dynamically generated here -->
          </tbody>
        </table>
      </div>
    </section>
  </div>

  <script src="../../public/assets/js/scripts.js"></script>
</body>
</html>