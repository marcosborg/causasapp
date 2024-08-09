@extends('layouts.website')

@section('content')
<section>
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="page-title">{{ $content_page->title }}</h2>
            </div>
        </div>
        <div class="ps-md-5 mt-4 mt-md-0">
            {!! $content_page->page_text !!}
        </div>
    </div>
</section>
@endsection