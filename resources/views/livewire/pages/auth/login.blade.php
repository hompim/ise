<div>
    {{-- The best athlete wants his opponent at his best. --}}

    {{-- For testing dashboard, Hapus/Komen aja kalo pengen implemen desain login --}}
    <form action="{{route('login')}}" method="POST">
        @csrf
        email
        <input type="email">
        Password
        <input type="password">
        <input type="submit" value="Submit">
    </form>
</div>
