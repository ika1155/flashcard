<?php

namespace App\Http\Controllers;

use App\Models\Word;
use App\Models\Flashcard;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Flashcard.showからリダイレクトでflashcard_idを渡される

		/* $flashcard_id = $request->flashcard_id;
		$flashcard = Flashcard::find($flashcard_id);

		$words = Word::where('flashcard_id', $flashcard_id)->get();
		if ($words->isEmpty()){
			session()->flash('message', '単語帳は空です。');
		}

		return view('flashcard.show', compact('flashcard','words')); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // セッションでFlashcardを渡される場合 
		$flashcard = session()->get('flashcard'); 
		return view('word.create', compact('flashcard'));
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
			'a_side'=>'required|max:100',
			'b_side'=>'required|max:100',
			'flashcard_id'=>'required|exists:flashcards,id,deleted_at,NULL'
		]);

		$word = new Word();

		$word->a_side = $request->a_side;
		$word->b_side = $request->b_side;
		$word->flashcard_id = $request->flashcard_id;
		$word->save();
		
		return redirect()->route('word.create')->with('message','単語を追加しました。');
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function show(Word $word)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function edit(Word $word)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Word $word)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function destroy(Word $word)
    {
        //
    }
}
