@extends('layouts.app')
@section('content')
<div class="card mt-5">
    <div class="card-body mt-3">
      <div class="d-flex justify-content-between">
        <h5 class="card-title">
          <a href="{{ route('panel') }}" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left mr-1"></i>Panele dön</a>
        </h5>
        <h5 class="card-title">
          <a href="{{ route('cards.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus mr-2"></i>Card Oluştur</a>
        </h5>
      </div>
      <form action="" method="GET">
        <div class="form-row mb-2">
          <div class="col-md-2">
            <input type="text" name="title" value="{{ request()->get('title') }}" placeholder="Card Başlığı Ara..." class="form-control">
          </div>
          <div class="col-md-2">
            <select class="form-control" name="category_id"  onchange="this.form.submit()">
              <option value="">Kategori Seçiniz</option>
              <option @if(request()->get('category_id') == '1') selected @endif value="1">Kazak</option>
              <option @if(request()->get('category_id') == '2') selected @endif value="2">Ayakkabi</option>
              <option @if(request()->get('category_id') == '3') selected @endif value="3">Mont</option>
              <option @if(request()->get('category_id') == '4') selected @endif value="4">Polar</option>
              <option @if(request()->get('category_id') == '5') selected @endif value="5">Eşofman</option>
            </select>
          </div>
          @if(request()->get('title') || request()->get('category_id'))
            <div class="col-md-2">
              <a href="{{ route('cards.index') }}" class="btn btn-secondary">Sıfırla</a>
            </div>
          @endif
        </div>
      </form>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Kategori</th>
                <th scope="col">Fotoğraf</th>
                <th scope="col">Başlık</th>
                <th scope="col">Açıklama</th>
                <th scope="col">Fiyat</th>
                <th scope="col" style="width: 100px">İşlemler</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($cards as $card)      
              <tr>
                <td scope="row">{{ $card->category_id }}</td>
                <td>
                  
                    <a href="{{ asset($card->image) }}" class="btn btn-sm btn-secondary" target="_blank">Görüntüle</a>
                  
                </td>
                <td>{{ $card->title }}</td>
                <td>{{ $card->description }}</td>
                <td>{{ $card->price }}</td>
                <td>   
                    <form action="{{ route('cards.destroy', $card->id) }}" method="post">
                      @csrf @method('delete')
                      <a href="{{ route('cards.edit', $card->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                      <button type="submit" class="btn btn-sm btn-danger" title="Sil"><i class="fa fa-times"></i></button>
                    </form>
                </td>
              </tr>
            @endforeach 
            </tbody>
        </table>
        {{ $cards->withQueryString()->links() }}
        <!-- withQeryStringi ekleme sebebimiz paginate kısmında 2.sayfaya sarkan filter veya search olursa hatalı oluyor o yüzden ekledik -->
    </div>
</div>
@endsection