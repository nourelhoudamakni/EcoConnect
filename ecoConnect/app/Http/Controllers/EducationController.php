<?php

namespace App\Http\Controllers;
use App\Models\Education;
use Conner\Tagging\Model\Tag;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class EducationController extends Controller
{

    public function  showAllBlogsForAllUsers()
    {

        $blogs =Education::where('validate', true)->get();
        $blogsrandom = Education::where('validate', true)->inRandomOrder()->limit(3)->get();
        $bestBlogs = Education::whereIn('moyenne', [4, 5])
        ->where('validate', true)
        ->get();
        return view('frontOffice.Apprentissage.AllBlogs',  ['blogs' => $blogs,'blogsrandom'=> $blogsrandom,'bestBlogs'=> $bestBlogs]);

    }

    public function  showMyBlogs()
    {
        $userId = auth()->id();
        $blogs = Education::where('user_id', $userId)->get();
        return view('frontOffice.Apprentissage.MyBlogs',  ['Myblogs' => $blogs]);

    }
    public function createBlog()

    {
        $tags = Education::all();
        return view('frontOffice.Apprentissage.AddBlog',compact('tags'));
    }

    public function storeBlog(Request $request)
    {

        $this->validate($request, [
            'titre' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'image' => 'required',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categorie' => 'required',
        ],[

            'titre.required' => 'Titre obligatoire',

            'description.required' => 'Description est obligatoire',

            'tags.required' => 'Les mots clés sont obligatoires',

            'image.required' => 'Image est obligatoire',

            'categorie.required' => 'Categorie est obligatoire'

        ]);

        $description = $request->description;
        $dom = new DOMDocument();
        $dom->loadHTML($description,9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/upload/" . time(). $key.'.png';
            file_put_contents(public_path().$image_name,$data);

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
        }
        $description = $dom->saveHTML();

        if ($image = $request->file('image')) {

            $destinationPath = 'upload/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

        }

        $tags = explode(",", $request->tags);

        $blog = Education::create([
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'tags' => $request->input('tags'),
            'categorie' => $request->input('categorie'),
            'image' => $profileImage,

        ]);

        $blog->user_id = auth()->id();
        $blog->save();
        $blog->tag($tags);

        return redirect()->route('AllBlogs')->with('success', 'Votre article est ajouté dans votre liste, il sera afficher pour
        les utilisateurs que si un administrateur verifie et valide le contenu.');

    }
    public function showBlog($id)
    {
        $blog = Education::find($id);
        $feedBacks=$blog->feedBacks;
        $latestblogs = Education::orderBy('created_at', 'asc')->take(5)->get();
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
        return view('frontOffice.Apprentissage.BlogDetails',['blog' => $blog,'feedbacks'=> $feedBacks,'latestblogs'=> $latestblogs]);

    }


    public function editForm($id)
    {

        $education = Education::find($id);
        $tags = $education->tags->pluck('name')->toArray();
        return view('frontOffice.Apprentissage.EditBlog',['blog' => $education,'tags'=>$tags]);

    }
    public function updateBlog(Request $request, $id)
    {

        $this->validate($request, [
            'titre' => 'required',
            'description' => 'required',
            'tags' => 'required',
            // 'image' => 'required',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categorie' => 'required',
        ],[

            'titre.required' => 'Titre obligatoire',

            'description.required' => 'Description est obligatoire',

            'tags.required' => 'Les mots clés sont obligatoires',

            // 'image.required' => 'Image est obligatoire',

            'categorie.required' => 'Categorie est obligatoire'

        ]);
        $input = $request->all();
        $description = $request->description;
        $dom = new DOMDocument();
        $dom->loadHTML($description,9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',',explode(';',$img->getAttribute('src'))[1])[1]);
            $image_name = "/upload/" . time(). $key.'.png';
            file_put_contents(public_path().$image_name,$data);

            $img->removeAttribute('src');
            $img->setAttribute('src',$image_name);
        }
        $description = $dom->saveHTML();


        if ($image = $request->file('image')) {

            $destinationPath = 'upload/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }else{

            unset($input['image']);

        }
        $education = Education::find($id);
        $education->untag(); // Remove existing tags
        $education->tag($request->input('tags')); // Add new tags

        $education->update($input);

        return redirect()->route('AllBlogs')->with('success', 'Modificaton avec succés');

    }

    public function destroyBlog($id)
    {
        $education=Education::find($id);
        $education->delete();
        return redirect()->route('AllBlogs')->with('success', 'Suppression avec succés');
    }



public function searchByCategorie(Request $request)
    {
        $categorie = $request->input('categorie'); // Get the "categorie" parameter from the request

        // Perform a database search based on the "categorie" attribute
        $results = Education::where('categorie', $categorie)->where('validate', true)
        ->get();
        $blogsrandom = Education::where('validate', true)->inRandomOrder()->limit(3)->get();
        $bestBlogs = Education::whereIn('moyenne', [4, 5])
        ->where('validate', true)
        ->get();

        // You can return the results as a JSON response or in any other format you prefer
        return view('frontOffice.Apprentissage.AllBlogs', ['blogs' => $results,'blogsrandom'=> $blogsrandom,'bestBlogs'=> $bestBlogs]);
    }
}
