window.onload = function() {
    var users = [];
    $.getJSON("http://localhost:8000/api/pasiens/all", function(data) {
        for (var j = 0; j < data.data.length; j++) {
            users.push({
                y: j,
                name: data.data[j].name,
            });
        }
        console.log(users);
        console.log(users.length);

        var options = {
            exportEnabled: true,
            animationEnabled: true,
            title: {
                text: "Users"
            },
            legend: {
                horizontalAlign: "right",
                verticalAlign: "center"
            },
            data: [{
                type: "pie",
                showInLegend: true,
                toolTipContent: "<b>{name}</b>: {y} (#percent%)",
                indexLabel: "{name}",
                legendText: "{name} (#percent%)",
                indexLabelPlacement: "inside",
                dataPoints: users
            }]
        };

        $("#chartContainer").CanvasJSChart(options);
    });
};
