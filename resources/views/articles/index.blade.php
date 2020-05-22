@extends('layouts')

@section('content')

<div id="wrapper">
	<div id="page" class="container">

	@forelse ($articles as $article)

		<div class="content">
			<div class="title">
				<h2>
					<a href="{{ $article->path() }}">

					{{ $article->title }}

				</a>
				</h2>

            </div>

            <p><img src="/css/images/banner.jpg"
                    alt="banner-img"
					class="image image-full"
				/>
            </p>

            {{ $article->excerpt }}

        </div>
        @empty
        <p>No relevent Articles yet.</p>

		@endforelse
    </div>
</div>
@endsection

