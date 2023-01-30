<x-app-layout title="New article">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <x-card class="mb-4" title="New" subtitle="Create new article">
                    <form method='post' action="/articles">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title"
                                class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="body" class="form-label">body</label>
                            <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror"></textarea>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </x-card>
            </div>
        </div>
    </div>
</x-app-layout>
