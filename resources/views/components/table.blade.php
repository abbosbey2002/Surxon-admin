<div class="table-responsive">
    <table class="table table-hover custom-table">
        <thead>
            <tr>
                @foreach (array_keys($rows[0]) as $column)
                    <th>{{ ucfirst($column) }}</th>
                @endforeach
                <th>Action</th> <!-- Action column -->
            </tr>
        </thead>
        <tbody>
            @forelse ($rows as $row)
                <tr>
                    @foreach ($row as $key => $data)
                        <td>
                            @if (is_string($data) && preg_match('/\.(jpeg|jpg|png|gif)$/i', $data))
                                <img src="{{ $data }}" alt="Image" class="avatar"> <!-- Avatar class for images -->
                            @else
                                {{ $data }} <!-- For non-image content -->
                            @endif
                        </td>
                    @endforeach
                    <td class="action-buttons">
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="{{ count(array_keys($rows[0])) + 1 }}" class="text-center">No data available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
