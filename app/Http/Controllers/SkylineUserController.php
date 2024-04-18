<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkylineUserStoreRequest;
use App\Http\Requests\StoreSkylineUserRequest;
use App\Http\Requests\UpdateSkylineUserRequest;
use App\Jobs\SendEmailSupportTeamSkylineUserJob;
use App\Mail\SendEmailSupportTeamSkylineUser;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use Exception;
use Illuminate\Contracts\Database\Eloquent\Builder;

class SkylineUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     */
    public function index(Request $request)
    {
        $user = User::query();
        $allUsers = $user->getUsers();
        if ($request->ajax()) {

            return DataTables::eloquent($allUsers)
                ->addIndexColumn()
                ->filter(function ($query) use ($request) {

                    //first_name
                    if ($request->has('first_name')) {
                        $first_name = $request->first_name;
                        $query->where('first_name', 'LIKE', "%$first_name%");
                    }
                    //last_name
                    if ($request->has('last_name')) {
                        $last_name = $request->last_name;
                        $query->where('last_name', 'LIKE', "%$last_name%");
                    }

                    // email
                    if ($request->has('email')) {
                        $email = $request->email;
                        $query->where('email', 'LIKE', "%$email%");
                    }

                    // status
                    if ($request->has('status')) {
                        $status = $request->status;
                        $query->where('status', 'LIKE', "%$status%");
                    }

                    /*// date_of_birth
                    if ($request->has('date_of_birth')) {
                        $date_of_birth = $request->status;
                        $query->WhereDate('date_of_birth', 'LIKE', '%' . $date_of_birth . '%');
                    }

                    // gender
                    if ($request->has('gender')) {
                        $gender = $request->gender;
                        $query->WhereDate('gender', 'LIKE', '%' . $gender . '%');
                    }*/

                    //  Search created date
                    if ($request->has('start_date') && $request->has('end_date')) {
                        $query->when(
                            $request->start_date && $request->end_date,
                            function (Builder $builder) use ($request) {
                                $builder->whereBetween(
                                    DB::raw('DATE(created_at)'),
                                    [
                                        $request->start_date,
                                        $request->end_date
                                    ]
                                );
                            }
                        );
                    }

                    //search box
                    if ($request->has('search') && !is_null($request->get('search')['value'])) {
                        $search = $request->get('search')['value'];
                        $query->Where('first_name', 'LIKE', '%' . $search . '%')
                            ->orWhere('last_name', 'LIKE', '%' . $search . '%')
                            ->orWhere('email', 'LIKE', '%' . $search . '%')
                            ->orWhere('status', 'LIKE', '%' . $search . '%')
                            // ->orWhere('gender', 'LIKE', '%' . $search . '%')
                            // ->orWhereDate('date_of_birth', 'LIKE', '%' . $search . '%')
                            ->orWhereDate('created_at', 'LIKE', '%' . $search . '%');
                    }
                })
                ->make(true);
        }
        return  view('admin.skyline_users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('admin.skyline_users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request\StoreSkylineUserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSkylineUserRequest $request)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();

        try {

            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                /*'gender' => $request->gender,
                'date_of_birth' => $request->date_of_birth,*/
                'password' => bcrypt('password123'),
                'notes' => $request->notes,
                'email' => $request->email,
                'email_verified_at' => $request->is_2fa_status === 'on' ? now() : '',
                'product' => $request->product,
                'status' => $request->status,
                'is_2fa_status' => $request->is_2fa_status === 'on' ? 1 : 0,
            ]);

            if (!$user) {
                return back()->with('error', 'Oops! Your skyline user is not created');
            }
            // Email Details
            $details = [
                'subject' => 'New Skyline user is created -'.$user->full_name ,
                'user' => $user,
                'email' => config('mail.reply_to.address'),
            ];

            //Send email for support team
            dispatch(new SendEmailSupportTeamSkylineUserJob($details));
            return redirect()->route('skyline-users.index')->with("success", 'Your skyline user is created successfully!');
        } catch (Exception $e) {
            return back()->with("error", "Oops!, Something went wrong. Please try again...");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = base64_decode($id);
        $user = User::findOrFail($id);
        return  view('admin.skyline_users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $id
     */
    public function edit(string $id)
    {
        $id = base64_decode($id);
        $user = User::findOrFail($id);
        return  view('admin.skyline_users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request\UpdateSkylineUserRequest $request
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSkylineUserRequest $request, string $id)
    {
        // Retrieve the validated input data...
        $validated = $request->validated();
        $id = base64_decode($id);
        $isUser = User::findOrFail($id);
        try {
            /*if ($request->has('password')) {
                $password = bcrypt($request->password);
            } else {
                $password = $isUser->password;
            }*/

            $user = User::where('id', $id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                /* 'gender' => $request->gender,
                'address' => $request->address,
                'date_of_birth' => $request->date_of_birth,
                'password' => $password,*/
                'notes' => $request->notes,
                'email' => $request->email,
                'email_verified_at' => $request->email_verified_at === 'on' ? now() : '',
                'product' => $request->product,
                'status' => $request->status,
                'is_2fa_status' => $request->is_2fa_status === 'on' ? 1 : 0,
            ]);

            if (!$user) {
                return back()->with('error', 'Oops! Your skyline user is not updated');
            }
            // Email Details
            $isUser = User::findOrFail($id);
            $details = [
                'subject' => 'Skyline user is updated -'.$isUser->full_name ,
                'user' => $isUser,
                'email' => config('mail.reply_to.address'),
            ];

            //Send email for support team
            dispatch(new SendEmailSupportTeamSkylineUserJob($details));
            return redirect()->route('skyline-users.index')->with("success", 'Your skyline user is updated successfully!');
        } catch (Exception $e) {
            return back()->with("error", "Oops!, Something went wrong. Please try again...");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $id = base64_decode($id);
            $user = User::where('id', $id)->delete();
            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Oops! Your skyline user is not deleted'
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Your skyline user is deleted successfully!'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Oops! Some unexpected error occured...'
            ]);
        }
    }

    /**
     * Force remove the specified resource from storage.
     *
     * @param int $id
     */
    public function forceDelete($id)
    {
        try {
            $id = base64_decode($id);
            $user = User::where('id', $id)->forceDelete();
            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Oops! Your skyline user has not been permanently deleted'
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Your skyline user has been permanently deleted successfully!'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Oops! Some unexpected error occured...'
            ]);
        }
    }


    /**
     * Force remove the bulck resource from storage.
     *
     * @param Request $request
     */
    public function forceDeleteAll(Request $request)
    {
        try {
            $ids = $request->ids;
            $user = User::whereIn('id', $ids)->forceDelete();
            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Oops! Your skyline user has not been permanently deleted'
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Your skyline user has been permanently  deleted successfully!'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Oops! Some unexpected error occured...'
            ]);
        }
    }

    /**
     * Remove force the bulck resource from storage.
     *
     * @param Request $request
     */
    public function deleteAll(Request $request)
    {
        try {
            $ids = $request->ids;
            $user = User::whereIn('id', $ids)->delete();
            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Oops! Your skyline user is not deleted'
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Your skyline user is deleted successfully!'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Oops! Some unexpected error occured...'
            ]);
        }
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param int $id
     */
    public function restore($id)
    {
        try {
            $id = base64_decode($id);
            $user = User::where('id', $id)->restore();
            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Oops! Your skyline user is not restored'
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Your skyline user is restored successfully!'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Oops! Some unexpected error occured...'
            ]);
        }
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param Request $request
     */
    public function restoreAll(Request $request)
    {
        try {
            $ids = $request->ids;
            $user = User::whereIn('id', $ids)->restore();
            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Oops! Your skyline user is not restored'
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Your skyline user is restored successfully!'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Oops! Some unexpected error occured...'
            ]);
        }
    }
}
