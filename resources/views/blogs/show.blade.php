<x-index>
<div>
        @foreach ($blog as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->description }}</td>
            <button><a href="{{ url('/faq' . $blog->id . '/edit') }}"></a>Edit</button>
            <button><a href="{{ url('/faq' . $blog->id . '/delete') }}"></a>Delete</button>
        @endforeach
</div>
</x-index>
