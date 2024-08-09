<ul class="footer-links list-unstyled">
    @foreach ($content_pages as $content_page)
    <li><a href="/cms/{{ $content_page->id }}/{{ Str::slug($content_page->title) }}"><i class="bi bi-chevron-right"></i> {{ $content_page->title }}</a></li>
    @endforeach
</ul>