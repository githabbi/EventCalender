<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            padding: 2rem;
        }
        /* Ensure form elements are always visible */
        .modal-body form, .modal-body form * {
            visibility: visible !important;
            display: block !important; /* Adjust based on actual layout needs */
            color: #000; /* Ensure text is visible */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to Your Website</h2>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createEventModal">
            Launch Modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="createEventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create a New Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/create_event" method="post">
                            <!-- CSRF Token -->
                            <!-- Make sure to include CSRF token for form submission if you're using Laravel -->
                            @csrf
                            <div class="mb-3">
                                <label for="event-type" class="form-label">Event Type:</label>
                                <select class="form-select" id="event-type" name="event-type">
                                    <option value="meeting">Meeting</option>
                                    <option value="party">Party</option>
                                    <option value="conference">Conference</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="event-description" class="form-label">Description:</label>
                                <textarea class="form-control" id="event-description" name="event-description" rows="3"></textarea>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="event-start-date" class="form-label">Start Date:</label>
                                        <input type="date" class="form-control" id="event-start-date" name="event-start-date">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="event-start-time" class="form-label">Start Time:</label>
                                        <input type="time" class="form-control" id="event-start-time" name="event-start-time">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="event-end-date" class="form-label">End Date:</label>
                                        <input type="date" class="form-control" id="event-end-date" name="event-end-date">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="event-end-time" class="form-label">End Time:</label>
                                        <input type="time" class="form-control" id="event-end-time" name="event-end-time">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!-- Removed the duplicate 'Create' button from the modal-footer to avoid confusion -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
