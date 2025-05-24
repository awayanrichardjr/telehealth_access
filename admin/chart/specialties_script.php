<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            // backgroundColor: "#f8f8f8",
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "SPECIALIST SUMMARY",
                fontColor: "#a29bb3",
                fontSize: "20"
            },
            axisX: {
                title: "Specialties",
                labelFontColor: "grey",
                labelFontSize: "10",
                titleFontSize: "12"
            },
            axisY: {
                title: "Numbers of Specialists",
                labelFontColor: "grey",
                labelFontSize: "10",
                titleFontSize: "10",
                includeZero: true
            },
            data: [{
                type: "bar", //change type to bar, line, area, pie, etc
                // indexLabel: "{y}", //Shows y value on all Data Points
                indexLabelFontColor: "black",
                indexLabelFontSize: "12",
                fillOpacity: .7,
                indexLabelPlacement: "inside",
                dataPoints: <?php echo json_encode($total_doc, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

    }
</script>