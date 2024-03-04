<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quote;
use App\Http\Resources\QuoteResource;
use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use Illuminate\Support\Facades\DB;
class QuoteController extends Controller
{

    public function index()
    {
        return QuoteResource::collection(Quote::all());
    }

    public function store(StoreQuoteRequest $request)
    {
            DB::beginTransaction();
            $Quote = Quote::create($request->validated());
            DB::commit();
            return new QuoteResource($Quote);
    }

    public function show($id)
    {
        $Quote = Quote::findOrFail($id);
        return new QuoteResource($Quote);
    }

    public function update(UpdateQuoteRequest $request, $id)
    {
            DB::beginTransaction();
            $Quote = Quote::findOrFail($id);
            $Quote->update(
                $request->validated()
            );
            DB::commit();
            return new QuoteResource($Quote);
    }

    public function destroy($id)
    {

            DB::beginTransaction();
            $Quote = Quote::findOrFail($id);
            $Quote->delete();
            DB::commit();
            return 'Quote is deleted';
    }
}
