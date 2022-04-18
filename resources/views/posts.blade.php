<x-layout>


    @foreach($posts as $post)

        <article class="{{$loop->even ? 'foobar':''}} ">

            <a href="/post/{{$post->slug}}">
                <h1>
                    {{$post->title}}
                </h1>
            </a>

            <p>

                by
                <a href="/author/{{$post->author->name}}">
                   {{$post->author->name}}
                </a>
                in
                <a href="/categories/{{$post->category->id}}">
                    {{$post->category->name}}
                </a>
            </p>
            <p>

                {{$post->excerpt}}
            </p>
        </article>
  @endforeach
</x-layout>
