document.addEventListener('DOMContentLoaded', function() {
    var calendarElem = document.getElementById('calendario');
    var calendar = new FullCalendar.Calendar(calendarElem, {
        locale: 'pt-br',
        initialView: 'dayGridMonth',
        height: 750,
        dateClick: function() {
            alert('teste');
        },
        buttonText: {
            today: 'hoje',
            month: 'mês',
            week: 'semana',
            day: 'dia',
            list: 'lista'
        },
        headerToolbar: {
            start: 'prev next today',
            center: 'title',
            end: 'dayGridMonth timeGridWeek timeGridDay'
        },
        events: {
            url: '{{ route("agendamentos.get") }}',
            method: 'GET',
            failure: function() {
                alert('Erro ao carregar eventos!');
            },
        },
    });

    calendar.render();

    calendar.on('dateClick', function(info) {
        console.log('clicou em ' + info.dateStr);
        console.log(info.date.toString());
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendario');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        events: {
            url: '{{ route("agendamentos.get") }}',
            method: 'GET',
            failure: function() {
                alert('Erro ao carregar eventos!');
            },
        },
    });
    calendar.render();
});