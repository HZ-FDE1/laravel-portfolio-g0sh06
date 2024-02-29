<div>
    <form action="{{ route('faq.destroy', $faq) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>
</div>
