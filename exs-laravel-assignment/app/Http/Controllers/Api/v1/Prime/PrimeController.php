<?php
namespace App\Http\Controllers\Api\v1\Prime;
use App\Http\Controllers\Controller;
use App\Services\PrimeNumber;
use Illuminate\Http\Request;
final class PrimeController extends Controller
{
    #Call bk
    protected PrimeNumber $primeNumber;
    public function __construct()
    {
        $this->primeNumber = new PrimeNumber();
    }
    public function index(Request $request)
    {
        $result = $this->primeNumber->getNumbers();
        return response()->json([
            'statusCode' => 200,
            'status' => 'success',
            'message' => 'Prime number listed successfully',
            'data' => ['Prime Numbers' => $result]
        ]);
    }
}
