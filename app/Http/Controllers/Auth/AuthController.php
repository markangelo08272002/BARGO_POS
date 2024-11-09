<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
  
class AuthController extends Controller
{
    /**
     * Show login form.
     *
     * @return View
     */
    public function index(): View
    {
        return view('auth.login');
    }  
      
    /**
     * Show registration form.
     *
     * @return View
     */
    public function registration(): View
    {
        return view('auth.registration');
    }
      
    /**
     * Handle login request.
     *
     * @return RedirectResponse
     */
    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'id_number' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('id_number', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have successfully logged in');
        }

        return redirect("login")->withError('Oops! You have entered invalid credentials');
    }

    /**
     * Handle registration request.
     *
     * @return RedirectResponse
     */
    public function postRegistration(Request $request)
    {  
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'id_number' => 'required|string|unique:users|regex:/^\d{7}-\d{1}$/',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Prepare data for user creation
        $data = $request->all();
        
        // Create user and log them in
        $user = $this->create($data);
        Auth::login($user);

        return redirect("dashboard")->withSuccess('Great! You have successfully registered');
    }
    
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
     * Show the dashboard.
     *
     * @return View|RedirectResponse
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Logout the user.
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
            Session::flush();  // Optionally clear the session
            Auth::logout();    // Log the user out

            return Redirect('login');  // Redirect to login page after logout
    }
   public function showUsers()
{
    $users = User::all();
    return view('users', compact('users')); // Make sure this matches the file path in resources/views/auth/
}

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->id_number = $request->input('id_number');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('users')->with('success', 'User updated successfully');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users')->with('success', 'User deleted successfully');
    }

   

}
