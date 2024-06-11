<x-layouts.app title="Blog" meta-description="Blog meta description">

    <h1>blog</h1>
    
    @foreach ($posts as $post)
        <h2>{{$post['title']}}</h2>
    @endforeach

</x-layouts.app>
    

    
