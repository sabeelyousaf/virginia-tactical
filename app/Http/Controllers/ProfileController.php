<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Cart;
use App\Models\CourseSubscribe;
use App\Models\Favourite;
use App\Models\HallOfFame;
use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Order;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function AllUsers(){
        try {
            $data=User::where('role','user')->get();
        return view('backend_app.all_users',compact('data'));
        } catch (\Throwable $th) {
          return back()->with('error',$th->getMessage());
        }

    }
    public function UserDelete($id){
        try {
            $user = User::find($id);
            Order::where('user_id',$id)->delete();
            CourseSubscribe::where('user_id',$id)->delete();
            Review::where('user_id',$id)->delete();
            HallOfFame::where("user_id",$id)->delete();
            Favourite::where('user_id',$id)->delete();
            Cart::where('user_id',$id)->delete();
            User::destroy($id);
            return back()->with('success','User successfully deleted');

        } catch (\Throwable $th) {
            return back()->with('error',$th->getMessage());

        }

    }
}
