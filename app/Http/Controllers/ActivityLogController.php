<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DataTables;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class ActivityLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     */
    public function index(Request $request)
    {
        $activityLog = ActivityLog::query();
        $allActivityLogs = $activityLog->getActivityLogs();
        if ($request->ajax()) {

            return DataTables::eloquent($allActivityLogs)
                ->addIndexColumn()
                ->filter(function ($query) use ($request) {

                    //Subject
                    if ($request->has('subject')) {
                        $subject = $request->subject;
                        $query->where('subject', 'LIKE', "%$subject%");
                    }

                    // IP adddress
                    if ($request->has('ip')) {
                        $ip = $request->ip;
                        $query->where('ip', 'LIKE', "%$ip%");
                    }

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
                        $query->Where('subject', 'LIKE', '%' . $search . '%')
                            ->orWhere('method', 'LIKE', '%' . $search . '%')
                            ->orWhere('ip', 'LIKE', '%' . $search . '%')
                            ->orWhereDate('created_at', 'LIKE', '%' . $search . '%');
                    }
                })
                ->with([
                    'yourActivityLogTotal' => $activityLog->getYourActivityLogs()->count(),
                    'activityLogOnlyTrashedTotal' =>  $activityLog->getOnlyTrashedActivityLogs()->count(),
                ])
                ->make(true);
        }

        return view('admin.activity_logs.index');
    }

    /**
     * Display a your account listing of the resource.
     *
     * @param Request $request
     */
    public function yourActivityLog(Request $request)
    {

        $activityLog = ActivityLog::query();
        $yourActivityLog =   $activityLog->getYourActivityLogs();

        if ($request->ajax()) {

            return DataTables::eloquent($yourActivityLog)
                ->addIndexColumn()
                ->filter(function ($query) use ($request) {

                    //Subject
                    if ($request->has('subject')) {
                        $subject = $request->subject;
                        $query->where('subject', 'LIKE', "%$subject%");
                    }

                    // IP adddress
                    if ($request->has('ip')) {
                        $ip = $request->ip;
                        $query->where('ip', 'LIKE', "%$ip%");
                    }

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
                        $query->Where('subject', 'LIKE', '%' . $search . '%')
                            ->orWhere('method', 'LIKE', '%' . $search . '%')
                            ->orWhere('ip', 'LIKE', '%' . $search . '%')
                            ->orWhereDate('created_at', 'LIKE', '%' . $search . '%');
                    }
                })
                ->with([
                    'activityLogTotal' => $activityLog->getActivityLogs()->count(),
                    'activityLogOnlyTrashedTotal' =>  $activityLog->getOnlyTrashedActivityLogs()->count(),
                ])
                ->make(true);
        }

        return view('admin.activity_logs.index');
    }

    /**
     * Display only Trashed a listing of the resource.
     *
     * @param Request $request
     */
    public function onlyTrashed(Request $request)
    {
        $activityLog = ActivityLog::query();
        $activityLogOnlyTrashed = $activityLog->getOnlyTrashedActivityLogs();
        if ($request->ajax()) {

            return DataTables::eloquent($activityLogOnlyTrashed)
                ->addIndexColumn()
                ->filter(function ($query) use ($request) {

                    //Subject
                    if ($request->has('subject')) {
                        $subject = $request->subject;
                        $query->where('subject', 'LIKE', "%$subject%");
                    }

                    // IP adddress
                    if ($request->has('ip')) {
                        $ip = $request->ip;
                        $query->where('ip', 'LIKE', "%$ip%");
                    }

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
                        $query->Where('subject', 'LIKE', '%' . $search . '%')
                            ->orWhere('method', 'LIKE', '%' . $search . '%')
                            ->orWhere('ip', 'LIKE', '%' . $search . '%')
                            ->orWhereDate('created_at', 'LIKE', '%' . $search . '%');
                    }
                })
                ->with([
                    'activityLogTotal' => $activityLog->getActivityLogs()->count(),
                    'yourActivityLogTotal' => $activityLog->getYourActivityLogs()->count(),
                ])
                ->make(true);
        }

        return view('admin.activity_logs.delete-history');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        try {
            $activityLog = ActivityLog::where('id', $id)->delete();
            if (!$activityLog) {
                return response()->json([
                    'status' => false,
                    'message' => 'Oops! Your activity log is not deleted'
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Your activity log is deleted successfully!'
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
            $activityLog = ActivityLog::where('id', $id)->forceDelete();
            if (!$activityLog) {
                return response()->json([
                    'status' => false,
                    'message' => 'Oops! Your activity log has not been permanently deleted'
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Your activity log has been permanently deleted successfully!'
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
            $activityLog = ActivityLog::whereIn('id', $ids)->forceDelete();
            if (!$activityLog) {
                return response()->json([
                    'status' => false,
                    'message' => 'Oops! Your activity log has not been permanently deleted'
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Your activity logs has been permanently  deleted successfully!'
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
            $activityLog = ActivityLog::whereIn('id', $ids)->delete();
            if (!$activityLog) {
                return response()->json([
                    'status' => false,
                    'message' => 'Oops! Your activity logs is not deleted'
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Your activity logs is deleted successfully!'
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
            $activityLog = ActivityLog::where('id', $id)->restore();
            if (!$activityLog) {
                return response()->json([
                    'status' => false,
                    'message' => 'Oops! Your activity log is not restored'
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Your activity log is restored successfully!'
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
            $activityLog =  $ids = $request->ids;
            $activityLog = ActivityLog::whereIn('id', $ids)->restore();
            if (!$activityLog) {
                return response()->json([
                    'status' => false,
                    'message' => 'Oops! Your activity logs is not restored'
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Your activity logs is restored successfully!'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Oops! Some unexpected error occured...'
            ]);
        }
    }
}
