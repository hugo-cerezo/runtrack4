$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        dayNamesShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
            'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthNamesShort: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
            'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        defaultView: 'agendaWeek',
        nowIndicator: true,
        allDaySlot: false,
        buttonText: {
            today: 'Aujourd\'hui',
            month: 'Mois',
            week: 'Semaine',
            day: 'Jour',
            list: 'Liste'
        },
        editable: true,
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        events: 'load.php',

        selectable: true,
        selectHelper: true,
        
        // création
        select: function (start, end, allDay) {

            var now = new Date();
            var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
            if (Date.parse(now) <= Date.parse(start)) {
                var title = prompt("Entrez vôtre nom");
                if (title) {
                    $.ajax({
                        url: "insert.php",
                        type: "POST",
                        data: {
                            title: title,
                            start: start,
                            end: end
                        },
                        success: function () {
                            calendar.fullCalendar('refetchEvents');
                            alert("Correctement ajouté");
                        }
                    })
                }
            } else {
                alert('Date dépassée');
                location.reload(true);
            }
        },

        editable: true,
        // Crénaux
        eventResize: function (event) {
            $.ajax({
                url: "getUserId.php",
                type: "POST",
                success: function (data) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    var title = event.title;
                    var id = event.id;
                    var now = new Date();
                    var id_utilisateur = data;
                    if (event.id_utilisateur == id_utilisateur) {
                        if (Date.parse(now) - Date.parse(start) < 0) {
                            $.ajax({
                                url: "update.php",
                                type: "POST",
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    id: id
                                },
                                success: function () {
                                    calendar.fullCalendar('refetchEvents');
                                    alert('Événements mis à jour');
                                }
                            })
                        } else {
                            alert('Date dépassée');
                            location.reload(true);
                        }
                    } else {
                        alert('Cet évènement ne vous appartiens pas');
                        location.reload(true);
                    }
                }
            })
        },

        // déplacement
        eventDrop: function (event) {
            $.ajax({
                url: "getUserId.php",
                type: "POST",
                success: function (data) {
                    var id_utilisateur = data;
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    var title = event.title;
                    var id = event.id;
                    var now = new Date();
                    if (event.id_utilisateur == id_utilisateur) {
                        if (Date.parse(now) - Date.parse(start) < 0) {
                            $.ajax({
                                url: "update.php",
                                type: "POST",
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    id: id
                                },
                                success: function () {
                                    calendar.fullCalendar('refetchEvents');
                                    alert("Événements mis à jour");
                                }
                            });
                        } else {
                            alert('Date dépassée');
                            location.reload(true);
                        }
                    } else {
                        alert('Cet évènement ne vous appartiens pas');
                        location.reload(true);
                    }
                }
            })
        },

        // supression
        eventClick: function (event) {
            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
            var now = new Date();
            $.ajax({
                url: "getUserId.php",
                type: "POST",
                success: function (data) {
                    var id_utilisateur = data;
                    if (event.id_utilisateur == id_utilisateur) {
                        if (Date.parse(now) - Date.parse(start) < 0) {
                            if (confirm("Etes-vous sûr de vouloir supprimer l'évènement ?")) {
                                var id = event.id;
                                $.ajax({
                                    url: "delete.php",
                                    type: "POST",
                                    data: {
                                        id: id
                                    },
                                    success: function () {
                                        calendar.fullCalendar('refetchEvents');
                                        alert("Événements supprimer");
                                    }
                                })
                            }
                        } else {
                            alert('Date dépassée');
                            location.reload(true);
                        }
                    } else {
                        alert('Cet évènement ne vous appartiens pas');
                        location.reload(true);
                    }
                }
            })
        },
    });
});