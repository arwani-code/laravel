<x-app-layout title="Edit artikel: {{ $article->title }}">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <x-card title="Edit Artikel" subtitle="{{ $article->title }}">
                    <form method='post' action="/articles/{{ $article->id }}">
                        @csrf
                        @method('put')
                        <div class="mb-4">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" value="{{ $article->title }}"
                                class="formcontrol @error('title') is-invalid @enderror">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="body" class="form-label">Body</label>
                            <textarea name="body" id="body"
                                class="form-control @error('body') is-invalid
                                    @enderror">{{ $article->body }}
                            </textarea>
                            @error('body')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </x-card>
            </div>
        </div>
</x-app-layout>
