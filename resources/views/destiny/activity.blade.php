<div style="background-image: url(https://bungie.net/{{ $activity->pgcrImage }}); color:white; padding: 1rem;">
<h1>Activity</h1>

<div><h2>{{ $activity->name }}</h2></div>

<div>
    <h2>Activity Type</h2>
    <p>{{ $activity->type->name}}</p>
</div>
<div>
    <h2>Destination</h2>
    <p>{{ $activity->destination->name }}</p>
</div>
<div>
    <h2>Place</h2>
    <p>{{ $activity->place->name }}</p>
</div>
<div>
    <h3>Rewards</h3>
    <div>
        {{ $activity->rewards }}
    </div>
</div>
</div>
