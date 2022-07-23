@extends('template.site')

@section('title', 'eBooks - Pagamanero')

@section('content')
<div class="container mx-auto px-60">
    <div class="bg-white">
    <main class="lg:min-h-screen lg:overflow-hidden lg:flex lg:flex-row-reverse">
        <div class="px-4 py-6 sm:px-6 lg:hidden">
        <div class="max-w-lg mx-auto flex">
            <a href="#">
            <span class="sr-only">Workflow</span>
            <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">
            </a>
        </div>
        </div>

        <h1 class="sr-only">Checkout</h1>

        <!-- Mobile order summary -->
        <section aria-labelledby="order-heading" class="bg-gray-50 px-4 py-6 sm:px-6 lg:hidden">
        <div class="max-w-lg mx-auto">
            <div class="flex items-center justify-between">
            <h2 id="order-heading" class="text-lg font-medium text-gray-900">Your Order</h2>
            <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500" aria-controls="disclosure-1" aria-expanded="false">
                <!-- Only display for open option. -->
                <span>Hide full summary</span>
                <!-- Don't display for open option. -->
                <span>Show full summary</span>
            </button>
            </div>

            <div id="disclosure-1">
            <ul role="list" class="divide-y divide-gray-200 border-b border-gray-200">
                <li class="flex py-6 space-x-6">
                <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-04-product-01.jpg" alt="Moss green canvas compact backpack with double top zipper, zipper front pouch, and matching carry handle and backpack straps." class="flex-none w-40 h-40 object-center object-cover bg-gray-200 rounded-md">
                <div class="flex flex-col justify-between space-y-4">
                    <div class="text-sm font-medium space-y-1">
                    <h3 class="text-gray-900">Micro Backpack</h3>
                    <p class="text-gray-900">$70.00</p>
                    <p class="text-gray-500">Moss</p>
                    <p class="text-gray-500">5L</p>
                    </div>
                    <div class="flex space-x-4">
                    <button type="button" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Edit</button>
                    <div class="flex border-l border-gray-300 pl-4">
                        <button type="button" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                    </div>
                    </div>
                </div>
                </li>

                <!-- More products... -->
            </ul>

            <form class="mt-10">
                <label for="discount-code-mobile" class="block text-sm font-medium text-gray-700">Discount code</label>
                <div class="flex space-x-4 mt-1">
                <input type="text" id="discount-code-mobile" name="discount-code-mobile" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <button type="submit" class="bg-gray-200 text-sm font-medium text-gray-600 rounded-md px-4 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Apply</button>
                </div>
            </form>

            <dl class="text-sm font-medium text-gray-500 mt-10 space-y-6">
                <div class="flex justify-between">
                <dt>Subtotal</dt>
                <dd class="text-gray-900">$210.00</dd>
                </div>
                <div class="flex justify-between">
                <dt class="flex">
                    Discount
                    <span class="ml-2 rounded-full bg-gray-200 text-xs text-gray-600 py-0.5 px-2 tracking-wide">CHEAPSKATE</span>
                </dt>
                <dd class="text-gray-900">-$24.00</dd>
                </div>
                <div class="flex justify-between">
                <dt>Taxes</dt>
                <dd class="text-gray-900">$23.68</dd>
                </div>
                <div class="flex justify-between">
                <dt>Shipping</dt>
                <dd class="text-gray-900">$22.00</dd>
                </div>
            </dl>
            </div>

            <p class="flex items-center justify-between text-sm font-medium text-gray-900 border-t border-gray-200 pt-6 mt-6">
            <span class="text-base">Total</span>
            <span class="text-base">$341.68</span>
            </p>
        </div>
        </section>

        <!-- Order summary -->
        <section aria-labelledby="summary-heading" class=" bg-gray-50 w-full max-w-md flex-col lg:flex">

        <h2 class="flex justify-center py-5">Resumo do Pedido</h2>

        <ul role="list" class="flex-auto overflow-y-auto divide-y divide-gray-200 px-6">
            <!-- More products... -->
            <li class="flex py-6 space-x-6">
                <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-04-product-01.jpg" alt="Moss green canvas compact backpack with double top zipper, zipper front pouch, and matching carry handle and backpack straps." class="flex-none w-40 h-40 object-center object-cover bg-gray-200 rounded-md">
                <div class="flex flex-col justify-between space-y-4">
                    <div class="text-sm font-medium space-y-1">
                    <h3 class="text-gray-900">Micro Backpack</h3>
                    <p class="text-gray-900">$70.00</p>
                    <p class="text-gray-500">Moss</p>
                    <p class="text-gray-500">5L</p>
                    </div>
                    <div class="flex space-x-4">
                    <button type="button" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Edit</button>
                    <div class="flex border-l border-gray-300 pl-4">
                        <button type="button" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                    </div>
                    </div>
                </div>
            </li>
            <!-- More products... -->
        </ul>

        <div class="sticky bottom-0 flex-none bg-gray-50 border-t border-gray-200 p-6">
            <dl class="text-sm font-medium text-gray-500 mt-10 space-y-6">
            <div class="flex justify-between">
                <dt>Subtotal</dt>
                <dd class="text-gray-900">$210.00</dd>
            </div>
            <div class="flex justify-between">
                <dt>Taxes</dt>
                <dd class="text-gray-900">$23.68</dd>
            </div>
            <div class="flex items-center justify-between border-t border-gray-200 text-gray-900 pt-6">
                <dt class="text-base">Total</dt>
                <dd class="text-base">$341.68</dd>
            </div>
            </dl>
        </div>
        </section>

        <!-- Checkout form -->
        <section aria-labelledby="payment-heading" class="flex-auto overflow-y-auto px-4 pt-12 pb-16 sm:px-6 sm:pt-16 lg:px-8 lg:pt-0 lg:pb-24">
        <div class="max-w-lg mx-auto">


            <h2 class="flex justify-center py-5">Método de Pagamento</h2>

            <div class="flex justify-center">
                <div>
                    <button onclick="showTicket()" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20 rounded">
                        Boleto
                    </button>
                    <button onclick="showCard()" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-20 rounded">
                        Cartão 
                    </button>
                </div>
            </div>

            <form class="mt-6" id="paymentCard">
                <div class="grid grid-cols-12 gap-y-6 gap-x-4">
                    <div class="col-span-full">
                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                    <div class="mt-1">
                        <input type="email" id="email-address" name="email-address" autocomplete="email" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    </div>

                    <div class="col-span-full">
                    <label for="name-on-card" class="block text-sm font-medium text-gray-700">Name on card</label>
                    <div class="mt-1">
                        <input type="text" id="name-on-card" name="name-on-card" autocomplete="cc-name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    </div>

                    <div class="col-span-full">
                    <label for="card-number" class="block text-sm font-medium text-gray-700">Card number</label>
                    <div class="mt-1">
                        <input type="text" id="card-number" name="card-number" autocomplete="cc-number" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    </div>

                    <div class="col-span-8 sm:col-span-9">
                    <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expiration date (MM/YY)</label>
                    <div class="mt-1">
                        <input type="text" name="expiration-date" id="expiration-date" autocomplete="cc-exp" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    </div>

                    <div class="col-span-4 sm:col-span-3">
                    <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
                    <div class="mt-1">
                        <input type="text" name="cvc" id="cvc" autocomplete="csc" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    </div>

                    <div class="col-span-full">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <div class="mt-1">
                        <input type="text" id="address" name="address" autocomplete="street-address" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    </div>

                    <div class="col-span-full sm:col-span-4">
                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                    <div class="mt-1">
                        <input type="text" id="city" name="city" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    </div>

                    <div class="col-span-full sm:col-span-4">
                    <label for="province" class="block text-sm font-medium text-gray-700">Province</label>
                    <div class="mt-1">
                        <input type="text" id="province" name="province" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    </div>

                    <div class="col-span-full sm:col-span-4">
                    <label for="postal-code" class="block text-sm font-medium text-gray-700">Postal code</label>
                    <div class="mt-1">
                        <input type="text" id="postal-code" name="postal-code" autocomplete="postal-code" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    </div>
                </div>

                <div class="mt-6 flex space-x-2">
                    <div class="flex items-center h-5">
                    <input id="same-as-shipping" name="same-as-shipping" type="checkbox" checked class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                    </div>
                    <label for="same-as-shipping" class="text-sm font-medium text-gray-900">Billing address is the same as shipping address</label>
                </div>

                <button type="submit" class="w-full mt-6 bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Pay $341.68</button>

                <p class="flex justify-center text-sm font-medium text-gray-500 mt-6">
                    <!-- Heroicon name: solid/lock-closed -->
                    <svg class="w-5 h-5 text-gray-400 mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    Payment details stored in plain text
                </p>
            </form>
        </div>
        </section>
    </main>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

$(document).ready(function() {
    $("#paymentCard").hide();
});

$(document).ready(function() {
    $("#paymentTicket").hide();
});


function showCard()
{
    $("#paymentCard").show();
    $("#paymentTicket").hide();
}

function showTicket()
{
    $("#paymentTicket").show();
    $("#paymentCard").hide();
}
</script>