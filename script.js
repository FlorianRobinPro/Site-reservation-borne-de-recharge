

// document.addEventListener('DOMContentLoaded', function() {
//     var calendarEl = document.getElementById('calendar');




//   var calendar = new FullCalendar.Calendar(calendarEl, {
//     initialView: 'timeGridWeek',
//     dayMaxEvents: true,
  

//     eventClick: function(info) {
//       var eventObj = info.event;

//       if (eventObj.url) {
//         alert(
//           'Clicked ' + eventObj.title + '.\n' +
//           'Will open ' + eventObj.url + ' in a new tab'
//         );

//         window.open(eventObj.url);

//         info.jsEvent.preventDefault(); // prevents browser from following link in current tab.
//       } else {
//         alert('Clicked ' + eventObj.title);
//       }
//     },
//     slotMinTime: '07:00', 
//     slotMaxTime: '19:00',
//     events: [
//       // 1er créneau
//     {
//       id: '1',
//       title:  'créneau 1',
//       groupId: 'lundi', // recurrent events in this group move together
//       daysOfWeek: [ '1' ],
//       startTime: '07:00:00',
//       endTime: '10:00:00',
//       url:'validation.php',
//       },
//     {
//       id: "2",
//       title:  'créneau 1',
//       groupId: 'mardi', // recurrent events in this group move together
//       daysOfWeek: [ '2' ],
//       startTime: '07:00:00',
//       endTime: '10:00:00'
//       },
//     {
//       id: "3",
//       title:  'créneau 1',
//       groupId: 'mercredi', // recurrent events in this group move together
//       daysOfWeek: [ '3' ],
//       startTime: '07:00:00',
//       endTime: '10:00:00'
//       },
//     {
//       id: "4",
//       title:  'créneau 1',
//       groupId: 'jeudi', // recurrent events in this group move together
//       daysOfWeek: [ '4' ],
//       startTime: '07:00:00',
//       endTime: '10:00:00'
//       },
//     {
//       id: "5",
//       title:  'créneau 1',
//       groupId: 'vendredi', // recurrent events in this group move together
//       daysOfWeek: [ '5' ],
//       startTime: '07:00:00',
//       endTime: '10:00:00'
//       },
//       // 2ème créneau
//       {
//         id: "6",
//         title:  'créneau 2',
//         groupId: 'lundi', // recurrent events in this group move together
//         daysOfWeek: [ '1' ],
//         startTime: '10:00:00',
//         endTime: '13:00:00'
//         },
//       {
//         id: "7",
//         title:  'créneau 2',
//         groupId: 'mardi', // recurrent events in this group move together
//         daysOfWeek: [ '2' ],
//         startTime: '10:00:00',
//         endTime: '13:00:00'
//         },
//       {
//         id: "8",
//         title:  'créneau 2',
//         groupId: 'mercredi', // recurrent events in this group move together
//         daysOfWeek: [ '3' ],
//         startTime: '10:00:00',
//         endTime: '13:00:00'
//         },
//       {
//         id: "9",
//         title:  'créneau 2',
//         groupId: 'jeudi', // recurrent events in this group move together
//         daysOfWeek: [ '4' ],
//         startTime: '10:00:00',
//         endTime: '13:00:00'
//         },
//       {
//         id: "10",
//         title:  'créneau 2',
//         groupId: 'vendredi', // recurrent events in this group move together
//         daysOfWeek: [ '5' ],
//         startTime: '10:00:00',
//         endTime: '13:00:00'
//         },
//       // 3ème créneau
//       {
//         id: "11",
//         title:  'créneau 3',
//         groupId: 'lundi', // recurrent events in this group move together
//         daysOfWeek: [ '1' ],
//         startTime: '13:00:00',
//         endTime: '16:00:00'
//         },
//       {
//         id: "12",
//         title:  'créneau 3',
//         groupId: 'mardi', // recurrent events in this group move together
//         daysOfWeek: [ '2' ],
//         startTime: '13:00:00',
//         endTime: '16:00:00'
//         },
//       {
//         id: "13",
//         title:  'créneau 3',
//         groupId: 'mercredi', // recurrent events in this group move together
//         daysOfWeek: [ '3' ],
//         startTime: '13:00:00',
//         endTime: '16:00:00'
//         },
//       {
//         id: "14",
//         title:  'créneau 3',
//         groupId: 'jeudi', // recurrent events in this group move together
//         daysOfWeek: [ '4' ],
//         startTime: '13:00:00',
//         endTime: '16:00:00'
//         },
//       {
//         id: "15",
//         title:  'créneau 3',
//         groupId: 'vendredi', // recurrent events in this group move together
//         daysOfWeek: [ '5' ],
//         startTime: '13:00:00',
//         endTime: '16:00:00'
//         },
//       // 4ème créneau
//       {
//         id: "16",
//         title:  'créneau 4',
//         groupId: 'lundi', // recurrent events in this group move together
//         daysOfWeek: [ '1' ],
//         startTime: '16:00:00',
//         endTime: '19:00:00'
//         },
//       {
//         id: "17",
//         title:  'créneau 4',
//         groupId: 'mardi', // recurrent events in this group move together
//         daysOfWeek: [ '2' ],
//         startTime: '16:00:00',
//         endTime: '19:00:00'
//         },
//       {
//         id: "18",
//         title:  'créneau 4',
//         groupId: 'mercredi', // recurrent events in this group move together
//         daysOfWeek: [ '3' ],
//         startTime: '16:00:00',
//         endTime: '19:00:00'
//         },
//       {
//         id: "19",
//         title:  'créneau 4',
//         groupId: 'jeudi', // recurrent events in this group move together
//         daysOfWeek: [ '4' ],
//         startTime: '16:00:00',
//         endTime: '19:00:00'
//         },
//       {
//         id: "20",
//         title:  'créneau 4',
//         groupId: 'vendredi', // recurrent events in this group move together
//         daysOfWeek: [ '5' ],
//         startTime: '16:00:00',
//         endTime: '19:00:00'
//         },
//         // samedi et dimanche non réservable
//     {
//       color: 'grey',
//       groupId: 'samedi', // recurrent events in this group move together
//       daysOfWeek: [ '6' ],
//       startTime: '07:00:00',
//       endTime: '19:00:00'
//       },
//     {
//       color: 'grey',
//       groupId: 'dimanche', // recurrent events in this group move together
//       daysOfWeek: [ '0' ],
//       startTime: '07:00:00',
//       endTime: '19:00:00'
      
//       },

//     ],
//     slotDuration: '00:30:00',
//     timeZone: 'local',
//     minTime: '00:00:00', 
//     maxTime: '03:00:00', 
//   });
//   calendar.setOption('locale', 'fr');
//   calendar.render();
// });

function switchStyle(style){
    document.getElementById("mycss").setAttribute("href", style);
}

