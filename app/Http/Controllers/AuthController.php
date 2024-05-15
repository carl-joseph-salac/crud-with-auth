<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('Auth.login');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('showHome'));
        }
        return back()->withInput($request->except('password'))->with(['error' => 'Wrong credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('showLogin'));
    }

    public function showRegister()
    {
        return view('Auth.register');
    }

    public function registerUser(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        // /* QUERY BUILDER */
        // $credentials = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'email_verified_at' => now(),
        //     'remember_token' => Str::random(10),
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ];
        // DB::table('users')->insert($credentials);

        // /* ELOQUEN ORM without using Type-Hint */
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'email_verified_at' => now(),
        //     'remember_token' => Str::random(10),
        // ]);

        // /* ELOQUENT ORM using Type-Hint */
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = Hash::make($request->password);
        // $user->email_verified_at = now();
        // $user->remember_token = Str::random(10);
        // $user->save();

        /* ELOQUENT ORM using Type-Hint SIMPLIFIED VERSION */
        $user->fill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ])->save();

        return redirect()->route('showLogin')->with(['success' => 'Registered Successfully']);
    }
}


/* In your code, you've shown four different ways to insert data into a database in Laravel. Each method has its own use cases and benefits:

1. **Query Builder**: This is a more manual way of inserting data into the database. It gives you full control over the SQL queries that are executed. This is useful when you need to perform complex queries that are not supported by Eloquent. However, it doesn't provide the convenience and expressiveness of Eloquent, and it can be more prone to errors if not used carefully.

2. **Eloquent ORM without Type-Hint**: This is a very common and convenient way to insert data. The `create` method provided by Eloquent allows you to easily insert a new record into the database. This method is great for simple inserts where you don't need to do anything with the model instance before saving it.

3. **Eloquent ORM using Type-Hint**: This method is useful when you need to work with the model instance before saving it. For example, you might need to call a method on the model, or set some additional properties that were not included in the original input array.

4. **Eloquent ORM using Type-Hint (Simplified Version)**: This is a more concise version of the previous method. It's just as powerful, but it allows you to set the attributes and save the model in one line. This is great for keeping your code DRY (Don't Repeat Yourself) and readable.

In general, the best method to use depends on your specific needs. If you're just inserting a new record and don't need to do anything else with the model, the `create` method is a great choice. If you need to work with the model before saving it, using a model instance with `fill` and `save` is a good option. And if you need to perform complex queries, the query builder might be the best tool for the job. Let me know if you have any more questions! 😊 */
