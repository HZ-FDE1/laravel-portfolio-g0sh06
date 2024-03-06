<div class="box">
    <form action="{{ route('blog.update', $blog) }}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="title is-4">Edit BLOG POST</h1>
        <br>
        <h2 class="subtitle is-6 is-italic">
            Please fill out all the form fields and click 'Submit'
        </h2>

        {{-- Here are all the form fields --}}
        <div class="field">
            <label for="question" class="label">Question</label>
            <div class="control has-icons-right">
                <input type="text" name="question" placeholder="Enter the post's title..."
                       class="input @error('question') is-danger @enderror"
                       value="{{ $faq->question }}" autocomplete="question" autofocus>
                @error('question')
                <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                @enderror
            </div>
            @error('question')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="answer" class="label">Answer</label>
            <div class="control has-icons-right">
                <input type="text" name="answer" placeholder="Enter a summary of the post content..."
                       class="input @error('answer') is-danger @enderror"
                       value="{{ $faq->answer }}" autocomplete="answer">
                @error('answer')
                <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                @enderror
            </div>
            @error('answer')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="link" class="label">Link</label>
            <div class="control has-icons-right">
                <input type="text" name="link" placeholder="Enter the post's content here..."
                       class="input @error('link') is-danger @enderror"
                       value="{{ $faq->link }}" autocomplete="link">
                @error('link')
                <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                @enderror
            </div>
            @error('link')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-primary">Save</button>
            </div>
        </div>
    </form>
</div>
