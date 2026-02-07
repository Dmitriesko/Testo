@extends('layouts.app')

@section('content')
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="mb-3">
            <label for="titleInput" class="form-label">Заголовок</label>
            <input type="text" value="{{ old('title') }}" name="title"
                   class="form-control @error('title') is-invalid @enderror" id="titleInput"
                   aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="descriptionInput" class="form-label">Описание</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror"
                   value="{{ old('description') }}" name="description" id="descriptionInput">
        </div>
        <div class="mb-3">
            <label for="contentTextarea" class="form-label">Содержание</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="contentTextarea" name="content"
                      rows="3">{{ old('content') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="categorySelect" class="form-label">Категория</label>
            <select
                name="category_id"
                class="form-select @error('category_id') is-invalid @enderror"
            >
                <option selected disabled value="">Выберите категорию</option>

                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                    >
                        {{ $category->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
