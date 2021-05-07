<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Member;
use Illuminate\Http\Request;

class membersController extends Controller
{
    public function saveData(Request $req)
    {
        $this->AuthChecking();
        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        $req->session()->flash('message', "Register Success");
        return redirect('reg');
    }

    public function showData()
    {
        $this->AuthChecking();
        $data = Member::all();
        return view('list', ['members' => $data]);
    }

    public function showEditData($id)
    {
        $this->AuthChecking();
        $data = Member::find($id);
        return view('edit', ['data' => $data]);
    }

    public function update(Request $req)
    {
        $this->AuthChecking();
        $data = Member::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->save();
        $req->session()->flash('message', "Update Success");
        return redirect('list');
    }
    public function delete($id)
    {
        $this->AuthChecking();
        $data = Member::find($id);
        $data->delete();
        $m = session()->flash('message', "Delete Success");
        return redirect('list');
    }

    public function loginAdmin(Request $req)
    {
        $data = Admin::select('*')->where('email', $req->email)
            ->where('password', $req->password)->get('name');
        $data = json_decode($data);
        if (!$data) {
            $t = session()->flash('message', "Wrong EMAIL or PASSWORD Try Again");
            return redirect('login');
        } else {
            $req->session()->put('user', $data[0]->name);
            return redirect('list');
        }
        //dd($data);
    }
    public function AuthChecking()
    {
        if (!session()->has('user')) {
            return redirect('login');
        }
    }
}