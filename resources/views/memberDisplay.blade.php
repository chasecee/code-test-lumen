@extends('main')

@section('content')
<section class="antialiased bg-gray-100 text-gray-600 p-4">
    <div class="flex flex-col justify-center min-h-screen max-w-5xl mx-auto">

        <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b flex justify-between border-gray-100">
                <h2 class="font-semibold text-gray-800">Members</h2>
                <h2>Average of all subscriptions: <span class="text-green-500">${{ $average }}</span></h2>
            </header>

        <div class="p-3">
            <div class="overflow-x-scroll md:overflow-x-auto">
                <table class="w-full table-auto">
                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                        <tr>
                            <th class="py-2 pr-4 whitespace-nowrap">
                                <div class="font-semibold text-right" scope="col">#</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left" scope="col">Name</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left" scope="col">Email</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left" scope="col">Phone</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left" scope="col">Subscription</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-right" scope="col">Price</div>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="text-sm divide-y divide-gray-100">
                        @foreach($members as $member)
                        <tr>
                            <td class="py-2 text-right pr-4 whitespace-nowrap" scope="row">{{ $member['id'] }}</td>
                            <td class="p-2 whitespace-nowrap">{{ $member['name'] }}</td>
                            <td class="p-2 whitespace-nowrap">{{ $member['email'] }}</td>
                            <td class="p-2 whitespace-nowrap phoneNumber">{{ $member['phone'] }}</td>
                            <td class="p-2 whitespace-nowrap">{{ $member['sub_name'] }}</td>
                            <td class="p-2 whitespace-nowrap text-green-500 text-right">${{ $member['sub_price'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<script>
    // Make sure everything is loaded first.
    if (
        ( 'complete' === document.readyState ||
            'loading' !== document.readyState ) &&
        ! document.documentElement.doScroll
    ) {
        processNumbers();
    } else {
        document.addEventListener( 'DOMContentLoaded', processNumbers );
    }
    function processNumbers() {
        function formatPhoneNumber(textContent) {
  var cleaned = ('' + textContent).replace(/\D/g, '');
  var match = cleaned.match(/^(1|)?(\d{3})(\d{3})(\d{4})$/);
  if (match) {
    var intlCode = (match[1] ? '+1 ' : '');
    return [intlCode, '(', match[2], ') ', match[3], '-', match[4]].join('');
  }
  return null;
}


        const phoneNumbers = document.querySelectorAll( '.phoneNumber' );
        if ( phoneNumbers ) {
            phoneNumbers.forEach( ( phoneNumber ) => {
            const textContent = phoneNumber.textContent;
            phoneString = formatPhoneNumber(textContent);
            phoneNumber.textContent = phoneString.replace('+1','');
        } );
        }
    }
    console.log('cool');

</script>
@endsection


