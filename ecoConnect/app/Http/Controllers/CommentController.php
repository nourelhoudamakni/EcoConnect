<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    //

    public function storeComment(Request $request, $idPost) {
        $request->validate([
            'content' => 'required',
        ]);
    
        $newComment = new Comment([
            'content' => $request->input('content'),

        ]);
   /////affecter le user connecte 
        $newComment->user_id = auth()->id();
    //////affecter lid du post 
        $newComment->posts_id =$idPost;
        $newComment->save();
  
        return redirect()->route('single-post',$idPost)
            ->with('success', 'Votre commentaire a été ajouté.');
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
       
        if ($comment) {
            $idPost = $comment->posts_id;
            $comment->delete();
            return redirect()->route('single-post', $idPost)
                ->with('success', 'Votre commentaire a été supprimé.');
        }
    }
    
     //supprimer un commentaire dash 
     public function destroyComment($id)
     {
         $comment = Comment::find($id);
        
         if ($comment) {
             $idPost = $comment->posts_id;
             $comment->delete();
             return redirect()->route('detailsPost', $idPost)
                 ->with('success', 'Votre commentaire a été supprimé.');
         }
     }





   //update commentaire 
   public function update(Request $request, $id)
   {
        // Valider les données du formulaire
         $request->validate([
        'content' => 'required|string',
             ]);

        // Récupérer le commentaire à mettre à jour
         $comment = Comment::find($id);
        $idPost = $comment->posts_id;
         if ($comment) {
        // Mettre à jour le contenu du commentaire
        $comment->content = $request->input('content'); 
        $comment->save();

        return redirect()->route('single-post', $idPost)
            ->with('success', 'Le commentaire a été mis à jour avec succès.');
            $comment = Comment::find($id);
            $comment->update($data);
           
              }
 
     }

     }
