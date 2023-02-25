<?php

namespace App\Http\Controllers;

use App\Models\Flashcard;
use App\Models\Word;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class FlashcardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$flashcards = Flashcard::all();
		$user = auth()->user();
		return view('flashcard.index', compact('flashcards','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('flashcard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$inputs = $request->validate([
			'name'=>'required|max:50',
		]);

		$flashcard = new Flashcard();

		$flashcard->name = $request->name;
		$flashcard->user_id = auth()->user()->id;
		$flashcard->save();
		return redirect()->route('flashcard.create')->with('message','単語帳を作成しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flashcard  $flashcard
     * @return \Illuminate\Http\Response
     */
    public function show(Flashcard $flashcard)
    {
        //
		$words = Word::find($flashcard->id);
		if (empty($words)){
			return view('flashcard.show', compact('flashcard','words'))->with('message', '単語帳は空です。');
		}
		return view('flashcard.show', compact('flashcard','words'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flashcard  $flashcard
     * @return \Illuminate\Http\Response
     */
    public function edit(Flashcard $flashcard)
    {
        //
		return view('flashcard.edit',compact('flashcard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flashcard  $flashcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flashcard $flashcard)
    {
        //
		$inputs = $request->validate(([
			'name'=>'required|max:50'
		]));

		$flashcard->name = $request->name;
		$flashcard->save();

		return redirect()->route('flashcard.index', $flashcard)->with('message', '単語帳を更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flashcard  $flashcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flashcard $flashcard)
    {
        //
		$flashcard->delete();
		return redirect()->route('flashcard.index')->with('message','単語帳を削除しました');
    }
}
