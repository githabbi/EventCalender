<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    :root {
        --blue: #00ADB5; /* Used for accents and buttons */
        --white: #fff; /* Background and text color for some elements */
        --gray: #EAEAEA; /* Light gray for backgrounds to soften the overall look */
        --black1: #222; /* Primarily for text color */
        --black2: #999; /* Secondary text color or less important elements */
    }
    body {
        background-color: var(--gray);
        color: var(--black1);
    }
    .container {
        padding: 2rem;
    }
    .modal-content {
        background-color: var(--white);
        color: var(--black1);
        border-radius: 20px;
    }
    .btn-primary {
        background-color: var(--blue);
        border-color: var(--blue);
        color: var(--white);
    }
    .btn-secondary {
        background-color: var(--black2);
        border-color: var(--black2);
        color: var(--white);
    }
    .form-control, .form-select {
        background-color: var(--white);
        color: var(--black1);
        border: 1px solid var(--black2);
        border-radius: 20px;
    }
    .form-label {
        margin-top: 1rem;
        color: var(--black1);
    }
</style>

</head>
<body>
    <div class="container">
        <h2>Welcome to Your Event Creator</h2>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createEventModal">
            Launch Event Creator
        </button>

        <!-- Modal -->
        <div class="modal fade" id="createEventModal" tabindex="-1" aria-labelledby="createEventLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createEventLabel">Create a New Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/create_event" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="event-title" class="form-label">Event Title:</label>
                                <input type="text" class="form-control" id="event-title" name="event-title" placeholder="Your Event Name">
                            </div>
                            <div class="mb-3">
                                <label for="event-description" class="form-label">Description:</label>
                                <textarea class="form-control" id="event-description" name="event-description" rows="3" placeholder="Describe your event..."></textarea>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label for="event-start-date" class="form-label">Start Date:</label>
                                    <input type="date" class="form-control" id="event-start-date" name="event-start-date">
                                </div>
                                <div class="col-md-6">
                                    <label for="event-start-time" class="form-label">Start Time:</label>
                                    <input type="time" class="form-control" id="event-start-time" name="event-start-time">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label for="event-end-date" class="form-label">End Date:</label>
                                    <input type="date" class="form-control" id="event-end-date" name="event-end-date">
                                </div>
                                <div class="col-md-6">
                                    <label for="event-end-time" class="form-label">End Time:</label>
                                    <input type="time" class="form-control" id="event-end-time" name="event-end-time">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="event-image" class="form-label">Event Image (optional):</label>
                                <input type="file" class="form-control" id="event-image" name="event-image">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Event</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
