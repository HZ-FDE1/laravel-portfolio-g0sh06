<x-index>
<div>
        @foreach ($faq as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->question }}</td>
                <td>{{ $post->answer }}</td>
                <td>{{ $post->link }}</td>
            </tr>
            <button><a href="{{ url('/faq' . $post->id . '/edit') }}"></a>Edit</button>
            <button><a href="{{ url('/faq' . $post->id . '/delete') }}"></a>Delete</button>
        @endforeach
</div>
</x-index>
