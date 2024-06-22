import ApexCharts from "apexcharts";

const getVisitorChartOptions = () => {
    let visitorChartColors = {};

    if (document.documentElement.classList.contains("dark")) {
        visitorChartColors = {
            borderColor: "#374151",
            labelColor: "#9CA3AF",
        };
    } else {
        visitorChartColors = {
            borderColor: "#F3F4F6",
            labelColor: "#6B7280",
        };
    }

    return {
        series: [
            {
                name: "Members",
                data: [30, 40, 25, 50, 49, 21, 70],
                color: "#1A56DB",
            },
            {
                name: "Guests",
                data: [23, 12, 54, 61, 32, 56, 81],
                color: "#FDBA8C",
            },
        ],
        chart: {
            type: "bar",
            height: "320px",
            fontFamily: "Inter, sans-serif",
            foreColor: visitorChartColors.labelColor,
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                columnWidth: "90%",
                borderRadius: 3,
            },
        },
        tooltip: {
            shared: true,
            intersect: false,
            style: {
                fontSize: "14px",
                fontFamily: "Inter, sans-serif",
            },
        },
        grid: {
            show: true,
            borderColor: visitorChartColors.borderColor,
            strokeDashArray: 1,
            padding: {
                left: 35,
                bottom: 15,
            },
        },
        states: {
            hover: {
                filter: {
                    type: "darken",
                    value: 1,
                },
            },
        },
        stroke: {
            show: true,
            width: 5,
            colors: ["transparent"],
        },
        grid: {
            show: false,
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            fontSize: "14px",
            fontWeight: 500,
            fontFamily: "Inter, sans-serif",
            labels: {
                colors: [visitorChartColors.labelColor],
            },
            itemMargin: {
                horizontal: 10,
            },
        },
        xaxis: {
            categories: [
                "04 Mei",
                "05 Mei",
                "06 Mei",
                "07 Mei",
                "08 Mei",
                "09 Mei",
                "10 Mei",
            ],
            labels: {
                style: {
                    color: visitorChartColors.labelColor,
                    fontSize: "14px",
                    fontFamily: "Inter, sans-serif",
                },
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            labels: {
                style: {
                    color: visitorChartColors.labelColor,
                    fontSize: "14px",
                    fontFamily: "Inter, sans-serif",
                },
            },
        },
        fill: {
            opacity: 1,
        },
    };
};

if (document.getElementById("visitor-statistics")) {
    const chart = new ApexCharts(
        document.getElementById("visitor-statistics"),
        getVisitorChartOptions()
    );
    chart.render();

    // init again when toggling dark mode
    document.addEventListener("dark-mode", function () {
        chart.updateOptions(getVisitorChartOptions());
    });
}

const getChartOptions = () => {
    return {
        series: [756, 1584],
        colors: ["#1C64F2", "#16BDCA"],
        chart: {
            height: 320,
            width: "100%",
            type: "donut",
        },
        stroke: {
            colors: ["transparent"],
            lineCap: "",
        },
        plotOptions: {
            pie: {
                donut: {
                    labels: {
                        show: true,
                        name: {
                            show: true,
                            fontFamily: "Inter, sans-serif",
                            offsetY: 20,
                        },
                        total: {
                            showAlways: true,
                            show: true,
                            label: "Unique visitors",
                            fontFamily: "Inter, sans-serif",
                            formatter: function (w) {
                                const sum = w.globals.seriesTotals.reduce(
                                    (a, b) => {
                                        return a + b;
                                    },
                                    0
                                );
                                return sum;
                            },
                        },
                        value: {
                            show: true,
                            fontFamily: "Inter, sans-serif",
                            offsetY: -20,
                            formatter: function (value) {
                                return value;
                            },
                        },
                    },
                    size: "80%",
                },
            },
        },
        grid: {
            padding: {
                top: -2,
            },
        },
        labels: ["Members", "Guests"],
        dataLabels: {
            enabled: false,
        },
        legend: {
            position: "bottom",
            fontFamily: "Inter, sans-serif",
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return value;
                },
            },
        },
        xaxis: {
            labels: {
                formatter: function (value) {
                    return value;
                },
            },
            axisTicks: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
        },
    };
};

if (
    document.getElementById("visitor-analytics") &&
    typeof ApexCharts !== "undefined"
) {
    const chart = new ApexCharts(
        document.getElementById("visitor-analytics"),
        getChartOptions()
    );
    chart.render();
}

const getSaleChartOptions = () => {
    let saleChartColors = {};

    if (document.documentElement.classList.contains("dark")) {
        saleChartColors = {
            borderColor: "#374151",
            labelColor: "#9CA3AF",
            opacityFrom: 0,
            opacityTo: 0.15,
        };
    } else {
        saleChartColors = {
            borderColor: "#F3F4F6",
            labelColor: "#6B7280",
            opacityFrom: 0.45,
            opacityTo: 0,
        };
    }

    return {
        chart: {
            height: 420,
            type: "area",
            fontFamily: "Inter, sans-serif",
            foreColor: saleChartColors.labelColor,
            toolbar: {
                show: false,
            },
        },
        fill: {
            type: "gradient",
            gradient: {
                enabled: true,
                opacityFrom: saleChartColors.opacityFrom,
                opacityTo: saleChartColors.opacityTo,
            },
        },
        dataLabels: {
            enabled: false,
        },
        tooltip: {
            style: {
                fontSize: "14px",
                fontFamily: "Inter, sans-serif",
            },
        },
        grid: {
            show: true,
            borderColor: saleChartColors.borderColor,
            strokeDashArray: 1,
            padding: {
                left: 35,
                bottom: 15,
            },
        },
        series: [
            {
                name: "Pendapatan",
                data: [350000, 250000, 300000, 100000, 200000, 300000, 250000],
                color: "#1A56DB",
            },
        ],
        markers: {
            size: 5,
            strokeColors: "#ffffff",
            hover: {
                size: undefined,
                sizeOffset: 3,
            },
        },
        xaxis: {
            categories: [
                "04 Mei",
                "05 Mei",
                "06 Mei",
                "07 Mei",
                "08 Mei",
                "09 Mei",
                "10 Mei",
            ],
            labels: {
                style: {
                    colors: [saleChartColors.labelColor],
                    fontSize: "14px",
                    fontWeight: 500,
                },
            },
            axisBorder: {
                color: saleChartColors.borderColor,
            },
            axisTicks: {
                color: saleChartColors.borderColor,
            },
            crosshairs: {
                show: true,
                position: "back",
                stroke: {
                    color: saleChartColors.borderColor,
                    width: 1,
                    dashArray: 10,
                },
            },
        },
        yaxis: {
            labels: {
                style: {
                    colors: [saleChartColors.labelColor],
                    fontSize: "14px",
                    fontWeight: 500,
                },
                formatter: function (value) {
                    return "Rp" + value.toLocaleString("id-ID");
                },
            },
        },
        legend: {
            fontSize: "14px",
            fontWeight: 500,
            fontFamily: "Inter, sans-serif",
            labels: {
                colors: [saleChartColors.labelColor],
            },
            itemMargin: {
                horizontal: 10,
            },
        },
        responsive: [
            {
                breakpoint: 1024,
                options: {
                    xaxis: {
                        labels: {
                            show: false,
                        },
                    },
                },
            },
        ],
    };
};

if (document.getElementById("transaction-statistics")) {
    const chart = new ApexCharts(
        document.getElementById("transaction-statistics"),
        getSaleChartOptions()
    );
    chart.render();

    // init again when toggling dark mode
    document.addEventListener("dark-mode", function () {
        chart.updateOptions(getSaleChartOptions());
    });
}
