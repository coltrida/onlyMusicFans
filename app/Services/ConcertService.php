<?php


namespace App\Services;


use App\Models\Concert;

class ConcertService
{
    public function concertList()
    {
        return Concert::paginate(5);
    }

    public function concertCreate($request)
    {
        return Concert::create($request->except('concert_thumb'));
    }

    public function storePhoto($request, $concert)
    {
        $file = $request->file('concert_thumb');
        $filename = $concert->id . '.' . $file->extension();
        $file->storeAs('/public/concert/', $filename);
    }
}
