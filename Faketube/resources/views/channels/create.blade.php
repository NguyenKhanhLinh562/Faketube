<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Channel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Create New Channel</h1>
        <form method="post" action="/channels">
            @csrf
            <label for="ChannelName">Channel Name:</label>
            <input type="text" name="ChannelName" required><br>
            <label for="Description">Description:</label>
            <textarea name="Description"></textarea><br>
            <label for="SubscribersCount">Subscribers Count:</label>
            <input type="number" name="SubscribersCount" required><br>
            <label for="URL">URL:</label>
            <input type="url" name="URL" required><br>
            <button type="submit">Add </button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
