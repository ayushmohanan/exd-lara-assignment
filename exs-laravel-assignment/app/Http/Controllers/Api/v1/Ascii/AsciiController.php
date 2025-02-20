<?php
namespace App\Http\Controllers\Api\v1\Ascii;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\AsciiService;
final class AsciiController extends Controller
{
    #Call bk
    protected AsciiService $asciiService;
    public function __construct()
    {
        $this->asciiService = new AsciiService();
    }
    public function index(Request $request)
    {
        $asciiArray = $this->asciiService->getAsciiArray();
        $initialAscii = implode(' ', $asciiArray);
        $this->asciiService->removeRandomCharacter();
        $updatedAscii = implode(' ', $this->asciiService->getAsciiArray());
        $missingCharacter = $this->asciiService->findMissingCharacter();
        $result = [
            'Initial_ASCII_Array' => $initialAscii,
            'Updated_ASCII_Array' => $updatedAscii,
            'Missing_Character'   => $missingCharacter
        ];
        return response()->json([
            'statusCode' => 200,
            'status' => 'success',
            'message' => 'Ascii listed successfully',
            'data' => ['AsciiChars' => $result]
        ]);
    }
}
