<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
		/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	    factory(App\User::class, 50)->create()->each(function ($user) {
	        $user->posts()->save(factory(App\Post::class)->make());
	    });
	}

    public function index()
    {
    	$data_user = \App\User::all();
    	return view('user.index', ['data_user' => $data_user]);
    }

    public function create(Request $request)
    {
		\App\User::create($request->all());
		return redirect('/user');
    }

    public function edit($id)
	{
		$user = \App\User::find($id);
		return view('user/edit', ['user' => $user]);
	}

	public function update(Request $request, $id)
	{
		$user = \App\User::find($id);
		$user->update($request->all());
		return redirect('/user')->with('sukses', 'Data Berhasil di Update');
	}

	public function delete($id)
	{
		$user = \App\User::find($id);
		$user->delete();
		return redirect('/user')->with('sukses', 'Data Berhasil di Delete');
	}
}
