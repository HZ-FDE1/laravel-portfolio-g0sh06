<div class="box">
    <form action="{{ route('faq.store') }}" method="POST">
        @csrf
        <h1 class="title is-4">Create a New Blog Post</h1>
        <br>
        <h2 class="subtitle is-6 is-italic">
            Please fill out all the form fields and click 'Submit'
        </h2>

        {{-- Here are all the form fields --}}
        <div class="field">
            <label for="question" class="label">Question</label>
            <div class="control has-icons-right">
                <input type="text" name="question" placeholder="Enter the question..."
                       class="input @error('question') is-danger @enderror"
                       value="{{ old('question') }}" autocomplete="question" autofocus>
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
                <input type="text" name="answer" placeholder="Enter an answer..."
                       class="input @error('answer') is-danger @enderror"
                       value="{{ old('answer') }}" autocomplete="answer">
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
                <input type="text" name="link" placeholder="Enter a link..."
                       class="input @error('link') is-danger @enderror"
                       value="{{ old('link') }}" autocomplete="link">
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
