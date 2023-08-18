<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Channel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Channel</h1>
        <form method="post" action="/channels/{{ $channel->ChannelID }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="ChannelName">Channel Name:</label>
                <input type="text" name="ChannelName" class="form-control" value="{{ $channel->ChannelName }}" required>
            </div>
            <div class="form-group">
                <label for="Description">Description:</label>
                <textarea name="Description" class="form-control">{{ $channel->Description }}</textarea>
            </div>
            <div class="form-group">
                <label for="SubscribersCount">Subscribers Count:</label>
                <input type="number" name="SubscribersCount" class="form-control" value="{{ $channel->SubscribersCount }}" required>
            </div>
            <div class="form-group">
                <label for="URL">URL:</label>
                <input type="url" name="URL" class="form-control" value="{{ $channel->URL }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Channel</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
