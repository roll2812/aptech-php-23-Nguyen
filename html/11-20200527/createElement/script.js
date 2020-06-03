function create() {
    
    var tableBody = document.getElementById('createTable');
    for ( var i = 0;i<data.users.length;i++) {
    var tableRow = document.createElement('tr');

    tableBody.appendChild(tableRow);

    var tableData1 = document.createElement('td');
    tableData1.innerHTML = i + 1;
    var tableData7 = document.createElement('td');
    tableData7.innerHTML = data.users[i].id;
    var tableData2 = document.createElement('td');
    tableData2.innerHTML = data.users[i].name;
    var tableData3 = document.createElement('td');
    tableData3.innerHTML = data.users[i].password;
    var tableData4 = document.createElement('td');
    tableData4.innerHTML = data.users[i].email;
    var tableData5 = document.createElement('td');
    tableData5.innerHTML = data.users[i].created_at;
    var tableData6 = document.createElement('td');
    tableData6.innerHTML = data.users[i].updated_at;
    tableRow.appendChild(tableData1);
    tableRow.appendChild(tableData2);
    tableRow.appendChild(tableData3);
    tableRow.appendChild(tableData4);
    tableRow.appendChild(tableData5);
    tableRow.appendChild(tableData6);
    tableRow.appendChild(tableData7);
    }
};


var data = {
    "users":[{"id":40,"name":"Colten Marquardt","email":"beatty.kiarra@example.com","password":"$2y$10$ML9m0ofsJ2getKQgsfMyG.qSoxbvJ.6irUV4RAPB7TS.aaxJTJC0m","created_at":"2020-06-01 11:58:50","updated_at":"2020-06-01 11:58:50"},{"id":39,"name":"Dr. Edgar Moore III","email":"neoma01@example.net","password":"$2y$10$cIkq5WRm\/7czbvHpyE0S9uWkbMX0U2s2U46gmscTiVlE6MctyM2Yu","created_at":"2020-06-01 11:58:49","updated_at":"2020-06-01 11:58:49"},{"id":38,"name":"Albina Hickle","email":"erutherford@example.com","password":"$2y$10$lWEE.uqp4x7c7swqnzwDi.402L8LRAPFRGSOCd37sOGhGtVczFMlO","created_at":"2020-06-01 11:58:49","updated_at":"2020-06-01 11:58:49"},{"id":37,"name":"Tyrese Ryan","email":"abernathy.leonor@example.net","password":"$2y$10$okt8VonkqWxps\/ypvl71hOQTLK2x.WES.nEp7G0T7M5DKnQogjj5a","created_at":"2020-06-01 11:58:49","updated_at":"2020-06-01 11:58:49"},{"id":36,"name":"Francisca Kihn PhD","email":"daren73@example.com","password":"$2y$10$.GJXxjuIcYAQXTidHVCV8ekIHUBjNHiwytQIdeCgU5y79vDWXITzO","created_at":"2020-06-01 11:58:49","updated_at":"2020-06-01 11:58:49"}]
};
