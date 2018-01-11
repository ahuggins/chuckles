
@php 
    $sites = \App\Site::all();
@endphp

@foreach ($sites as $site)

    <div>
        <h1>Site - {{ $site->site_key }}</h1>
        <a href="{{ $site->url }}">
            {{ $site->site_key }}
        </a>
        <h2>Pages</h2>
        <div>
            @foreach ($site->pages as $page)
                <a href="{{ $site->url . '/' . $page->slug }}">
                    {{ $page->slug }}
                </a>
            @endforeach
        </div>
    </div>

@endforeach
    
