@extends('layouts.app')
@section('content')
<container>
    <div class="card mt-3">
        <div class="card-body mt-2">
            <div class="form-group d-flex justify-content-between">
                <h5 class="card-title">
                    <a href="{{ route('cards.index') }}" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left mr-1"></i>Cards</a>
                </h5>
                <h3 class="">Card Güncelle</h3>
            </div>
            <form enctype="multipart/form-data" action="{{ route('cards.update', $card->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select name="category" class="form-control">
                        <option value="">Durum Seçiniz</option>
                        <option @if($card->category === 'kazak') selected @endif value="kazak">Kazak</option>
                        <option @if($card->category === 'ayakkabi') selected @endif value="ayakkabi">Ayakkabı</option>
                        <option @if($card->category === 'mont') selected @endif value="mont">Mont</option>
                        <option @if($card->category === 'polar') selected @endif value="polar">Polar</option>
                        <option @if($card->category === 'esofman') selected @endif value="esofman">Eşofman</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Fotoğraf</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Başlık</label>
                    <input type="text" name="title" class="form-control" value="{{ $card->title }}">
                </div>
                <div class="form-group">
                    <label for="">Açıklama</label>
                    <textarea name="description" class="form-control"  rows="4">{{ $card->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Fiyat</label>
                    <input type="number" name="price" class="form-control" value="{{ $card->price }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm btn-block">Card Güncelle</button>
                </div>
            </form>
        </div>
    </div>
</container>
@endsection