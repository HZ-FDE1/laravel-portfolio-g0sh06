<div>
    <form action="{{ route('blog.destroy', $blog) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>
</div>
