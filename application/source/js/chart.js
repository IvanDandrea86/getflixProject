const el = document.getElementById("chart_target")


const data = {
    categories: ['Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May'],
    series: [{
            name: 'Users',
            data: [
                50,
                65,
                39,
                136,
                248,
                419,
                451,
                391,
                352,
                296,
                236,
                395
            ],
        },
        {
            name: 'Comments',
            data: [
                1255,
                1280,
                839,
                1807,
                2630,
                4128,
                4359,
                3743,
                3170,
                2724,
                2232,
                1500
            ],
        },
    ],
};
const options = {
    chart: { title: 'Getflix Stats', width: 'auto', height: 'auto' },
    yAxis: { title: 'Numbers', align: 'center' },
    xAxis: { label: { interval: 1 } },
    series: { selectable: true },
};

const chart = toastui.Chart.columnChart({ el, data, options });

chart.on('selectSeries', (ev) => {
    const { label, category, value } = ev.column[0].data;
    alert(`(${label}, ${category}): ${value}`);
});

chart.on('unselectSeries', () => {
    alert('unselect!');
});