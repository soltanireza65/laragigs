<h1>{{ $heading }}</h1>


@unless (count($listings) == 0)
    @foreach ($listings as $listing)
        <h2><a href="/listing/{{$listing['id']}}">This is listing {{ $listing['title'] }}</a></h2>
        <p>This is listing {{ $listing['description'] }}</p>
    @endforeach
@else
    <h1>No Listing found</h1>
@endunless
