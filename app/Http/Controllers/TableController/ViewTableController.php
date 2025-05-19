<?php

namespace App\Http\Controllers\TableController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewTableController extends Controller
{
    public function viewtable(Request $request){
        $users = User::get();
        if(!$users){
            return redirect()->back()->with('tableError',"Cannot access table right now no data avaialable!!");
        }
        else{
            $users = User::paginate(15);
        }
        return view('frontend.table.table',compact('users'));
    }
    // public function edit($id){

    // }

    public function delete($id)
    {
        $record = User::where('id', $id);

        if (!$record) {
            return redirect('/error');
        } else {
            $record->delete();
            $page = User::paginate(15);
            $lastpage = $page->lastPage();
            // return response()->json([
            //     "id"=>$id,
            //     "message"=>"user deleted succesfully!!!"
            // ]);
            // die;
            return redirect()->route('viewtable', ['page' => $lastpage]);
        }
    }
    public function updateuser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect('/')->with('error', 'User not found!');
        }
        return view('frontend.form.edituser', compact('user'));
    }

    public function submituser(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
        ]);
        $updateData = [
                'username' => $request->input('username'),
                'email' => $request->input('email'),
        ];


        $updatedUser = DB::table('users')
            ->where('ID', $id)
            ->update($updateData);

        if (!$updatedUser) {
            return redirect('/table')->with('error', "No changes made");
        } else {
            return redirect('/table')->with('success', "user updated succesfully");
        }
    }
}

