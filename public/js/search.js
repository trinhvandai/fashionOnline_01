// $(document).ready(function($) {
//     var engine1 = new Bloodhound({
//         remote: {
//             url: '/search/name?value=%QUERY%',
//             wildcard: '%QUERY%'
//         },
//         datumTokenizer: Bloodhound.tokenizers.whitespace('value'),
//         queryTokenizer: Bloodhound.tokenizers.whitespace
//     });

//     var engine2 = new Bloodhound({
//         remote: {
//             url: '/search/email?value=%QUERY%',
//             wildcard: '%QUERY%'
//         },
//         datumTokenizer: Bloodhound.tokenizers.whitespace('value'),
//         queryTokenizer: Bloodhound.tokenizers.whitespace
//     });

//     $(".search-input").typeahead({
//         hint: true,
//         highlight: true,
//         minLength: 1
//     }, [
//         {
//             source: engine1.ttAdapter(),
//             name: 'Products-name',
//             display: function(data) {
//                 return data.name;
//             },
//             templates: {
//                 empty: [
//                     '<div class="header-title">Name</div><div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
//                 ],
//                 header: [
//                     '<div class="header-title">Name</div><div class="list-group search-results-dropdown"></div>'
//                 ],
//                 suggestion: function (data) {
//                     return '<a href="/Products/' + data.id + '" class="list-group-item">' + data.name + '</a>';
//                 }
//             }
//         }, 
//         {
//             source: engine2.ttAdapter(),
//             name: 'Products-email',
//             display: function(data) {
//                 return data.email;
//             },
//             templates: {
//                 empty: [
//                     '<div class="header-title">Email</div><div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
//                 ],
//                 header: [
//                     '<div class="header-title">Email</div><div class="list-group search-results-dropdown"></div>'
//                 ],
//                 suggestion: function (data) {
//                     return '<a href="/Products/' + data.id + '" class="list-group-item">' + data.email + '</a>';
//                 }
//             }
//         }
//     ]);
// });
jQuery(document).ready(function($) {
    // Set the Options for "Bloodhound" suggestion engine
    var engine = new Bloodhound({
        remote: {
            url: '/find?q=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $(".search-input").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        source: engine.ttAdapter(),

        // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
        name: 'usersList',

        // the key from the array we want to display (name,id,email,etc...)
        templates: {
            empty: [
                '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
            ],
            header: [
                '<div class="list-group search-results-dropdown">'
            ],
            suggestion: function (data) {
                return '<a href="' + data.profile.username + '" class="list-group-item">' + data.name + '- @' + data.profile.username + '</a>'
      }
        }
    });
});