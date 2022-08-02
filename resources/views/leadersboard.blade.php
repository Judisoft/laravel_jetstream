<x-guest-layout>
    <div class="pt-4 bg-gray-200">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-gray-100 shadow-sm overflow-hidden sm:rounded-lg prose">
                <h1 class="text-center font-bold uppercase">leaderboard</h1>
                <div class="flex justify-center">
                    <div class="flex-auto mx-auto w-96">
                        {{-- <form> --}}
                            <input type="text" id="myInput" name="search" placeholder="Search rank by name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 shadow-sm">
                        {{-- </form> --}}
                    </div>
                    <div class="flex-auto w-64 px-0">
                        <select id="weekId" onchange="getWeekId();" class="inline-flex items-center justify-center px-4 py-3 bg-red-600 border border-transparent  font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
                           <option value="{{ $current_week_id }}"> Week {{ $current_week_id }} </option>
                           @for($i=1; $i<$current_week_id; $i++)
                                <option value="{{ $i }}">Week {{  $i }}</option>
                            @endfor
                        </select>
                    </div>
                    {{-- <div class="flex-auto">
                        <input type="number" id="weekId" min="1"  placeholder="week" max="{{ $current_week_id }}"  class="inline-flex items-center px-4 py-3 bg-white border border-gray-300 font-semibold text-xs text-gray-700  tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition">
                    </div> --}}
                </div>
                <table class="table-auto" id="table">
                    <thead>
                      <tr class="font-bold uppercase">
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Score(%)</th>
                      </tr>
                    </thead>
                    <tbody id="myTable">
                        @forelse ($user_scores as $key=>$rank)
                            <tr>
                                <td>{{ $key + 1}}</td>
                                <td>{{ $rank->user->name }}</td>
                                <td>{{ $rank->score }}</td>
                            </tr>
                        @empty
                        <p class="text-center">No data to show</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
            });
        });
    </script>

    <script>
        function getWeekId() {
            let selectedWeekId = document.getElementById("weekId").value;
            let user_data = {
               week_id: selectedWeekId
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
               $.ajax({
                  url: '/weekly-challenge/leadersboard',
                  method: 'post',
                  data: user_data,
                  success: function(){
                    
                  }});
        }
    </script>
    
</x-guest-layout>
