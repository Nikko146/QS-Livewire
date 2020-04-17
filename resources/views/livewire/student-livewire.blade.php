<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $students->links() }}
</div>
