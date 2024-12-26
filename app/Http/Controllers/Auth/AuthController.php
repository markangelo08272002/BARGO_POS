<?php
  namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    /**
     * Show login form.
     */
    public function index()
    {
        return view('auth.login');
    }  

    /**
     * Show registration form.
     */
    public function registration()
    {
        return view('auth.registration');
    }

    /**
     * Handle login request.
     */
    public function postLogin(Request $request)
    {
        // Validate input
        $request->validate([
            'id_number' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('id_number', 'password');
        $remember = $request->has('remember'); // Check the "Remember Me" checkbox

        // Attempt login with credentials and "remember" parameter
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('dashboard')->withSuccess('You have successfully logged in.');
        }

        // Redirect back with an error if login fails
        return redirect()->route('login')->withErrors('Invalid ID Number or Password.');
    }

    /**
     * Handle registration request.
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'id_number' => 'required|string|unique:users|regex:/^\d{7}-\d{1}$/',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $data = $request->all();
        $user = $this->create($data);

        // Log the user in after registration
        Auth::login($user);

        return redirect("dashboard")->withSuccess('Great! You have successfully registered.');
    }

    /**
     * Create a new user instance.
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'id_number' => $data['id_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Show the dashboard if logged in.
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Oops! You do not have access.');
    }

    /**
     * Logout the user.
     */
    public function logout()
    {
        Session::flush(); // Clear session
        Auth::logout();   // Log out the user

        return redirect('login'); // Redirect to login page
    }

    /**
     * Show the list of users.
     */
    public function showUsers()
    {
        $users = User::all();
        return view('users', compact('users'));
    }

    /**
     * Update a user.
     */
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->id_number = $request->input('id_number');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('users')->with('success', 'User updated successfully.');
    }

    /**
     * Delete a user.
     */
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users')->with('success', 'User deleted successfully.');
    }
}
