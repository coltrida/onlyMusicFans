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

    public function storeVideo($request)
    {
        $file = $request->file('video_thumb');
        $filename = $request->concertId . '.' . $file->extension();
        $file->storeAs('/public/video/', $filename);
    }

    public function createPayment($idConcert)
    {
        $concerto = Concert::find($idConcert);
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        function calculateOrderAmount() {
            // Replace this constant with a calculation of the order's amount
            // Calculate the order total on the server to prevent
            // people from directly manipulating the amount on the client
            return 1400;
        }
        header('Content-Type: application/json');

        try {
            // retrieve JSON from POST body
            $jsonStr = file_get_contents('php://input');
            $jsonObj = json_decode($jsonStr);

            // Create a PaymentIntent with amount and currency
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => (int)$concerto->cost,
                'currency' => 'eur',
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
            ]);

            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];

            echo json_encode($output);
        } catch (Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}
