<?php

namespace App\Http\Controllers;

use App\Customer;
use Session;
use Illuminate\Http\Request;
class QuanliController extends Controller
{
    public  function index(){
        $customer = Customer::all();
        return view('quanli.quanlikhachhang',compact('customer'));
    }
    public function destroy($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa khách hàng thành công');

        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('quanli.index');
    }
    public function edit($id){
        $customers = Customer::findOrFail($id);
        return view('quanli.editcustomer', compact('customers'));
    }
    public function update(Request $request, $id){
        $customer = Customer::findOrFail($id);
        $customer->name     = $request->input('name');
        $customer->gender    = $request->input('gioitinh');
        $customer->email    = $request->input('email');
        $customer->address  = $request->input('diachi');
        $customer->phone_number  = $request->input('phone_number');
        $customer->note = $request->input('note');
        $customer->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật khách hàng thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('quanli.index');
    }
}
