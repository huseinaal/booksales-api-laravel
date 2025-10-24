<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('user', 'book')->get();

        if ($transactions->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!"
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get all resource",
            "data" => $transactions
        ], 200);
    }

    public function store(Request $request)
    {
        //1. Validator & Cek validator
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'data' => $validator->errors()
            ], 422);
        }

        //2. Generation Order number -> unique
        $uniqueCode = "ORD-" . strtoupper(uniqid());

        //3. Ambil user yang sedang login & Cek login
        $user = auth('api')->user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized!'
            ], 401);
        }

        //4. Mencari data buku dari request
        $book = Book::find($request->book_id);

        //5. Mencari stock buku
        if ($book->stock < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Stok buku tidak cukup'
            ], 400);
        }

        //6. Hitung Total harga = price* quantity
        $totalAmount = $book->price * $request->quantity;

        //7. kurangi stock buku
        $book->stock -= $request->quantity;
        $book->save();

        //8. Simpan data transaksi
        $transactions = Transaction::create([
            'order_number' => $uniqueCode,
            'customer_id' => $user->id,
            'book_id' => $request->book_id,
            'total_amount' => $totalAmount
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaction created successfully',
            'data' => $transactions
        ], 201);
    }

    public function show(string $id)
    {
        $transactions = Transaction::find($id);

        if (!$transactions) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get detail resource',
            'data' => $transactions
        ], 200);
    }

    public function update(string $id, Request $request)
    {
        //1. Mencari data
        $transactions = Transaction::find($id);

        if (!$transactions) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        $book = Book::find($request->book_id);

        //2. Validator
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $totalAmount = $book->price * $request->quantity;

        //3. Data yang diupdate
        $data = [
            'book_id' => $request->book_id,
            'quantity' => $totalAmount
        ];

        $book->stock -= $request->quantity;
        $book->save();

        //5. Update data baru kedalam database
        $transactions->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Resource updated successfully',
            'data' => $transactions
        ], 200);
    }

    public function destroy(string $id)
    {
        $transactions = Transaction::find($id);

        if (!$transactions) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        $transactions->delete();

        return response()->json([
            'success' => true,
            'message' => 'Delete resource successfully'
        ]);
    }
}
