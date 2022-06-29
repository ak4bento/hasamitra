<div class="table-responsive">
    <table class="table table-hover text-nowrap" id="example2">
        <thead>
        <tr>
            {{-- 
            // nama, 
            // jumlah hadir, 
            // count terlambat, 
            // total jam terlambat, 
            // count cepat pulang, 
            // total jam cepat pulang, 
            // lupa absen pulang 
            --}}
            <th>No</th>
            <th>Name</th>
            <th>Total Attandance</th>
            <th>Total late</th>
            <th>Total late hours</th>
            <th>Total Early</th>
            <th>Total Early Hours</th>
            <th>Forgeted Absences</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php($count = 1)
        @foreach($attendances as $attendance)
            <tr>
                <td>
                    {{ $count++ }} 
                    {{-- -- 
                    {{ $attendance->id }} --}}
                </td>
                <td>
                    {{-- {{ $attendance->id_employee }} 
                    -  --}}
                    {{ App\Models\Employee::find($attendance->id_employee)->name ?? '' }}
                </td>
                <td>{{ $attendance->total }}</td>
                <td>{{ $attendance->total_late }}</td>
                <?php
                    $hours = floor($attendance->late_diff / 3600);
                    $mins = floor($attendance->late_diff / 60 % 60);
                    $secs = floor($attendance->late_diff % 60);
                ?>
                <td>{{ sprintf('%02d:%02d:%02d', $hours, $mins, $secs); }}</td>
                <td>{{ $attendance->total_early }}</td>
                <?php
                    $hours = floor($attendance->early_diff / 3600);
                    $mins = floor($attendance->early_diff / 60 % 60);
                    $secs = floor($attendance->early_diff % 60);
                ?>
                <td>{{ sprintf('%02d:%02d:%02d', $hours, $mins, $secs); }}</td>
                <td>{{ $attendance->forgeted }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('attendances.show', [$attendance->id_employee]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
