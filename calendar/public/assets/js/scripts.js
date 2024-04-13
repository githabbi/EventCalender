// Sample event data (you can replace it with your own data)
const eventData = [
    { title: 'Event 1', startTime: '2024-04-10 09:00', endTime: '2024-04-10 12:00' },
    { title: 'Event 2', startTime: '2024-04-15 14:00', endTime: '2024-04-15 17:00' },
    { title: 'Event 3', startTime: '2024-04-20 10:30', endTime: '2024-04-20 13:30' }
    // Add more events here
  ];
  
  // Function to display events in a table
  function displayEventTable(events) {
    const eventTable = document.getElementById('event-table');
    eventTable.innerHTML = `
      <table>
        <thead>
          <tr>
            <th>Title <button onclick="sortTable(0)">Sort</button></th>
            <th>Start Time <button onclick="sortTable(1)">Sort</button></th>
            <th>End Time <button onclick="sortTable(2)">Sort</button></th>
            <th>Details</th>
          </tr>
        </thead>
        <tbody>
          ${events.map((event, index) => `
            <tr>
              <td>${event.title}</td>
              <td>${event.startTime}</td>
              <td>${event.endTime}</td>
              <td><button onclick="showDetails(${index})">Details</button></td>
            </tr>
          `).join('')}
        </tbody>
      </table>
    `;
  }
  
  // Function to filter events based on selection
  function applyFilter() {
    const filterSelect = document.getElementById('filter-select');
    const selectedValue = filterSelect.value;
  
    let filteredEvents = [];
    if (selectedValue === 'all') {
      filteredEvents = eventData;
    } else {
      filteredEvents = eventData.filter(event => event.title === selectedValue);
    }
  
    displayEventTable(filteredEvents);
  }
  
  // Function to sort the table by column index
  function sortTable(columnIndex) {
    const table = document.querySelector('table');
    const tbody = table.querySelector('tbody');
    const rows = Array.from(tbody.querySelectorAll('tr'));
  
    rows.sort((a, b) => {
      const aData = a.children[columnIndex].textContent.trim();
      const bData = b.children[columnIndex].textContent.trim();
      return aData.localeCompare(bData);
    });
  
    tbody.innerHTML = '';
    rows.forEach(row => tbody.appendChild(row));
  }
  
  // Function to display event details (replace with your implementation)
  function showDetails(index) {
    alert(`Details for Event ${index + 1}`);
  }
  
  // Display all events table when the page loads
  document.addEventListener('DOMContentLoaded', () => {
    displayEventTable(eventData);
  });
  