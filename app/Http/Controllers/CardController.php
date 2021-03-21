<?php

namespace App\Http\Controllers;


use App\Models\Card;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CardCreateRequest;
use App\Http\Requests\CardUpdateRequest;
use Illuminate\Support\Str;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::select('*');
        //$cards = Card::query();   İkiside Oluyor....

        if (request()->get('title')) {
            $cards = $cards->where('title', 'LIKE', "%" . request()->get('title') . "%");
        }

        if (request()->get('category_id')) {
            $cards = $cards->where('category_id', request()->get('category_id'));
        }

        $cards = $cards->Paginate(5);
        // burdaki yapı sayesinde search and filter işlemleri oldu.

        return view('admin.card.list', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.card.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CardCreateRequest $request)
    {
        if ($request->hasfile('image')) {
            $fileName = Str::slug($request->title) . '.' . $request->image->extension();
            $fileNameWithUpload = 'uploads/' . $fileName;
            $request->image->move(public_path('uploads'), $fileName);
            $request->merge([
                'image' => $fileNameWithUpload
            ]);
        }

        Card::create($request->post());
        return redirect()->route('cards.index')->withSuccess('Card Başarıyla Oluşturuldu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card = Card::find($id) ?? abort(404);
        return view('admin.card.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(CardUpdateRequest $request, $id)
    {
        if ($request->hasfile('image')) {
            $fileName = Str::slug($request->title) . '.' . $request->image->extension();
            $fileNameWithUpload = 'uploads/' . $fileName;
            $request->image->move(public_path('uploads'), $fileName);
            $request->merge([
                'image' => $fileNameWithUpload
            ]);
        }

        $card = Card::find($id) ?? abort(404);
        $card->whereId($id)->first()->update($request->post());
        return redirect()->route('cards.index')->withSuccess('Card Başarıyla Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card = Card::find($id) ?? abort(404);
        $card->delete();
        return redirect()->route('cards.index')->withSuccess('Card Başarıyla Silindi');
    }
}
