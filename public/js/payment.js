
var stripe = Stripe(paymentConfig.publicKey);
var elements = stripe.elements({locale: 'it'});
var style = {
    base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
            color: '#aab7c4'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
};
var card = elements.create('card', {style: style});
card.mount('#card-element');

card.addEventListener('change', function (error) {
    var displayError = document.getElementById('card-errors');
    if (error) {
        displayError.textContent = error.message;
    } else {
        displayError.textContent = '';
    }
});

form.addEventListener('submit', async (e) => {
    e.preventDefault();
    const { paymentMethod, error} = await stripe.createPaymentMethod(
        'card', cardElement, {
            billing_details: { name: cardHolderName.value}
        }
    );
    if (error) {

    } else {
        console.log('card verified');
        console.log(paymentMethod.id)
        document.getElementById('pmethod').setAttribute('value', paymentMethod.id);
        form.submit();
    }
})

$( "#payment-form" ).on( "submit", function( e ) {
    e.preventDefault();
    $.post( "/stripe-checkout", $( this ).serialize(), function( response ) {
        stripe.confirmCardPayment(response.secret, {
            payment_method: {
                card: card
            }
        }).then(function( result ) {
            if( result.error ) {
                // Gestione errore
            } else {
                if(result.paymentIntent.status === "succeeded") {
                    // Successo
                } else {
                    // Gestione errore
                }
            }
        });
    });
});
