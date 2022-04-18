<x-layout>
    <article>
        <h1>
            {{$post->title}}
        </h1>

        <p>
          by <a href="/author/{{$post->author->name}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->id}}">
                {{$post->category->name}}
            </a>
        </p>
        <p>
            {!!$post->body!!}
        </p>
       </article>
    <a href="/">Back to home </a>
</x-layout>
