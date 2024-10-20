
@include('layouts.header')



<div class="container">
    <h1>Личный кабинет</h1>

    <h2>Ваши данные</h2>
    <p><strong>Имя:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Количество созданных отчетов:</strong> {{ $reports->count() }}</p>
    <h2>История отчетов</h2>
    @if ($reports->isEmpty())
        <p>У вас нет отчетов.</p>
    @else
         <!-- Количество отчетов -->
        <table class="table">
            <thead>
                <tr>
                    <th>Название проекта</th>
                    <th>Описание</th>
                    <th>Тип отчета</th>
                    <th>Дата создания</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports->take(3) as $report) <!-- Отображаем только первые 3 отчета -->
                    <tr>
                        <td>{{ $report->project_name }}</td>
                        <td>{{ $report->description }}</td>
                        <td>{{ $report->report_type }}</td>
                        <td>{{ $report->created_at->format('d.m.Y H:i') }}</td>
                        <td>
                            <a href="{{ route('report.show', $report->id) }}" class="btn btn-primary">Просмотр</a> <!-- Ссылка на просмотр отчета -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if ($reports->count() > 3) <!-- Если больше 3 отчетов, показываем кнопку "Показать больше" -->
            <button id="show-more" class="btn btn-secondary">Показать больше</button>
            <div id="more-reports" style="display: none;">
                <table class="table">
                    <tbody>
                        @foreach ($reports->slice(3) as $report) <!-- Отображаем оставшиеся отчеты -->
                            <tr>
                                <td>{{ $report->project_name }}</td>
                                <td>{{ $report->description }}</td>
                                <td>{{ $report->report_type }}</td>
                                <td>{{ $report->created_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    <a href="{{ route('report.show', $report->id) }}" class="btn btn-primary">Просмотр</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    @endif
</div>

@section('scripts')
    <script>
        document.getElementById('show-more').addEventListener('click', function() {
            document.getElementById('more-reports').style.display = 'block'; // Показываем оставшиеся отчеты
            this.style.display = 'none'; // Скрываем кнопку "Показать больше"
        });
    </script>
@endsection


