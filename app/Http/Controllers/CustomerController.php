<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function createCustomer(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:customer',
            'name' => 'required'
        ]);
        $create = new Customer($request->all());
        $result = $create->save();

        if($result){
            $response = [
                'status'=> [
                    'code'=> 200,
                    'response'=> 'success',
                    'message'=> 'Data customer inserted'
                ],
                'result'=> $request->all()
            ];
        }else{
            $response = [
                'status'=> [
                    'code'=> 201,
                    'response'=> 'failed',
                    'message'=> 'Data customer failed to insert'
                ],
                'result'=> $request->all()
            ];
        }

        return $response;
    }
    
    public function showAllData()
    {
        $data = Customer::all();        
        $response = [
            'status'=> [
                'code'=> 200,
                'response'=> 'success',
                'message'=> 'All data customer'
            ],
            'result'=> $data
        ];

        return $response;
    }

    public function showDetailData($id)
    {
        $data = Customer::where('id', $id)->first();
        if($data){
            $response = [
                'status'=> [
                    'code'=> 200,
                    'response'=> 'success',
                    'message'=> 'Data customer found'
                ],
                'result'=> $data
            ];
        }else{
            $response = [
                'status'=> [
                    'code'=> 201,
                    'response'=> 'failed',
                    'message'=> 'Data customer can not found'
                ],
                'result'=> $data
            ];
        }
        
        return response($response);
    }

    public function updateTodo(Request $request, $id)
    {
        $data = Customer::find($id);
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required'
        ]);
        $update = $data->update($request->all());

        if ($update) {
            $response  = [
                'status'=> [
                    'code'=> 200,
                    'response'=> 'success',
                    'message'=> 'Data customer updated'
                ],
                'result'=> $request->all()
            ];
        } else {
            $response  = [
                'status'=> [
                    'code'=> 201,
                    'response'=> 'failed',
                    'message'=> 'Data customer failed'
                ],
                'result'=> $request->all()
            ];
        }

        return response($response);
    }

    public function deleteTodo($id)
    {
        $data = Customer::find($id);
        $delete = $data->delete();

        if ($delete) {
            $response  = [
                'status'=> [
                    'code'=> 200,
                    'response'=> 'success',
                    'message'=> 'Data customer deleted'
                ],
                'result'=> []
            ];
        } else {
            $response  = [
                'status'=> [
                    'code'=> 201,
                    'response'=> 'failed',
                    'message'=> 'Data customer cannot be delete'
                ],
                'result'=> []
            ];
        }

        return response($response);
    }
}
