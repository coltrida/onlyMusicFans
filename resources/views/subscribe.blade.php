@extends('layouts.stile')

@section('content')
    <form id="payment-form" style="width: 700px;" method="post" action="{{route('subscribe.post')}}">
        @csrf
        <input type="hidden" name="plan" value="price_1L1ZbkJkBZNI0xOYw11Ssnia">
        <div id="payment-element">
            <!--Stripe.js injects the Payment Element-->
        </div>
        <button id="btnSubmit">
            <div class="spinner hidden" id="spinner"></div>
            <span id="button-text">Pay now</span>
        </button>
        <div id="payment-message" class="hidden"></div>
    </form>
@stop

@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        const stripe = Stripe('pk_test_6iMZ13rz3SOFNX4EDwSPjlun00vJ7dk24M');
        let elements;

        initialize();

        document
            .querySelector("#payment-form")
            .addEventListener("submit", handleSubmit);

        function initialize() {
            elements = stripe.elements({
                clientSecret: "{{ $intent->client_secret }}"
            });

            const paymentElement = elements.create("payment");
            paymentElement.mount("#payment-element");
        }

        async function handleSubmit(e) {
            e.preventDefault();

            const {
                setupIntent,
                error
            } = await stripe.confirmSetup({
                elements,
                confirmParams: {
                    // Make sure to change this to your payment completion page
                    return_url: "http://localhost:4242/public/checkout.html",
                },
                redirect: 'if_required'
            });

            // This point will only be reached if there is an immediate error when
            // confirming the payment. Otherwise, your customer will be redirected to
            // your `return_url`. For some payment methods like iDEAL, your customer will
            // be redirected to an intermediate site first to authorize the payment, then
            // redirected to the `return_url`.

            if (error) {
                if (error.type === "card_error" || error.type === "validation_error") {
                    showMessage(error.message);
                } else {
                    showMessage("An unexpected error occured.");
                }
            } else {
                // console.log(setupIntent)
                let form = document.getElementById('payment-form');
                let hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'paymentMethod');
                hiddenInput.setAttribute('value', setupIntent.payment_method);
                form.appendChild(hiddenInput);

                form.submit();
            }

        }

        function showMessage(messageText) {
            const messageContainer = document.querySelector("#payment-message");

            messageContainer.classList.remove("hidden");
            messageContainer.textContent = messageText;

            setTimeout(function () {
                messageContainer.classList.add("hidden");
                messageText.textContent = "";
            }, 4000);
        }
    </script>
@stop
