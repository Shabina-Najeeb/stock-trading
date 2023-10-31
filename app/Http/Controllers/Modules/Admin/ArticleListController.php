<?php
namespace App\Http\Controllers\Modules\Admin;
use App\Http\Controllers\Controller;
Use App\Models\Category;
Use App\Models\Article;
use DB;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  dd('hi');
        $categories = Category::all();
        return view("layouts.modules.admin.articlelist", compact('categories'));
    }
    
    public  function addArticle(Request $request)
    {
        //  dd('hi');
        if ($request->articleHiddenId) {
            $rules = array(
                'article_name' => 'required',
               
               
               
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $article = Article::find($request->articleHiddenId);
            $article->article_classification = $request->article_classification;
            $article->article_name = $request->article_name;
            $article->whetherto_display = $request->whetherto_display;
            $article->keyword= $request->keyword;
            $article->content = $request->content;
         
            $data = $article->save();
            $data = Article::find($article->id);
           

               
            

            return response()->json(['success' => 'Data updated successfully.', 'article_FormData' => $data]);

          }
        else
        {
           dd('hi');
            $rules = array(
               
               
            );
            $error = Validator::make($request->all(), $rules);
            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }
           
            $article= new Article();
            $article->article_classification = $request->article_classification;
            $article->article_name = $request->article_name;
            $article->whetherto_display = $request->whetherto_display;
            $article->keyword= $request->keyword;
            $article->content = $request->content;
           
          
            
           
           
            $data = $article->save();
            $data = Article::find($article->id);
           
            //  dd( $userdetails->name);
              
            
        

            return response()->json(['success' => 'Data Added successfully.', 'article_FormData' => $data]);
          }
     }
     public function articleTable()
     {

      
         $article = Article::all();
 
         return response()->json([
             'article' => $article,
         ]);
     }
  
  public function editArticle($id)
  {
      $data = Article::find($id);

      return response()->json(['data' => $data]);

  }

  public function deleteArticle($id)
  {

      $article = Article::find($id);

      $article ->delete($id);

      return response()->json([

          'success' => 'Data deleted successfully!',

          'article ' => $article ,

      ]);

  }
 
}   
 
