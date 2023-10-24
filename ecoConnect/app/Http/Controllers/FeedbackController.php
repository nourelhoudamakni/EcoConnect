<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function storeFeedback(Request $request,$idBlog)
    {

        $this->validate($request, [

            'description' => 'required',

        ],[

            'description.required' => 'Description est obligatoire',
        ]);

        $newFeedback = new FeedBack([
            'description' => $request->input('description'),
            'note' => $request->input('rating'),
        ]);

        $newFeedback->user_id = auth()->id();
        $newFeedback->education_id =$idBlog;
        $newFeedback->save();

        return redirect()->route('details.blog', $idBlog);


    }

    public function getFeedback($id)
{
    $feedback = FeedBack::find($id);

    if (!$feedback) {
        return response()->json(['error' => 'Feedback not found'], 404);
    }

    return response()->json($feedback);
}

public function update(Request $request, $id)
{
    $feedback = Feedback::findOrFail($id);
    $feedback->description = $request->input('description');
    $feedback->save();

    return redirect()->back()->with('success', 'Feedback updated successfully');
}


public function destroyFeedback($id)
{
    $feedBack=FeedBack::find($id);
    $feedBack->delete();
    return redirect()->back();
}
}
