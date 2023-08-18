<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;

class ChannelController extends Controller
{

public function index()
{
    $channels = Channel::all();
    return view('channels.index', compact('channels'));
}
public function create()
{
    return view('channels.create');
}

public function store(Request $request)
{
  
    $validatedData = $request->validate([
        'ChannelName' => 'required',
        'Description' => 'nullable',
        'SubscribersCount' => 'required|integer',
        'URL' => 'required|url',
    ]);

    
    Channel::create($validatedData);

    return redirect('/channels')->with('success', 'Channel created successfully!');
}
public function edit(Channel $channel)
{
    return view('channels.edit', compact('channel'));
}

public function update(Request $request, Channel $channel)
{

    $validatedData = $request->validate([
        'ChannelName' => 'required',
        'Description' => 'nullable',
        'SubscribersCount' => 'required|integer',
        'URL' => 'required|url',
    ]);

   
    $channel->update($validatedData);

    return redirect('/channels')->with('success', 'Channel updated successfully!');
}
public function destroy(Channel $channel)
{
    $channel->delete();
    return redirect('/channels')->with('success', 'Channel deleted successfully!');
}
public function show($channel)
{
    $channel = Channel::find($channel);

    return view('channels.show', compact('channel'));
}


}
