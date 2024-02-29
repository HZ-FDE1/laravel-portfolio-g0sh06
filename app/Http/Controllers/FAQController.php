<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Post;
use Illuminate\Http\Request;

class FAQController extends Controller
{

    public function index()
    {
        return view('faq.index', [
            'faqs' => Faq::all()
        ]);
    }

    public function create()
    {
        return view('faq.create');
    }

    public function store()
    {
//       $validated = $request->validate([
//        'question' => 'required',
//           'answer' => 'required',
//           'link' => 'required',
//       ]);
//
//       $faq = Faq::create($validated);
        $faq = new Faq();
        $faq->question = request()['question'];
        $faq->answer = request()['answer'];
        $faq->link = request()['link'];
       $faq->save();
       return redirect()->route('faq.index')->with('success','FAQ created successfully.');
    }

    public function show(Faq $faq) {
        return view('faq.show', [
            'faq' => $faq
        ]);
    }

    public function edit(Faq $faq) {
        return view('faq.edit', [
            'faq' => $faq
        ]);
    }

    public function update(Request $request, Faq $faq) {
        $faq->question = $request['question'];
        $faq->answer = $request['answer'];
        $faq->link = $request['link'];
        $faq->save();
        return redirect()->route('faq.index');
    }

    public function delete(Faq $faq) {
        return view('faq.delete', [
            'faq' => $faq
        ]);
    }

    public function destroy(Faq $faq) {
        $faq->delete();
        return redirect()->route('faq.index');
    }
}
