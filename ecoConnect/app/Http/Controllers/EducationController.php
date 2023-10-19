<?php

namespace App\Http\Controllers;
use App\Models\Education;
use Conner\Tagging\Model\Tag;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class EducationController extends Controller
{
    public function formContenuEducative()

    {
        $tags = Education::all();
        return view('frontOffice.Apprentissage.AddContenuEducative',compact('tags'));
    }

    public function store(Request $request)
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

        $input = $request->all();

        if ($image = $request->file('image')) {

            $destinationPath = 'upload/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }

        $tags = explode(",", $request->tags);

        $post = Education::create($input);

        $post->tag($tags);

        return redirect()->route('contenu.index')->with('success', 'Ajout avec succés');


    }
    public function showContenu($id)
    {
        $education = Education::find($id);
        return view('frontOffice.Apprentissage.contenuDetails',['education' => $education]);

    }
    public function  showAllContenu()
    {
        $educations = Education::all();
        return view('frontOffice.Apprentissage.mesContenuesEducatives',  ['educations' => $educations]);

    }

    public function editContenu($id)
    {

        $education = Education::find($id);
        $tags = $education->tags->pluck('name')->toArray();
        return view('frontOffice.Apprentissage.EditContenuEducative',['education' => $education,'tags'=>$tags]);

    }
    public function updateContenu(Request $request, $id)
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

        return redirect()->route('contenu.index')->with('success', 'Modificaton avec succés');

    }

    public function destroyContenu($id)
    {
        $education=Education::find($id);
        $education->delete();
        return redirect()->route('contenu.index')->with('success', 'Suppression avec succés');
    }
}
