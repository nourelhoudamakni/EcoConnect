<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PostController extends Controller
{

        /////cette méthode va recuperer le user connecte avec les post de ce user
        // Récupérez les publications de l'utilisateur avec l'ID spécifié
    public function profile() {
        $userId = auth()->id();
        $listPosts = Posts::where('user_id', $userId)->latest()->get();
        return view('frontOffice/profileUser', ['listPosts' => $listPosts]);
    }

    public function Accueil() {
       ///cette methode affiche  l'accueil et retourne toutes les posts de tous les utilisateurs
         $posts = Posts::take(5)->latest()->get();

       return view('dashboard', compact('posts'));
         
         
    }
    
    // //dashAdmin List Posts
    // public function affiche() {
    //     ///cette methode affiche dashAdmin  retourne toutes les posts de tous les utilisateurs au niveau  dashAdmin 
    //       $posts = Posts::latest()->get();
    //        return view('backOffice.Post.listPosts', compact('posts'));
          
    //  }
   //dashAdmin List Posts
//    public function affiche(Request $request) {
//     $query = $request->input('q');

//     if ($query) {
//         $posts = Posts::where('titre', 'like', '%' . $query . '%')
//             ->orWhere('description', 'like', '%' . $query . '%')
//             ->get();
//     } else {
//         $posts = Posts::all();
//     }

//     return view('backOffice.Post.listPosts', compact('posts'));
      
//  }

 public function affiche(Request $request) {
    $query = $request->input('q');

    // Utilisez la méthode paginate() pour paginer les résultats
    // Spécifiez le nombre d'éléments à afficher par page (par exemple, 10)
    $posts = $query
        ? Posts::where('titre', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->paginate(5)
        : Posts::paginate(5);

    return view('backOffice.Post.listPosts', compact('posts'));
}






    
    //store
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string|max:255',
            'image' => 'required',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'titre.required' => 'Le Titre est obligatoire',
            'description.required' => 'La description est obligatoire',
            'image.required' => 'Image est obligatoire',
        ]);
        
        

       

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $storagePath = 'images/';
            $imageName = time() . rand(1, 99) . '.' . $image->getClientOriginalExtension();
            $image->move($storagePath, $imageName);
            
        }

        $newPost = new Posts([
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'image' => $imageName, 

        ]);
        $newPost->user_id = auth()->id();
        $newPost->save();

      

        return redirect()->route('dashboard')->with('success', 'Ajout avec succés');

    }

    public function edit($id)
    {

        $post = Posts::find($id);
        return view('frontOffice.Post.edit',['post' => $post]);

    }



   //store
   public function update(Request $request,$id)
   {
       $request->validate([
           'titre' => 'required|string',
           'description' => 'required|string|max:255',
        //    'image' => 'required',
           'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ], [
           'titre.required' => 'Le Titre est obligatoire',
           'description.required' => 'La description est obligatoire',
        //    'image.required' => 'Image est obligatoire',
       ]);

       $data = $request->all(); // Récupérez toutes les données du formulaire


    if ($request->hasFile('image')) {
        $image = $request->file('image');

        // Define the storage path (you can customize this as needed)
        $storagePath = 'images/';

        // Generate a unique filename for the uploaded image
        $imageName = time() . rand(1, 99) . '.' . $image->getClientOriginalExtension();

        // Move the uploaded image to the specified storage path with the unique filename
        $image->move($storagePath, $imageName);

        // Save the image's filename (or full path, depending on your needs) in your data array
        $data['image'] = $imageName;
        } else {
        // Handle the case where no file was uploaded
        }
       $Post = Posts::find($id);
       $Post->update($data);

       return redirect()->route('user.profile')->with('success', 'Modification avec succés');
    }
    public function destroy($id)
    {
        $post=Posts::find($id);
        $post->delete();
        return redirect()->route('user.profile')->with('success', 'Suppression avec succés');
    }

    //dashAdmin Delete
    public function destroyPost($id)
    {
        $post = Posts::find($id);
        $post->delete();
        return redirect()->route('Posts.affiche')->with('success', 'Suppression avec succès');
    }
    

         //dashAdmin detailsPost

    public function detailsPost($posts_id) {
      
        $post = Posts::find($posts_id);
        $comments=$post->comments;
            
        return view('backOffice.Post.detailsPost', ['post' => $post,'comments'=>$comments]);
    }






    public function singlePost($posts_id) {
      
        $post = Posts::find($posts_id);
        $comments=$post->comments;
      
        // Vérifiez si le post existe
        if (!$post) {
            // Affichez un message d'erreur ou redirigez vers une page d'erreur
            return view('dashboard', ['message' => 'Le post que vous recherchez n\'existe pas.']);
        }
    
        // Affichez la vue du détail du post
        return view('frontOffice.Post.SinglePost', ['post' => $post,'comments'=>$comments]);
    }



public function like($idPost) {
    $newlikes = new Like();
   
    $newlikes->user_id = auth()->id();

    $newlikes->posts_id =$idPost;
    $newlikes->save();
    $post = Posts::find($idPost);
    $post->likes += 1;
    $post->save();
            return redirect()->route('dashboard')->with('success', 'like avec succés');
}

public function dislike($idPost) {
    $newlikes = new Like();
   
/////affecter le user connecte 
    $newlikes->user_id = auth()->id();
//////affecter lid du post 
    $newlikes->posts_id =$idPost;
    $newlikes->save();
    $post = Posts::find($idPost);
    $post->likes -= 1;
    $post->save();
            return redirect()->route('dashboard')->with('success', 'like avec succés');
}



   

}
