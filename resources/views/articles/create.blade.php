@extends('layouts')

@section('head')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="w-full max-w-full" id="wrapper">
	<div id="page" class="container">
        <h1 class="text-2xl font-bold mb-4">New Article</h1>

    <form action="/articles" method="post">
        @csrf
        <div class="field block text-gray-700 text-xl mb-2">
            <label class="label" for="title">Title</label>

            <div class="control ">
                <input class="input {{ $errors->has('title') ? 'border border-red-500' : '' }} w-full bg-gray-400 rounded h-12"
                type="text"
                name="title"
                id="title"
                value="{{ old('title') }}">

                @error('title')
                <p class="text-red-500">{{ $errors->first('title') }} </p>
                @enderror

            </div>

        </div>

        <div class="field block text-gray-700 text-xl mb-2">
            <label class="label" for="excerpt">Excerpt</label>

            <div class="control">
                <input class="input {{ $errors->has('excerpt') ? 'border border-red-500' : '' }} w-full bg-gray-400 rounded h-12"
                type="text"
                name="excerpt"
                id="excerpt"
                value="{{ old('excerpt') }}">

                @error('excerpt')
                <p class="text-red-500">{{ $errors->first('excerpt') }} </p>
                @enderror

            </div>

        </div>

        <div class="field block text-gray-700 text-xl mb-2">
            <label class="label" for="body">Body</label>

            <div class="control">
                <textarea class="textarea {{ $errors->has('body') ? 'border border-red-500' : '' }} w-full bg-gray-400 rounded h-24" name="body" id="body">{{ old('body') }}</textarea>

                @error('body')
                <p class="text-red-500">{{ $errors->first('body') }} </p>
                @enderror

            </div>

        </div>

        <div class="field block text-gray-700 text-xl mb-2">
            <label class="label" for="body">Tags</label>

            <div class="control">
                <select class="textarea w-full bg-gray-400 rounded"
                name="tags[]"
                multiple
                >

                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>

                @endforeach

                </select>

                @error('tags')
                <p class="text-red-500">{{ $message }} </p>
                @enderror

            </div>

        </div>

        <div class="field is-grouped">

            <div class="control">
                <button class="button is-link" type="submit">Submit</button>
            </div>

        </div>

    </form>

    </div>
</div>
@endsection
