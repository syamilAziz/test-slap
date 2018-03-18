<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Roadtanker;
use Excel;


class RoadtankerController extends Controller
{



   public function store_roadtanker(Request $request)
   {
    $this->validate($request, [
            
        'plate' => 'required',
        'capacity' => 'required',
        'terminal' => 'required',
        'hauler_id' => 'required',
     
    ]);

    $roadtanker = new Roadtanker;

    $roadtanker->plate = $request->input('plate');
    $roadtanker->capacity = $request->input('capacity');
    $roadtanker->terminal = $request->input('terminal');
    $roadtanker->hauler_id = $request->input('hauler_id');
    
    $roadtanker->save();

    return redirect()->back()->with('success', 'Road Tanker Successfully Created !!');
    }

    public function remove_roadtanker(Request $request)
    {
        $roadtanker = Roadtanker::find($request->input('id'));
        $roadtanker->delete();

        \Session::flash('success-remove', 'Road Tanker Successfully Removed !!');

    }

/*    public function store(Request $request)
    {
        $this->validate($request, [
               'title' => 'required',
               'body'  => 'required',
               'cover_image' => 'image|nullable|max:1999'
        ]);

        //return 123;

        //Handle Upload File
        if($request->hasFile('cover_image')){
            //Get file name with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //GEt just the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
            

        //Create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*    public function show($id)
    {
        //return Post::find($id);
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*    public function edit($id)
    {
        $post = Post::find($id);

        // Check for correct user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        
        //Handle Upload File
         if($request->hasFile('cover_image')){
            //Get file name with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //GEt just the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } 
        
        //Create Post
         $post = Post::find($id);
         $post->title = $request->input('title');
         $post->body = $request->input('body');
         if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
         $post->save();
 
         return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*    public function destroy($id)
    {
        $post = Post::find($id);

        // Check for correct user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }

        if($post->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        
        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }

   /*=======================================Upload file===========================================*/
    
    public function RoadtankerImport(Request $request){

        if($request->hasFile('roadtankers')){

            $path = $request->file('roadtankers')->getRealPath();
            $data = \Excel::load($path)->get();

            if($data->count()){

                foreach($data as $key => $value){

                    $rt_list[] = [
                        
                        'plate' => $value->plate,
                        'capacity' => $value->capacity,
                        'terminal' => $value->terminal,
                        'hauler_id' => $value->hauler_id,
                        'created_at' => date("Y-m-d h:i:s"),
                        'updated_at' => date("Y-m-d h:i:s")

                    ];
                }    

                if(!empty($rt_list)){

                    Roadtanker::insert($rt_list);
                    \Session::flash('success' , 'File imported successfully !!');
                }
                elseif(empty($rt_list)){                        
                    Session::flash('error', 'Error inserting the data..');
                    return back();
                }
            }
        }else {
            \Session::flash('warning', 'There is no file to import !!');
        }
        return Redirect::back();
    }

    public function RoadtankerExport($type){

        //$rt = Roadtanker::select('plate', 'capacity', 'terminal')->get()->toArray();
        $rt = Roadtanker::join('haulers', 'roadtankers.hauler_id', '=', 'haulers.id')->select('plate', 'capacity', 'terminal', 'haulers.name as Hauler')->get()->toArray();
        
        return \Excel::create('rt-list' , function($excel) use ($rt) {

            $excel->sheet('Roadtanker-List', function($sheet) use ($rt){

                $sheet->fromArray($rt);

            });

        })->download($type);
    }


}
