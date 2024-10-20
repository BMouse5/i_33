<<<<<<< HEAD
@include('layouts.header')

=======

@include('layouts.header')



>>>>>>> b7b53cc5a461793e0f850ee97aa4c854db3dcebe
<div class="container">
    <h1>Личный кабинет</h1>

    <h2>Ваши данные</h2>
    <p><strong>Имя:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Количество созданных отчетов:</strong> {{ $reports->count() }}</p>
<<<<<<< HEAD
    <p><strong>Количество активных проектов:</strong> {{ $tasks->count() }}</p>
    <h2>Активные проекты (Диаграмма Ганта)</h2>
    @if ($tasks->isEmpty())
        <p>У вас нет активных проектов.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Название проекта</th>
                    <th>Длительность</th>
                    <th>Дата начала</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks->take(3) as $task) 
                    <tr>
                        <td>{{ $task->text }}</td>
                        <td>{{ $task->duration }}</td>
                        <td>{{ $task->start_date }}</td>
                        <td>
                            <a href="/gantt" class="btn btn-primary">Просмотр</a> 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if ($tasks->count() > 3)
            <button id="show-more-tasks" class="btn btn-secondary">Показать больше</button>
            <div id="more-tasks" style="display: none;">
                <table class="table">
                    <tbody>
                        @foreach ($tasks->slice(3) as $task) 
                            <tr>
                                <td>{{ $task->text }}</td>
                                <td>{{ $task->duration }}</td>
                                <td>{{ $task->progress }}</td>
                                <td>{{ $task->start_date }}</td>
                                <td>
                                    <a href="/gantt" class="btn btn-primary">Просмотр</a> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    @endif

=======
>>>>>>> b7b53cc5a461793e0f850ee97aa4c854db3dcebe
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
<<<<<<< HEAD
                @foreach ($reports->take(3) as $report) 
=======
                @foreach ($reports->take(3) as $report) <!-- Отображаем только первые 3 отчета -->
>>>>>>> b7b53cc5a461793e0f850ee97aa4c854db3dcebe
                    <tr>
                        <td>{{ $report->project_name }}</td>
                        <td>{{ $report->description }}</td>
                        <td>{{ $report->report_type }}</td>
                        <td>{{ $report->created_at->format('d.m.Y H:i') }}</td>
                        <td>
<<<<<<< HEAD
                            <a href="{{ route('report.show', $report->id) }}" class="btn btn-primary">Просмотр</a> 
=======
                            <a href="{{ route('report.show', $report->id) }}" class="btn btn-primary">Просмотр</a> <!-- Ссылка на просмотр отчета -->
>>>>>>> b7b53cc5a461793e0f850ee97aa4c854db3dcebe
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

<<<<<<< HEAD
        @if ($reports->count() > 3)
=======
        @if ($reports->count() > 3) <!-- Если больше 3 отчетов, показываем кнопку "Показать больше" -->
>>>>>>> b7b53cc5a461793e0f850ee97aa4c854db3dcebe
            <button id="show-more" class="btn btn-secondary">Показать больше</button>
            <div id="more-reports" style="display: none;">
                <table class="table">
                    <tbody>
<<<<<<< HEAD
                        @foreach ($reports->slice(3) as $report) 
=======
                        @foreach ($reports->slice(3) as $report) <!-- Отображаем оставшиеся отчеты -->
>>>>>>> b7b53cc5a461793e0f850ee97aa4c854db3dcebe
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
<<<<<<< HEAD
        // Скрипт для показа дополнительных задач
        document.getElementById('show-more-tasks').addEventListener('click', function() {
            document.getElementById('more-tasks').style.display = 'block'; 
            this.style.display = 'none'; 
        });

        // Скрипт для показа дополнительных отчетов
        document.getElementById('show-more').addEventListener('click', function() {
            document.getElementById('more-reports').style.display = 'block'; 
            this.style.display = 'none'; 
        });
    </script>
@endsection
=======
        document.getElementById('show-more').addEventListener('click', function() {
            document.getElementById('more-reports').style.display = 'block'; // Показываем оставшиеся отчеты
            this.style.display = 'none'; // Скрываем кнопку "Показать больше"
        });
    </script>
@endsection


>>>>>>> b7b53cc5a461793e0f850ee97aa4c854db3dcebe
