<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\FeedBack;
use Illuminate\Http\Request;

class AdminBlogFeedbackController extends Controller
{
    public function  showAllBlogsAdmin()
    {

        $ValidatedBlogs = Education::where('validate', true)->get();
        $nonValidatedBlogs = Education::where('validate', false)->get();

        return view('backOffice/BlogFeedbackAdmin/AllBlogsAdmin',  ['ValidatedBlogs' => $ValidatedBlogs,'nonValidatedBlogs'=> $nonValidatedBlogs]);

    }
    public function  validateBlog($idBlog)

    {

        $blog = Education::find($idBlog);
        $blog->validate=true;
        $blog->save();
        return redirect()->back();
    }

    public function  nonValidateBlog($idBlog)

    {

        $blog = Education::find($idBlog);
        $blog->validate=false;
        $blog->save();
        return redirect()->back();
    }
    public function destroyBlogbyAdmin($id)
    {
        $education=Education::find($id);
        $education->delete();
        return redirect()->back();
    }



    public function detailsArticleAdmin($id)
    {
        $blog = Education::find($id);
        $feedBacks=$blog->feedBacks;
        // $latestblogs = Education::orderBy('created_at', 'asc')->take(5)->get();
        $notes = [];
        foreach ($feedBacks as $feedBack) {
            $notes[] = $feedBack->note;
        }
        if (count($notes) > 0) {
            $moyenne = array_sum($notes) / count($notes); // Calcul de la moyenne
        } else {
            $moyenne = 0; // Si la liste $notes est vide, la moyenne est de zéro
        }
        $blog->moyenne = round($moyenne);
        $blog->save();
        return view('backOffice/BlogFeedbackAdmin/DetailsArticleAdmin',['blog' => $blog,'feedbacks'=> $feedBacks]);

    }
    public function destroyFeedbackadmin($id)
    {
        $feedBack=FeedBack::find($id);
        $feedBack->delete();
        return redirect()->back();

    }

    public function getFeedbackAdmin($id)
    {
        $feedback = FeedBack::find($id);
        if (!$feedback) {
            return response()->json(['error' => 'Feedback not found'], 404);
        }
        return response()->json($feedback);

    }
}
