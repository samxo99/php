@component('mail::message')
    ძვირფასო {{$data['user_name']}} გთხოვთ ნახოთ თქვენი მონაცემები:
    {{$data['text']}}

    @component('mail::button', ['url' => route('email')])

        უკან დაბრუნება

    @endcomponent


@endcomponent
