<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faketube App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Faketube App</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="/channels/create"> Create Channel</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Channel ID</th>
            <th>Channel Name</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($channels as $channel)
        <tr>
            <td>{{ $channel->ChannelID }}</td>
            <td>{{ $channel->ChannelName }}</td>
            <td>{{ $channel->Description }}</td>
            <td>
                <a class="btn btn-primary" href="/channels/{{ $channel->ChannelID }}/edit">Edit</a>
                <a class="btn btn-info" href="/channels/{{ $channel->ChannelID }}/">View Details</a>
                <form action="/channels/{{ $channel->ChannelID }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this channel?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
