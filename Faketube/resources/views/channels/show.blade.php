<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Channel Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Channel Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $channel->ChannelName }}</h5>
                <p class="card-text"><strong>Description:</strong> {{ $channel->Description }}</p>
                <p class="card-text"><strong>Subscribers Count:</strong> {{ $channel->SubscribersCount }}</p>
                <p class="card-text"><strong>URL:</strong> <a href="{{ $channel->URL }}">{{ $channel->URL }}</a></p>
                <a href="/channels" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
