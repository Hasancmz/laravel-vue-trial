@extends('layouts.app')
@section('content')
<container>
    <div class="card mt-3">
        <div class="card-body mt-2">
            <h5 class="card-title">
                <a href="{{ route('cards.index') }}" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left mr-1"></i>Cards</a>
            </h5>
            <form action="{{ route('cards.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select name="category" class="form-control">
                        <option value="">Durum Seçiniz</option>
                        <option value="kazak">Kazak</option>
                        <option value="ayakkabi">Ayakkabı</option>
                        <option value="mont">Mont</option>
                        <option value="polar">Polar</option>
                        <option value="esofman">Eşofman</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Fotoğraf</label>
                    <input type="file" name="image" class="form-control" value="{{ old('image') }}">
                </div>
                <div class="form-group">
                    <label for="">Başlık</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="">Açıklama</label>
                    <textarea name="description" class="form-control"  rows="4">{{ old('description') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Fiyat</label>
                    <input type="number" name="price" class="form-control" value="{{ old('price') }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm btn-block">Card Oluştur</button>
                </div>
            </form>
        </div>
    </div>
</container>
@endsection