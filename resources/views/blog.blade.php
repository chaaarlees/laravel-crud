<x-layouts.app
    title="Blog"
    meta-description="Pagina de Blog"
>
    <h1>Blog</h1>

    @foreach ($posts as $p)
        <h2>{{$p['title']}}</h2>
    @endforeach

    
</x-layouts.app>
