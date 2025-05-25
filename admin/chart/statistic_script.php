<script>
    window.onload = function() {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            // backgroundColor: "#f8f8f8",
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "MEDICAL RATES STATISTICS",
                fontColor: "#a29bb3",
                fontSize: "20"
            },
            axisX: {
                title: "SPECIALTIES",
                labelFontColor: "grey",
                labelFontSize: "10",
                titleFontSize: "12",
                labelAngle: -45 // Slants the labels for readability
            },
            axisY: {
                title: "SPECIALTIES' MEDICAL RATES AREA",
                labelFontColor: "grey",
                labelFontSize: "10",
                titleFontSize: "10",
                includeZero: true
            },
            data: [{
                type: "area", //change type to bar, line, area, pie, etc
                // indexLabel: "{y}", //Shows y value on all Data Points
                indexLabelFontColor: "black",
                indexLabelFontSize: "12",
                fillOpacity: .7,
                indexLabelPlacement: "outside",
                dataPoints: <?php echo json_encode($total_doc, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

    }
</script>