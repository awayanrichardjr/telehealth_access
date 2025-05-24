<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "USERS SUMMARY",
                fontColor: "#a29bb3",
                fontSize: "30"
            },
            axisX: {
                // title: "Users",
                labelFontColor: "grey",
                labelFontSize: "10",
                titleFontSize: "10"
            },
            axisY: {
                title: "Numbers of Users/Appointments/Medical",
                labelFontColor: "grey",
                labelFontSize: "10",
                titleFontSize: "10",
                includeZero: true
            },
            data: [{
                type: "column", //change type to bar, line, area, pie, etc
                //indexLabel: "{y}", //Shows y value on all Data Points
                indexLabelFontColor: "black",

                fillOpacity: .7,
                indexLabelPlacement: "outside",
                dataPoints: <?php echo json_encode($total, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

    }
</script>