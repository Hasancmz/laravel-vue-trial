@extends('layouts.app')
@section('content')
<div class="card mt-5">
    <div class="card-body mt-3">
        <h5 class="card-title float-right">
            <a href="" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Card Oluştur</a>
        </h5>
        <h5 class="card-title float-left">
          <a href="{{ route('panel') }}" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left mr-1"></i>Panele dön</a>
        </h5>
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
                <td scope="row">{{ $card->category }}</td>
                <td>
                  
                    <a href="" class="btn btn-sm btn-secondary" target="_blank">Görüntüle</a>
                  
                </td>
                <td>{{ $card->title }}</td>
                <td>{{ $card->description }}</td>
                <td>{{ $card->price }}</td>
                <td>   
                    <form action="" method="post">
                      @csrf @method('delete')
                      <a href="" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                      <button type="submit" class="btn btn-sm btn-danger" title="Sil"><i class="fa fa-times"></i></button>
                    </form>
                </td>
              </tr>
            @endforeach 
            </tbody>
        </table>
        {{ $cards->links() }}
    </div>
</div>
@endsection