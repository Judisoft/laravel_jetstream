<x-app-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-gray-50 shadow-sm overflow-hidden sm:rounded-lg prose">
                <h3 class="text-center font-bold uppercase text-red-600">Medxam Subscription</h3><hr>
                @if(Session::has('success'))
                    <div class="rounded-lg py-3 px-6 mb-3 text-base text-white inline-flex items-center w-full" role="alert" style="background-color: #10D898;">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                        </svg>
                        {{ Session::get('success') }}
                    </div>
                @endif
                <h3 class="font-semibold">Monthly access token is set at <strong><s>5000 FCFA</s> 1000 FCFA </strong></h3>
                <div class="flex flex-col">
                    <p>We accept the following payment methods:</p>
                    <span>MTN Mobile Money: <strong>672076996</strong></span>
                    <span>Orange Money: <strong>672076996</strong></span>
                    <h3 class="font-bold text-red-600 uppercase">How to Pay</h3><hr>
                    <p>Make a deposit to any of the above numbers and provide the payment details below:<br>Once your payment is received, your account staus will be automatically be updated</p>
                </div>
                <div class="flex flex-col border p-3">
                    @if ($errors->any())
                        <div>
                            <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>
                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('post.payment') }}">
                        @csrf
                        <div class="flex flex-row p-3 justify-center">
                            <label for="payment_method" class="px-4">Payment Method:</label>
                            <select name="payment_method">
                                <option value=""> Select payment method</option>
                                <option value="momo"> MTN Mobile Money</option>
                                <option value="om"> Orange Money</option>
                            </select>
                        </div>
                        <div class="pt-4 flex flex-row p-3  justify-center">
                            <label for="transaction_id" class="px-4">Amount(FCFA)</label>
                            <input  type="number" min="1000" name="amount" placeholder="Enter Amount">
                        </div>
                        <div class="pt-4 flex flex-row p-3  justify-center">
                            <label for="transaction_id" class="px-4">Transaction ID:</label>
                            <input type="text" name="transaction_id" placeholder="Enter transaction ID">
                        </div>
                        <div class="pt-4 flex flex-row p-3  justify-center">
                            <button type="submit" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Upgrade My Account</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
