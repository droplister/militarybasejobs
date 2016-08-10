<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc>{{ url(route('facility::index')) }}</loc>
    </url>
@foreach($facilities as $facility)
    <url>
        <loc>{{ url(route('facility::show', ['facility' => $facility->slug])) }}</loc>
    </url>
@endforeach
    <url>
        <loc>{{ url(route('organization::index')) }}</loc>
    </url>
@foreach($organizations as $organization)
    <url>
        <loc>{{ url(route('organization::show', ['organization' => $organization->slug])) }}</loc>
    </url>
@endforeach
    <url>
        <loc>{{ url(route('location::index')) }}</loc>
    </url>
@foreach($locations as $location)
    <url>
        <loc>{{ url(route('location::show', ['location' => $location->slug])) }}</loc>
    </url>
@endforeach
    <url>
        <loc>{{ url(route('category::index')) }}</loc>
    </url>
@foreach($categories as $category)
    <url>
        <loc>{{ url(route('category::show', ['category' => $category->slug])) }}</loc>
    </url>
@endforeach
</urlset>