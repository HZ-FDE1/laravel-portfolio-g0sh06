<div class="box">
    <form action="{{ route('blog.store') }}" method="POST">
        @csrf
        <h1 class="title is-4">Create a New Blog Post</h1>
        <br>
        <h2 class="subtitle is-6 is-italic">
            Please fill out all the form fields and click 'Submit'
        </h2>

        {{-- Here are all the form fields --}}
        <div class="field">
            <label for="title" class="label">Title</label>
            <div class="control has-icons-right">
                <input type="text" name="title" placeholder="Enter the title..."
                       class="input @error('question') is-danger @enderror"
                       value="{{ old('title') }}" autocomplete="question" autofocus>
                @error('title')
                <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                @enderror
            </div>
            @error('title')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="answer" class="label">Description</label>
            <div class="control has-icons-right">
                <textarea name="description" type="text" placeholder="Enter a description...">
                </textarea>
                @error('description')
                <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                @enderror
            </div>
            @error('description')
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
