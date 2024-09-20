<div class="table-responsive">
    <h3 class="mb-3">{{ $title ?? 'Table' }}</h3>
    <table class="table table-hover">
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
                            @if ($key == 'avatar') <!-- If it's an avatar column -->
                                <div class="d-flex align-items-center">
                                    @if (is_string($data) && (preg_match('/\.(jpeg|jpg|png|gif)$/i', $data))) <!-- Check if the data is an image URL -->
                                        <img src="{{ $data }}" alt="Avatar" class="avatar me-2">
                                    @else
                                        <!-- If it's not an image, show initials -->
                                        <div class="avatar bg-warning text-dark d-flex justify-content-center align-items-center">
                                            {{ strtoupper(substr($data, 0, 1)) }}
                                        </div>
                                    @endif
                                    {{-- agar rowni text kerak bo'lsa --}}
                                    {{-- <span>{{ $row['name'] ?? 'Unknown' }}</span> --}}
                                </div>
                            @else
                                {{ $data }}
                            @endif
                        </td>
                    @endforeach
                    <td class="action-buttons">
                        <a href="" class="btn btn-sm btn-outline-secondary"><i class="bi bi-eye"></i></a>
                        <a href="" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                        <form action="" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>
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
