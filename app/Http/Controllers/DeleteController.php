<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($id)
    {
        $users = new Post();
        $result=$users->find($id);
        $result->delete();

        return redirect('/post')->with('success' ,'User Remove');
    }
}
