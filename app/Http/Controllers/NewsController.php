<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;
use Redirect;
class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('updated_at', 'DESC')->take(100)->get();

        $data = [
            'posts' => $posts,
        ];

        return view('AdminLTE.news.index', $data);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        $data = [
            'post' => $post,
        ];

        return view('AdminLTE.news.show', $data);
    }

    public function orm($action, $id)
    {
        switch ($action) {

            case 'create':
                $faker = Faker::create('zh_TW');
                $post = Post::create([
                    'title' => '[create]' . $faker->realText(rand(10, 20)),
                    'content' => $faker->realText(rand(120, 200)),
                    'author' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);

                break;
            case 'update':
                $post = Post::find($id);
                $post->update([
                    'title' => '[update]' . $post->title
                ]);

                $post->save();
                break;
            case 'delete':
                $post = Post::find($id);
                $post->delete();
                //Post::destroy([$id]);
                break;
            default:
                $res = 'Error';
                break;
        }
        $res = empty($res) ? isset($post) ? 'Success' : "Failed" : $res;
        return Redirect::back();

    }
}
