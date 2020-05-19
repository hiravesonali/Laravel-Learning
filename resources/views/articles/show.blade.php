@extends('layouts')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{ $article->title }}</h2>
            </div>
                
            <p><img src="/css/images/banner.jpg" 
                    alt="banner-img" 
                    class="image image-full" /> 
            </p>

            <p>{{ $article->body }}</p>

        </div>
    </div>
</div>
@endsection 

