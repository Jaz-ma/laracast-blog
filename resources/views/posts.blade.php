<x-layout>

    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
      <x-posts-grid :posts="$posts"/>



        @else

        <p class="text-center">There are no posts currently, please check back later</p>
        @endif

    </main>

    {{-- @foreach($posts as $post)

        <article class="{{$loop->even ? 'foobar':''}} ">

            <a href="/post/{{$post->slug}}">
                <h1>
                    {{$post->title}}
                </h1>
            </a>

            <p>

                by
                <a href="/author/{{$post->author->userName}}">
                   {{$post->author->name}}
                </a>
                in
                <a href="/categories/{{$post->category->slug}}">
                    {{$post->category->name}}
                </a>
            </p>
            <p>

                {{$post->excerpt}}
            </p>
        </article>
  @endforeach --}}
</x-layout>
